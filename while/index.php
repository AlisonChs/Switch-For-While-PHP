<!DOCTYPE html>
<html>

<head>

    <title> While PHP | Exercício </title>

    <!-- Metas para motor de busca do google -->

    <meta name="title" content="While PHP | Exercícios">
    <meta name="description" content="Este site é usado para exercícios de PHP.">
    <meta name="keywords" content="php, while">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Portuguese">
    <meta name="author" content="Alison Christian">
    <meta charset=UTF-8>

    <!-- Font awesome (Icons) -->

    <script src="https://kit.fontawesome.com/dde34b9cbd.js" crossorigin="anonymous"></script>

    <!-- CSS E JS para funcionamento do bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>

<body>

   <a href="../index.html"><button type="button" class="btn btn-light" style="margin: 15px 15px 15px 15px"><i class="fas fa-arrow-circle-left" style="font-size: 30px;"></i></button></a>


    <!-- Estilização básica da página -->
    <style>

            #container, body {
                margin: 0 0 0 0;
                color: white;
                background-color: #1c1c1c;
                width: 100%;
            }

            #content {
                width: 100%;
                text-align: center;
            }

            form {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
            }

            form section {
                display: flex;
                flex-direction: column;
            }

    </style>

    <div id=container>

        <section id=content>

        <!-- Formulário (toda a página sem contar o resultado) -->

            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" style="margin-top: 5%">

                <section class="title">

                    <h1> Exercício WHILE </h1>
                            
                    <a data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="description" href="#description"><span class="badge bg-dark">DESCRIÇÃO</span></a>
                    
                    <div style="display: flex; align-tems: center; justify-content: center;">
                        <div class="collapse dark" id="description" style="width:40%; margin-top: 5%;">
                            <div class="card card-body dark">
                                <p> O objetivo desta página é:
                                    <br>
                                    <br>
                                    Utilizando do sistema WHILE do PHP, o cliente deve escolher se deseja <br>
                                    exibir todos os números de 0 a 100, só os pares, só os impares ou de 5 em 5.
                                </p>
                            </div>
                        </div>
                    </div>

                </section>

                <span style="height: 15rem;margin-left: 5%; margin-right: 5%;border-left:1px solid;"></span>

                <section class="form">

                    <h1> Escolha. </h1> <br>

                    O sistema irá lhe mostrar todos os números de 0 a 100, escolha em que ordem será mostrado.

                    <br> <br>

                    <div class="input-group mb-3">
                        <label class="input-group-text dark">Escolha aqui</label>
                        <select name="ordem" class="form-select dark">
                            <option value="all">Todos os números</option>
                            <option value="par">Todos os pares</option>
                            <option value="impar">Todos os ímpares</option>
                            <option value="5-5">De 5 em 5</option>
                        </select>
                    </div>

                    <style>
                        .dark {
                            color: #fff;
                            background-color: #212529;
                            border-color: #fff!important;
                        }
                    </style>

                    <div class="mb-3">
                        <button id="btn-sumit" class="btn btn-dark dark" type="submit"> Enviar </button>
                    </div>

                </section>

            </form>

            <hr style="color: white; width: 100%;" />

            <!-- Resultado das conversões -->

            <section id="result">         

                <?php 

                    if ($_POST) {

                        $ordem = $_POST['ordem'];
                        $i = 0;

                        switch ($ordem) {
                            case 'all':
                                while ($i <= 100) {
                                    echo "<button class='btn-dark' style='margin: 20px 20px 20px 20px;'>" . $i . "</button>";
                                    $i = ++$i;
                                }
                                break;

                            case 'par':
                                while ($i <= 100) {
                                    if($i % 2 == 0){
                                        echo "<button class='btn-dark' style='margin: 20px 20px 20px 20px;'>" . $i . "</button>";
                                   }
                                    $i = ++$i;
                                }
                                break;

                            case 'impar':
                                    while ($i <= 100) {
                                        if($i % 2 == 1){
                                            echo "<button class='btn-dark' style='margin: 20px 20px 20px 20px;'>" . $i . "</button>";
                                        }
                                        $i = ++$i;
                                    }
                                    break;
                            
                            default:
                                while ($i <= 100) {
                                        echo "<button class='btn-dark' style='margin: 20px 20px 20px 20px;'>" . $i . "</button>";
                            
                                    $i = $i + 5;
                                }
                                break;
                        }

                    }

                ?>

            </section>

        </section>

    </div>

</body>

</html>