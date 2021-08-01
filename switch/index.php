<!DOCTYPE html>
<html>

<head>

    <title> Switch PHP | Exercício </title>

    <!-- Metas para motor de busca do google -->
    <meta charset=UTF-8 >
    <meta name="title" content="Switch PHP | Exercícios">
    <meta name="description" content="Este site é usado para exercícios de PHP.">
    <meta name="keywords" content="php, switch, times">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Portuguese">
    <meta name="author" content="Alison Christian">

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

            form, #result {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
            }

            form section {
                display: flex;
                flex-direction: column;
            }

            .team-img  {
                height: 10em;
                width: auto;
            }

    </style>

    <div id=container>

        <section id=content>

        <!-- Formulário (página toda, com exceção do resultado) -->

            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" style="margin-top: 5%">

                <section class="title">

                    <h1> Exercício SWITCH </h1> 
                            
                    <a data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="description" href="#description"><span class="badge bg-dark">DESCRIÇÃO</span></a>
                    
                    <div style="display: flex; align-tems: center; justify-content: center;">
                        <div class="collapse dark" id="description" style="width:40%; margin-top: 5%;">
                            <div class="card card-body dark">
                                <p> O objetivo desta página é:
                                    <br>
                                    <br>
                                    Utilizando do sistema SWITCH do PHP, o cliente deve informar seu nome <br>
                                    e a sua cor favorita. Após enviar, o sistema deve apresentar uma frase <br>
                                    específica apresentando seu nome, seu time e uma imagem do mesmo.
                                </p>
                            </div>
                        </div>
                    </div>

                </section>

                <span style="height: 15rem;margin-left: 5%; margin-right: 5%;border-left:1px solid;"></span>

                <section class="form">

                    <div class="input-group" style="margin-bottom: 5%">
                        <span class="input-group-text dark">Qual o seu nome?</span>
                        <input class="dark" id="name" name=name type="text" aria-label="name" class="form-control">
                    </div>

                    <script type=text/javascript>

                        // Função para verificar se o input há somente espaço do nome

                        const t = document.querySelector("#name")
                        t.addEventListener('change', function(e){
                                    if (t.value == ""){
                                        document.querySelector("#btn-sumit").textContent = "Escreva seu nome para enviar";                        
                                        document.querySelector("#btn-sumit").setAttribute("disabled", true);        
                                    }

                                    else {
                                        document.querySelector("#btn-sumit").textContent = "Enviar";                        
                                        document.querySelector("#btn-sumit").removeAttribute("disabled");     
                                    }
                        });

                        // 

                    </script>
                    
                    <div class="input-group mb-3">
                        <label class="input-group-text dark">Escolha a cor que mais te agrada</label>
                        <select name=color class="form-select dark">
                            <option value="red">Vermelho</option>
                            <option value="green">Verde</option>
                            <option value="yellow">Amarelo</option>
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
                        <button id="btn-sumit" class="btn btn-dark dark" type="submit" disabled> Escreva seu nome para enviar.</button>
                    </div>

                </section>

            </form>

            <hr style="color: white; width: 100%;" />

            <!-- Resultado das conversões -->

            <section id="result">         

                <?php 

                    if ($_POST) {

                        $name = $_POST['name'];
                        $color = $_POST['color'];

                        switch ($color) {
                            case 'red':
                                echo "Olá " . $name . ", com base na cor escolhida temos a certeza de que você é um grande torcedor do <b> SPORT CLUB CORINTHIANS PAULISTA </b> <span style='height: 15rem;margin-left: 5%; margin-right: 5%;border-left:1px solid;'></span> <img class='team-img' src='media/img/" . $color . "team.png' />";
                                break;

                            case 'green':
                                echo "Olá " . $name . ", com base na cor escolhida temos a certeza de que você é um grande torcedor do <b> SOCIEDADE ESPORTIVA PALMEIRAS </b> <span style='height: 15rem;margin-left: 5%; margin-right: 5%;border-left:1px solid;'></span> <img class='team-img' src='media/img/" . $color . "team.png' />";;
                                break;
                            
                            default:
                                echo "Olá " . $name . ", com base na cor escolhida temos a certeza de que você é um grande torcedor do <b> LOS ANGELES LAKERS </b> <span style='height: 15rem;margin-left: 5%; margin-right: 5%;border-left:1px solid;'></span> <img class='team-img' src='media/img/" . $color . "team.png' />";;
                                break;
                        }

                    }

                ?>

            </section>

        </section>

    </div>

</body>

</html>