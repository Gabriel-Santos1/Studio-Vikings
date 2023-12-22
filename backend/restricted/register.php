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


    <div class="container">

        <div class="row">

            <div class="column">

                <form action="form_Script.php" method="POST">

                    <h2>Cadastrar</h2>

                    <div class="mb-3">
                        <label for="Name" class="form-label">Nome</label>
                        <input type="text" class="form-control" placeholder="Ex: Maria Silva" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="Cpf" class="form-label">Cpf</label>
                        <input type="text" class="form-control" placeholder="Ex: 111.222.333-25" name="cpf" required>
                    </div>

                    <div class="mb-3">
                        <label for="Email" class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Ex: name@example.com" name="email"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Ex: joao2568!" name="password"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="Phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" placeholder="Ex: joao2568!" name="phone" required>
                    </div>

                    <div class="mb-3">
                        <a href="index.php"><button type="button" class="btn btn-outline-danger">Voltar</button></a>
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>


            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>