<?php include 'db.php' ?>
<?php 
 if(isset($_POST['submit'])){
    $question_number=$_POST['question_number'];
    $question_text=$_POST['question_text'];

    $choices = array();
    $choices[1]=$_POST['choice1'];
    $choices[2]=$_POST['choice2'];
    $choices[3]=$_POST['choice3'];
    $choices[4]=$_POST['choice4'];
    $choices[5]=$_POST['choice5'];

    $correct_choice=$_POST['correct_choice'];

    $query = "INSERT INTO `pytania` (numer_pytania ,tekst) VALUES('$question_number','$question_text')";
    $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

    if($insert_row){
        foreach($choices as $choice => $value) {
            if($value != '' ){
                    if($correct_choice == $choice){
                        $is_correct=1;
                    }else{
                        $is_correct=0;
                    }
                    $query5 = "INSERT INTO `odpowiedzi` (numer_pytania, prawda, tresc) VALUES('$question_number', '$is_correct', '$value')";

                    $insert_row=$mysqli->query($query5) or die($mysqli->error.__LINE__);

                    if($insert_row){
                        continue;
                    }else{
                        die('Error:' ($mysqli->errno.__LINE__));
                    }
            }
        }
    }$msg='Pytanie zostalo dodane';
 }
 $query = "SELECT * FROM `pytania`";
 $pytania = $mysqli->query($query) or die($mysqli->error.__LINE__);
 $total = $pytania->num_rows;
 $next=$total+1;

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Quiz PHP and SQL</title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
        
    </head>
    <body>
       <header>
        <div class="centerh1">
            <h1>Panel Administratora</h1>
            <form action="login.php" method="post">
            
            <!-- <button type="submit" name="submit" class="btn-link">START</button> -->
            <div class="centered"><button type="submit" name="submit" class="button button1">Wyloguj</button></div>
        </form>

        </div>
       </header>
        <main>
       <div class="container">
        <h2>Dodaj swoje pytanie</h2>
        <?php if(isset ($msg)){ echo $msg ;} ?>
        <form method="POST" action="add.php">
            <p>
                <label>Numer pytania</label>
                <input type="number" value="<?php echo $next ?>" name="question_number" />
            </p>
            <p>
                <label>Treść pytania</label>
                <input type="text"  name="question_text" autocomplete="off"/>
            </p>
            <p>
                <label >Odpowiedz 1</label>
                <input type="text"  name="choice1"   autocomplete="off"/>
            </p>
            <p>
                <label>Odpowiedz 2</label>
                <input type="text"  name="choice2"  autocomplete="off"/>
            </p>
            <p>
                <label>Odpowiedz 3</label>
                <input type="text"  name="choice3"  autocomplete="off"/>
            </p>
            <p>
                <label>Odpowiedz 4</label>
                <input type="text"  name="choice4"  autocomplete="off"/>
            </p>
            <p>
                <label>Odpowiedz 5</label>
                <input type="text"  name="choice5"  autocomplete="off" />
            </p>
            <p>
                <label>Prawidlowa odpowiedz</label>
                <input type="number"  name="correct_choice" />
            </p>
            <p>
                
                <!-- <input type="submit"  name="submit" value="Submit" /> -->
                <div class="centered"><button type="submit" name="submit" value="Submit" class="button button1">Dodaj pytanie</button></div>
            </p>
        </form>
        <hr width="99.5%" color="#4CAF50" />
        </div>
        <div class="container"><h2><b>Zapisane wyniku quizu:</b></h2></div>
        <div class="container">
        <?php 
                $sql = "SELECT nr,login, wynik FROM gracze";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "Nr: " . $row["nr"]. "     ||  Login: " . $row["login"]. "   ||  Wynik:  " . $row["wynik"]." / ".$total. "<br><br>";
                }
                } else {
                echo "0 results";
                } 
        ?>
        <hr width="10%"  color=#E9F0F0 />
        </div>

       </main>
       <footer>
        <div class="container">
            Copyright &copy; 2022, Konrad Czarnowski
        </div>
       </footer>

    </body>
</html>