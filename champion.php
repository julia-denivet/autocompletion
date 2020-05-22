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
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="script.js" async="true"></script>
        <title>Tous les Champions</title>
    </head>
    <body>
        <?php include('header.php');?>
        <main>
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
</html>