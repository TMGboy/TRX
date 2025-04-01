<?php
function getTorrentStats($infoHash, $tracker) {
    // Extract host and port from the tracker URL
    $parsedUrl = parse_url($tracker);
    if (!$parsedUrl || !isset($parsedUrl['host']) || !isset($parsedUrl['port'])) {
        return "Invalid tracker URL!";
    }

    $host = $parsedUrl['host'];
    $port = $parsedUrl['port'];

    // Create UDP socket
    $socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
    if (!$socket) {
        return "Failed to create socket!";
    }

    // Set a timeout for the response
    socket_set_option($socket, SOL_SOCKET, SO_RCVTIMEO, ["sec" => 5, "usec" => 0]);

    // Generate a connection ID (initial request)
    $connectionId = "\x00\x00\x04\x17\x27\x10\x19\x80"; // Magic constant for UDP trackers
    $transactionId = random_bytes(4); // Unique transaction ID

    // Build the connect request packet
    $connectRequest = $connectionId . "\x00\x00\x00\x00" . $transactionId;

    // Send connection request
    socket_sendto($socket, $connectRequest, strlen($connectRequest), 0, $host, $port);

    // Receive response
    $response = "";
    $from = "";
    $port = 0;
    if (@socket_recvfrom($socket, $response, 16, 0, $from, $port) === false) {
        socket_close($socket);
        return "Tracker did not respond!";
    }

    // Validate response length
    if (strlen($response) < 16) {
        socket_close($socket);
        return "Invalid tracker response!";
    }

    // Extract connection ID from response
    $connectionId = substr($response, 8, 8);

    // Build the announce request
    $peerId = '-PC0001-' . substr(md5(mt_rand()), 0, 12);
    $downloaded = $left = $uploaded = 0;
    $event = "\x00\x00\x00\x00"; // 0 = none
    $ip = "\x00\x00\x00\x00"; // Default IP (0.0.0.0)
    $key = random_bytes(4);
    $num_want = pack("N", -1); // -1 means default tracker response
    $port = pack("n", 6881); // Port 6881

    $announceRequest = $connectionId . "\x00\x00\x00\x01" . $transactionId .
                       pack('H*', $infoHash) . $peerId .
                       pack("J", $downloaded) . pack("J", $left) . pack("J", $uploaded) .
                       $event . $ip . $key . $num_want . $port;

    // Send announce request
    socket_sendto($socket, $announceRequest, strlen($announceRequest), 0, $host, $port);

    // Receive announce response
    $announceResponse = "";
    if (@socket_recvfrom($socket, $announceResponse, 1024, 0, $from, $port) === false) {
        socket_close($socket);
        return "No response from tracker!";
    }

    // Validate response length
    if (strlen($announceResponse) < 20) {
        socket_close($socket);
        return "Invalid announce response!";
    }

    // Extract seeders and leechers count
    $seeders = unpack("N", substr($announceResponse, 8, 4))[1];
    $leechers = unpack("N", substr($announceResponse, 12, 4))[1];

    socket_close($socket);
    return "Seeders: $seeders, Leechers: $leechers";
}

// Example Usage
$hash = "3CE6D128FE267E758E15D5D0E896213917AFBBFC"; // Example Hash
$tracker = "udp://tracker.torrent.eu.org:451/announce"; // UDP Tracker
echo getTorrentStats($hash, $tracker);
?>
