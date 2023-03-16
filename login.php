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
            
            <h1>Aplikacja do Quizów- PHP, SQL, CSS, HTML</h1>

        </div>
       </header>
       <div class="menu" id="nav_bar">
                <ul class="topnav">
            <li><a class="active" href="index.php" class='active-page'>Strona główna</a></li>
            <li><a href="moto.php">Quiz motoryzacyjny</a></li>
            <li><a href="sport.php">Quiz sportowy</a></li>
            <li><a href="geo.php">Quiz geograficzny</a></li>
            <li><a href="geo.php">Quiz przyrodniczy</a></li>
            <li><a href="geo.php">Quiz ortograficzny</a></li>
            <li><a href="geo.php">Quiz informatyczny</a></li>
            <li><a href="geo.php">Quiz dla dzieci</a></li>
            <li class="right"><a href="login.php" class='active-page'>ADMIN</a></li>
                    </ul>
        </div>
        
        <main>
        <div class="container">
            
        <h2>Zaloguj się</h2>
        <form method="POST" action="loginpro.php" >
            <label>Login:</label>
            <div class="zalogujform"><input type="text" name="login" placeholder="Wpisz swój login"  autocomplete="off" ></div>
            <label>Hasło:</label>
            <div class="zalogujform"><input type="password" name="haslo" placeholder="Wpisz swoje hasło"   autocomplete="off"></div>
            <div class="centered"><button type="submit" name="zaloguj" class="button button1">Zaloguj się</button></div>

        </form>
       
        
       </div>
       </main>
       <footer>
        <div class="container">
            Copyright &copy; 2022, Konrad Czarnowski
        </div>
       </footer>

    </body>
</html>