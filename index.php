
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
                <h1>BIENVENUE DANS LA PAGE DE RESULTAT</h1>
                <hr>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni omnis blanditiis sint doloremque in placeat accusamus, deleniti sunt, quod saepe eligendi aperiam eos modi eaque voluptate assumenda voluptates labore id odio a rem aspernatur. Aliquid consectetur rerum dicta dignissimos eum illum maxime perspiciatis eius laudantium magni ipsa expedita cupiditate eveniet possimus ad, harum omnis excepturi? Voluptatibus.</p>                

                <br>

                <table border="0.2">
                    <tr>
                        <th>NumberOfCandidat</th>
                        <th>NameOfCandidat</th>
                    </tr>
                    <tr>
                        <td>Félix Tshisekedi</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Antoine Kizenga</td>
                        <td>0</td>
                    </tr>
                </table>
            </div>

        </main>

        <?php
            include_once 'footer.php'
        ?>

    </body>
</html>
