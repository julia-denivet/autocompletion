<?php
        $connexion=mysqli_connect('localhost','root','','autocompletion');
        mysqli_set_charset($connexion, "utf8");
        if(!isset($_GET['search'])||empty($_GET['search']))
        {
            $_GET['search']="";
            $err=true;
        }    
        $sql="SELECT * FROM persolol WHERE nom LIKE '%".$_GET['search']."%'";
        $query=mysqli_query($connexion,$sql); 
        $res=mysqli_fetch_all($query);  
    
?>
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="script.js" async="true"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <title>Recherche</title>
    </head>
    <body id="">
        <?php include('header.php'); ?>
        <main id="res" class="container">
        <?php
        if(isset($err))
        {
            ?>
            <u>Recherche vide</u>
            <?php
        }
        if(empty($res))
        {
            ?>
            <b>Aucun combatant trouvé </b>
            <?php
        }
        else
        {
            foreach ($res as $row) 
            {   
                ?>
                <div>
                    <img src="perso/<?=$row[0]?>.jpg">
                    <b><?=$row[1]?></b>
                    <i><?=$row[3]?></i>
                    <a href="element.php?id=<?=$row[0]?>">voir plus</a>
                </div>
                <?php
            }
        }
        ?>
        </main>

    </body>
<html>  