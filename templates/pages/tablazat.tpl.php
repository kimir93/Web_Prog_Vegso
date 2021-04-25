<table>
    <tr>
        <th>ID</th>
        <th>Név</th>
        <th>e-mail</th>
        <th>Szöveg</th>
   </tr>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM email ORDER BY id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<th>". $row["id"]. "<th>" . $row["nev"]."<th>" . $row["email"]. "<th>".$row["szoveg"]. "<br>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</table>
