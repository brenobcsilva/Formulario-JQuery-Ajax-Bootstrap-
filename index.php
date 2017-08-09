<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="Validar.js" type="text/javascript"></script>
        <title>Formulario</title>
        <!-- Bootstrap -->
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body><br>
        <form id="formulario">
            <div class="form-group">
                <label for="exampleInputNome">Nome: </label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">Senha: </label>
                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputSenha">Senha: </label>
                <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputDataNascimento">Data Nascimento: </label>
                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div><br>
            <button id="enviar" type="submit" class="btn btn-default" style="align: center">Enviar</button>
            <input type="hidden" id="metodo" value="formularioAjax"/>
        </form>
        <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>