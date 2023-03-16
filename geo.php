<?php include 'db.php'; ?>
<?php

$query = "SELECT * FROM `pytania`";
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;

?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Quiz PHP and SQL</title>
        <link rel="stylesheet" href="style2.css" type="text/css" />
        
    </head>
    <body>
       <header>
        <div class="container">
            
            <h1>Quiz geograficzny</h1>

        </div>
       </header>
       <div class="menu" id="nav_bar">
                <ul class="topnav">
            <li><a class="active" href="index.php">Strona główna</a></li>
            <li><a href="moto.php">Quiz motoryzacyjny</a></li>
            <li><a href="sport.php">Quiz sportowy</a></li>
            <li><a href="geo.php"class='active-page'>Quiz geograficzny</a></li>
            <li><a href="geo.php">Quiz przyrodniczy</a></li>
            <li><a href="geo.php">Quiz ortograficzny</a></li>
            <li><a href="geo.php">Quiz informatyczny</a></li>
            <li><a href="geo.php">Quiz dla dzieci</a></li>
            <li class="right"><a href="login.php">ADMIN</a></li>
                    </ul>
        </div>
        
        <main>
            <br><br>
       <div class="container">
        <h1>Strona w budowie</h1>
        <br><br>
        <h2><a href="moto.php">Zapraszamy do quizu motoryzacyjnego</a><h2>
       </div>
       </main>
       <footer>
        <div class="container">
            Copyright &copy; 2022, Konrad Czarnowski
        </div>
       </footer>

    </body>
</html>