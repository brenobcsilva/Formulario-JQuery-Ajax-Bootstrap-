<!doctype html>
<html lang="pt-br">
    <head>
        <title>Formulario</title>
        <script src="js.js" type="text/javascript"></script>
        <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        if(isset ($_POST) && !empty($_POST)){
            echo '<pre>';
            print_r($_POST);
            echo '<pre>';
        }
        ?>
        <form class="form">
            <p>Nome:</p>
            <p><input class="nome" name="nome" type="text"/></p>
            <p>SobreNome:</p>
            <p><input class="nome" name="nome" type="text"/></p>
            <input type="submit" id="enviar">
        </form>
        
        
    </body>
</html>