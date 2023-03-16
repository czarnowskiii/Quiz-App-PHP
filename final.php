<?php session_start(); ?>
<?php include 'db.php' ?> 
<?php
$query = "SELECT * FROM `pytania`";
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;
?>
<?php

$score=$_SESSION['wynik'];

 
// Performing insert query execution
// here our table name is college
$update = "UPDATE `gracze` SET `wynik` = '$score' order by nr DESC limit 1";
$update_gracz = $mysqli->query($update) or die($mysqli->error.__LINE__);



?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Quiz PHP and SQL</title>
        <link rel="stylesheet" href="style2.css" type="text/css" />
        
    </head>
    <body>
       <header>
        <div class="container">
            <h1>PHP SQL Quiz</h1>
            <hr width="99.5%" color="#4CAF50" />

        </div>
       </header>
        <main>
       <div class="container">
        <h2>Gratulacje</h2> 
        
        <p>Zakończyłeś test</p>
        <p>Twój wynik <?php echo $_SESSION['wynik'];?> / <?php echo $total ?> </p>
        <?php $_SESSION['wynik']=0; ?>        
        <div class="centered"><button type="submit" name="submit" class="button button1" onclick="window.location.href='index.php';" >Wróc na stronę główną</button></div>
        </div>
       </main>
       <footer>
        <div class="container">
            Copyright &copy; 2022, Konrad Czarnowski
        </div>
       </footer>

    </body>
</html>