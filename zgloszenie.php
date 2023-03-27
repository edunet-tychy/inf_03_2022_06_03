<?php

    $con = mysqli_connect('localhost', 'root', '', 'wedkowanie');

    if($con){
        $lowisko = $_POST["lowisko"];
        $data = $_POST["data"];
        $sedzia = $_POST["sedzia"];

        $sql = "INSERT INTO zawody_wedkarskie (id, Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia)
        VALUES (NULL, 1, $lowisko, '$data', '$sedzia')";

        try {
            mysqli_query($con, $sql);
            echo "<p>Dane zostały zapisane do bazy</p>";
        } catch (Exception $e) {
            // echo 'Błąd: ',  $e->getMessage(), "\n";
            echo "<p>Dane nie zostały zapisane do bazy</p>";
        }

        mysqli_close($con);
    }

?>