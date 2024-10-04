<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>
    <?php
    include_once "header.php";
    require_once "conect.php";
    ?>
    <main class="container">

        <h1 class="center-align"> Cadastrar </h1>

        <form action="insere.php" method="get">
            <div class="card-panel">
                <div class="row">

                    <div class="input-field col s12">
                        <input name="CPF" placeholder="Digite no formato XXX.XXX.XXX-XX" id="cpf" type="text" class="validate" pattern="^\d{3}\.\d{3}\.\d{3}-\d{2}$" required>
                        <label for="cpf">CPF</label>
                        <span class="helper-text" data-error="campo deve ser preenchido no formato XXX.XXX.XXX-XX"></span>
                    </div>

                    <div class="input-field col s12">
                        <input name="nomeCliente" placeholder="Digite seu nome" id="nome" type="text" class="validate" required>
                        <label for="nome">Nome</label>
                        <span class="helper-text" data-error="campo com preenchimento obrigatório"></span>
                    </div>

                    <div class="input-field col s12">
                        <!-- <i class="material-icons prefix"> lock</i> -->
                        <input id="senha" type="password" class="validate" name="senha" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}" required>
                        <label for="senha">Senha</label>
                        <span class="helper-text" data-error="Deve ter 6 caracteres, no mínimo e  conter pelo menos 1 maiuscula,1 minuscula e 1 número;."> </span>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <select class="icons">
                                <option value="" disabled selected>Escolha a sua Opção</option>
                                <option value="Cardeal" data-icon="cardeal.jpg">Cardeal</option>
                                <option value="Ema" data-icon="ema.jpg">Ema</option>
                                <option value="Gansos" data-icon="gansos.jpg">Gansos</option>
                            </select>
                            <label style="font-size: 14px;">Qual a sua ave preferida?</label>
                        </div>
                    </div>

                    <div class="col s12">
                        <i class="material-icons prefix"> flight</i>
                        <span style="margin-left: 12px;"> Escolha uma companhia: </span>

                        <p>
                            <label>
                                <input class="cia" name="cia" type="radio" />
                                <span>Latam</span>
                            </label>

                            <label>
                                <input class="cia" name="cia" type="radio" />
                                <span>Gol</span>
                            </label>

                            <label>
                                <input name="cia" type="radio" />
                                <span>Azul</span>
                            </label>
                        </p>
                    </div>

                    <div class="input-field col s12">
                        <input type="text" class="datepicker" name="dataNasc" id="dataNasc">
                        <label for="dataNasc">Data de nascimento</label>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <p class="center-align">
                                <button class="btn waves-effect waves-light brown  lighten-3" type="submit" name="action">Enviar
                                    <!-- <i class="material-icons right">send</i> </button> -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </form>


    </main>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });

        // Inicializa o date picker
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.datepicker');
            M.Datepicker.init(elems, {
                autoClose: true, // Fecha o date picker automaticamente após a seleção
                format: 'dd/mm/yyyy', // Define o formato da data
                yearRange: [1900, 2100], // Define o intervalo de anos
                onSelect: function(date) {
                    console.log('Data selecionada: ', date);
                }
            });
        });
    </script>
</body>

</html>