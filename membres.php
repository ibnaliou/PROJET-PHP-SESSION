<?php
session_start();

// On récupère nos variables de session
if(isset($_SESSION['login']) && isset($_SESSION['password']) && isset($_SESSION['profil'])){

echo "<html>";

echo  "<title>Bienvenue</title>";
echo"<body>";

echo "<marquee><h2>BIENVENUE VOUS ETE BIEN CONNECTE</h2></marquee>";

echo "<ul type='circle'>Bonjour </ul>";

//conditio pout specifier les repertoire de travail des users
if ($_SESSION['profil']=="admin") {

  
    
echo "<li>"."Vous ete ". $_SESSION['login']."</li>"."<br>";
echo "<li>"."Votre profil est ". $_SESSION['profil']."</li>"."<br>";

echo "<ul type='disc'>Vos fichiers sont </ul>";
 
echo '<li><a href="okk/tp5/acceuil.php">document1</a></li>';

echo '<li><a href="okk/tp5/cv.php">document2</a></li>';
echo "<br/><br/>";
echo "<a  href='deconnexion.php'><button style='color:red'>Deconnnexion</button></a>";


} 

else if($_SESSION['profil']=="user") {

       
echo "<li>"."Vous ete ". $_SESSION['login']."</li>"."<br>";
echo "<li>"."Votre profil est ". $_SESSION['profil']."</li>"."<br>";

echo "<ul type='circle'>Vos fichiers sont </ul>";
 
echo '<li><a href="okk/tp7/tp7.php">fichier1</a></li>';

echo '<li><a href="okk/tp7/cbon.php">fichier2</a></li> <br> <br>';

echo "<br/><br/>";
echo "<a  href='deconnexion.php'><button style='color:red'>Deconnnexion</button></a>";
 
}



}







?>
