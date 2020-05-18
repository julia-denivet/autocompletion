<?php
    $connexion=mysqli_connect('localhost','root','','autocompletion');
        mysqli_set_charset($connexion, "utf8");   
        $sql= "SELECT id,nom FROM persolol WHERE role='Tank';";
        $query=mysqli_query($connexion,$sql); 
        $tank=mysqli_fetch_all($query); 

        $sql= "SELECT COUNT(*) FROM persolol WHERE role='Tank';";
        $query=mysqli_query($connexion,$sql); 
        $ntank=mysqli_fetch_all($query); 

        $sql= "SELECT id,nom FROM persolol WHERE role='Combattant';";
        $query=mysqli_query($connexion,$sql); 
        $comb=mysqli_fetch_all($query); 

        $sql= "SELECT COUNT(*) FROM persolol WHERE role='Combattant';";
        $query=mysqli_query($connexion,$sql); 
        $ncomb=mysqli_fetch_all($query); 

        $sql= "SELECT id,nom FROM persolol WHERE role='Mage';";
        $query=mysqli_query($connexion,$sql); 
        $mage=mysqli_fetch_all($query);

        $sql= "SELECT COUNT(*) FROM persolol WHERE role='Mage';";
        $query=mysqli_query($connexion,$sql); 
        $nmage=mysqli_fetch_all($query); 

        $sql= "SELECT id,nom FROM persolol WHERE role='Tireur';";
        $query=mysqli_query($connexion,$sql); 
        $tire=mysqli_fetch_all($query); 

        $sql= "SELECT COUNT(*) FROM persolol WHERE role='Tireur';";
        $query=mysqli_query($connexion,$sql); 
        $ntire=mysqli_fetch_all($query); 

        $sql= "SELECT id,nom FROM persolol WHERE role='Support';";
        $query=mysqli_query($connexion,$sql); 
        $supp=mysqli_fetch_all($query); 

        $sql= "SELECT COUNT(*) FROM persolol WHERE role='Support';";
        $query=mysqli_query($connexion,$sql); 
        $nsupp=mysqli_fetch_all($query);

        $sql= "SELECT id,nom FROM persolol WHERE role='Assassin';";
        $query=mysqli_query($connexion,$sql); 
        $assa=mysqli_fetch_all($query); 

        $sql= "SELECT COUNT(*) FROM persolol WHERE role='Assassin';";
        $query=mysqli_query($connexion,$sql); 
        $nassa=mysqli_fetch_all($query);  

        
?>
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="script.js" async="true"></script>
        <title>Autocompletion</title>
    </head>
    <body id="">
    <?php include('header.php');?>
    <main id="main-ind">
            <form action="recherche.php" method="get">
        <input list="data"  id="auto" type="text" onkeyup="autocomp()" name="search" />
        <input type="submit" />
        <section id="data">
            
        </section>
    </form>
    <section>
        <h2>Tank(<?=$ntank[0][0]?>)</h2>
        <?php
            foreach ($tank as $i) 
            {
                ?>
                <a href="element.php?id=<?=$i[0]?>">
                <div>
                    <img src="perso/<?=$i[0]?>.jpg">
                    <p><?=$i[1]?></p>
                </div>
                </a>
                <?php
            }
        ?>
    </section>
    <section>
        <h2>Combattant(<?=$ncomb[0][0]?>)</h2>
        <?php
            foreach ($comb as $i) 
            {
                ?>
                <a href="element.php?id=<?=$i[0]?>">
                <div>
                    <img src="perso/<?=$i[0]?>.jpg">
                    <p><?=$i[1]?></p>
                </div>
                </a>
                <?php
            }
        ?>
    </section>
    <section>
        <h2>Mage(<?=$nmage[0][0]?>)</h2>
        <?php
            foreach ($mage as $i) 
            {
                ?>
                <a href="element.php?id=<?=$i[0]?>">
                <div>
                    <img src="perso/<?=$i[0]?>.jpg">
                    <p><?=$i[1]?></p>
                </div>
                </a>
                <?php
            }
        ?>
    </section>
    <section>
        <h2>Tireur(<?=$ntire[0][0]?>)</h2>
        <?php
            foreach ($tire as $i) 
            {
                ?>
                <a href="element.php?id=<?=$i[0]?>">
                <div>
                    <img src="perso/<?=$i[0]?>.jpg">
                    <p><?=$i[1]?></p>
                </div>
                </a>
                <?php
            }
        ?>
    </section>
    <section>
        <h2>Support(<?=$nsupp[0][0]?>)</h2>
        <?php
            foreach ($supp as $i) 
            {
                ?>
                <a href="element.php?id=<?=$i[0]?>">
                <div>
                    <img src="perso/<?=$i[0]?>.jpg">
                    <p><?=$i[1]?></p>
                </div>
                </a>
                <?php
            }
        ?>
    </section>
       <section>
        <h2>Assassin(<?=$nassa[0][0]?>)</h2>
        <?php
            foreach ($assa as $i) 
            {
                ?>
                <a href="element.php?id=<?=$i[0]?>">
                <div>
                    <img src="perso/<?=$i[0]?>.jpg">
                    <p><?=$i[1]?></p>
                </div>
                </a>
                <?php
            }
        ?>
    </section>

    </main>

    </body>
<html>    