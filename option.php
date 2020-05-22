<?php
if (!empty($_GET['srt'])) 
{
    $connexion=mysqli_connect('localhost','root','','autocompletion');
    mysqli_set_charset($connexion, "utf8");
    $sql="SELECT *  FROM persolol WHERE nom LIKE '%".$_GET['srt']."%'";
    $query=mysqli_query($connexion,$sql);
    while ($data = mysqli_fetch_assoc($query)) 
   { ?>
       <a class="lien_champion" href="element.php?id=<?=$data['id']?>"><div><img src="perso/<?=$data['id']?>.jpg"><?=$data['nom']?></div></a>
    <?php
   } 	
}
    


?>