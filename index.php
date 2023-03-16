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
            <li class="right"><a href="login.php">ADMIN</a></li>
                    </ul>
        </div>
        
        <main>
       <div class="container">
       
       <p style="text-indent: 5%; " ><b>Quiz</b> – rodzaj zabawy, rozrywki intelektualnej dla kilku osób, polegającej na przedstawieniu przez jedną z osób pozostałym zagadnienia w formie zapytania w ten sposób, by na podstawie dostarczonych wraz z zapytaniem informacji oraz wiedzy ogólnej można było wydedukować prawidłową odpowiedź. Pytanie powinno być sformułowane w ten sposób, by odpowiedź nie była całkiem oczywista, zabawa polega de facto na dyskusji zgadujących nad różnymi możliwościami i wykluczaniu tych, które nie spełniają warunków zadanych w pytaniu.

Zabawa bywa niekiedy prowadzona przed kamerami telewizyjnymi, wówczas quiz taki staje się odmianą teleturnieju.Słowo to pojawia się w angielszczyźnie po raz pierwszy ok. 1780 roku; jego źródłosłów jest nieznany, być może miało swój początek w slangu studenckim. Początkowo oznaczało „dziwną osobę”[a] bądź też „dowcip, żart”. Prawdopodobnie przez skojarzenie ze słowami typu „inquisitive” („pytający”) nabrało później znaczenia „badać, oglądać uważnie”, a stąd (od połowy XIX w.) „test, sprawdzian”[1][2][3].

Istnieje także pewna dobrze znana miejska legenda o pochodzeniu tego słowa, głosząca że w 1791 roku, właściciel teatru w Dublinie, James Daly, założył się o to, że w ciągu dwudziestu czterech godzin wprowadzi do użycia nowe słowo. W tym celu wynajął grupę ludzi, którzy otrzymali za zadanie napisać na murach Dublinu słowo-nonsens "quiz". Dzięki temu, w przeciągu dnia słowo to zyskało rozgłos i otrzymało swoje dzisiejsze znaczenie (skoro nikt go nie znał, powszechnie myślano, że to pewien test). Jednak nie ma żadnego dowodu potwierdzającego tę tezę, a samo słowo było w użyciu przed 1791 rokiem [4].
<br><img width="100%"  src=wiki.jpg >       <br><br>
</div>
       </main>
       <footer>
        <div class="container">
            Copyright &copy; 2022, Konrad Czarnowski
        </div>
       </footer>

    </body>
</html>