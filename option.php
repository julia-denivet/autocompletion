<?php
    $connexion=mysqli_connect('localhost','root','','autocompletion');
    $sql="SELECT `nom`  FROM autotab WHERE nom LIKE '%".$_GET['str']."%'";
    $query=mysqli_query($connexion,$sql);
    while ($data = mysqli_fetch_assoc($query)) 
   { ?>
       <option value="<?=$data['nom']?>">
    <?php
   }     


?>