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

    $search = $_POST["search"] ?? '';

    include "connection.php";

    $sql = "SELECT * FROM people where name like '%$search%'";

    $data = mysqli_query($conn, $sql);

    ?>




    <div class="container">

        <div class="row">

            <div class="column">

                <h1>Pesquisar</h1>

                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <form class="d-flex" action="search.php" method="POST" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                name="search" autofocus>
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </nav>


                <table class="table table-info">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Funções</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        while ($line = mysqli_fetch_assoc($data)) {
                            $cod_people = $line['cod_people'];
                            $name = $line['name'];
                            $cpf = $line['cpf'];
                            $email = $line['email'];
                            $password = $line['password'];
                            $phone = $line['phone'];

                            echo " <tr>
                            <th scope='row'>$name</th>
                            <td>$cpf</td>
                            <td>$email</td>
                            <td>$phone</td>
                            <td>
                                <a href = 'register_edit.php?id=$cod_people' class='btn btn-info'>Editar</a>
                                <a href = '#' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#confirm'
                                onclick=" ,'"' ,"get_data($cod_people,'$name')",'"',">Excluir</button>
                            </td>
                            </tr>";

                        }

                        ?>


                            

                    </tbody>
                </table>
                <a href="index.php"><button type="button" class="btn btn-outline-danger">Voltar para o
                        inicio</button></a>




            </div>

        </div>

    </div>

    <div class="modal fade" id="confirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmação de exclusão</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="exclude_script.php" method="POST">
                   <p>Deseja excluir esse cliente: <b id="name_peop"></b>?</p>
                   
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Não</button>
                        <input type="hidden" name ="name" id="name_people_1" value="">
                        <input type="hidden" name ="id" id="cod_people" value="">
                        <input type="submit" class="btn btn-danger" value="Sim">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">

        function get_data(id,name) {
            document.getElementById('name_peop').innerHTML = name;
            document.getElementById('cod_people').value = id;
            document.getElementById('name_people_1').value = name;

        }
    </script>                  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>