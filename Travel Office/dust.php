<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Piaskowy</title>     
        <style>
        body {
            background-image: url(dusttlo.jpg);
        }
        

        div#header {
            background-color:black;
            opacity:0.8;
            position:absolute;
            top:20px;
            left:20px;
            height:110px;
            width:1875px;   
            font-size:80px;
            font-weight:bold;
            color:white;
            text-align:center;
            padding-top:10px;
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

        img#dustnoc {
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
            top:170px;
            left:1000px;
            color:white;
            font-size:35px;
        }
        select {
            position:absolute;
            top:80px;
            left:0px;
            width:200px;
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
            top:0px;
            left:425px;
            border:solid 5px white;
            height:530px;
            width:430px;
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
            left:1000px;
            width:855px;
            height:120px;
            border:solid 5px white;
            color:white;
            font-size:25px;
            padding:10px;
        }

        div#podsumowanie2 {
            position:absolute;
            top:740px;
            left:1255px;
            width:600px;
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
        <div id="header">HOTEL PIASKOWY</div>
        <div id="tlo">  
        </div>
        <img src="dustnoc.jpg" id="dustnoc" width="900px"><div id="dusttekst">Hotel Piaskowy znajdue się w dzielnicy Sahrij Madrasa niedaleko centrum miasta Feza w Maroko. 
        Blisko hotelu znajdują się liczne bary i restauracje. Wieczorami można usłyszeć spadające na miasto bomby. Biegają też szczury.</div>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div id="wybory">
        Wybór pokoju:<hr><br>
        <select name="pokoje" id="pokoje">
            <option value="2 osobowe" name="2osob">2 osobowe</option>
            <option value="3 osobowe">3 osobowe</option>
        </select><br>
        Z widokiem na:<hr>
        <input type="radio" name="widok" value="Śmietniki"> Śmietniki + 100zł<br>
        <input type="radio" name="widok" value="Palące się auta"> Palące się auta + 150zł<br><br>
        Ilość dni pobytu (1-7)<br>Cena za noc to 299zł:<hr>
        <input type="number" name="dni" min="1" max="7">
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
        if(isset($_POST['pokoje']) && ($_POST['pokoje'] == '2 osobowe')) {
            echo "Pokój: ".$_POST['pokoje']."<br>";
            $cena += 299;     
        }
        else if(isset($_POST['pokoje']) && ($_POST['pokoje'] == '3 osobowe')) {
            echo "Widok: ".$_POST['pokoje']."<br>";
            $cena += 499;
        }
        else {
            echo "<br>";
        }
      
        
        if(isset($_POST['widok']) && ($_POST['widok'] == 'Śmietniki'))   {
            echo "Widok: ".$_POST['widok']."<br>";
            $cena += 100;           
        }
        else if(isset($_POST['widok']) && ($_POST['widok'] == 'Palące się auta')) {
            echo "Widok: ".$_POST['widok']."<br>";
            $cena += 150;
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

