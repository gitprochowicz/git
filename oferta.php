<html>
    <head>
        <title>title</title>
    </head>
    <body>
testttt
        
        <?php
        
        $conn = mysqli_connect('tomaszprochowicz.pl', 'prochowicz_git', 'Blueform', 'prochowicz_git', '3306');
        if (!$conn) {
            die('Could not connect to MySQL: ' . mysqli_connect_error());
        }
        mysqli_query($conn, 'SET NAMES \'utf8\'');
// TODO: insert your code here.
        echo '<table>';
        echo '<tr>';
        echo '<th>lp</th>';
        echo '<th>asortyment</th>';
        echo '<th>cena</th>';
        echo '<th>zdjecie</th>';
        echo '</tr>';
        $result = mysqli_query($conn, 'SELECT lp, asortyment, cena, zdjecie FROM oferta');
        while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
            echo '<tr>';
            echo '<td>' . $row['lp'] . '</td>';
            echo '<td>' . $row['asortyment'] . '</td>';
            echo '<td>' . $row['cena'] . '</td>';
            echo '<td>' . $row['zdjecie'] . '</td>';
            echo '</tr>';
        }
        mysqli_free_result($result);
        echo '</table>';
        
        
        
        
        
        
        mysqli_close($conn);
        
        
        ?>
        
        
        
        
        
    </body>
</html>
