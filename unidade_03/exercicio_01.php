<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <style>
            .curso {
                color:#FF0000;
            }
        </style>
    </head>

    <body>
    <div class="curso"></div>
    <div class="curso"></div>
    <div class="curso"></div>

    <script src="jquery.js"></script>
    <script>
        $('div.curso:first').load('dados.txt');
    </script>
    </body>
</html>