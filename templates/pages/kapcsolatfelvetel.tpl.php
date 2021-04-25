<form action = "?oldal=email" method = "post">
    <fieldset>
        <legend>Kapcsolat felvétel az oldal tulajdonosával</legend>
        <br>
        <label>Név: <input name="nev" type="text" pattern="[A-Z,a-z, ]{8}[A-Z,a-z, ]*" required ></label><br><br>
        <label>E-mail: <input type="email" name="email" required ></label><br><br>
        <label>Szöveg: <textarea name="szoveg" rows="5" cols="40" required></textarea></label><br><br>
        <input type="submit" name="kuld" value="Elküld">
        <br>&nbsp;
    </fieldset>
</form>