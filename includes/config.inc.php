<?php
$ablakcim = array(
    'cim' => 'HISZE - Hetényegyházi Íjász és Szabadidősport Egyesület',
);

$fejlec = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'logo',
	'cim' => '',
	'motto' => ''
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'BartProg'
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Főoldal', 'menun' => array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Edzések', 'menun' => array(1,1)),
	'kepek' => array('fajl' => 'kepek', 'szoveg' => 'Képek', 'menun' => array(1,1)),
    'kapcsolatfelvetel' => array('fajl' => 'kapcsolatfelvetel', 'szoveg' => 'Kapcsolatfelvétel', 'menun' => array(1,1)),
    'email' => array('fajl' => 'email', 'szoveg' => '', 'menun' => array(0,0)),
    'tablazat' => array('fajl' => 'tablazat', 'szoveg' => 'Táblázat', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'feltolt' => array('fajl' => 'feltolt', 'szoveg' => '', 'menun' => array(1,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
$MAPPA = './images/';
$TIPUSOK = array ('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 500*1024;
?>