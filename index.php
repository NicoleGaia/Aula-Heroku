<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width-device-width">
    <title>Aula Heroku</title>
    <style>
        #page{
            display: grid;
            width: 100%;
            height: 250px;
            grid-template-areas: "header header"
            "nav main"
            "nav footer";
            grid-template-rows: 50px 1fr 60px;
            grid-template-columns: 55px 1fr;
        }
        #page>header{
            grid-area: header;
            background-color: cornflowerblue;
            height: 92px;
        }
        #page>nav{
            grid-area: nav;
            background-color: darkseagreen;
            width: 60px;
            left: 10px;
            height: 565px;
        }
        #page>footer{
            grid-area: footer;
            background-color: darksalmon;
            height: 75px;
        }
        #page>main{
            grid-area: main;
            background-color: khaki;
            height: 500px;
        }
        h1{
            color:black;
            text-align: center;
            font-size: 25px;
        }
        h2{
            text-align: center;
            height: 50px;
        }

    </style>
</head>
<body>
<section id="page">
            <header>
                <h1>Revalation</h1>
            </header>
            <nav>
                <h1>
                <br>
                <br>
                    21:4
                </h1>
            </nav>
            <main>
                <br>
                <br>
                <p>
                    "He will wipe every tear from their eyes. 
                    There will be no more death or mourning or crying or pain, 
                    for the old order of things has passed away.”
                </p>
            </main>
            
            <footer>
                <h1>Come on.... LET'S BURN</h1>
            </footer>
        </section>
</body>
</html>