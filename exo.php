

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
<!--
    <script type="text/javascript">
        let mon_prenom = "Swann";
    alert("Hello " + mon_prenom);
        
     function validationFormulaire() {
            var x= document.forms ["formContact"] ["messageContact"] . value;
            if(x==null || x=="") {
                alert("vous avez oublié d'insérer un message");
                return false;
            }
        }
        
    </script>
-->
</head>

<body>
   <?php
if(isset($_POST['envoie'])) {
  if (!isset($_POST['messageContact']) || $_POST['messageContact']==''){
      echo('vous avez oublié d\'insérer un message<br>');
  }  
    else{
        if(!isset($_POST['email']) || $P_POST['email']=='') {
            $_POST['email']='';
        }
        $message= 'vous avez reçu un message via votre site internet,le voici:<br>' . $_POST['messageContact'];
        $headers='MIME-Version:1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= 'From: ' .$POST['email']."\r\n".'Reply-To: '.$_POST['email']."\r\n".'X-Mailer: PHP/' . phpversion();
        
        mail('swann.berck@gmail.com', 'formulaire de contact exmachina', $message, $headers);
        
        //confirmation
        echo('Votre message a &eacute;t&eacute; envoy&eacute;<br>');
    }
   if !(isset($_POST['email']) || $_POST['email']=='') {
       $_POST['email']='';
   }
    elseif(isset($_POST['autorisation'])){
        $adresseMail = $_POST['email'];
        $db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8', 'exmachinefmci', 'carp30M');
        $result = $db->prepare('INSERT INTO swann.berck@gmail.com (mail) VALUES (:adressMail)');
        $result = excute array0
    }
//    definition mail vide
//        else if (isset $_POST["auth"])
    //mdp "carp310M";
}
    ?>
    
    <?php
    //Supression mail
    if($_GET['email']) {
        $adresseMail = $_GET['email'];
        //$db = new PDO('mysql:host;dbname=cv;charset=utf8', 'Identifiant SQL', 'mdp SQL');
        $db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8', 'exmachinefmci', 'carp310M');
        $selectall = $db->query('SELECT * FROM swann.berck@gmail.com WHERE mail="' . $adresseMAIL.'"');
        $result= $selectall->fetch();
        $counttable = (count($result));
        
        if($counttable>=1){
            $delete= $db->prepare('DELETE FROM swann.berck@gmail.com WHERE mail="' . $adresseMail .'"');
            $delete->execute();
     }
        
        //confirmation de suppression
        echo('Vous &ecirc;tes bien desabonn&eacute; de notre liste de diffusion');
        
    }
?>
    <h1>Formulaire de Contact</h1>
    
<form method="post">
        Nom :<br>
        <input type="text"><br>
        Email :<br>
        <input type="email"><br>
        T&eacute;l&agrave;phone :<br>
        <input type="tel"><br>
Message: <br>        
        <textarea id="form-textarea" name="messageContact"></textarea><br>
        <input type="submit" name="envoie" value="Envoyer"><br>
    </form>
</body>
</html>
