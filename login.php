<?php
//good login admin et good login user good password user et good password admin profil admin et user

$listUser=fopen("new2.txt", 'r+');
$nbre_d_utilisateur = fopen('compteur.txt', 'r+');
$nombre = fgets($nbre_d_utilisateur);


for ($i=0;$i<$nombre;$i++) { 
    $users = fgets($listUser);
    $info=explode("-",$users);
    $l=strval($info[0]);
    $p=strval($info[1]);
    $pr=strval($info[2]);
}

if (isset ($_POST['valider']) && isset($_POST['login']) && isset($_POST['password']) && isset($_POST['profil']) ){
extract($_POST);
if (strval($l)==$login && strval($p)==$password && strval($pr)==$profil  )   {
   session_start();
   $_SESSION['login']=$login;
   $_SESSION['password']=$password;
   $_SESSION['profil']=$profil;
   header ('location:membres.php');
   
   
}


elseif(strval($l)==$login && strval($p)!=$password ){
    echo '<body onLoad="alert(\'mot de passe incorrect\')">';
    echo '<meta http-equiv="refresh" content="0;URL=formulaire.php">';

}

else{
    //alert java script
    echo '<body onLoad="alert(\'Vous ete pas inscrit(e)...\')">';
    //redirection vers page inscription
    echo '<meta http-equiv="refresh" content="0;URL=inscription.php">';
}





fclose($listUser);
fclose($nbre_d_utilisateur); 

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="color:red">Veuillez entrez le bons parametres de connexions</h1>
</body>
</html>






