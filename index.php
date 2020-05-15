<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Acme&family=Amatic+SC:wght@700&family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
        <script type="text/javascript" src="script.js" async="true"></script>
        <title>Autocompletion</title>
    </head>
    <body id="">
    <form method="get">
    <input list="data"  id="auto" type="text" onkeyup="autocomp()"/>
    <input type="submit" />
    <datalist id="data">

    </datalist>
    </form>
    </body>
<html>    