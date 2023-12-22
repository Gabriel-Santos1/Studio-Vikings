<?php
include "../validation.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>

    <?php 
        include "connection.php";


        $id = $_GET['id'] ??'';
        $sql = "SELECT * FROM people where cod_people = $id";


        $data = mysqli_query($conn, $sql);
        $line = mysqli_fetch_assoc($data);

    ?>



    <div class="container">

        <div class="row">

            <div class="column">

                <form action="edit_Script.php" method="POST">

                    <h2>Alterações de Cadastro</h2>

                    <div class="mb-3">
                        <label for="Name" class="form-label">Nome</label>
                        <input type="text" class="form-control" placeholder="Ex: Maria Silva" name="name" required 
                        value="<?php echo $line ['name']?>">
                        
                    </div>

                    <div class="mb-3">
                        <label for="Cpf" class="form-label">Cpf</label>
                        <input type="text" class="form-control" placeholder="Ex: 111.222.333-25" name="cpf" required 
                        value = "<?php echo $line ['cpf']?>">
                    </div>

                    <div class="mb-3">
                        <label for="Email" class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Ex: name@example.com" name="email" required 
                        value="<?php echo $line ['email']?>">
                    </div>

                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Ex: joao2568!" name="password" required 
                        value="<?php echo $line ['password']?>">
                    </div>

                    <div class="mb-3">
                        <label for="Phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" placeholder="Ex: joao2568!" name="phone" required 
                        value="<?php echo $line ['phone']?>">
                    </div>

                    <div class="mb-3">
                        <a href="index.php"><button type="button" class="btn btn-outline-danger">Voltar</button></a>
                        <input type="submit" class="btn btn-primary" value = "save changes">
                        <input type="hidden" name = "id" value="<?php echo $line ['cod_people']?>">
                    </div>
                </form>


            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>