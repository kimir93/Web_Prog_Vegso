<?php
if(isset($_POST['nev']) && isset($_POST['email']) && isset($_POST['szoveg'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=users1', 'root', '',
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

            $sqlInsert = "insert into email(id, nev, email, szoveg)
                          values(0, :nev, :email, :szoveg)";
            $stmt = $dbh->prepare($sqlInsert);
            $stmt->execute(array(':nev' => $_POST['nev'], ':email' => $_POST['email'],
                ':szoveg' => $_POST['szoveg']));
            if($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $uzenet = "Hozzáadva az adatbázishoz.";
                $ujra = false;
            }
            else {
                $uzenet = "A hozzáadás nem sikerült nem sikerült.";
                $ujra = true;
            }
    }

    catch (PDOException $e) {
        $uzenet = "Hiba: ".$e->getMessage();
        $ujra = true;
    }
}
else {
    header("Location: .");
}
?>
