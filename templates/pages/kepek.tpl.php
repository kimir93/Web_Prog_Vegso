<?php

// Alkalmazás logika:
include('./includes/config.inc.php');

// adatok összegyűjtése:
$kepek = array();
$olvaso = opendir($MAPPA);
while (($fajl = readdir($olvaso)) !== false)
    if (is_file($MAPPA.$fajl)) {
        $vege = strtolower(substr($fajl, strlen($fajl)-4));
        if (in_array($vege, $TIPUSOK))
            $kepek[$fajl] = filemtime($MAPPA.$fajl);
    }
closedir($olvaso);

// Megjelenítés logika:
?>
<h1>Galéria</h1>
<?php
arsort($kepek);
foreach($kepek as $fajl => $datum)
{?>
            <a href="<?php echo $MAPPA.$fajl ?>">
                <img src="<?php echo $MAPPA.$fajl ?>">
            </a>

        <?php
}
?>

<h2>Képfeltöltés</h2>
<p>(csak bejelentkezett felhasználóknak)</p>
<form action="?oldal=feltolt" method="post"
      enctype="multipart/form-data">
<?php if(isset($_SESSION['login'])){ ?>
    <label>Első:
        <input type="file" name="elso" required>
    </label>
    <input type="submit" name="kuld">
    <?php } ?>
</form>
