<html>
  <head>
    <title>Ocultar y mostrar un botón con Java Script y jQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
  <body>
    <button type="button" id="button">Acción</button>
    <button type="button" id="show">Mostrar botón acción</button>
    <button type="button" id="hide">Ocultar botón acción</button>
    <script>
      $(function(){
        $('#show').click(function(){
          $('#button').show();
        });
        $('#hide').click(function(){
          $('#button').hide();
        });
      })
    </script>
  </body>
</html>