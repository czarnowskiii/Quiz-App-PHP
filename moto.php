
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
        <title>Quiz MOTORYZACYJNY</title>
        <link rel="stylesheet" href="style2.css" type="text/css" />
        
    </head>
    <body>
       <header>
        <div class="container">
            <h1>Quiz motoryzacyjny</h1>

        </div>
       </header>
       <div class="menu" id="nav_bar">
                <ul class="topnav">
            <li><a class="active" href="index.php">Strona główna</a></li>
            <li><a href="moto.php"class='active-page'>Quiz motoryzacyjny</a></li>
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
       <img width="100%"  src=auta.jpg>
        <p style="text-indent: 5%; " ><b>Motoryzacja</b> – całokształt zagadnień związanych z zastosowaniem samochodów, motocykli i ciągników (zwłaszcza napędzanych silnikami spalinowymi)[1].

Eksploatacja tych pojazdów wymaga odpowiedniej infrastruktury (sieci dróg, stacji benzynowych, warsztatów naprawczych, miejsc parkingowych oraz garażowych).
Podstawowym problemem motoryzacji jest zapewnienie bezpieczeństwa ruchu drogowego (zasady ruchu na drogach, dbanie o sprawność techniczną pojazdu, oznakowanie dróg itp.). Motoryzacja ma duże znaczenie gospodarcze (transport) i inne.Początki motoryzacji sięgają okresu sprzed I wojny światowej. W Warszawie w przededniu wybuchu wojny było zarejestrowanych 400 samochodów. Między poszczególnymi zaborami wyraźne były różnice w jakości dróg, jak i w zasadach ruchu drogowego (przykładowo w Austro-Węgrzech obowiązywał ruch lewostronny).
W 1924 było w Polsce 7500 samochodów, w 1927 roku 16 000[2], w 1929 29 423[3], w 1931 27 000[2], w 1935 24 821[3]. W okresie międzywojennym liczba automobilów w Polsce wzrosła do ponad 40 000, co jednak nadal stawiało Polskę na dalekiej pozycji pod względem ilości samochodów (należy pamiętać, że wówczas około 70% wszystkich samochodów na świecie znajdowało się w USA). Na przeszkodzie rozwojowi motoryzacji stała bardzo słaba jakość ówczesnych dróg, jak też mała zamożność społeczeństwa, co wynikało z trudnej sytuacji gospodarczej po I wojnie światowej i wojnie polsko-bolszewickiej. Zaczęła się rozwijać komunikacja autobusowa, jednak kryzys gospodarczy w latach 1929–1935 spowodował pewien regres w motoryzacji, przykładem tego zjawiska może być liczba taksówek, która przed wybuchem II wojny światowej nie zdołała przekroczyć stanu z roku 1929.
Motocykl typu chopper
W drugiej połowie lat dwudziestych wprowadzono w Warszawie sygnalizację świetlną, a w pewnym momencie liczba aut w stolicy osiągnęła liczbę 3500. Znaki drogowe w Polsce pojawiły się w 1927 r., jednak prawidłowa jazda była wówczas egzekwowana jedynie w obrębie miast[4]. Pierwsze stacje benzynowe w Polsce (zwane pompami) pojawiły się w 1924 roku w Warszawie (wcześniej benzynę kupowało się w aptekach i składach chemicznych). Na słabo zaludnionych, wielkich obszarach Kresów jeszcze w latach 30. rzadka sieć stacji benzynowych uniemożliwiała normalne korzystanie z samochodu</p>
        <h2>Sprawdź swoją wiedzę</h2>
        <p><strong>To jest quiz jednokrotnego wyboru ze znajomości motoryzacji</strong></p>
        <ul>
            <li><strong> Ilość pytań: </strong><?php echo $total ?></li>
            <li><strong> Typ: </strong>jedna poprawna odpowiedź</li>
            <li><strong> Ilość czasu: </strong><?php echo $total* 0.5;?> min</li>

        </ul>

        <!-- <form>
             <p>
                <label>Login</label>
                <input type="text" placeholder="Tutaj wpisz swój login"  name="login" />
                
            </p>
        </form>
        <a href="pytania.php?n=1" class="start">START Quiz</a> -->
        
        <form action="pytania.php?n=1" method="post">
            <input type="text" placeholder="Wpisz swój login"  name="login"  autocomplete="off" /><br>
            <!-- <button type="submit" name="submit" class="btn-link">START</button> -->
            <div class="centered"><button type="submit" name="submit" class="button button1">START</button></div>
        </form>
        <br>
       </div>
       </main>
       <footer>
        <div class="container">
            Copyright &copy; 2022, Konrad Czarnowski
        </div>
       </footer>

    </body>
   
</html>