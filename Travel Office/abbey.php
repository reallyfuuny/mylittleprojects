<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Abbey</title>     
        <style>
        body {
            background-image: url(abbeytlo.png);
        }
        

        div#header {
            background-color:black;
            opacity:0.8;
            position:absolute;
            top:20px;
            left:20px;
            height:110px;
            width:960px;   
            font-size:80px;
            font-weight:bold;
            color:white;
            text-align:center;
            padding-top:10px;
        }

        div#tlo2 {
            background-color:black;
            opacity:0.8;
            position:absolute;
            top:20px;
            left:990px;
            height:130px;
            width:905px;
        }

        div#tlo {
            background-color:black;
            opacity:0.8;
            position:absolute;
            top:150px;
            left:20px;
            height:750px;
            width:1875px;       
        }

        img#abbey {
            z-index:6;
            position:absolute;
            top:170px;
            left:45px;
            border:solid 5px white;
        }

        div#dusttekst {
            color:white;
            position:absolute;
            top:700px;
            left:50px;
            font-size:35px;
            width:900px;
        }

        form {
            position:absolute;
            top:40px;
            left:1010px;
            color:white;
            font-size:35px;
        }
        select {
            position:absolute;
            top:80px;
            left:0px;
            width:350px;
            height:50px;
            font-size:30px;
            border:solid 5px white;
            cursor:pointer;
        }

        input[type="number"] {
            width:70px;
            height:50px;
            font-size:30px;
            border:solid 5px white;
        }
        
        div#formularz {
            position:absolute;
            top:-5px;
            left:425px;
            border:solid 5px white;
            height:530px;
            width:420px;
            padding:10px;
            
        }

        input[type="submit"]{
            width:300px;
            height:50px;
            font-size:30px;
            font-weight:bold;
            cursor:pointer;
            border:solid 5px white;
        }

        input[type="submit"]:hover{
            border:solid 5px white;
            cursor:pointer;
        }

        div#podsumowanie {
            position:absolute;
            top:740px;
            left:1010px;
            width:845px;
            height:120px;
            border:solid 5px white;
            color:white;
            font-size:25px;
            padding:10px;
        }

        div#podsumowanie2 {
            position:absolute;
            top:740px;
            left:1300px;
            width:555px;
            height:120px;
            border:solid 5px white;
            color:white;
            font-size:25px;
            padding:10px;
        }

        button#quehua {
            width:150px;
            height:120px; 
            position:absolute;
            top:755px;
            left:1720px;
            font-weight:bold;
            border:solid 5px white;
            cursor:pointer;
        }
        </style>
    </head>
    <body> 
        <div id="header">HOTEL ABBEY</div>
        <div id="tlo2"></div>
        <div id="tlo">  
        </div>
        <img src="abbey1.png" id="abbey" width="900px"><div id="dusttekst">Jeśli szukasz zacisznego miejsca z dala od miasta i szczurów to proponujemy ci Hotel Abbey znajdujący się w przepięknej miejscowości Gordes.
        Miejscowość ta znajduję się w Prowansja-Alpy-Lazurowe Wybrzeże. </div>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div id="wybory">
        Wybór pokoju:<hr><br>
        <select name="pokoje" id="pokoje">
            <option value="apartament 1 osobowy" name="2osob">apartament 1 osobowy</option>
            <option value="apartament 2 osobowy">apartament 2 osobowy</option>
        </select><br>
        Wyżywienie:<hr>
        <input type="radio" name="widok" value="Podstawowe">Podstawowe + 200zł<br> (tylko płatki śniadaniowe)<br>
        <input type="radio" name="widok" value="Zaawansowane">Zaawansowane + 400zł<br> (płatki + parówki)<br><br>
        Ilość dni pobytu (1-14)<br>Cena za noc to 1299zł:<hr>
        <input type="number" name="dni" min="1" max="14">
        </div>
        <div id="formularz"><center>
        Imię:<br>
        <input type="text" name="imie"><br><hr>
        Nazwisko:<br>
        <input type="text" name="nazwisko"><br><hr>
        Adres e-mail:<br>
        <input type="email" name="mail" required><br><hr>
        Numer karty płatniczej ;)<br>
        <input type="text" name="nrkarty"><br><hr>
        <input type="submit" name="zarezerwuj" value="Zarezerwuj" maxlenght="16">
        </center>
        </div>
        </form>
        <div id="podsumowanie">
        <?php
        $cena=0;
        if(isset($_POST['pokoje']) && ($_POST['pokoje'] == 'apartament 1 osobowy')) {
            echo "Pokój: ".$_POST['pokoje']."<br>";
            $cena += 1299;     
        }
        else if(isset($_POST['pokoje']) && ($_POST['pokoje'] == 'apartament 1 osobowy')) {
            echo "Widok: ".$_POST['pokoje']."<br>";
            $cena += 1399;
        }
        else {
            echo "<br>";
        }
      
        
        if(isset($_POST['widok']) && ($_POST['widok'] == 'Podstawowe'))   {
            echo "Widok: ".$_POST['widok']."<br>";
            $cena += 200;           
        }
        else if(isset($_POST['widok']) && ($_POST['widok'] == 'Zaawansowane')) {
            echo "Widok: ".$_POST['widok']."<br>";
            $cena += 400;
        }
        else {
            echo "<br>";
        }
 

        if(isset($_POST['dni'])) {
            $dni=$_POST['dni'];
            echo "Ilość dni: ".$_POST['dni']."<br>";
            $cena=$cena * $dni;  

        }
        else {
            echo "<br>";
        }

        echo $cena . "zł";



       
        ?>
        </div>
        <div id="podsumowanie2">
        <?php
        if(!empty($_POST['imie'])) {
            echo "Imię: ".$_POST['imie']."<br>";
        }
        else {
            echo "<br>";
        }

        if(!empty($_POST['nazwisko'])) {
            echo "Nazwisko: ".$_POST['nazwisko']."<br>";
        }
        else {
            echo "<br>";
        }

        if(!empty($_POST['mail'])){
            echo "Adres e-mail: ".$_POST['mail']."<br>";
        }
        else {
            echo "<br>";
        }

        if(!empty($_POST['nrkarty'])) {
            echo "Nr. karty kredytowej: ".$_POST['nrkarty']."<br>";
        }
        else {
            echo "<br>";
        }
        
        include("dbconnectbiuro.php");
        if (!empty($_POST['imie'])) { $_SESSION['imie'] = $_POST['imie']; }
        if (!empty($_POST['nazwisko'])) { $_SESSION['nazwisko'] = $_POST['nazwisko']; }
        if (!empty($_POST['mail'])) { $_SESSION['mail'] = $_POST['mail']; }
        if (!empty($_POST['nrkarty'])) { $_SESSION['nrkarty'] = $_POST['nrkarty']; }
            
        if(isset($_POST["zarezerwuj"])) {
            $fna = $_SESSION['imie'];
            $lna = $_SESSION['nazwisko'];
            $mai = $_SESSION['mail'];
            $pho = $_SESSION['nrkarty'];

            $query = $link -> prepare("insert into biuropodrozy (name, surname, email, nr) values (?,?,?,?)");
            $query -> bind_param("ssss", $fna, $lna, $mai, $pho);
            $query -> execute();
            $query -> close();
        }
        ?>
        </div>
        <a href="dalejstrona.html"><button id="quehua">Przejdź do płatności</button></a>

    </body>
</html>