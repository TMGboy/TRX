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
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="all">
    <link rel="shortcut icon" type="image/ico" href="/images/favicon.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="keywords" content="bittorrent, torrent, torrents, movies, music, games, software, download, upload, porn torrents, music torrents, movies torrents, games torrents, software torrents, iPod torrents, anime torrents, torrent search, bittorrent search, upload torrents, download torrents" />
    <meta name="description" content="{$title} - ExtraTorrent.st" />
    <link href="/assets/css/main.css?v=1.0" type="text/css" data-template-style="true" rel="stylesheet" />
    <script src="/assets/js/main.js"></script>

    <title>Download {$title} - ExtraTorrent.st</title>


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
                                        <a href="/" title="ExtraTorrent.st - The Largest Bittorent System">
                                            <img src="/images/logo.gif" border="0" alt="ExtraTorrent.st - The Largest Bittorent System">
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
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
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
                                        <tr>
                                            <td>
                                                <span style="padding: 0px 10px;">
                                                    <a href="/" title="ExtraTorrent.st - The Biggest Bittorent System">ExtraTorrent.st</a> &gt;
                                                    <a href="/category/" title="Browse Torrents">Categories</a> &gt;
                                                    <a href="$category_url" title="Browse Movies torrents">$category torrents</a>
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                                    <br />
                                    <br />
                                    <table border="0" cellspacing="1" cellpadding="3">
                                        <tr>
                                            <td><a href="$category_url" title="Browse $category torrents">
                                                    <img src="/images/4.gif" border="0" alt="Browse $category torrents" /></a></td>
                                            <td style="padding-bottom:20px;">
                                                <h1><b>{$title}</b></h1>
                                            </td>
                                        </tr>
                                    </table>

                                    <br />
                                    <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                        <tr>
                                            <td>
                                                <table border="0" cellspacing="2" cellpadding="3" width="100%">
                                                    <tr>
                                                        <td class="tabledata1" width="150">Download torrent:</td>
                                                        <td class="tabledata0">
                                                            <a href="https://itorrents.org/torrent/A248B870F558BDE3B0071AAC9F3927B2902E4DCC.torrent?title=Heart.Eyes.(2025.1080p.WEBRip.x264.5.1.YTS.YIFY.torrent" target="_blank" title="Download {$title} torrent">
                                                                <img src="/images/icon_download3.gif" alt="{$title}" hspace="2" class="icon" />
                                                            </a>
                                                            <a href="magnet:?xt=urn:btih:a248b870f558bde3b0071aac9f3927b2902e4dcc&dn=Heart%20Eyes%20%282025%29%201080p%20WEBRip%20x264%205.1%20YTS%20YIFY&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2F9.rarbg.com%3A2710%2Fannounce&tr=udp%3A%2F%2Fp4p.arenabg.com%3A1337&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce" title="Magnet link">
                                                                <img src="/images/magnet2.png" alt="Magnet link" hspace="2" class="icon" />
                                                            </a>
                                                            &nbsp;<a href="https://itorrents.org/torrent/A248B870F558BDE3B0071AAC9F3927B2902E4DCC.torrent?title=Heart.Eyes.(2025.1080p.WEBRip.x264.5.1.YTS.YIFY.torrent" target="_blank" title="Download torrent file">{$title}</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tabledata1">Info hash:</td>
                                                        <td class="tabledata0">{$hashs}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tabledata1">Category:</td>
                                                        <td class="tabledata0">
                                                            <a href="/category/" title="Browse torrents">Categories</a> &gt;
                                                            <a href="/category/123554/Movies+Torrents.html" title="Browse Movies torrents">Movies torrents</a>
                                                            &gt; <a href="/category/123564/Highres+Movies+Torrents.html" title="BrowseHighres Movies torrents">Highres Movies torrents</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tabledata1">Trackers:</td>
                                                        <td class="tabledata0">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                    {$trackers} //one per line
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tabledata1">Health:</td>
                                                        <td class="tabledata0">
                                                            <table cellspacing="2" border="0">
                                                                <tr>
                                                                    <td>
                                                                        <div class="r10"></div>
                                                                    </td>
                                                                    <td>&nbsp;seeds: 1923</td>
                                                                    <td>,</td>
                                                                    <td>&nbsp;leechers: 975</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tabledata1" width="150">Torrent language:</td>
                                                        <td class="tabledata0"><img src="/images/uk-us.gif" class="icon" alt="" title="" />&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tabledata1">Total Size:</td>
                                                        <td class="tabledata0">1.79 GB</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tabledata1">Number of files:</td>
                                                        <td class="tabledata0">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>6&nbsp;&nbsp;&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tabledata1" width="150">Uploader:</td>
                                                        <td class="tabledata0">
                                                            <div class="usr">
                                                                <div class="usrm"></div><span style="color:#DF9F10;">YTS</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tabledata1">Torrent added:</td>
                                                        <td class="tabledata0">2025-03-04 08:28:18</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <br />

                                    <a href="https://itorrents.org/torrent/A248B870F558BDE3B0071AAC9F3927B2902E4DCC.torrent?title=Heart.Eyes.(2025.1080p.WEBRip.x264.5.1.YTS.YIFY.torrent" target="_blank" title="Download {$title} torrent"><img src="/images/download_normal.gif" alt="Download {$title} torrent" border="0" /></a>

                                    <br /><br /><br /><br /><br />



                                    <div class="t_caption">Related Torrents</div>
                                    <div class="borderdark" style="padding: 0 5px;">
                                        <br />
                                        <table class="tl">
                                            <thead>
                                                <tr>
                                                    <th width="100%" colspan="2"></th>
                                                    <th>Added&nbsp;</th>
                                                    <th>Size&nbsp;</th>
                                                    <th>S&nbsp;</th>
                                                    <th>L&nbsp;</th>
                                                    <th>Health</th>
                                                </tr>
                                            </thead>
                                            <tr class="tlr">
                                                <td>
                                                    <a href="https://itorrents.org/torrent/3801E10804BF9C2FC257F826EC04FB0E2EFC0536.torrent?title=Heart.Eyes.2025.1080p.WEBRip-C1NEM4.torrent" target="_blank" title="Download Heart Eyes 2025 1080p WEBRip-C1NEM4 torrent">
                                                        <img src="/images/icon_download3.gif" alt="Download">
                                                    </a>
                                                    <a href="" title="Magnet link">
                                                        <img src="/images/magnet2.png" alt="Magnet link" hspace="3">
                                                    </a>
                                                </td>
                                                <td class="tli">
                                                    <img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
                                                    <a href="/torrent/18948787/Heart+Eyes+2025+1080p+WEBRip+C1NEM4.html" title="view Heart Eyes 2025 1080p WEBRip-C1NEM4 torrent">Heart Eyes 2025 1080p WEBRip-C1NEM4</a>
                                                    <span class="c_tor">
                                                        in Movies </span><span class="c_tor">, by</span>
                                                    <span class="micro">
                                                        <div class="usr">
                                                            <div class="usrm"></div>
                                                            <span>extratorrent</span>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>1w</td>
                                                <td>3.38 GB</td>
                                                <td class="sn">3</td>
                                                <td class="ln">3</td>
                                                <td>
                                                    <div class="r10"></div>
                                                </td>
                                            </tr>
                                            <tr class="tlz">
                                                <td>
                                                    <img src="/images/icon_download3-null.gif" alt="Download">
                                                    <a href="" title="Magnet link">
                                                        <img src="/images/magnet2.png" alt="Magnet link" hspace="3">
                                                    </a>
                                                </td>
                                                <td class="tli">
                                                    <div id="tcmm">
                                                        <a href="/torrent/18926384/Heart+Eyes+2025+1080p+TELESYNC+x264+COLLECTiVE.html#comments" title="View comments">
                                                            1<img src="/images/icon_comment.gif" alt="1 comments" hspace="2" class="icon">
                                                        </a>
                                                    </div>
                                                    <img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
                                                    <a href="/torrent/18926384/Heart+Eyes+2025+1080p+TELESYNC+x264+COLLECTiVE.html" title="view Heart Eyes 2025 1080p TELESYNC x264 COLLECTiVE torrent">Heart Eyes 2025 1080p TELESYNC x264 COLLECTiVE</a>
                                                    <span class="c_tor">
                                                        in Movies </span><span class="c_tor">, by</span>
                                                    <span class="micro">
                                                        <div class="usr">
                                                            <div class="usrm"></div>
                                                            <span>mazemaze16</span>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>3w</td>
                                                <td>4.5 GB</td>
                                                <td class="sn">103</td>
                                                <td class="ln">28</td>
                                                <td>
                                                    <div class="r10"></div>
                                                </td>
                                            </tr>
                                            <tr class="tlz">
                                                <td>
                                                    <img src="/images/icon_download3-null.gif" alt="Download">
                                                    <a href="" title="Magnet link">
                                                        <img src="/images/magnet2.png" alt="Magnet link" hspace="3">
                                                    </a>
                                                </td>
                                                <td class="tli">
                                                    <img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
                                                    <a href="/torrent/18925472/Heart+Eyes+2025+1080p+TELESYNC+x264+COLLECTiVE.html" title="view Heart.Eyes.2025.1080p.TELESYNC.x264.COLLECTiVE torrent">Heart.Eyes.2025.1080p.TELESYNC.x264.COLLECTiVE</a>
                                                    <span class="c_tor">
                                                        in Movies </span><span class="c_tor">, by</span>
                                                    <span class="micro">
                                                        <div class="usr">
                                                            <div class="usrm"></div>
                                                            <span>will18690</span>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>3w</td>
                                                <td>4.5 GB</td>
                                                <td class="sn">25</td>
                                                <td class="ln">37</td>
                                                <td>
                                                    <div class="r7"></div>
                                                </td>
                                            </tr>
                                            <tr class="tlz">
                                                <td>
                                                    <img src="/images/icon_download3-null.gif" alt="Download">
                                                    <a href="" title="Magnet link">
                                                        <img src="/images/magnet2.png" alt="Magnet link" hspace="3">
                                                    </a>
                                                </td>
                                                <td class="tli">
                                                    <img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
                                                    <a href="/torrent/18925456/Heart+Eyes+2025+1080p+TELESYNC+x264+COLLECTiVE.html" title="view Heart Eyes 2025 1080p TELESYNC x264 COLLECTiVE torrent">Heart Eyes 2025 1080p TELESYNC x264 COLLECTiVE</a>
                                                    <span class="c_tor">
                                                        in Movies </span><span class="c_tor">, by</span>
                                                    <span class="micro">
                                                        <div class="usr">
                                                            <div class="usrm"></div>
                                                            <span>philo138</span>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>3w</td>
                                                <td>4.5 GB</td>
                                                <td class="sn">1</td>
                                                <td class="ln">6</td>
                                                <td>
                                                    <div class="r2"></div>
                                                </td>
                                            </tr>
                                            <tr class="tlz">
                                                <td>
                                                    <img src="/images/icon_download3-null.gif" alt="Download">
                                                    <a href="" title="Magnet link">
                                                        <img src="/images/magnet2.png" alt="Magnet link" hspace="3">
                                                    </a>
                                                </td>
                                                <td class="tli">
                                                    <img src="/images/uk-us.gif" alt="" class="icon">&nbsp;
                                                    <a href="/torrent/18925528/Heart+Eyes+2025+1080p+TELESYNC+x264+COLLECTiVE.html" title="view Heart.Eyes.2025.1080p.TELESYNC.x264.COLLECTiVE torrent">Heart.Eyes.2025.1080p.TELESYNC.x264.COLLECTiVE</a>
                                                    <span class="c_tor">
                                                        in Highres Movies </span>
                                                    <span class="c_tor">, by</span>
                                                    <span class="micro">
                                                        <div class="usr">
                                                            <div class="usrm"></div>
                                                            <span>TvTeam</span>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>3w</td>
                                                <td>4.46 GB</td>
                                                <td class="sn">1</td>
                                                <td class="ln">2</td>
                                                <td>
                                                    <div class="r5"></div>
                                                </td>
                                            </tr>

                                        </table>
                                        <br />
                                    </div><br /><br />

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
                    <script>
                        document.write(new Date().getFullYear());
                    </script> extratorrents.club
                </td>
            </tr>
        </tbody>
    </table>
    <script data-cfasync="true" data-ui="off" src="/assets/js/main.js" async></script>

</html>