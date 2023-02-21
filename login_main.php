<?php
    // connect of the databases ;
    include_once "main_traitement_bdd.php";

    //declaration and preparation of the variable for the data bases ;

    if(isset($_POST['send'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $nickname = $_POST['nickname'];
        $numbercard = $_POST['numbercard'];
        $name_candidat = $_POST['name_candidat'];

        if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['nickname']) && !empty($_POST['numbercard']) && !empty($_POST['name_candidat']) ) {
            // affichage the message for confirm the champs is no empty;

            $sql = "INSERT INTO electeur (firstname,lastname,nickname,numbercard,name_candidat)
            VALUES ('$firstname', '$lastname','$nickname','$numbercard','$name_candidat')";
            $conn->exec($sql);

            echo "Les  données sont bien enregistré Mme (Mr)" . " " . $_POST['firstname']; //contenante the message of the users;
        } 
        else {
            echo 'Veillé remplir tous les champs...';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/main_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>Login_form</title>
</head>
<body>
        <div  class="btn-arrière">
            <a href="index.php"><i class="fa-solid fa-house"></i></a>
        </div>
        <hr>
    <main class="container_fluid">

        <br>
        <div class="container_formulaire">
            <form action="./login_main.php" method="post">
                <label for="firstname">FirtName :</label>
                <input type="text" name="firstname" id="">                     

                <label for="lastname">LastName :</label>
                <input type="text" name="lastname" id="">                     

                <label for="nickname">NickName :</label>
                <input type="text" name="nickname" id="">

                <label for="numbercard">Your NN :</label>
                <input type="number" name="numbercard" id=""> 

                <label for="name">Your candidat :</label>
                    <select name="name_candidat" >
                        <option value="0">--selectionner votre candidat--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                     

                <input type="submit" value="Send" name="send">

                </div>
                
            </form>        
        </div>  
    </main>
 
</body>
</html>