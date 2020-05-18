<?php

    if(isset($_GET['id']))
    {
        $connexion=mysqli_connect('localhost','root','','autocompletion');
        mysqli_set_charset($connexion, "utf8");
        $sql="SELECT * FROM persolol WHERE id=".$_GET['id']."";
        $query=mysqli_query($connexion,$sql); 
        $res=mysqli_fetch_all($query);  
    }
    else
    {
        header('location: index.php');
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
        
        foreach 
        ($res as $row) 
        {   
            switch ($row[4]) 
            {
                case 1:
                    $mait="Faible";
                    break;
                case 2:
                    $mait="Modérée";
                    break;
                case 3:
                    $mait="Élevée";
                    break;
                default:
                    $mait="inoconue";
                    break;
            }

            ?>
            <div>
                <img src="perso/<?=$row[0]?>.jpg">
                <h1><?=$row[1]?></h1>
                <b><?=$row[3]?></b>
                <p>role :<?=$row[5]?></p>
                <label>difficulté :<?=$mait?>
                <progress value="<?=$row[4]?>" max="3">70 %</progress></label>
                <p><?=$row[2]?></p>
            </div>
            <?php
        }
        ?>
        </main>

    </body>
<html>  