<?php

    if(isset($_GET['id']))
    {
        $connexion=mysqli_connect('localhost','root','','autocompletion');
        mysqli_set_charset($connexion, "utf8");
        $sql="SELECT * FROM persolol WHERE id=".$_GET['id']."";
        $query=mysqli_query($connexion,$sql); 
        $res=mysqli_fetch_all($query);  
    }
?>
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="script.js" async="true"></script>
        <title>Element</title>
    </head>
    <body id="">
        <?php include('header.php'); ?>
        <main id="element">
        <?php
        $c=0;
        foreach 
        ($res as $row) 
        {   
            $c++;
            ?>
            <div>
                <img src="perso/<?=$row[0]?>.jpg">
                <b><?=$row[1]?></b>
            </div>
            <?php
        }
        ?>
        </main>

    </body>
<html>  