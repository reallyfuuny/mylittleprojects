<!DOCTYPE html>
<html>
    <head>
    <style type="text/css">
       
       body {
                background-image: url(tlo.jpg);   
                                      
            }

            div#wyniki {
                position: absolute;
                top: 200px;
                left:600px;
                background-color:rgb(185, 174, 107);
                width:700px;
                height:480px;
                margin-bottom:30px;
                text-align:center;
                border:4px dashed rgb(216, 196, 82); 
                
            }

            div#lewo {
                position: absolute;
                top: -200px;
                left:-500px;
               
            }


            div#prawo {
                position: absolute;
                top: -180px;
                left:600px;

            }
    </style>    
        <title></title>      
    </head>
    <body> 
 
<div id="wyniki"><br>
<div id="lewo"><img src="lewo.png" width="400px"></div>
<div id="prawo"><img src="prawo.png" width="800px"></div>
           
<?php
$poprawne = 0;
$dzies=10;
$sto=100;
if($_POST['pyt1']=='szes') {
    echo "Pytanie 1:<br><font color='green'>Dobrze</font><br>";
    $poprawne++;
    }
    else {
    echo "Pytanie 1:<br><font color='red'>Źle</font><br>";
    }


if($_POST['pyt2']=='slow') {
    echo "Pytanie 2:<br><font color='green'>Dobrze</font><br>";
    $poprawne++;
    }
    else {
    echo "Pytanie 2:<br><font color='red'>Źle</font><br>";
    }


if($_POST['pyt3']=='hel') {
    echo "Pytanie 3:<br><font color='green'>Dobrze</font><br>";
    $poprawne++;
    }
    else {
    echo "Pytanie 3:<br><font color='red'>Źle</font><br>";
    }


if($_POST['pyt4']=='elip') {
    echo "Pytanie 4:<br><font color='green'>Dobrze</font><br>";
    $poprawne++;
    }
    else {
    echo "Pytanie 4:<br><font color='red'>Źle</font><br>";
    }


if($_POST['pyt5']=='dw') {
    echo "Pytanie 5:<br><font color='green'>Dobrze</font><br>";
    $poprawne++;
    }
    else {
    echo "Pytanie 5:<br><font color='red'>Źle</font><br>";
    }


if($_POST['pyt6']=='nil') {
    echo "Pytanie 6:<br><font color='green'>Dobrze</font><br>";
    $poprawne++;
    }
    else {
    echo "Pytanie 6:<br><font color='red'>Źle</font><br>";
    }


if($_POST['pyt7']=='chrl') {
    echo "Pytanie 7:<br><font color='green'>Dobrze</font><br>";
    $poprawne++;
    }
    else {
    echo "Pytanie 7:<br><font color='red'>Źle</font><br>";
    }


if($_POST['pyt8']=='slon') {
    echo "Pytanie 8:<br><font color='green'>Dobrze</font><br>";
    $poprawne++;
    }
    else {
    echo "Pytanie 8:<br><font color='red'>Źle</font><br>";
    }


if($_POST['pyt9']=='antar') {
    echo "Pytanie 9:<br><font color='green'>Dobrze</font><br>";
    $poprawne++;
    }
    else {
    echo "Pytanie 9:<br><font color='red'>Źle</font><br>";
    }


if($_POST['pyt10']=='czter') {
    echo "Pytanie 10:<br><font color='green'>Dobrze</font><br>";
    $poprawne++;
    }
    else {
    echo "Pytanie 10:<br><font color='red'>Źle</font><br>";
    }

echo "<br>Zdobyłeś/aś ". $poprawne ." punkty/ów<br>Twój wynik procentowy to: ".$poprawne/$dzies*$sto."%";
?>
</div>
    </body>
</html>