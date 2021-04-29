<?php
session_start();
 
$bdd = new PDO('mysql:host=localhost;dbname=client', 'root', '');
 
if(isset($_GET['cin']) AND $_GET['cin'] > 0) {
   $getid = intval($_GET['cin']);
   $requser = $bdd->prepare('SELECT * FROM client WHERE cin = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>cin de <?php echo $userinfo['cin']; ?></h2>
         <br /><br />
         first_name = <?php echo $userinfo['first_name']; ?>
         <br />
         last_name = <?php echo $userinfo['last_name']; ?>
         <br />
         <br />
         eMail = <?php echo $userinfo['email']; ?>
         <br />
         <br />
         phone = <?php echo $userinfo['phone']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="deconnexion.php">Se déconnecter</a>
         <?php
         }
         ?>
      </div>
   </body>
</html>
<?php   
}
?>