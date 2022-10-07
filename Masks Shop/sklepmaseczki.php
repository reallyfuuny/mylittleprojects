<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">

            * {
                font-family:Georgia, 'Times New Roman', Times, serif;
            }
        header {
            background-color:rgb(255, 0, 255);
            width:1920px;
            height:125px;
            position:absolute;
            top:0px;
            left:0px;
            font-size:100px;
            text-align:center;  
            font-family:Georgia, 'Times New Roman', Times, serif;
        
            
        }

        section {
            background-color:rgb(139, 10, 111);
            width:1920px;
            height:585px;
            position:absolute;
            top:180px;
            left:0px;
        }
        
        footer {
            background-color:rgb(74, 5, 83);
            width:1920px;
            height:150px;
            position:absolute;
            bottom:0px;
            left:0px;
            font-size:100px;
        }

        div#jeden {
            width:500px;
            height:505px;
            position:absolute;
            top:30px;
            left:700px;
            background-color:rgb(116, 86, 126);
            font-size:40px;
            padding-top:20px;
        }

        div#dwa {
            width:280px;
            height:280px;
            position:absolute;
            top:30px;
            left:330px;
            background-color:rgb(116, 86, 126);
        }

        div#trzy {
            width:280px;
            height:280px;
            position:absolute;
            top:30px;
            left:630px;
            background-color:rgb(116, 86, 126);
        }

        div#cztery {
            width:960px;
            height:530px;
            position: absolute;
            top:30px;
            left:930px;
            background-color:rgb(116, 86, 126);
        }

        div#piec {
            width:880px;
            height:230px;
            position: absolute;
            top:330px;
            left:30px;
            background-color:rgb(116, 86, 126);
            padding-top:10px;
            
        }

        div#podsumowanie {
            width:500px;
            height:505px;
            position:absolute;
            top:30px;
            left:700px;
            background-color: transparent;
            padding-top:100px;
            font-size:40px;
            text-align:center;

        }

        html {
            background-color: black;
            animation: 5s infinite alternate ease-out breathing-color--dark;
        }

        @keyframes breathing-color--dark {
            from
        {   
            background-color: hsl(313, 38%, 69%);
        }
            to
        {
            background-color: hsl(313, 100%, 69%);
        }
        }

        header {
            background-color: black;
            animation: 5s infinite alternate ease-in breathing-color--dark;
        }

        @keyframes breathing-color--dark {
            from
        {   
            background-color: hsl(312, 12%, 58%);
        }
            to
        {
            background-color: hsl(314, 20%, 38%);
        }
        }

        section {
            background-color: black;
            animation: 5s infinite alternate ease-in breathing-color--dark;
        }

        @keyframes breathing-color--dark {
            from
        {   
            background-color: hsl(312, 12%, 58%);
        }
            to
        {
            background-color: hsl(314, 20%, 38%);
        }
        }

        footer {
            background-color: black;
            animation: 5s infinite alternate ease-in breathing-color--dark;
        }

        @keyframes breathing-color--dark {
            from
        {   
            background-color: hsl(312, 12%, 58%);
        }
            to
        {
            background-color: hsl(314, 20%, 38%);
        }
        }
        
       

     
        
        </style>
        <title>Sklep</title>      
    </head>
    <body> 
            <header>
                SKLEP Z MASECZKAMI
            </header>
            <section>
                <div id="jeden"><center>Podsumowanie</center></div>
                <div id="podsumowanie">
                <?php
                $jed=0;
                $dwa=0;
                $trzy=0;

                    if((!empty($_POST['m1'])) && $_POST['m1']>0) {
                        $jed=$_POST['m1']*200;
                        echo "Maska Minecraft: ". $_POST['m1']."<br>Należy się: ".$jed."PLN<br><br>";
                    }
                    else {
                        echo "Nie wybrano ilości/produktu<br><br>";
                    };

                    if((!empty($_POST['m2'])) && $_POST['m2']>0) {
                        $dwa=$_POST['m2']*250;
                        echo "Maska Pieska: ". $_POST['m2']."<br>Należy się: ".$dwa."PLN<br><br>";
                    }
                    else {
                        echo "Nie wybrano ilości/produktu<br><br>";
                    };

                    if((!empty($_POST['m3'])) && $_POST['m3']>0) {
                        $trzy=$_POST['m3']*300;
                        echo "Maska Shreka: ". $_POST['m3']."<br>Należy się: ".$trzy."PLN<br><br>";
                    }
                    else {
                        echo "Nie wybrano ilości/produktu<br><br>";
                    };

                 ?>
                 </div>
            </section>
            <footer>
                
            </footer>















        
    </body>
</html>

