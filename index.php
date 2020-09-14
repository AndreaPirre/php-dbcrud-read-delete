<?php
    $servername = "localhost";
    $username = "AndrePirre";
    $password = "7348310590php";
    $dbname = "dbhotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn && $conn->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
        return;
    }
    $sql = "
            SELECT *
            FROM pagamenti
    ";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        // VERSIONE 2
        echo '<ul>';

        while($row = $result->fetch_assoc()) {

            if($row['id'] == 7) {
                echo '<li style="font-weight: bold;">';
            } else {
                    echo '<li> ';
            }

                echo $row['id'] ." - " .$row['status'] ." - " .$row['price'];
                echo '</li> ';
        }

            echo "</ul>";
    }else {
        print_r($result);
    }

    $conn->close();
