<!DOCTYPE html>
<html>

<head>

    <title> For PHP | Exercício </title>

    <!-- Metas para motor de busca do google -->
    <meta name="title" content="For PHP | Exercícios">
    <meta name="description" content="Este site é usado para exercícios de PHP.">
    <meta name="keywords" content="php, multiplos">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Portuguese">
    <meta name="author" content="Alison Christian">
    <meta charset=UTF-8 />

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

            <!-- Formulário (página inteira sem contar os resultados) -->

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" style="margin-top: 5%">

                <section class="title">

                    <h1> Exercício FOR </h1>
                            
                    <a data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="description" href="#description"><span class="badge bg-dark">DESCRIÇÃO</span></a>
                    
                    <!-- Esta div está escondida, consiste na descrição da página -->
                    <div style="display: flex; align-tems: center; justify-content: center;">
                        <div class="collapse dark" id="description" style="width:40%; margin-top: 5%;">
                            <div class="card card-body dark">
                                <p> O objetivo desta página é:
                                    <br>
                                    <br>
                                    Utilizando do sistema FOR do PHP, o cliente deve escolher se deseja <br>
                                    exibir todos os múltiplos de 3 de 0 a 100, a soma de todos os múltiplos <br>
                                    de 7 de 0 a 1000 ou exibir em ordem decrescente todos os números de 500 até 10
                                </p>
                            </div>
                        </div>
                    </div>

                </section>

                <span style="height: 15rem;margin-left: 5%; margin-right: 5%;border-left:1px solid;"></span>

                <section class="form">

                    <h1> Escolha. </h1> <br>

                    O sistema irá lhe mostrar o agrupamento de números que você escolher.

                    <br> <br>

                    <div class="input-group mb-3">
                        <label class="input-group-text dark">Escolha aqui</label>
                        <select name="option" class="form-select dark">
                            <option value="multiplos">Exiba todos os múltiplos de 3 de 0 a 100</option>
                            <option value="somaMultiplos">Exiba a soma de todos os múltiplos de 7 de 0 a 1000</option>
                            <option value="numerosDecrescentes">Exiba em ordem decrescente todos os números de 500 até 10</option>
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

                        $option = $_POST['option'];

                        switch ($option) {
                            case 'multiplos':
                                for ($i=3; $i <= 100; $i = $i+3) { 
                                    echo "<button class='btn-dark' style='margin: 20px 20px 20px 20px;'>" . $i . "</button>";
                                }
                                break;

                            case 'somaMultiplos':
                                for ($i=7; $i <= 1000; $i = $i+7) { 
                                    echo "<button class='btn-dark' style='margin: 20px 20px 20px 20px;'>" . $i . "</button>";
                                }
                                break;
                            
                            default:
                                for ($i=500; $i >= 10; $i = --$i) { 
                                    echo "<button class='btn-dark' style='margin: 20px 20px 20px 20px;'>" . $i . "</button>";
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