<?php
    // connect of the databases ;
    include_once "main_traitement_bdd.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> 
        <link rel="stylesheet" href="./styles/main_principal.css">
        <title>Test POO</title>
    </head>
    <body>
        <header>
            <div class="container_fluid">
                <nav>
                    <a href="#" target="_blank" rel="noopener noreferrer" id="logo">Election Soft</a>
                    <ul>
                        <li><i class="fa-solid fa-house"></i></li>
                        <li><a href="login_main.php">Votez ici</a></li>
                    </ul>

                    <div class="btn_toggle">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </nav>                
            </div>
        </header> 
        <main class="content">
            <div class="container_fluid">

                <div class="card-group">
                    <div class="card-group-1">
                        <div class="card-title">
                            <h1>ANTOINE</h1>
                        </div>
                        <hr>
                        <div class="card-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatum ab, minima eum perspiciatis saepe! Quia, quod. Dolorem ad deleniti quod possimus voluptatem.</p>
                        </div>
                        <div class="card-footer">
                            <span>N° 1</span>
                        </div>                       
                    </div>

                    <div class="card-group-1">
                        <div class="card-title">
                            <h1>GIZENGA</h1>
                        </div>
                        <hr>
                        <div class="card-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatum ab, minima eum perspiciatis saepe! Quia, quod. Dolorem ad deleniti quod possimus voluptatem.</p>
                        </div> 
                        <div class="card-footer">
                            <span>N° 2</span>
                        </div>                         
                    </div>

                    <div class="card-group-1">
                        <div class="card-title">
                            <h1>BEMBA</h1>
                        </div>
                        <hr>
                        <div class="card-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatum ab, minima eum perspiciatis saepe! Quia, quod. Dolorem ad deleniti quod possimus voluptatem.</p>
                        </div> 
                        <div class="card-footer">
                            <span>N° 3</span>
                        </div>                         
                    </div>
                    <div class="card-group-1">
                        <div class="card-title">
                            <h1>KABEYA</h1>
                        </div>
                        <hr>
                        <div class="card-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatum ab, minima eum perspiciatis saepe! Quia, quod. Dolorem ad deleniti quod possimus voluptatem.</p>
                        </div>
                        <div class="card-footer">
                            <span>N° 4</span>
                        </div>                          
                    </div>
                </div>


                <?php 
                    $sql = "SELECT name_candidat, count(*) FROM vote_electeur GROUP BY name_candidat";
                    $stmt = $conn->query($sql);

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))

                    echo $row["name_candidat"].' '. $row["count(*)"]. '</br>';
                ?>

            </div>
        </main>

        <?php
            include_once 'footer.php'
        ?>

    </body>
</html>
