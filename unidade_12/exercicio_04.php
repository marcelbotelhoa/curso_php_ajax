<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>

        <script src="_js/jquery.js"></script>
        <script>
            $.ajax({
                type:"GET",
                url:"http//api.openweather.org/data/2.5/weather?q=Sao+Paulo,br&units=metric&lang=pt"
                async:false
            }).done(function(data) {
                console.log(data.main.temp);
                console.log(data.name);
                console.log(data.weather[0].description);
            }).fail(function() {
                console.log("falha");
            });
        </script>
    </body>
</html>