<?php
// -------------------------------------
// Local JSON Section for Games Category
// -------------------------------------
$jsongames = './minidb/games.json';

if (file_exists($jsongames)) {
	$jsonContent = file_get_contents($jsongames);
	$topgame = json_decode($jsonContent, true);

	if (json_last_error() !== JSON_ERROR_NONE) {
		echo 'JSON decoding error: ' . json_last_error_msg();
		exit;
	}
} else {
	echo 'JSON file not found.';
	exit;
}
?>
<?php
// -------------------------------------
// Local JSON Section for Anime Category
// -------------------------------------
$jsonnyaa = './minidb/nyaasi.json';

if (file_exists($jsonnyaa)) {
	$jsonContent = file_get_contents($jsonnyaa);
	$nyaasi = json_decode($jsonContent, true);

	if (json_last_error() !== JSON_ERROR_NONE) {
		echo 'JSON decoding error: ' . json_last_error_msg();
		exit;
	}
} else {
	echo 'JSON file not found.';
	exit;
}
?>
<?php
// -------------------------------------
// Local JSON Section for Anime Category
// -------------------------------------
$yts_recent = './minidb/yts_recent.json';

if (file_exists($yts_recent)) {
	$jsonContent = file_get_contents($yts_recent);
	$recent_m = json_decode($jsonContent, true);

	if (json_last_error() !== JSON_ERROR_NONE) {
		echo 'JSON decoding error: ' . json_last_error_msg();
		exit;
	}
} else {
	echo 'JSON file not found.';
	exit;
}
?>
<?php
// -------------------------------------
// Local JSON Section for Anime Category
// -------------------------------------
$trends = './minidb/yts_trending.json';

if (file_exists($trends)) {
	$jsonContent = file_get_contents($trends);
	$ternding_m = json_decode($jsonContent, true);

	if (json_last_error() !== JSON_ERROR_NONE) {
		echo 'JSON decoding error: ' . json_last_error_msg();
		exit;
	}
} else {
	echo 'JSON file not found.';
	exit;
}
?>
<?php
// -------------------------------------
// Local JSON Section for Anime Category
// -------------------------------------
$recent = './minidb/movies.json';

if (file_exists($trends)) {
	$jsonContent = file_get_contents($recent);
	$pplmv = json_decode($jsonContent, true);

	if (json_last_error() !== JSON_ERROR_NONE) {
		echo 'JSON decoding error: ' . json_last_error_msg();
		exit;
	}
} else {
	echo 'JSON file not found.';
	exit;
}
?>
<?php
// -------------------------------------
// Local JSON Section for Anime Category
// -------------------------------------
$tvhome = './minidb/tv.json';

if (file_exists($trends)) {
	$jsonContent = file_get_contents($tvhome);
	$poptv = json_decode($jsonContent, true);

	if (json_last_error() !== JSON_ERROR_NONE) {
		echo 'JSON decoding error: ' . json_last_error_msg();
		exit;
	}
} else {
	echo 'JSON file not found.';
	exit;
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="robots" content="all">
	<link rel="shortcut icon" type="image/ico" href="/images/favicon.ico">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="download, bittorrent, torrent, torrents, movies, music, games, software, download, upload, porn torrents, music torrents, movies torrents, games torrents, software torrents, iPod torrents, anime torrents, torrent search, bittorrent search, upload torrents, download torrents" />
	<meta name="description" content="The worlds largest torrents community extratorrents.club" />
	<link href="/assets/css/main.css?v=1.0" type="text/css" data-template-style="true" rel="stylesheet" />
	<script src="/assets/js/main.js"></script>

	<title>extratorrents.club The World's Largest BitTorrent System</title>

</head>

<body>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td>
					<form action="/search/" method="get">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td width="293">
										<a href="/" title="extratorrents.club - The Largest Bittorent System">
											<img src="/images/logo.gif" border="0" alt="extratorrents.club - The Largest Bittorent System">
										</a>
									</td>
									<td width="250" class="h_search">
										<div class="easy-autocomplete eac-blue-light" style="width: 266px;">
											<input type="text" class="stext" name="search" id="search" autocomplete="off" style="width:250px;" value="">
										</div>
										<input type="hidden" name="new" value="1">
									</td>
									<td class="h_search_btn">
										<input type="image" src="/images/btn_search.png" alt="Search for Torrents">
									</td>
									<td class="h_top_r">
									</td>
								</tr>
							</tbody>
						</table>
					</form>
				</td>
			</tr>
			<tr>
				<td class="main_menu">
					<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="6">
								<div class="menul"></div>
							</td>
							<td width="100%" class="td_menu">
								<table width="100%" cellspacing="0" cellpadding="0">
									<tr>
										<td>
											<a href="/category/" class="menu" title="Browse Torrents" onmouseover="javascript: document.getElementById('tbl').className='tablemenu show';" onmouseout="javascript: document.getElementById('tbl').className='tablemenu hide';">Browse&nbsp;Torrents</a>
											<br />
											<div id="divmenu">
												<table width="185" cellspacing="1" id="tbl" class="tablemenu hide" onmouseover="javascript: document.getElementById('tbl').className='tablemenu show';" onmouseout="javascript: document.getElementById('tbl').className='tablemenu hide';">
													<tr>
														<td>
															<div class="mi4"><a href="/Movies+Torrents.php" title="Browse Movies Torrents">Movies Torrents</a></div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="mi8"><a href="/TV+Torrents.php" title="Browse TV Torrents">TV Torrents</a></div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="mi5"><a href="/Music+Torrents.php" title="Browse Music Torrents">Music Torrents</a></div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="mi7"><a href="/Software+Torrents.php" title="Browse Software Torrents">Software Torrents</a></div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="mi3"><a href="/Games+Torrents.php" title="Browse Games Torrents">Games Torrents</a></div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="mi1"><a href="/Anime+Torrents.php" title="Browse Anime Torrents">Anime Torrents</a></div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="mi2"><a href="/Books+Torrents.php" title="Browse Books Torrents">Books Torrents</a></div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="mi9"><a href="/Other+Torrents.php" title="Browse Other Torrents">Other Torrents</a></div>
														</td>
													</tr>
												</table>
											</div>
										</td>
										<td class="ms">|</td>
										<td><a href="/search_cloud/" class="menu" title="Search">Search&nbsp;Cloud</a></td>
										<td width="100%">&nbsp;</td>
									</tr>
								</table>
							</td>
							<td width="6">
								<div class="menur"></div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td style="padding-top:10px;">
					<table width="100%" cellspacing="0" cellpadding="0">
						<tbody>
							<tr>
								<td style="vertical-align:top;">
									<div class="blog_left"></div>
									<div class="blog_top">
										IMPORTANT NOTICE
									</div>
									<div class="blog_right"></div>
									<div class="blog_content">
										<script defer>
											document.addEventListener('DOMContentLoaded', () => {
												fetch('https://get.geojs.io/v1/ip/geo.json')
													.then(response => response.json())
													.then(data => {
														const ipInfoElement = document.getElementById('ip-info');
														ipInfoElement.textContent = `IP : ${data.ip}, Country: ${data.country}`;
													})
													.catch(error => {
														console.error('Error fetching IP information:', error);
													});
											});
										</script>
										<div class="xshide" style="width:100%; text-align:center; margin:auto;">
											<div style="margin-bottom:12px">
												<table style="padding-bottom:10px; border:0; width:100%; font-size:12px; font-family:Verdana">
													<tbody>
														<tr>
															<td class="trtbl">
																<style>
																	.wrn_txt a,
																	.wrn_txt2 a {
																		text-decoration: underline;
																	}

																	.wrn_txt {
																		padding: 8px 0;
																	}

																	.wrn_txt2 {
																		padding: 0 0 10px 0;
																	}

																	.wrn_txt3 {
																		width: 100%;
																		padding-top: 10px;
																	}

																	.tzbtn {
																		margin-top: 20px;
																		text-align: center;
																		text-decoration: none;
																		font-size: 15px;
																		background: linear-gradient(rgb(255, 255, 255) 0%, rgb(123, 197, 244) 100%);
																		color: rgb(0, 0, 0);
																		border-radius: 4px;
																		padding: 7px 45px;
																		font-weight: bold;
																		border: 1px solid black;
																	}

																	.warn {
																		font-size: 16pt;
																		padding-bottom: 10px;
																		color: red;
																		text-align: center;
																	}

																	.warnIp {
																		text-align: center;
																		font-weight: bold;
																		padding: 8px 0;
																		font-size: 14px;
																	}

																	.trtyellow {
																		color: red;
																		background-color: yellow;
																		padding: 5px;
																	}
																</style>
															</td>
															<td>
																<div class="warn">
																	<strong>Warning! Protect Yourself from Lawsuits and Fines!</strong>
																</div>
																<div class="warnIp">
																	Your IP Address is
																	<p id="ip-info" class="trtyellow">Fetching IP and country information...</p>
																</div>
																<div class="wrn_txt">
																	Your IP Address is visible to EVERYONE.
																	<a href="/vpn.php">Hide your IP ADDRESS</a> with a built in VPN torrent client!
																</div>
																<div class="wrn_txt2">
																	<strong>ExtraTorrent</strong> strongly recommends using
																	<a href="/vpn.php">This Torrent Client</a> to anonymize your torrenting.
																	<strong style="color:red;">It's FREE!</strong>
																</div>
																<div align="center" class="wrn_txt3">
																	<a class="tzbtn" href="/vpn.php">Hide ME!</a>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="blog_left"></div>
									<div class="blog_top">
										<div class="right">
										</div>Most searched
									</div>
									<div class="blog_right"></div>
									<div class="top_torr">

										<div class="top_cat">
											<div class="top_icon">
												<img src="/images/hot_small.gif" alt="Hot torrents">
											</div>
											<div class="top_title"><b>New Movies</b></div>
										</div>
										<div class="clear"></div>
										<?php
										if (isset($recent_m['data']) && is_array($recent_m['data'])):
											foreach ($recent_m['data'] as $item):
												// Check if the 'torrents' array exists and if the first element has a hash value.
												$hash = '';
												if (isset($item['torrents']) && is_array($item['torrents']) && !empty($item['torrents'][0]['hash'])) {
													$hash = $item['torrents'][0]['hash'];
												}
												// Use htmlspecialchars to safely output the movie name and poster URL.
												$name   = htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8');
												$poster = htmlspecialchars($item['poster'], ENT_QUOTES, 'UTF-8');
										?>
												<div class="top_pic">
													<a href="/torrent.php?hash=<?php echo $hash; ?>" title="View Torrent Info: <?php echo $name; ?>">
														<img src="<?php echo $poster; ?>" width="100" height="140" alt="View Torrent Info: <?php echo $name; ?>">
													</a>
												</div>
										<?php
											endforeach;
										else:
											echo '<p>No New Movies Were added.</p>';
										endif;
										?>

										<div style="clear:left"></div>
										<div class="top_cat">
											<div class="top_icon">
												<img src="/images/hot_small.gif" alt="Hot torrents">
											</div>
											<div class="top_title"><b>Trending</b></div>
										</div>
										<div class="clear"></div>
										<?php
										if (isset($ternding_m['data']) && is_array($ternding_m['data'])):
											foreach ($ternding_m['data'] as $item):
												// Check if the 'torrents' array exists and if the first element has a hash value.
												$hash = '';
												if (isset($item['torrents']) && is_array($item['torrents']) && !empty($item['torrents'][0]['hash'])) {
													$hash = $item['torrents'][0]['hash'];
												}
												// Use htmlspecialchars to safely output the movie name and poster URL.
												$name   = htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8');
												$poster = htmlspecialchars($item['poster'], ENT_QUOTES, 'UTF-8');
										?>
												<div class="top_pic">
													<a href="/torrent.php?hash=<?php echo $hash; ?>" title="View Torrent Info: <?php echo $name; ?>">
														<img src="<?php echo $poster; ?>" width="100" height="140" alt="View Torrent Info: <?php echo $name; ?>">
													</a>
												</div>
										<?php
											endforeach;
										else:
											echo '<p>No Trending Torre available.</p>';
										endif;
										?>
										<div style="clear:left"></div>
									</div>
								</td>
								<td style="vertical-align:top; padding: 3px 5px 0 10px; width: 100%">


									<table width="100%" cellspacing="0" cellpadding="5" style="border: 1px #000 dashed;">
										<tbody>
											<tr>
												<td>
													<span style="padding: 0px 10px;">
														<a href="/" title="extratorrents.club - The Biggest Bittorent System">extratorrents.club</a> &gt; Main page - <b>Newly Most Downloaded Torrents</b>
													</span>
												</td>
											</tr>
										</tbody>
									</table>
									<br>
									<table width="100%" cellspacing="0" cellpadding="0" border="0">
										<tbody>
											<tr>
												<td>
													<h1>
														Newly Most Popular Torrents </h1>
												</td>
											</tr>
										</tbody>
									</table>
									10 newly most popular torrents in each category<br>
									<br>
									<br>
									<table class="tl">
										<thead>
											<tr>
												<th width="100%" colspan="2">
													<table>
														<tbody>
															<tr>
																<td>
																	<a href="/Movies+Torrents.php" class="h2" title="Browse Movies Torrents">
																		<img src="/images/4s.gif" hspace="10" align="left" alt="Browse Movies Torrents">&nbsp;Movies torrents</a>&nbsp;(<a href="/Movies+Torrents.php" title="View all torrents">view all</a> popular torrents in this category)&nbsp;
																</td>
																<td width="60">
																</td>
																<td width="18">
																	<a href="/Movies+Torrents.php" title="Sort torrents by comments">
																		<img src="/images/icon_comments.gif" alt="Sort">
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
												</th>
												<th><a href="/Movies+Torrents.php" title="Sort torrents by added time">Added</a>&nbsp;</th>
												<th><a href="/Movies+Torrents.php" title="Sort torrents by size">Size</a>&nbsp;<a href="/Movies+Torrents.php" title="Sort torrents by size"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th><a href="/Movies+Torrents.php" title="Sort torrents by seeds">S</a>&nbsp;<a href="/Movies+Torrents.php" title="Sort torrents by seeds"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th><a href="/Movies+Torrents.php" title="Sort torrents by leechers">L</a>&nbsp;<a href="/Movies+Torrents.php" title="Sort torrents by leechers"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th>Health</th>
											</tr>
										</thead>
										<tbody>
											<?php
											// Check if data exists and is an array.
											if (isset($pplmv['data']) && is_array($pplmv['data'])) {
												foreach ($pplmv['data'] as $item) {
													// Safely extract and sanitize each field.
													$magnet   = isset($item['magnet']) ? htmlspecialchars($item['magnet'], ENT_QUOTES, 'UTF-8') : '';
													$hash     = isset($item['hash']) ? htmlspecialchars($item['hash'], ENT_QUOTES, 'UTF-8') : '';
													$name     = isset($item['name']) ? htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8') : 'Unknown Torrent';
													$category = isset($item['category']) ? htmlspecialchars($item['category'], ENT_QUOTES, 'UTF-8') : '';
													$uploader = isset($item['uploader']) ? htmlspecialchars($item['uploader'], ENT_QUOTES, 'UTF-8') : 'Anonymous';
													$date     = isset($item['date']) ? htmlspecialchars($item['date'], ENT_QUOTES, 'UTF-8') : '';
													$size     = isset($item['size']) ? htmlspecialchars($item['size'], ENT_QUOTES, 'UTF-8') : '';
													$seeders  = isset($item['seeders']) ? htmlspecialchars($item['seeders'], ENT_QUOTES, 'UTF-8') : '';
													$leechers = isset($item['leechers']) ? htmlspecialchars($item['leechers'], ENT_QUOTES, 'UTF-8') : '';

													// Output the table row using your provided HTML structure.
													echo '<tr class="tlz">';
													echo '<td>';
													echo '<a href="http://itorrents.org/torrent/' . $hash . '.torrent" title="' . $name . '">';
													echo '<img src="/images/icon_download3.gif" alt="Download"></a>';
													echo '<a href="' . $magnet . '" title="Magnet link">';
													echo '<img src="/images/magnet2.png" alt="Magnet link" hspace="3">';
													echo '</a>';
													echo '</td>';
													echo '<td class="tli">';
													echo '<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;';
													echo '<a href="/torrent.php?hash=' . $hash . '">' . $name . '</a>';
													echo '<span class="c_tor"> in ' . $category . '</span>';
													echo '<span class="c_tor">, by</span>';
													echo '<span class="micro">';
													echo '<div class="usr">';
													echo '<div class="usrm"></div>';
													echo '<span> ' . $uploader . '</span>';
													echo '</div>';
													echo '</span>';
													echo '</td>';
													echo '<td>' . $date . '</td>';
													echo '<td>' . $size . '</td>';
													echo '<td class="sn">' . $seeders . '</td>';
													echo '<td class="ln">' . $leechers . '</td>';
													echo '<td class="rating"><div class=""></div></td>';
													echo '</tr>';
												}
											} else {
												// If there is no data available.
												echo '<tr><td colspan="7">No recent torrents found.</td></tr>';
											}
											?>
										</tbody>
									</table>
									<br>
									<br>
									<table class="tl">
										<thead>
											<tr>
												<th width="100%" colspan="2">
													<table>
														<tbody>
															<tr>
																<td>
																	<a href="/TV+Torrents.php" class="h2" title="Browse TV Torrents">
																		<img src="/images/8s.gif" hspace="10" align="left" alt="Browse TV Torrents">&nbsp;TV torrents</a>&nbsp;(<a href="/TV+Torrents.php" title="View all torrents">view all</a> popular torrents in this category)&nbsp;
																</td>
																<td width="60">
																</td>
																<td width="18">
																	<a href="/TV+Torrents.php" title="Sort torrents by comments">
																		<img src="/images/icon_comments.gif" alt="Sort">
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
												</th>
												<th><a href="/TV+Torrents.php" title="Sort torrents by added time">Added</a>&nbsp;</th>
												<th><a href="/TV+Torrents.php" title="Sort torrents by size">Size</a>&nbsp;<a href="/TV+Torrents.php" title="Sort torrents by size"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th><a href="/TV+Torrents.php" title="Sort torrents by seeds">S</a>&nbsp;<a href="/TV+Torrents.php" title="Sort torrents by seeds"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th><a href="/TV+Torrents.php" title="Sort torrents by leechers">L</a>&nbsp;<a href="/TV+Torrents.php" title="Sort torrents by leechers"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th>Health</th>
											</tr>
										</thead>
										<tbody>
											<?php
											// Check if data exists and is an array.
											if (isset($poptv['data']) && is_array($poptv['data'])) {
												foreach ($poptv['data'] as $item) {
													// Safely extract and sanitize each field.
													$magnet   = isset($item['magnet']) ? htmlspecialchars($item['magnet'], ENT_QUOTES, 'UTF-8') : '';
													$hash     = isset($item['hash']) ? htmlspecialchars($item['hash'], ENT_QUOTES, 'UTF-8') : '';
													$name     = isset($item['name']) ? htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8') : 'Unknown Torrent';
													$category = isset($item['category']) ? htmlspecialchars($item['category'], ENT_QUOTES, 'UTF-8') : '';
													$uploader = isset($item['uploader']) ? htmlspecialchars($item['uploader'], ENT_QUOTES, 'UTF-8') : 'Anonymous';
													$date     = isset($item['date']) ? htmlspecialchars($item['date'], ENT_QUOTES, 'UTF-8') : '';
													$size     = isset($item['size']) ? htmlspecialchars($item['size'], ENT_QUOTES, 'UTF-8') : '';
													$seeders  = isset($item['seeders']) ? htmlspecialchars($item['seeders'], ENT_QUOTES, 'UTF-8') : '';
													$leechers = isset($item['leechers']) ? htmlspecialchars($item['leechers'], ENT_QUOTES, 'UTF-8') : '';

													// Output the table row using your provided HTML structure.
													echo '<tr class="tlz">';
													echo '<td>';
													echo '<a href="http://itorrents.org/torrent/' . $hash . '.torrent" title="' . $name . '">';
													echo '<img src="/images/icon_download3.gif" alt="Download"></a>';
													echo '<a href="' . $magnet . '" title="Magnet link">';
													echo '<img src="/images/magnet2.png" alt="Magnet link" hspace="3">';
													echo '</a>';
													echo '</td>';
													echo '<td class="tli">';
													echo '<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;';
													echo '<a href="/torrent.php?hash=' . $hash . '">' . $name . '</a>';
													echo '<span class="c_tor"> in ' . $category . '</span>';
													echo '<span class="c_tor">, by</span>';
													echo '<span class="micro">';
													echo '<div class="usr">';
													echo '<div class="usrm"></div>';
													echo '<span> ' . $uploader . '</span>';
													echo '</div>';
													echo '</span>';
													echo '</td>';
													echo '<td>' . $date . '</td>';
													echo '<td>' . $size . '</td>';
													echo '<td class="sn">' . $seeders . '</td>';
													echo '<td class="ln">' . $leechers . '</td>';
													echo '<td class="rating"><div class=""></div></td>';
													echo '</tr>';
												}
											} else {
												// If there is no data available.
												echo '<tr><td colspan="7">No recent torrents found.</td></tr>';
											}
											?>
										</tbody>
									</table>
									<br>
									<br>
									<table class="tl">
										<thead>
											<tr>
												<th width="100%" colspan="2">
													<table>
														<tbody>
															<tr>
																<td>
																	<a href="/Music+Torrents.php" class="h2" title="Browse Music Torrents">
																		<img src="/images/5s.gif" hspace="10" align="left" alt="Browse Music Torrents">&nbsp;Music torrents</a>&nbsp;(<a href="/Music+Torrents.php" title="View all torrents">view all</a> popular torrents in this category)&nbsp;
																</td>
																<td width="60">
																</td>
																<td width="18">
																	<a href="/Music+Torrents.php" title="Sort torrents by comments">
																		<img src="/images/icon_comments.gif" alt="Sort">
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
												</th>
												<th><a href="/Music+Torrents.php" title="Sort torrents by added time">Added</a>&nbsp;</th>
												<th><a href="/Music+Torrents.php" title="Sort torrents by size">Size</a>&nbsp;<a href="/Music+Torrents.php" title="Sort torrents by size"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th><a href="/Music+Torrents.php" title="Sort torrents by seeds">S</a>&nbsp;<a href="/Music+Torrents.php" title="Sort torrents by seeds"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th><a href="/Music+Torrents.php" title="Sort torrents by leechers">L</a>&nbsp;<a href="/Music+Torrents.php" title="Sort torrents by leechers"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th>Health</th>
											</tr>
										</thead>
										<tbody>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:D5F05D92132B7EA181B442D986C3E2567C4B4BAF&dn=Dream+Theater+-+Parasomnia+%282025%29+FLAC+%5BPMEDIA%5D+%E2%AD%90%EF%B8%8F&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Fopen.demonii.com%3A1337&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fp4p.arenabg.com%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.dler.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fopentracker.io%3A6969%2Fannounce&tr=udp%3A%2F%2Fz.mercax.com%3A53%2Fannounce&tr=udp%3A%2F%2Ftracker.birkenwald.de%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.bittor.pw%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.renfei.net%3A8080%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18919578/Dream+Theater+Parasomnia+2025+FLAC+PMEDIA+.html" title="view Dream Theater - Parasomnia (2025) FLAC [PMEDIA] ️ torrent">Dream Theater - Parasomnia (2025) FLAC [PMEDIA] ️</a>
													<span class="c_tor">
														in Lossless </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>PMEDIA</span>
														</div>
													</span>
												</td>
												<td>1d</td>
												<td>491.4 MB</td>
												<td class="sn">387</td>
												<td class="ln">269</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:C4B57AD990005467D745C3A6136DD9C339B50DCA&dn=Dream+Theater+-+Parasomnia+%282025%29+Mp3+320kbps+%5BPMEDIA%5D+%E2%AD%90%EF%B8%8F&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Fopen.demonii.com%3A1337&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fp4p.arenabg.com%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.dler.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fopentracker.io%3A6969%2Fannounce&tr=udp%3A%2F%2Fz.mercax.com%3A53%2Fannounce&tr=udp%3A%2F%2Ftracker.birkenwald.de%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.bittor.pw%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.renfei.net%3A8080%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18919579/Dream+Theater+Parasomnia+2025+Mp3+320kbps+PMEDIA+.html" title="view Dream Theater - Parasomnia (2025) Mp3 320kbps [PMEDIA] ️ torrent">Dream Theater - Parasomnia (2025) Mp3 320kbps [PMEDIA] ️</a>
													<span class="c_tor">
														in MP3 </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>PMEDIA</span>
														</div>
													</span>
												</td>
												<td>1d</td>
												<td>163.6 MB</td>
												<td class="sn">271</td>
												<td class="ln">223</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:E8492F926C7578716C85BEB41DBF0FD4336EB09F&dn=Various+Artists+-+Mastermix+Decades+USB+80s+%282025%29+Mp3+320kbps+%5BPMEDIA%5D+%E2%AD%90%EF%B8%8F&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Fopen.demonii.com%3A1337&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fp4p.arenabg.com%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.dler.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fopentracker.io%3A6969%2Fannounce&tr=udp%3A%2F%2Fz.mercax.com%3A53%2Fannounce&tr=udp%3A%2F%2Ftracker.birkenwald.de%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.bittor.pw%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.renfei.net%3A8080%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18919582/Various+Artists+Mastermix+Decades+USB+80s+2025+Mp3+320kbps+PMEDIA+.html" title="view Various Artists - Mastermix Decades USB 80s (2025) Mp3 320kbps [PMEDIA] ️ torrent">Various Artists - Mastermix Decades USB 80s (2025) Mp3 320kbps [PMEDIA] ️</a>
													<span class="c_tor">
														in MP3 </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>PMEDIA</span>
														</div>
													</span>
												</td>
												<td>1d</td>
												<td>3.9 GB</td>
												<td class="sn">182</td>
												<td class="ln">165</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:B077187C22708E43C944BA8F39762A35A4CC0E95&dn=Dean+Martin+-+Italian+Love+Songs+%28Remastered%29+%281962+Musica+crooner%29+%5BFlac+24-192%5D&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=https%3A%2F%2Ftracker.lilithraws.org%3A443%2Fannounce&tr=https%3A%2F%2Ftracker.gcrenwp.top%3A443%2Fannounce&tr=https%3A%2F%2Ftrackers.mlsub.net%3A443%2Fannounce&tr=udp%3A%2F%2Ftracker.yume-hatsuyuki.moe%3A6969%2Fannounce&tr=https%3A%2F%2Ftracker.pmman.tech%3A443%2Fannounce&tr=http%3A%2F%2Ftracker1.itzmx.com%3A8080%2Fannounce&tr=http%3A%2F%2Ftracker.bt4g.com%3A2095%2Fannounce&tr=udp%3A%2F%2Ftracker.darkness.services%3A6969%2Fannounce&tr=udp%3A%2F%2Fopentracker.io%3A6969%2Fannounce&tr=udp%3A%2F%2Ftr4ck3r.duckdns.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fttk2.nbaonlineservice.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18919479/Dean+Martin+Italian+Love+Songs+Remastered+1962+Musica+crooner+Flac+24+192.html" title="view Dean Martin - Italian Love Songs (Remastered) (1962 Musica crooner) [Flac 24-192] torrent">Dean Martin - Italian Love Songs (Remastered) (1962 Musica crooner) [Flac 24-192]</a>
													<span class="c_tor">
														in Lossless </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>Lulloz</span>
														</div>
													</span>
												</td>
												<td>1d</td>
												<td>1.4 GB</td>
												<td class="sn">182</td>
												<td class="ln">33</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:067F9E1A4E184F5DA88CA1782928F8CB50963DE0&dn=Grateful+Dead+-+From+the+Mars+Hotel+%2850th+Anniversary+Deluxe%29+%282024+Rock%29+%5BFlac+24-192%5D&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=https%3A%2F%2Ftracker.lilithraws.org%3A443%2Fannounce&tr=https%3A%2F%2Ftracker.gcrenwp.top%3A443%2Fannounce&tr=https%3A%2F%2Ftrackers.mlsub.net%3A443%2Fannounce&tr=udp%3A%2F%2Ftracker.yume-hatsuyuki.moe%3A6969%2Fannounce&tr=https%3A%2F%2Ftracker.pmman.tech%3A443%2Fannounce&tr=http%3A%2F%2Ftracker1.itzmx.com%3A8080%2Fannounce&tr=http%3A%2F%2Ftracker.bt4g.com%3A2095%2Fannounce&tr=udp%3A%2F%2Ftracker.darkness.services%3A6969%2Fannounce&tr=udp%3A%2F%2Fopentracker.io%3A6969%2Fannounce&tr=udp%3A%2F%2Ftr4ck3r.duckdns.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fttk2.nbaonlineservice.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18917846/Grateful+Dead+From+the+Mars+Hotel+50th+Anniversary+Deluxe+2024+Rock+Flac+24+192.html" title="view Grateful Dead - From the Mars Hotel (50th Anniversary Deluxe) (2024 Rock) [Flac 24-192] torrent">Grateful Dead - From the Mars Hotel (50th Anniversary Deluxe) (2024 Rock) [Flac 24-192]</a>
													<span class="c_tor">
														in Lossless </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>Lulloz</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>8.1 GB</td>
												<td class="sn">154</td>
												<td class="ln">27</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:279FDB4E62E6F7B7BCCFB8F675905407E2B0BBF5&dn=Various+Artists+-+Best+80s+Rock+%282025%29+Mp3+320kbps+%5BPMEDIA%5D+%E2%AD%90%EF%B8%8F&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Fopen.demonii.com%3A1337&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fp4p.arenabg.com%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.dler.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fopentracker.io%3A6969%2Fannounce&tr=udp%3A%2F%2Fz.mercax.com%3A53%2Fannounce&tr=udp%3A%2F%2Ftracker.birkenwald.de%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.bittor.pw%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.renfei.net%3A8080%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18918007/Various+Artists+Best+80s+Rock+2025+Mp3+320kbps+PMEDIA+.html" title="view Various Artists - Best 80s Rock (2025) Mp3 320kbps [PMEDIA] ️ torrent">Various Artists - Best 80s Rock (2025) Mp3 320kbps [PMEDIA] ️</a>
													<span class="c_tor">
														in MP3 </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>PMEDIA</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>690.8 MB</td>
												<td class="sn">151</td>
												<td class="ln">110</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:8C81B4F3F0D01E2C9063C2D7E25FAB8FD67BA7A4&dn=VA+-+New+Music+Releases+Week+03+of+2025+%28Mp3+320kbps+Songs%29+%5BPMEDIA%5D+%E2%AD%90%EF%B8%8F&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Fopen.demonii.com%3A1337&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fp4p.arenabg.com%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.dler.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fopentracker.io%3A6969%2Fannounce&tr=udp%3A%2F%2Ftr4ck3r.duckdns.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.birkenwald.de%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.bittor.pw%3A1337%2Fannounce&tr=udp%3A%2F%2Ftrackarr.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18918088/VA+New+Music+Releases+Week+03+of+2025+Mp3+320kbps+Songs+PMEDIA+.html" title="view VA - New Music Releases Week 03 of 2025 (Mp3 320kbps Songs) [PMEDIA] ️ torrent">VA - New Music Releases Week 03 of 2025 (Mp3 320kbps Songs) [PMEDIA] ️</a>
													<span class="c_tor">
														in MP3 </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>PMEDIA</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>4 GB</td>
												<td class="sn">114</td>
												<td class="ln">107</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:861124A75787292B54377EF793D347F6832F6E40&dn=Various+Artists+-+Acoustic+Covers+2025+%282025%29+Mp3+320kbps+%5BPMEDIA%5D+%E2%AD%90%EF%B8%8F&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Fopen.demonii.com%3A1337&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fp4p.arenabg.com%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.dler.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fopentracker.io%3A6969%2Fannounce&tr=udp%3A%2F%2Fz.mercax.com%3A53%2Fannounce&tr=udp%3A%2F%2Ftracker.birkenwald.de%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.bittor.pw%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.renfei.net%3A8080%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18919580/Various+Artists+Acoustic+Covers+2025+2025+Mp3+320kbps+PMEDIA+.html" title="view Various Artists - Acoustic Covers 2025 (2025) Mp3 320kbps [PMEDIA] ️ torrent">Various Artists - Acoustic Covers 2025 (2025) Mp3 320kbps [PMEDIA] ️</a>
													<span class="c_tor">
														in MP3 </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>PMEDIA</span>
														</div>
													</span>
												</td>
												<td>1d</td>
												<td>594.2 MB</td>
												<td class="sn">113</td>
												<td class="ln">106</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:EED6B9EC236E817B6C4F643525AECD566E84E83B&dn=Ace+Of+Base+-+Flowers+%28Wordwide%29+%281998+Pop%29+%5BFlac+24-44%5D&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=https%3A%2F%2Ftracker.lilithraws.org%3A443%2Fannounce&tr=https%3A%2F%2Ftracker.gcrenwp.top%3A443%2Fannounce&tr=https%3A%2F%2Ftrackers.mlsub.net%3A443%2Fannounce&tr=udp%3A%2F%2Ftracker.yume-hatsuyuki.moe%3A6969%2Fannounce&tr=https%3A%2F%2Ftracker.pmman.tech%3A443%2Fannounce&tr=http%3A%2F%2Ftracker1.itzmx.com%3A8080%2Fannounce&tr=http%3A%2F%2Ftracker.bt4g.com%3A2095%2Fannounce&tr=udp%3A%2F%2Ftracker.darkness.services%3A6969%2Fannounce&tr=udp%3A%2F%2Fopentracker.io%3A6969%2Fannounce&tr=udp%3A%2F%2Ftr4ck3r.duckdns.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fttk2.nbaonlineservice.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18921008/Ace+Of+Base+Flowers+Wordwide+1998+Pop+Flac+24+44.html" title="view Ace Of Base - Flowers (Wordwide) (1998 Pop) [Flac 24-44] torrent">Ace Of Base - Flowers (Wordwide) (1998 Pop) [Flac 24-44]</a>
													<span class="c_tor">
														in Lossless </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>Lulloz</span>
														</div>
													</span>
												</td>
												<td>12h</td>
												<td>703 MB</td>
												<td class="sn">113</td>
												<td class="ln">35</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:95B888FA5CBFF73DC4C13EF4E0070B182FFB7AB9&dn=Ace+Of+Base+-+Da+Capo+%28Remaster+Bonus+2015%29+%282002+Pop%29+%5BFlac+24-44%5D&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=https%3A%2F%2Ftracker.lilithraws.org%3A443%2Fannounce&tr=https%3A%2F%2Ftracker.gcrenwp.top%3A443%2Fannounce&tr=https%3A%2F%2Ftrackers.mlsub.net%3A443%2Fannounce&tr=udp%3A%2F%2Ftracker.yume-hatsuyuki.moe%3A6969%2Fannounce&tr=https%3A%2F%2Ftracker.pmman.tech%3A443%2Fannounce&tr=http%3A%2F%2Ftracker1.itzmx.com%3A8080%2Fannounce&tr=http%3A%2F%2Ftracker.bt4g.com%3A2095%2Fannounce&tr=udp%3A%2F%2Ftracker.darkness.services%3A6969%2Fannounce&tr=udp%3A%2F%2Fopentracker.io%3A6969%2Fannounce&tr=udp%3A%2F%2Ftr4ck3r.duckdns.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fttk2.nbaonlineservice.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18921010/Ace+Of+Base+Da+Capo+Remaster+Bonus+2015+2002+Pop+Flac+24+44.html" title="view Ace Of Base - Da Capo (Remaster Bonus 2015) (2002 Pop) [Flac 24-44] torrent">Ace Of Base - Da Capo (Remaster Bonus 2015) (2002 Pop) [Flac 24-44]</a>
													<span class="c_tor">
														in Lossless </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>Lulloz</span>
														</div>
													</span>
												</td>
												<td>12h</td>
												<td>564.5 MB</td>
												<td class="sn">111</td>
												<td class="ln">31</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
										</tbody>
									</table>
									<br>
									<br>
									<table class="tl">
										<thead>
											<tr>
												<th width="100%" colspan="2">
													<table>
														<tbody>
															<tr>
																<td>
																	<a href="/Anime+Torrents.php" class="h2" title="Browse Anime Torrents">
																		<img src="/images/1s.gif" hspace="10" align="left" alt="Browse Anime Torrents">&nbsp;Anime torrents</a>&nbsp;(<a href="/Anime+Torrents.php" title="View all torrents">view all</a> popular torrents in this category)&nbsp;
																</td>
																<td width="60">
																</td>
																<td width="18">
																	<a href="/Anime+Torrents.php" title="Sort torrents by comments">
																		<img src="/images/icon_comments.gif" alt="Sort">
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
												</th>
												<th><a href="/Anime+Torrents.php" title="Sort torrents by added time">Added</a>&nbsp;</th>
												<th><a href="/Anime+Torrents.php" title="Sort torrents by size">Size</a>&nbsp;<a href="/Anime+Torrents.php" title="Sort torrents by size"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th><a href="/Anime+Torrents.php" title="Sort torrents by seeds">S</a>&nbsp;<a href="/Anime+Torrents.php" title="Sort torrents by seeds"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th><a href="/Anime+Torrents.php" title="Sort torrents by leechers">L</a>&nbsp;<a href="/Anime+Torrents.php" title="Sort torrents by leechers"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th>Health</th>
											</tr>
										</thead>
										<tbody>
											<?php
											// Verify that the data exists and is an array.
											if (isset($nyaasi['data']) && is_array($nyaasi['data'])) {
												foreach ($nyaasi['data'] as $item) {
													// Safely extract each field.
													$magnet   = isset($item['magnet']) ? htmlspecialchars($item['magnet'], ENT_QUOTES, 'UTF-8') : '';
													$hash     = isset($item['hash']) ? htmlspecialchars($item['hash'], ENT_QUOTES, 'UTF-8') : '';
													$name     = isset($item['name']) ? htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8') : 'Untitled';
													$category = isset($item['category']) ? htmlspecialchars($item['category'], ENT_QUOTES, 'UTF-8') : '';
													// Note: The API response for nyaasi does not provide an "uploader" field.
													$uploader = isset($item['uploader']) ? htmlspecialchars($item['uploader'], ENT_QUOTES, 'UTF-8') : '';
													$date     = isset($item['date']) ? htmlspecialchars($item['date'], ENT_QUOTES, 'UTF-8') : '';
													$size     = isset($item['size']) ? htmlspecialchars($item['size'], ENT_QUOTES, 'UTF-8') : '';
													$seeders  = isset($item['seeders']) ? htmlspecialchars($item['seeders'], ENT_QUOTES, 'UTF-8') : '';
													$leechers = isset($item['leechers']) ? htmlspecialchars($item['leechers'], ENT_QUOTES, 'UTF-8') : '';

													// Output the table row using your provided HTML structure.
													echo '<tr class="tlz">';
													echo '<td>';
													echo '<a href="http://itorrents.org/torrent/' . $hash . '.torrent" title="' . $name . '">';
													echo '<img src="/images/icon_download3.gif" alt="Download"></a>';
													echo '<a href="' . $magnet . '" title="Magnet link">';
													echo '<img src="/images/magnet2.png" alt="Magnet link" hspace="3">';
													echo '</a>';
													echo '</td>';
													echo '<td class="tli">';
													echo '<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;';
													echo '<a href="/torrent.php?hash=' . $hash . '">' . $name . '</a>';
													echo '<span class="c_tor"> in Anime > ' . $category . '</span>';
													echo '<span class="c_tor">, by</span>';
													echo '<span class="micro">';
													echo '<div class="usr">';
													echo '<div class="usrm"></div>';
													echo '<span>' . $uploader . ' Nyaa</span>';
													echo '</div>';
													echo '</span>';
													echo '</td>';
													echo '<td>' . $date . '</td>';
													echo '<td>' . $size . '</td>';
													echo '<td class="sn">' . $seeders . '</td>';
													echo '<td class="ln">' . $leechers . '</td>';
													echo '<td class="rating"><div class=""></div></td>';
													echo '</tr>';
												}
											} else {
												echo '<tr><td colspan="7">No torrents available.</td></tr>';
											}
											?>
										</tbody>
									</table>
									<br>
									<br>
									<table class="tl">
										<thead>
											<tr>
												<th width="100%" colspan="2">
													<table>
														<tbody>
															<tr>
																<td>
																	<a href="/Games+Torrents.php" class="h2" title="Browse Games Torrents">
																		<img src="/images/3s.gif" hspace="10" align="left" alt="Browse Games Torrents">&nbsp;Games torrents</a>&nbsp;(<a href="/Games+Torrents.php" title="View all torrents">view all</a> popular torrents in this category)&nbsp;
																</td>
																<td width="60">
																</td>
																<td width="18">
																	<a href="/Games+Torrents.php" title="Sort torrents by comments">
																		<img src="/images/icon_comments.gif" alt="Sort">
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
												</th>
												<th><a href="/Games+Torrents.php" title="Sort torrents by added time">Added</a>&nbsp;</th>
												<th><a href="/Games+Torrents.php" title="Sort torrents by size">Size</a>&nbsp;<a href="/Games+Torrents.php" title="Sort torrents by size"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th><a href="/Games+Torrents.php" title="Sort torrents by seeds">S</a>&nbsp;<a href="/Games+Torrents.php" title="Sort torrents by seeds"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th><a href="/Games+Torrents.php" title="Sort torrents by leechers">L</a>&nbsp;<a href="/Games+Torrents.php" title="Sort torrents by leechers"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th>Health</th>
											</tr>
										</thead>
										<tbody>
											<?php
											// Ensure that the 'data' key exists and is an array.
											if (isset($topgame['data']) && is_array($topgame['data'])) {
												foreach ($topgame['data'] as $item) {
													// Safely extract and sanitize each field.
													$magnet   = isset($item['magnet'])   ? htmlspecialchars($item['magnet'], ENT_QUOTES, 'UTF-8') : '';
													$hash     = isset($item['hash'])     ? htmlspecialchars($item['hash'], ENT_QUOTES, 'UTF-8') : '';
													$name     = isset($item['name'])     ? htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8') : 'Untitled';
													$category = isset($item['category']) ? htmlspecialchars($item['category'], ENT_QUOTES, 'UTF-8') : '';
													$uploader = isset($item['uploader']) ? htmlspecialchars($item['uploader'], ENT_QUOTES, 'UTF-8') : '';
													$date     = isset($item['date'])     ? htmlspecialchars($item['date'], ENT_QUOTES, 'UTF-8') : '';
													$size     = isset($item['size'])     ? htmlspecialchars($item['size'], ENT_QUOTES, 'UTF-8') : '';
													$seeders  = isset($item['seeders'])  ? htmlspecialchars($item['seeders'], ENT_QUOTES, 'UTF-8') : '';
													$leechers = isset($item['leechers']) ? htmlspecialchars($item['leechers'], ENT_QUOTES, 'UTF-8') : '';

													echo '<tr class="tlz">';
													echo '<td>';
													echo '<a href="http://itorrents.org/torrent/' . $hash . '.torrent?title=' . urlencode($name) . '" title="' . htmlspecialchars($name) . '">';
													echo '<img src="/images/icon_download3.gif" alt="Download"></a>';
													echo '<a href="' . $magnet . '" title="Magnet link">';
													echo '<img src="/images/magnet2.png" alt="Magnet link" hspace="3">';
													echo '</a>';
													echo '</td>';
													echo '<td class="tli">';
													echo '<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;';
													echo '<a href="/torrent.php?hash=' . $hash . '">' . $name . '</a>';
													echo '<span class="c_tor"> in ' . $category . '</span>';
													echo '<span class="c_tor">, by</span>';
													echo '<span class="micro">';
													echo '<div class="usr">';
													echo '<div class="usrm"></div>';
													echo '<span> ' . $uploader . '</span>';
													echo '</div>';
													echo '</span>';
													echo '</td>';
													echo '<td>' . $date . '</td>';
													echo '<td>' . $size . '</td>';
													echo '<td class="sn">' . $seeders . '</td>';
													echo '<td class="ln">' . $leechers . '</td>';
													echo '<td class="rating"><div class=""></div></td>';
													echo '</tr>';
												}
											} else {
												echo '<tr><td colspan="7">No torrents available.</td></tr>';
											}
											?>
										</tbody>
									</table>
									<br>
									<br>
									<table class="tl">
										<thead>
											<tr>
												<th width="100%" colspan="2">
													<table>
														<tbody>
															<tr>
																<td>
																	<a href="/Software+Torrents.php" class="h2" title="Browse Software Torrents">
																		<img src="/images/7s.gif" hspace="10" align="left" alt="Browse Software Torrents">&nbsp;Software torrents</a>&nbsp;(<a href="/Software+Torrents.php" title="View all torrents">view all</a> popular torrents in this category)&nbsp;
																</td>
																<td width="60">
																</td>
																<td width="18">
																	<a href="/Software+Torrents.php" title="Sort torrents by comments">
																		<img src="/images/icon_comments.gif" alt="Sort">
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
												</th>
												<th><a href="/Software+Torrents.php" title="Sort torrents by added time">Added</a>&nbsp;</th>
												<th><a href="/Software+Torrents.php" title="Sort torrents by size">Size</a>&nbsp;<a href="/Software+Torrents.php" title="Sort torrents by size"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th><a href="/Software+Torrents.php" title="Sort torrents by seeds">S</a>&nbsp;<a href="/Software+Torrents.php" title="Sort torrents by seeds"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th><a href="/Software+Torrents.php" title="Sort torrents by leechers">L</a>&nbsp;<a href="/Software+Torrents.php" title="Sort torrents by leechers"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th>Health</th>
											</tr>
										</thead>
										<tbody>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:6E04649FD7039F244AE338AC5AF0C1AEF07F176D&dn=Internet+Download+Manager+%28IDM%29+v6.42+Build+27+%2B+Fix+%5BLifetime+Activation%5D+%7BCracksHash%7D&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.pirateparty.gr%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fipv4.tracker.harry.lu%3A80%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.cyberia.is%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.open-internet.nl%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18919294/Internet+Manager+IDM+v6+42+Build+27+Fix+Lifetime+Activation+CracksHash.html" title="view Internet Manager (IDM) v6.42 Build 27 + Fix [Lifetime Activation] {CracksHash} torrent">Internet Manager (IDM) v6.42 Build 27 + Fix [Lifetime Activation] {CracksHash}</a>
													<span class="c_tor">
														in Windows </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>crackshash</span>
														</div>
													</span>
												</td>
												<td>1d</td>
												<td>11.8 MB</td>
												<td class="sn">107</td>
												<td class="ln">11</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:4425AD3C29D63EBE254EDD893E42492F9C4C129D&dn=KMS+Matrix+v7.0+%28Activate+Windows+%26amp%3B+Office%29+-+%5BhaxNode%5D&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ffasttracker.foreverpirates.co%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.cyberia.is%3A6969%2Fannounce&tr=udp%3A%2F%2Fipv4.tracker.harry.lu%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.uw0.xyz%3A6969%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.birkenwald.de%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Ftracker.moeking.me%3A6969%2Fannounce&tr=udp%3A%2F%2Fopentor.org%3A2710%2Fannounce&tr=udp%3A%2F%2Ftracker.dler.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18919026/KMS+Matrix+v7+0+Activate+Windows+Office+haxNode.html" title="view KMS Matrix v7.0 (Activate Windows & Office) - [haxNode] torrent">KMS Matrix v7.0 (Activate Windows & Office) - [haxNode]</a>
													<span class="c_tor">
														in Windows </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>haxNode</span>
														</div>
													</span>
												</td>
												<td>1d</td>
												<td>10.8 MB</td>
												<td class="sn">93</td>
												<td class="ln">4</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:31B8A46D324A25ABEDD704F7D6AE0FFC9EDABFE0&dn=Adobe+Photoshop+2025+v26.3.0+%28x64%29+Pre-Activated+-+%5BhaxNode%5D&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ffasttracker.foreverpirates.co%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.cyberia.is%3A6969%2Fannounce&tr=udp%3A%2F%2Fipv4.tracker.harry.lu%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.uw0.xyz%3A6969%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.birkenwald.de%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Ftracker.moeking.me%3A6969%2Fannounce&tr=udp%3A%2F%2Fopentor.org%3A2710%2Fannounce&tr=udp%3A%2F%2Ftracker.dler.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<div id="tcmm">
														<a href="/torrent/18917435/Adobe+Photoshop+2025+v26+3+0+x64+Pre+Activated+haxNode.html#comments" title="View comments">
															1<img src="/images/icon_comment.gif" alt="1 comments" hspace="2" class="icon">
														</a>
													</div>
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18917435/Adobe+Photoshop+2025+v26+3+0+x64+Pre+Activated+haxNode.html" title="view Adobe Photoshop 2025 v26.3.0 (x64) Pre-Activated - [haxNode] torrent">Adobe Photoshop 2025 v26.3.0 (x64) Pre-Activated - [haxNode]</a>
													<span class="c_tor">
														in Windows </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>haxNode</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>4.9 GB</td>
												<td class="sn">88</td>
												<td class="ln">45</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:937A9EED6EC10C206A387EBF943D6040365FC2E2&dn=Adobe+Acrobat+Pro+DC+2024+v24.005.20399+%28x64%29+Pre-Activated+-+%5BhaxNode%5D&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ffasttracker.foreverpirates.co%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.cyberia.is%3A6969%2Fannounce&tr=udp%3A%2F%2Fipv4.tracker.harry.lu%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.uw0.xyz%3A6969%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.birkenwald.de%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Ftracker.moeking.me%3A6969%2Fannounce&tr=udp%3A%2F%2Fopentor.org%3A2710%2Fannounce&tr=udp%3A%2F%2Ftracker.dler.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18917434/Adobe+Acrobat+Pro+DC+2024+v24+005+20399+x64+Pre+Activated+haxNode.html" title="view Adobe Acrobat Pro DC 2024 v24.005.20399 (x64) Pre-Activated - [haxNode] torrent">Adobe Acrobat Pro DC 2024 v24.005.20399 (x64) Pre-Activated - [haxNode]</a>
													<span class="c_tor">
														in Windows </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>haxNode</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>1.6 GB</td>
												<td class="sn">78</td>
												<td class="ln">20</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:9F6C3C0E55639BB4EDB4FCF0E7715E3900409E67&dn=Topaz+Video+AI+Pro+6.0.4+%28x64%29+FINAL+Pre-Activated+%5BAppDoze%5D&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fp4p.arenabg.com%3A1337%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=http%3A%2F%2Ftracker1.itzmx.com%3A8080%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18916914/Topaz+Video+AI+Pro+6+0+4+x64+FINAL+Pre+Activated+AppDoze.html" title="view Topaz Video AI Pro 6.0.4 (x64) FINAL Pre-Activated [AppDoze] torrent">Topaz Video AI Pro 6.0.4 (x64) FINAL Pre-Activated [AppDoze]</a>
													<span class="c_tor">
														in Windows </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>appdoze</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>400.4 MB</td>
												<td class="sn">66</td>
												<td class="ln">9</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:E13BD09EE70D9A14F05999A928B06031ADECE09C&dn=jetAudio%2B+Hi-Res+Music+Player+v12.3.0+%28Amazon%29+Premium+Cracked+APK+%5BAppDoze%5D&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fp4p.arenabg.com%3A1337%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=http%3A%2F%2Ftracker1.itzmx.com%3A8080%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18917210/jetAudio+Hi+Res+Music+Player+v12+3+0+Amazon+Premium+Cracked+APK+AppDoze.html" title="view jetAudio+ Hi-Res Music Player v12.3.0 (Amazon) Premium Cracked APK [AppDoze] torrent">jetAudio+ Hi-Res Music Player v12.3.0 (Amazon) Premium Cracked APK [AppDoze]</a>
													<span class="c_tor">
														in Android </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>appdoze</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>22.8 MB</td>
												<td class="sn">57</td>
												<td class="ln">3</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:25B23D08A2D090135397815A73747887D530AEDA&dn=Windows+Movie+Maker+2025+v9.9.9.16+%28x64%29+%2B+Fix+%7BCracksHash%7D&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.pirateparty.gr%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fipv4.tracker.harry.lu%3A80%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.cyberia.is%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.open-internet.nl%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18919265/Windows+Movie+Maker+2025+v9+9+9+16+x64+Fix+CracksHash.html" title="view Windows Movie Maker 2025 v9.9.9.16 (x64) + Fix {CracksHash} torrent">Windows Movie Maker 2025 v9.9.9.16 (x64) + Fix {CracksHash}</a>
													<span class="c_tor">
														in Windows </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>crackshash</span>
														</div>
													</span>
												</td>
												<td>1d</td>
												<td>420.8 MB</td>
												<td class="sn">52</td>
												<td class="ln">11</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:E11C6FDE90C5215EEAEFAC64C79151AAA056CFE2&dn=Duplicate+Photos+Fixer+Pro+1.3.1086.1004+%2B+Crack+%5BAppDoze%5D&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fp4p.arenabg.com%3A1337%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=http%3A%2F%2Ftracker1.itzmx.com%3A8080%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18918834/Duplicate+Photos+Fixer+Pro+1+3+1086+1004+Crack+AppDoze.html" title="view Duplicate Photos Fixer Pro 1.3.1086.1004 + Crack [AppDoze] torrent">Duplicate Photos Fixer Pro 1.3.1086.1004 + Crack [AppDoze]</a>
													<span class="c_tor">
														in Windows </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>appdoze</span>
														</div>
													</span>
												</td>
												<td>1d</td>
												<td>30.7 MB</td>
												<td class="sn">51</td>
												<td class="ln">6</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:776ED6EDFAF7F92BA80CDB4C0AD0C4B44179CF0A&dn=Symantec+Endpoint+Protection+14.3.12154.10000+Pre-Activated+%5BAppDoze%5D&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fp4p.arenabg.com%3A1337%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=http%3A%2F%2Ftracker1.itzmx.com%3A8080%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18920653/Symantec+Endpoint+Protection+14+3+12154+10000+Pre+Activated+AppDoze.html" title="view Symantec Endpoint Protection 14.3.12154.10000 Pre-Activated [AppDoze] torrent">Symantec Endpoint Protection 14.3.12154.10000 Pre-Activated [AppDoze]</a>
													<span class="c_tor">
														in Windows </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>appdoze</span>
														</div>
													</span>
												</td>
												<td>16h</td>
												<td>223.5 MB</td>
												<td class="sn">50</td>
												<td class="ln">16</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:B983353E5A960DAC965CC93DCC7FDA9DCF52752E&dn=WinPE+11-10+Sergei+Strelec+%28x64%29+2025.02.05%5BRepackmaster%5D&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.cyberia.is%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.birkenwald.de%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.moeking.me%3A6969%2Fannounce&tr=udp%3A%2F%2Fipv4.tracker.harry.lu%3A80%2Fannounce&tr=udp%3A%2F%2Fttk2.nbaonlineservice.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fec2-18-191-163-220.us-east-2.compute.amazonaws.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fevan.im%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.0x7c0.com%3A6969%2Fannounce&tr=udp%3A%2F%2Famigacity.xyz%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18919050/WinPE+11+10+Sergei+Strelec+x64+2025+02+05+Repackmaster.html" title="view WinPE 11-10 Sergei Strelec (x64) 2025.02.05[Repackmaster] torrent">WinPE 11-10 Sergei Strelec (x64) 2025.02.05[Repackmaster]</a>
													<span class="c_tor">
														in Windows </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>OnyHash</span>
														</div>
													</span>
												</td>
												<td>1d</td>
												<td>3.2 GB</td>
												<td class="sn">48</td>
												<td class="ln">11</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
										</tbody>
									</table>
									<br>
									<br>
									<table class="tl">
										<thead>
											<tr>
												<th width="100%" colspan="2">
													<table>
														<tbody>
															<tr>
																<td>
																	<a href="/Books+Torrents.php" class="h2" title="Browse Books Torrents">
																		<img src="/images/2s.gif" hspace="10" align="left" alt="Browse Books Torrents">&nbsp;Books torrents</a>&nbsp;(<a href="/Books+Torrents.php" title="View all torrents">view all</a> popular torrents in this category)&nbsp;
																</td>
																<td width="60">
																</td>
																<td width="18">
																	<a href="/Books+Torrents.php" title="Sort torrents by comments">
																		<img src="/images/icon_comments.gif" alt="Sort">
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
												</th>
												<th><a href="/Books+Torrents.php" title="Sort torrents by added time">Added</a>&nbsp;</th>
												<th><a href="/Books+Torrents.php" title="Sort torrents by size">Size</a>&nbsp;<a href="/Books+Torrents.php" title="Sort torrents by size"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th><a href="/Books+Torrents.php" title="Sort torrents by seeds">S</a>&nbsp;<a href="/Books+Torrents.php" title="Sort torrents by seeds"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th><a href="/Books+Torrents.php" title="Sort torrents by leechers">L</a>&nbsp;<a href="/Books+Torrents.php" title="Sort torrents by leechers"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th>Health</th>
											</tr>
										</thead>
										<tbody>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:29D1DC157D8C17FCA39F9140646DE204A36324C6&dn=Wall+Street+Journal+Thursday+February+6%2C+2025&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fopentor.org%3A2710%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.moeking.me%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.theoks.net%3A6969%2Fannounce&tr=udp%3A%2F%2Fretracker.lanta-net.ru%3A2710%2Fannounce&tr=udp%3A%2F%2Fmovies.zsw.ca%3A6969%2Fannounce&tr=UDP%3A%2F%2FTRACKER.LEECHERS-PARADISE.ORG%3A6969%2FANNOUNCE&tr=UDP%3A%2F%2FTRACKER.COPPERSURFER.TK%3A6969%2FANNOUNCE&tr=UDP%3A%2F%2FTRACKER.ZER0DAY.TO%3A1337%2FANNOUNCE&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18920226/Wall+Street+Journal+Thursday+February+6+2025.html" title="view Wall Street Journal Thursday February 6, 2025 torrent">Wall Street Journal Thursday February 6, 2025</a>
													<span class="c_tor">
														in Ebooks </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>surfer83</span>
														</div>
													</span>
												</td>
												<td>22h</td>
												<td>22.4 MB</td>
												<td class="sn">101</td>
												<td class="ln">3</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:1166B8E45E276B598CE1DA62B857F1301BD97861&dn=Marvel+Week%2B+%2802-05-2025%29&tr=udp%3A%2F%2Ftracker.ccp.ovh%3A6969%2Fannounce&tr=http%3A%2F%2Ftracker.ccp.ovh%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=https%3A%2F%2Ftracker.tamersunion.org%3A443%2Fannounce&tr=http%3A%2F%2Fopen.acgtracker.com%3A1096%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18919589/Marvel+Week+02+05+2025.html" title="view Marvel Week+ (02-05-2025) torrent">Marvel Week+ (02-05-2025)</a>
													<span class="c_tor">
														in Comics </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>kileko</span>
														</div>
													</span>
												</td>
												<td>1d</td>
												<td>952.3 MB</td>
												<td class="sn">95</td>
												<td class="ln">29</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:41BC093C9D09966963D5E3925D8D611F60886C58&dn=Computeractive+%26ndash%3B+Issue+703%2C+12%2F25+February+2025++&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.cyberia.is%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.birkenwald.de%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.moeking.me%3A6969%2Fannounce&tr=udp%3A%2F%2Fipv4.tracker.harry.lu%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18919830/Computeractive+Issue+703+12+25+February+2025.html" title="view Computeractive – Issue 703, 12/25 February 2025 torrent">Computeractive – Issue 703, 12/25 February 2025</a>
													<span class="c_tor">
														in Ebooks </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>SMOk3</span>
														</div>
													</span>
												</td>
												<td>1d</td>
												<td>41.4 MB</td>
												<td class="sn">86</td>
												<td class="ln">6</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:9AFFC05B94F32CB0F88B751FC9E74192014B835B&dn=Wall+Street+Journal+Wednesday+February+5%2C+2025&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentor.org%3A2710%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.moeking.me%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.theoks.net%3A6969%2Fannounce&tr=udp%3A%2F%2Fretracker.lanta-net.ru%3A2710%2Fannounce&tr=udp%3A%2F%2Fmovies.zsw.ca%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18918513/Wall+Street+Journal+Wednesday+February+5+2025.html" title="view Wall Street Journal Wednesday February 5, 2025 torrent">Wall Street Journal Wednesday February 5, 2025</a>
													<span class="c_tor">
														in Ebooks </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>surfer83</span>
														</div>
													</span>
												</td>
												<td>1d</td>
												<td>13.7 MB</td>
												<td class="sn">84</td>
												<td class="ln">1</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:0C37BE6FBFA1D787199D73517C4D6D1CD3BACCE1&dn=DC+Week%2B+%2802-05-2025%29&tr=udp%3A%2F%2Ftracker.ccp.ovh%3A6969%2Fannounce&tr=http%3A%2F%2Ftracker.ccp.ovh%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=https%3A%2F%2Ftracker.tamersunion.org%3A443%2Fannounce&tr=http%3A%2F%2Fopen.acgtracker.com%3A1096%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18919584/DC+Week+02+05+2025.html" title="view DC Week+ (02-05-2025) torrent">DC Week+ (02-05-2025)</a>
													<span class="c_tor">
														in Comics </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>kileko</span>
														</div>
													</span>
												</td>
												<td>1d</td>
												<td>654.7 MB</td>
												<td class="sn">78</td>
												<td class="ln">28</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:A6190C33E1AAD52E655F52ADB84E8F13268D097A&dn=%5Bcomputer-internet%5D+30+Arduino+Projects+for+the+Evil+Genius%2C+Second+Edition+by+Simon+Monk+EPUB&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.cyberia.is%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.birkenwald.de%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.moeking.me%3A6969%2Fannounce&tr=udp%3A%2F%2Fipv4.tracker.harry.lu%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18917038/computer+internet+30+Arduino+Projects+for+the+Evil+Genius+Second+Edition+by+Simon+Monk+EPUB.html" title="view [computer-internet] 30 Arduino Projects for the Evil Genius, Second Edition by Simon Monk EPUB torrent">[computer-internet] 30 Arduino Projects for the Evil Genius, Second Edition by Simon Monk EPUB</a>
													<span class="c_tor">
														in Ebooks </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>zakareya</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>15.9 MB</td>
												<td class="sn">74</td>
												<td class="ln">4</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:b06d79fccc7f6191799cceb569e95abdcd097764&dn=Past+Life+Hero+Books+1+and+2+-+Blaise+Corvin&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.files.fm%3A6969%2Fannounce&tr=http%3A%2F%2Ftracker.bt4g.com%3A2095%2Fannounce&tr=http%3A%2F%2Ftracker2.dler.org%3A80%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Fbt1.archive.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.dler.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18917257/Past+Life+Hero+Books+1+and+2+Blaise+Corvin.html" title="view Past Life Hero Books 1 and 2 - Blaise Corvin torrent">Past Life Hero Books 1 and 2 - Blaise Corvin</a>
													<span class="c_tor">
														in Audio books </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>bd2232</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>1.72 GB</td>
												<td class="sn">72</td>
												<td class="ln">6</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:0946520A4A521BB6209AD9E012C9614DE61920F6&dn=%5Bphilosophy%5D+Stoicism+101%3A+From+Marcus+Aurelius+and+Epictetus+to+the+Role+of+Reason+and+Amor+Fati+by+Erick+Cloward+EPUB&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.cyberia.is%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.birkenwald.de%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.moeking.me%3A6969%2Fannounce&tr=udp%3A%2F%2Fipv4.tracker.harry.lu%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18916949/philosophy+Stoicism+101+From+Marcus+Aurelius+and+Epictetus+to+the+Role+of+Reason+and+Amor+Fati+by+Er.html" title="view [philosophy] Stoicism 101: From Marcus Aurelius and Epictetus to the Role of Reason and Amor Fati by Erick Cloward EPUB torrent">[philosophy] Stoicism 101: From Marcus Aurelius and Epictetus to the Role of Reason and Amor Fati by Erick Cloward EPUB</a>
													<span class="c_tor">
														in Ebooks </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>zakareya</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>3.7 MB</td>
												<td class="sn">72</td>
												<td class="ln">5</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:76FF92AFFAB6720A47A03A97E44C98E555946292&dn=%5Bself-help%5D+The+Productivity+Revolution%3A+Control+Your+Time+and+Get+Things+Done%21+by+Marc+Reklau+EPUB&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.cyberia.is%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Fexplodie.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.birkenwald.de%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.moeking.me%3A6969%2Fannounce&tr=udp%3A%2F%2Fipv4.tracker.harry.lu%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18917249/self+help+The+Productivity+Revolution+Control+Your+Time+and+Get+Things+Done+by+Marc+Reklau+EPUB.html" title="view [self-help] The Productivity Revolution: Control Your Time and Get Things Done! by Marc Reklau EPUB torrent">[self-help] The Productivity Revolution: Control Your Time and Get Things Done! by Marc Reklau EPUB</a>
													<span class="c_tor">
														in Ebooks </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>zakareya</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>425.8 KB</td>
												<td class="sn">69</td>
												<td class="ln">4</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:3A52408FF9A0F5AE3409E12566F74F59AA74F1BF&dn=Zhang%20J.%20Acoustical%20Engineering.%20The%20Intricate%20World%20of%20Sound%20Technology%202025&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2F9.rarbg.me%3A2850%2Fannounce&tr=udp%3A%2F%2F9.rarbg.to%3A2920%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18919062/Zhang+J+Acoustical+Engineering+The+Intricate+World+of+Sound+Technology+2025.html" title="view Zhang J. Acoustical Engineering. The Intricate World of Sound Technology 2025 torrent">Zhang J. Acoustical Engineering. The Intricate World of Sound Technology 2025</a>
													<span class="c_tor">
														in Ebooks </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>andryold1</span>
														</div>
													</span>
												</td>
												<td>1d</td>
												<td>35.74 MB</td>
												<td class="sn">68</td>
												<td class="ln">4</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
										</tbody>
									</table>
									<br>
									<br>
									<table class="tl">
										<thead>
											<tr>
												<th width="100%" colspan="2">
													<table>
														<tbody>
															<tr>
																<td>
																	<a href="/Other+Torrents.php" class="h2" title="Browse Other Torrents">
																		<img src="/images/9s.gif" hspace="10" align="left" alt="Browse Other Torrents">&nbsp;Other torrents</a>&nbsp;(<a href="/Other+Torrents.php" title="View all torrents">view all</a> popular torrents in this category)&nbsp;
																</td>
																<td width="60">
																</td>
																<td width="18">
																	<a href="/Other+Torrents.php" title="Sort torrents by comments">
																		<img src="/images/icon_comments.gif" alt="Sort">
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
												</th>
												<th><a href="/Other+Torrents.php" title="Sort torrents by added time">Added</a>&nbsp;</th>
												<th><a href="/Other+Torrents.php" title="Sort torrents by size">Size</a>&nbsp;<a href="/Other+Torrents.php" title="Sort torrents by size"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th><a href="/Other+Torrents.php" title="Sort torrents by seeds">S</a>&nbsp;<a href="/Other+Torrents.php" title="Sort torrents by seeds"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th><a href="/Other+Torrents.php" title="Sort torrents by leechers">L</a>&nbsp;<a href="/Other+Torrents.php" title="Sort torrents by leechers"><img src="/images/sort.gif" alt="Sort"></a></th>
												<th>Health</th>
											</tr>
										</thead>
										<tbody>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:BB242212B53C649B27D336DA4B793E4A2BF4C792&dn=Raspberry%20Pi%20for%20Beginners&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2F9.rarbg.me%3A2850%2Fannounce&tr=udp%3A%2F%2F9.rarbg.to%3A2920%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18917053/Raspberry+Pi+for+Beginners.html" title="view Raspberry Pi for Beginners torrent">Raspberry Pi for Beginners</a>
													<span class="c_tor">
														in Other </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>shailab</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>2.67 GB</td>
												<td class="sn">22</td>
												<td class="ln">7</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:606B120FE1B44AEB0BAB971BE1936B5480BACFFC&dn=Luke%20Matthews%20%26ndash%3B%20AI%20Writing%20Made%20Easy&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2F9.rarbg.me%3A2850%2Fannounce&tr=udp%3A%2F%2F9.rarbg.to%3A2920%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18920375/Luke+Matthews+ndash+AI+Writing+Made+Easy.html" title="view Luke Matthews &ndash; AI Writing Made Easy torrent">Luke Matthews &ndash; AI Writing Made Easy</a>
													<span class="c_tor">
														in Other </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>NotImmune</span>
														</div>
													</span>
												</td>
												<td>21h</td>
												<td>1.66 GB</td>
												<td class="sn">15</td>
												<td class="ln">6</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:04F47CA92A14909C86FBD980210777181D443E65&dn=Ultimate%20Cloudflare%20Bootcamp%20-%20All%20Modules%20Covered&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2F9.rarbg.me%3A2850%2Fannounce&tr=udp%3A%2F%2F9.rarbg.to%3A2920%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18917050/Ultimate+Cloudflare+Bootcamp+All+Modules+Covered.html" title="view Ultimate Cloudflare Bootcamp - All Modules Covered torrent">Ultimate Cloudflare Bootcamp - All Modules Covered</a>
													<span class="c_tor">
														in Other </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>shailab</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>3.86 GB</td>
												<td class="sn">10</td>
												<td class="ln">3</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<a href="https://itorrents.org/torrent/0411A47EA59614A93A28B4091D421FD6477ED17D.torrent?title=Microsoft.Office.Professional.Plus.2021.16.0.16327.20264.Retail_Trial.ISO1.torrent" target="_blank" title="Download Microsoft Office Professional Plus 2021.16.0.16327.20264 Retail_Trial ISO1 torrent">
														<img src="/images/icon_download3.gif" alt="Download">
													</a>
													<a href="magnet:?xt=urn:btih:0411a47ea59614a93a28b4091d421fd6477ed17d&dn=ProPlus2021Retail.img&xl=4938692608&tr=udp://tracker.torrent.eu.org:451/announce&tr=udp://tracker.openbittorrent.com:6969/announce&tr=udp://p4p.arenabg.com:1337/announce&tr=udp://explodie.org:6969/announce&tr=udp://tracker.opentrackr.org:1337/announce&tr=udp://inferno.demonoid.is:3391/announce&tr=udp://exodus.desync.com:6969/announce&tr=udp://open.stealth.si:80/announce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18918090/Microsoft+Office+Professional+Plus+2021+16+0+16327+20264+Retail+Trial+ISO1.html" title="view Microsoft Office Professional Plus 2021.16.0.16327.20264 Retail_Trial ISO1 torrent">Microsoft Office Professional Plus 2021.16.0.16327.20264 Retail_Trial ISO1</a>
													<span class="c_tor">
														in Other </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>extratorrent</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>4.6 GB</td>
												<td class="sn">8</td>
												<td class="ln">3</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:A09B6AD00A56AADC38AC8A8F8E5169CF9C68B650&dn=Sofia%20Onte%20%26ndash%3B%20The%20Copynated%20Academy&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2F9.rarbg.me%3A2850%2Fannounce&tr=udp%3A%2F%2F9.rarbg.to%3A2920%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18920372/Sofia+Onte+ndash+The+Copynated+Academy.html" title="view Sofia Onte &ndash; The Copynated Academy torrent">Sofia Onte &ndash; The Copynated Academy</a>
													<span class="c_tor">
														in Other </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>NotImmune</span>
														</div>
													</span>
												</td>
												<td>21h</td>
												<td>5.23 GB</td>
												<td class="sn">6</td>
												<td class="ln">9</td>
												<td>
													<div class="r7"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:F2531B5B708C7CF7FBC067F4BC5D821517B5F303&dn=Wyckoff%20Analytics%20%26ndash%3B%20Linda%20Bradford%20Raschke%20%26ndash%3B%20Her%20Trades%20Her%20Story&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2F9.rarbg.me%3A2850%2Fannounce&tr=udp%3A%2F%2F9.rarbg.to%3A2920%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18920376/Wyckoff+Analytics+ndash+Linda+Bradford+Raschke+ndash+Her+Trades+Her+Story.html" title="view Wyckoff Analytics &ndash; Linda Bradford Raschke &ndash; Her Trades Her Story torrent">Wyckoff Analytics &ndash; Linda Bradford Raschke &ndash; Her Trades Her Story</a>
													<span class="c_tor">
														in Other </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>NotImmune</span>
														</div>
													</span>
												</td>
												<td>21h</td>
												<td>3.91 GB</td>
												<td class="sn">6</td>
												<td class="ln">12</td>
												<td>
													<div class="r5"></div>
												</td>
											</tr>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:3A9D0B79CB12AE2556140D6AD23F04176D00F9E7&dn=Asphalt.City.2023.2160p.AMZN.WEB-DL.DDP5.1.H.265-MikeTython%20%5Baka%20Black%20Flies%5D&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2F9.rarbg.me%3A2850%2Fannounce&tr=udp%3A%2F%2F9.rarbg.to%3A2920%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18917552/Asphalt+City+2023+2160p+AMZN+WEB+DL+DDP5+1+H+265+MikeTython+aka+Black+Flies.html" title="view Asphalt.City.2023.2160p.AMZN.WEB-DL.DDP5.1.H.265-MikeTython [aka Black Flies] torrent">Asphalt.City.2023.2160p.AMZN.WEB-DL.DDP5.1.H.265-MikeTython [aka Black Flies]</a>
													<span class="c_tor">
														in Other </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>GoodFilms</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>13.63 GB</td>
												<td class="sn">5</td>
												<td class="ln">1</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:C955B816AB000D047F4FDC19C5070FB18A8641F7&dn=systemDesign&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2F9.rarbg.me%3A2850%2Fannounce&tr=udp%3A%2F%2F9.rarbg.to%3A2920%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18917553/systemDesign.html" title="view systemDesign torrent">systemDesign</a>
													<span class="c_tor">
														in Other </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>Anonymous</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>20.95 GB</td>
												<td class="sn">5</td>
												<td class="ln">15</td>
												<td>
													<div class="r3"></div>
												</td>
											</tr>
											<tr class="tlr">
												<td>
													<img src="/images/icon_download3-null.gif" alt="Download">
													<a href="magnet:?xt=urn:btih:72A2A3126B1A0C2F052CE3B8729B3389F42F36FA&dn=Vue%20-%20The%20Complete%20Guide%20%28incl.%20Router%20%26%20Composition%20API%29&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2F9.rarbg.me%3A2850%2Fannounce&tr=udp%3A%2F%2F9.rarbg.to%3A2920%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18917052/Vue+The+Complete+Guide+incl+Router+Composition+API.html" title="view Vue - The Complete Guide (incl. Router & Composition API) torrent">Vue - The Complete Guide (incl. Router & Composition API)</a>
													<span class="c_tor">
														in Other </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>shailab</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>14.8 GB</td>
												<td class="sn">4</td>
												<td class="ln">15</td>
												<td>
													<div class="r3"></div>
												</td>
											</tr>
											<tr class="tlz">
												<td>
													<a href="https://itorrents.org/torrent/9C055B5EBBCD09E51CCEB9E18F861A55EC63E1AC.torrent?title=Microsoft.Office.Professional.2019.HOME-STUDENT.16.0.14026.20302.Retail_Trial.ISO1.torrent" target="_blank" title="Download Microsoft Office Professional 2019.HOME-STUDENT.16.0.14026.20302 Retail_Trial ISO1 torrent">
														<img src="/images/icon_download3.gif" alt="Download">
													</a>
													<a href="magnet:?xt=urn:btih:9c055b5ebbcd09e51cceb9e18f861a55ec63e1ac&dn=HomeStudent2019Retail.img&xl=4189100032&tr=udp://tracker.torrent.eu.org:451/announce&tr=udp://tracker.openbittorrent.com:6969/announce&tr=udp://p4p.arenabg.com:1337/announce&tr=udp://explodie.org:6969/announce&tr=udp://tracker.opentrackr.org:1337/announce&tr=udp://inferno.demonoid.is:3391/announce&tr=udp://exodus.desync.com:6969/announce&tr=udp://open.stealth.si:80/announce" title="Magnet link">
														<img src="/images/magnet2.png" alt="Magnet link" hspace="3">
													</a>
												</td>
												<td class="tli">
													<img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
													<a href="/torrent/18918094/Microsoft+Office+Professional+2019+HOME+STUDENT+16+0+14026+20302+Retail+Trial+ISO1.html" title="view Microsoft Office Professional 2019.HOME-STUDENT.16.0.14026.20302 Retail_Trial ISO1 torrent">Microsoft Office Professional 2019.HOME-STUDENT.16.0.14026.20302 Retail_Trial ISO1</a>
													<span class="c_tor">
														in Other </span>
													<span class="c_tor">, by</span>
													<span class="micro">
														<div class="usr">
															<div class="usrm"></div>
															<span>extratorrent</span>
														</div>
													</span>
												</td>
												<td>2d</td>
												<td>3.9 GB</td>
												<td class="sn">3</td>
												<td class="ln">0</td>
												<td>
													<div class="r10"></div>
												</td>
											</tr>
										</tbody>
									</table>
									<br>
									<br>

								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
			<tr>
				<td class="copyrights">
					<hr>
					<a href="/" title="extratorrents.club Home Page">Home</a> -
					<a href="/category/" title="Browse extratorrents.club Torrents">Browse&nbsp;Torrents</a> <br>
					extratorrents.club is in compliance with copyrights <br>
					<script>document.write(new Date().getFullYear());</script> extratorrents.club
				</td>
			</tr>
		</tbody>
	</table>
	<script data-cfasync="true" data-ui="off" src="/assets/js/main.js" async></script>

</body>

</html>