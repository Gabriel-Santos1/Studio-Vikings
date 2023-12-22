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

            <div class="col-6">

                <div class="jumbotron">
                    <h1 class="display-4">Cadastro web</h1>
                    <form action="http://localhost/empresa/index.php" method="POST">


                        <div class="form-group">
                            <label for="exampleInputEmail1">Login</label>
                            <input name="login" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <small class="form-text text-muted">Entre com seus dados.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <button type="submit" class="btn btn-primary">Acessar</button>


                    </form>

                </div>


                <?php
                if (isset($_POST['login'])) {
                    $login = $_POST['login'];
                    $password = md5($_POST['password']);

                    include "restricted/connection.php";
                    $sql = "SELECT * from `user` WHERE login = '$login' AND password = '$password'";

                    if ($result = mysqli_query($conn, $sql)) {
                        $record = mysqli_num_rows($result);

                        if ($record == 1) {
                            $line = mysqli_fetch_assoc($result);
                            if (($login == $line['login']) && ($password == $line['password'])) {
                                session_start();
                                $_SESSION['user'] = "Robson";
                                header("location: restricted");
                            } else {
                                echo "Login inválido";
                            }
                        } else {
                            echo "Login ou senha inválido.";
                        }
                    } else {
                        echo "Nenhum resultado encontrado";
                    }

                }

                ?>

            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>