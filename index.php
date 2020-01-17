<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="controlador/ChatController.js"></script>
</head>
<body>
    <header>
        <h1 class="logo">Chat daw2</h1>
      <div class="dropdown">
            <p class="usuario">Manuel</p>
            <div class="imagen"></div>
        </div>
    </header>
    
    <section>
        <aside class="container__chat">
            <a href="#">
            <div class="select__chat">
                <div class="imagen"></div>
                <p class="usuario">Manuel</p>
               
            </div>
            </a>
            <div class="select__chat">
                <div class="imagen"></div>
                <p class="usuario">Manuel</p>
               
            </div>
         
            <div class="select__chat">
                <div class="imagen"></div>
                <p class="usuario">Manuel</p>
               
            </div>
            <div class="select__chat">
                <div class="imagen"></div>
                <p class="usuario">Manuel</p>
               
            </div>
            <div class="select__chat">
                <div class="imagen"></div>
                <p class="usuario">Manuel</p>
               
            </div>
            <div class="select__chat">
                <div class="imagen"></div>
                <p class="usuario">Manuel</p>
               
            </div>
        </aside>
        <article class="chat">
            <div class="mensajes">
                <div class="emisor">nfjkesf <br><hr> <small>Manuel</small></div>
                <div class="receptor">fewf</div>
                <div class="receptor">fewf</div>
                <div class="receptor">fewf</div>
                <div class="emisor">nfjkesf</div>
                <div class="emisor">nfjkesf</div>
                <div class="emisor">nfjkesf</div>
                <div class="receptor">fewf</div>
               
            </div>
            <div class="escribir">
                <form>
                    <input type="text" name="mensaje" id="mensaje">
                    <input type="button" value="Enviar" onclick="cargar()">
                </form>
             
            </div>
        </article>
    </section>
</body>
</html>