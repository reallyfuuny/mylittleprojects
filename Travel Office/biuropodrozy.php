<!DOCTYPE html>
<html>
    <head>
    <style>
    body {
        background-image: url(tlo.jpg);
    }

    div#header {
        background-color:black;
        opacity:0.8;
        width:1850px;
        height:130px;
        position:absolute;
        top:15px;
        left:35px;
        color:silver;
        font-size:80px;
        font-weight:bold;
        border-top:solid 5px white;
        border-bottom:solid 5px white;
    }

    div#tlo {
        background-color:black;
        width:1840px;
        height:772px;
        position:absolute;
        top:165px;
        left:35px;
        opacity:0.8;
        border-left:solid 5px white;
        border-right:solid 5px white;
    }

    center {
        padding-top:20px;
    }

    img#isjeden {
        position:absolute;
        top:5px;
        left:300px;
        width:150px;
        z-index:5;
    }

    img#isdwa {
        position:absolute;
        top:5px;
        left:1475px;
        width:150px;
        z-index:6;
}

    div#dust {
        border:solid 5px silver;
        position:absolute;
        top:200px;
        left:55px;
        width:600px;
        height:700px;
        background-color:silver;
        font-size:40px;
        font-family: "Courier New";
        cursor:pointer;
        text-shadow:2px 2px #000000;
    }

    img#dust {
        width:600px;
    }

    div#abbey {
        border:solid 5px silver;
        position:absolute;
        top:200px;
        left:685px;
        width:600px;
        height:700px;
        background-color:silver;
        font-size:40px;
        font-family: "Courier New";
        cursor:pointer;
        text-shadow:2px 2px #000000;

    }

    img#abbey {
        width:600px;
    }

    div#canals {
        border:solid 5px silver;
        position:absolute;
        top:200px;
        left:1315px;
        width:540px;
        height:700px;
        background-color:silver;
        font-size:40px;
        font-family: "Courier New";
        cursor:pointer;
        text-shadow:2px 2px #000000;

    }


    img#canals {
        width:540px;     
    }

    div#dust:hover {
        font-weight:bold;
        text-shadow: 2px 2px 4px #000000;
        border:solid 5px white;
        transition-duration:0.5s;
        background-color:white;
        
    }

    div#abbey:hover {
        font-weight:bold;
        text-shadow: 2px 2px 4px #000000;
        border:solid 5px white;
        transition-duration:0.5s;
        background-color:white;
        
    }

    div#canals:hover {
        font-weight:bold;
        text-shadow: 2px 2px 4px #000000;
        border:solid 5px white;
        transition-duration:0.5s;
        background-color:white;
    }
    
    a {
        color:black;
    }

   
    </style>
        <title>Biuro podrózy</title>      
    </head>
    <body> 
    <img src="island.png" id="isjeden" width="120px"><img src="island.png" id="isdwa" width="120px"><div id="header"><center>HOLIDAYS FROM DREAMS</center></div>
    <div id="tlo">
    </div>
        <a href="dust.php"><div id="dust"><img src="dust.jpg" id="dust"><center><br>| Hotel Piaskowy |<br>Ceny od 299zł za noc<br>Lokazliacja:  El Sahrij, Maroko</center></div></a>
        <a href="abbey.php"><div id="abbey"><img src="abbey.png" id="abbey"><center><br>| Hotel Abbey |<br>Ceny od 1299zł za noc<br>Lokalizacja: Gordes, Francja</center></div></a>
        <a href="canals.php"><div id="canals"><img src="canals.jpg" id="canals"><center><br>| Hotel Rialto |<br>Ceny od 2000zł za noc<br>Lokalizacja: Wenecja, Włochy</center></div></a>
        <div id="ruby"></div>
    
    
    
    
        <?php
        
        ?>

    </body>
</html>

