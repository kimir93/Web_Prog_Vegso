<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/stilus.css" type="text/css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
</head>
<body>
	<header>
		<img src="./images/oldal/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">
		<h1><?= $fejlec['cim'] ?></h1>
		<?php if (isset($fejlec['motto'])) { ?><h2><?= $fejlec['motto'] ?></h2><?php } ?>
		<?php if(isset($_SESSION['login'])) { ?>Bejlentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?>
	</header>
    <div id="wrapper">
        <aside id="nav">
            <nav>
                <ul>
					<?php foreach ($oldalak as $url => $oldal) { ?>
						<?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
							<li <?= (($oldal == $keres) ? ' class="active"' : '') ?>>
							<a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
							<?= $oldal['szoveg'] ?></a>
							</li>
						<?php } ?>
					<?php } ?>
                </ul>
            </nav>
        </aside>
        <div id="oldalsav">
            <h2>Idei éremtáblázatunk</h2>
            <table align="center" border="0" cellpadding="1" cellspacing="1" style="width: 100%;"><tbody><tr>
                    <td class="rtecenter" style="background-color: rgb(51, 51, 51); vertical-align: top; text-align: center;"><img alt="" src="http://hisze.hu/kepek/nyers/arany.jpg" style="height: 100%; width: 100%; float: left;"></td><td class="rtecenter" style="background-color: rgb(51, 51, 51); vertical-align: top; text-align: center;"><img alt="" src="http://hisze.hu/kepek/nyers/ezust.jpg" style="height: 100%; width: 100%;"></td>
                    <td class="rtecenter" style="background-color: rgb(51, 51, 51); vertical-align: top; text-align: center;"><img alt="" src="http://hisze.hu/kepek/nyers/bronz.jpg" style="width: 100%; height: 100%; float: right;"></td>
                </tr><tr><td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><font color="#ff6600">23</font></td>
                    <td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><font color="#ff6600">11</font></td>
                    <td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><font color="#ff6600">7</font></td>
                </tr><tr><td colspan="3" style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle;border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">Magyar Országos Bajnoki címek száma: 4 (+3 ezüst, +2 bronz)</span></td>
                </tr><tr><td colspan="3" style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle;border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">Nemzetközi bajnoki címek száma: 0</span></td>
                </tr><tr><td colspan="3" style="background-color:rgb(51, 51, 51); text-align:center; vertical-align:middle"><span style="color:#ff6600;">Világbajnoki címek száma: 0</span></td>
                </tr><tr><td colspan="3" style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><u style="text-align: center;"><strong><span style="color: rgb(255, 102, 0);">2019-ben megszerzett érmeink:</span></strong></u></td>
                </tr><tr><td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><font color="#ff6600">25</font></td>
                    <td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><font color="#ff6600">9</font></td>
                    <td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">8</span></td>
                </tr><tr><td colspan="3" style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle;border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">Magyar Országos Bajnoki címek száma: 6 (+4 ezüst, +5 bronz)</span></td>
                </tr><tr><td colspan="3" style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><u style="text-align: center;"><strong><span style="color: rgb(255, 102, 0);">2018-ban megszerzett érmeink:</span></strong></u></td>
                </tr><tr><td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><font color="#ff6600">37</font></td>
                    <td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">14</span></td>
                    <td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">15</span></td>
                </tr><tr><td colspan="3" style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle;border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">Magyar Országos Bajnoki címek száma: 5 (+1 ezüst, +4 bronz)</span></td>
                </tr><tr><td colspan="3" style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle;border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">Nemzetközi bajnoki címek száma: 3</span></td>
                </tr><tr><td colspan="3" style="background-color:rgb(51, 51, 51); text-align:center; vertical-align:middle"><span style="color:#ff6600;">Világbajnoki címek száma: 3 (+1 db bronz)</span></td>
                </tr><tr><td colspan="3" style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><u><strong><span style="color:#ff6600;">2017-ben megszerzett érmeink:</span></strong></u></td>
                </tr><tr><td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">50</span></td>
                    <td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">51</span></td>
                    <td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">34</span></td>
                </tr><tr><td colspan="3" style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">Magyar Országos Bajnoki címek száma: 4 (+11 ezüst, +10 bronz)</span></td>
                </tr><tr><td colspan="3" style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle;"><span style="color:#ff6600;">Európa bajnoki címek száma: 1 db ezüst és 1 bronz</span></td>
                </tr><tr><td colspan="3" style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><u><strong><span style="color:#ff6600;">2016-ban megszerzett érmeink:</span></strong></u></td>
                </tr><tr><td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">68</span></td>
                    <td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">45</span></td>
                    <td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">22</span></td>
                </tr><tr><td colspan="3" style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">Magyar Országos Bajnoki címek száma: 14</span></td>
                </tr><tr><td colspan="3" style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">Európa bajnoki címek száma: 2 (+2 db ezüst)</span></td>
                </tr><tr><td colspan="3" style="background-color:rgb(51, 51, 51); text-align:center; vertical-align:middle"><span style="color:#ff6600;">Világbajnoki címek száma: 2 (+1 db bronz)</span></td>
                </tr><tr><td colspan="3" style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><u><strong><span style="color:#ff6600;">2015-ben megszerzett érmeink:</span></strong></u></td>
                </tr><tr><td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">60</span></td>
                    <td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">36</span></td>
                    <td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">28</span></td>
                </tr><tr><td colspan="3" style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">Magyar Országos Bajnoki címek száma: 9</span></td>
                </tr><tr><td colspan="3" style="background-color:rgb(51, 51, 51); text-align:center; vertical-align:middle"><span style="color:#ff6600;">Európa bajnoki címek száma: 1</span></td>
                </tr><tr><td colspan="3" style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><strong><u><span style="color:#ff6600;">2014-ben megszerzett érmeink:</span></u></strong></td>
                </tr><tr><td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">62</span></td>
                    <td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">35</span></td>
                    <td style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">23</span></td>
                </tr><tr><td colspan="3" style="background-color:rgb(51, 51, 51); text-align:center; vertical-align:middle"><span style="color:#ff6600;">Magyar Országos Bajnoki címek száma: 11</span></td>
                </tr><tr><td colspan="3" style="background-color: rgb(51, 51, 51); text-align: center; vertical-align: middle; border-color: rgb(51, 51, 51);"><span style="color:#ff6600;">2013-ban megszerzett érmeink:</span></td>
                </tr><tr><td style="background-color:rgb(51, 51, 51); text-align:center; vertical-align:middle"><span style="color:#ff6600;">42</span></td>
                    <td style="background-color:rgb(51, 51, 51); text-align:center; vertical-align:middle"><span style="color:#ff6600;">24</span></td>
                    <td style="background-color:rgb(51, 51, 51); text-align:center; vertical-align:middle"><span style="color:#ff6600;">13</span></td>
                </tr></tbody></table>
        </div>
        <aside>
            <div id="content">
                <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
            </div>
        </aside>
        </div>
    <footer>
        <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
    </footer>
</body>
</html>
