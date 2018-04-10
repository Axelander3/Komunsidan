<!DOCTYPE html>
<html>

<head>
    <title>Alskagstavla</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="contrainer">
        <form action="index.php" class="board" method="post">

            <label for="title">Title: </label>
            <input type="text" name="title" id="title">

            <label for="organ">Organ: </label>
            <input type="text" name="organ" id="organ">

            <label for="stub">Stub: </label>
            <textarea rows="4" cols="50" name="stub" id="stub"> </textarea>

            <label for="dokument">Dokument: </label>
            <input type="text" name="dokument" id="dokument">

            <label for="förvaringsplats">Förvaringsplats: </label>
            <input type="text" name="forvaringsplats" id="farvaringsplats">

            <label for="sammantrade">Sammanträde: </label>
            <input type="date" name="sammantrade" id="sammantrade">

            <label for="uppsättning">Uppsättning: </label>
            <input type="date" name="uppsattning" id="uppsättning">

            <label for="ansvarig">Ansvarig: </label>
            <input type="text" name="ansvarig" id="ansvarig">
            
            <input class="input-sumbit input" name="submit" type="submit">
        </form>

<?php 

  $servername = "localhost";
  $username = "root";
  $password = "password";
  echo "skrot";
      if (isset($_POST['submit']) && !empty($_POST['title']) && !empty($_POST['organ']) && !empty($_POST['stub']) && !empty($_POST['dokument']) && !empty($_POST['uppsattning']) && !empty($_POST['forvaringsplats']) && !empty($_POST['sammantrade']) && !empty($_POST['ansvarig'])) {

          $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
          $organ = filter_input(INPUT_POST, 'organ', FILTER_SANITIZE_SPECIAL_CHARS);
          $stub = filter_input(INPUT_POST, 'stub', FILTER_SANITIZE_SPECIAL_CHARS);
          $dokument = filter_input(INPUT_POST, 'dokument', FILTER_SANITIZE_SPECIAL_CHARS);
          $uppsattning = filter_input(INPUT_POST, 'uppsattning', FILTER_SANITIZE_SPECIAL_CHARS);
          $forvaringsplats = filter_input(INPUT_POST, 'forvaringsplats', FILTER_SANITIZE_SPECIAL_CHARS);
          $sammantrade = filter_input(INPUT_POST, 'sammantrade', FILTER_SANITIZE_SPECIAL_CHARS);
          $ansvarig = filter_input(INPUT_POST, 'ansvarig', FILTER_SANITIZE_SPECIAL_CHARS);

          echo "skrot";

      try {
        $conn = new PDO("mysql:host=$servername;dbname=County", $username);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conn->prepare("INSERT INTO billboard (sammantrade, uppsattning, title, organ, stub, forvaringsplats, dokument, ansvarig)
          VALUES (:sammantrade, :uppsattning, :title, :organ, :stub, :forvaringsplats, :dokument, :ansvarig)");
        $sql = $conn->prepare("INSERT INTO ansvariga (namn, efternamn)
          VALUES (:namn, :efternamn)");

        $sql->bindParam(':title', $title);
        $sql->bindParam(':organ', $organ);
        $sql->bindParam(':stub', $stub);
        $sql->bindParam(':dokument', $dokument);
        $sql->bindParam(':uppsattning', $uppsattning);
        $sql->bindParam(':forvaringsplats', $forvaringsplats);
        $sql->bindParam(':sammantrade', $sammantrade);
        $sql->bindParam(':ansvarig', $ansvarig);
        // use exec() because no results are returned
        $sql->execute();
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }


      }


  


 ?> 
            

    </div>
</body>

</html>