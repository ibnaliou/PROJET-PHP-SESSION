<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" >
    <title>profil</title>
</head>
<body>
    <form  action="login.php" method="post" id="form_insc">
        <h2>Bienvenue Veuillez vous identifiez</h2>
        <?php
       
       $date = date("d-m-Y");
       $heure = date("H:i");
       echo"<h4 style='text-align: center; border: 1px dashed black; width: 250px; height: auto ;color:black; margin-left 60px'> Bienvenue Dakar, le $date */*/*/* $heure</h4>";
   ?>
      <Label>Login:</Label>  <input type="text" name="login" required><br><br>
     <Label>Mot de passe:</Label>  <input type="password" name="password" placeholder="" required ><br><br>
      <label for=""> profil:</label> <select name="profil" placeholder="" required >
           <option value="admin">admin</option>
           <option value="user">user</option>

           
       </select><br><br>
       <input type="submit" value="valider" name="valider" >
           <input type="reset" value="supprimer" ><br><br>
           <a  href="inscription.php"><button style="color:red">INSCRIPTION</button> </a>
    </form>
   

</body>
</html>