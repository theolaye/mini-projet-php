<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <style>
body{
    background: SkyBlue;
}
#container{
    width:400px;
    margin:0 auto;
    margin-top:10%;
}
/* Bordered form */
form {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#container h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: #53af57;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: #53af57;
    border: 1px solid #53af57;
}

</style>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="acceuil.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>login </b></label>
                <input type="text" placeholder="Entrer votre login " name="login" required>

            
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer votre mot de passe" name="mdp" required>

                <input type="submit" id='submit' name="ok" value='Valider' >
                <?php

                extract ($_POST);
                $utilisateur[0] = array( 'nom'=>'theo','login' => 'theo','login' => 'theo');
                $utilisateur[1] = array( 'nom'=>'jean','login' => 'seck','login' => 'jean');
                $utilisateur[2] = array( 'nom'=>'theo','login' => 'theo','login' => 'theo');
               
                if(isset($_POST['ok'])){
                    foreach($utilisateur as $user)
                  if($user['login']==$login && $user['mdp']==$mdp)
                    {
                        header('Location: acceuil.php');
                    }else 
                    echo 'login ou mot de pass incorrecte';
                        
                        
                }

                ?>
            </form>
        </div>
    </body>
</html>