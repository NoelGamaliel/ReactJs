<?php
    // connect of the databases ;
    include_once "main_traitement_bdd.php";
                //declaration and preparation of the variable for the data bases ;
        if(isset($_POST['send'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $number_card = $_POST['number_card']; 
            $name_candidat = $_POST['name_candidat'];
            $number_candidat = $_POST['number_candidat'];
        }
                    
        if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['number_card']) && !empty($_POST['name_candidat']) && !empty($_POST['number_candidat']) ) {
                        // affichage the message for confirm the champs is no empty;
            $sql = "INSERT INTO `vote_electeur` (firstname,lastname,number_card,name_candidat,number_candidat) VALUES ('$firstname','$lastname','$number_card','$name_candidat','$number_candidat')";
            $conn->exec($sql);
            
                echo "Les  données sont bien enregistré Mme (Mr)" . " " . $_POST['firstname']; //contenante the message of the users;
                } 
        else {
                echo 'Veillé remplir tous les champs...';
                    
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
            <?php               
            ?>
            <br><br>
            <form action="./login_main.php" method="post">
                <label for="firstname">FirtName :</label>
                <input type="text" name="firstname" id="">                     

                <label for="lastname">LastName :</label>
                <input type="text" name="lastname" id="">                     

                <label for="number_card">Your NN :</label>
                <input type="number" name="number_card" id="">

                <label for="name">name_candidat :</label>
                    <select name="name_candidat" >
                        <option value="0"> --selectionner le nom de votre candidat-- </option>
                        <option value="FAYULU">FAYULU</option>
                        <option value="FELIX">FELIX</option>
                        <option value="BEMBA">BEMBA</option>
                        <option value="DELLY">DELLY</option>
                        <option value="MUKWEGUE">MUKWEGUE</option>
                    </select> 

                <label for="name">number_candidat :</label>
                    <select name="number_candidat" >
                        <option value="0">--selectionner votre candidat--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                     

                    <input type="submit" value="Send" name="send">
 
            </form>        
        </div>  
    </main>
 
</body>
</html>