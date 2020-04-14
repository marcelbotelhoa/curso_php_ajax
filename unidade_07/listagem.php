<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    <script>
        function retornarProdutos(data) {
            console.log(data);
        }
    </script>
     
    </head>

    <body>

        <script src="http://localhost/php_ajax/unidade_07/gerar_json.php?callback=retornarProdutos"></script>
    </body>
</html>