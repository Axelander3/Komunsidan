<!DOCTYPE html>
<html>

<head>
    <title>Billboard</title>
</head>

<body>
    <?php 
            $servername = "localhost";
            $username = "root";
            $password = "password";
            try {
                $conn = new PDO("mysql:host=$servername;dbname=County", $username);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }

                $sql = "select * from billboard";

                $stmt = $conn->prepare($sql);
                $stmt->execute();
               while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                newPost($row["title"], $row["organ"], $row["stub"], $row["uppsattning"] ,$row["forvaringsplats"], $row["sammantrade"], $row["ansvarig"]);  
            }

            function newPost($title, $organ, $stub, $uppsattning, $forvaringsplats, $sammantrade, $ansvarig) {
            echo "<article class='article'>";
            echo "<h1 class='title'>" . $title . "</h1>";
            echo "<h2 class='sammantrade'>" . $uppsattning .  " | " .  $sammantrade . " | " . $ansvarig .  "</h2>";
            echo "<div class='main-text'>" . $organ . "</div>";
            echo "<div class='main-text'>" . $stub . "</div>";
            echo "<div class='main-text'>" . $forvaringsplats . "</div>";
            echo "</article>";
            }

?>
</body>

</html>