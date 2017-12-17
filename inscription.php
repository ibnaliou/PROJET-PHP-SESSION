<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>
</head>
<body>
    <form action="" method="post" id="form_insc"  >
  
        
        <fieldset style="color:red"  ><legend>VEUILLEZ VOUS INSCRIRE</legend> 
        <?php
       
       $date = date("d-m-Y");
       $heure = date("H:i");
       echo"<h4 style='text-align: center; border: 1px dashed black; width: 250px; height: auto ;color:black; margin-left 60px'> Bienvenue Dakar, le $date */*/*/* $heure</h4>";
   ?>
<label for="">Login:</label> <input type="text" name="log" required><br>

<label for=""> profil:</label> <select name="pro" placeholder="" required >
<option value="admin">admin</option>
<option value="user">user</option>


</select><br><br>
<input type="submit" value="creer" name="creer" >
<input type="reset" value="supprimer" ><br><br>
<a  href='formulaire.php'><button style="color:red">Connexion</button></a> 
</fieldset>


    </form>



<?php
    if (isset($_POST['creer']) && isset($_POST['pro']) && isset($_POST['log'])){
    extract($_POST);
$mesusers = fopen('new2.txt', 'a+');
$nbre_d_utilisateur = fopen('compteur.txt', 'r+');


$existe=false;

// 2 : on lit la première ligne du fichier




while(($line=fgets($mesusers))!==false)
{
$info=explode("-",$line);
if ($info[0]==$log){
$existe=true;

}
}
//$existe=false;
if($existe){
    echo '<body onLoad="alert(\'login existe deja...\')">';
    
    
}
else{

    function chaine_aleatoire($nb_car, $chaine = 'azertyuiopqsdfghjklmwxcvbn123456789')
    {
        $nb_lettres = strlen($chaine) - 1;
        $generation = '';
        for($i=0; $i < $nb_car; $i++)
        {
            $pos = mt_rand(0, $nb_lettres);
            $car = $chaine[$pos];
            $generation .= $car;
        }
        return $generation;
    }
     //compteur visiteur
     $nombre = fgets($nbre_d_utilisateur);
     $nombre += 1;
     fseek($nbre_d_utilisateur, 0);
     fputs($nbre_d_utilisateur, $nombre);
     
    $retour="-\r\n";
    fputs ($mesusers, $log.'-'.chaine_aleatoire(8).'-'.$pro.'-'.$retour );
   
    
   echo '<div id="parametre">';
   echo "Bonjour $log vous ete notre $nombre ème clients  <br/>  ";
   echo"votre login est: $log <br/>";
   echo"votre mot de passe est: ". chaine_aleatoire(8).  "<br/>";
   echo"votre profil est: $pro <br/>";
   
   echo '</div>';

    

// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($nbre_d_utilisateur);
fclose($mesusers);

}
    }
?>