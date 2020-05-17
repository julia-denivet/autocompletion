<?php
    $connexion=mysqli_connect('localhost','root','','autocompletion');
    mysqli_set_charset($connexion, "utf8");
    $sql="SELECT *  FROM persolol WHERE nom LIKE '%".$_GET['str']."%'";
    $query=mysqli_query($connexion,$sql);
    while ($data = mysqli_fetch_assoc($query)) 
   { ?>
       <option value="<?=$data['nom']?>"><img src="perso/<?=$data['id']?>.jpg"></option>
    <?php
   }     


?>