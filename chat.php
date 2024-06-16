<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot Gregorin</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="icon" type="image/x-icon" href="img/Icono-gregorin.ico">
    <link rel="stylesheet" href="./style/cdn.css">
    <link rel="stylesheet" href="style/chat.css">
    <style>

        
@media screen and (max-width: 480px) {
     
    .figure-robot {
        display: none;
        visibility: hidden;
    }
 
}
    </style>
</head>
    <div>
        <figure class="figure-robot">
            <img src="./img/robot-vector.png" alt="">
        </figure>
    </div>
    <div class="wrapper">
            <div class="title " title="Volver a la pàgina principal"> <a href="./main-page-chat.php">ChatBot Gregorin</a></div> 
            <div class="form">
            <div class="gregorin">
                <div class="first-linear-greogio">
                    <span class="">Gregorin</span>
                    <p class="typed"></p>
                </div> 
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Escribe algo aquí.." required>
                <!-- Cambiamos el texto del botón de "Enviar mensajes" a "Enviar" -->
                <button id="send-btn">Enviar </button>
            </div>
        </div>
    </div>
    <div class="container-modal">
        <div class="contenido">
            <h2 class="contenido-text">Gregorin</h2>
            <div class="contenido-img">
              <img src="./img/icono-chat-bot.png" class="fs-1" alt="">
              <p class="">Hola, mi nombre es Gregorin y estoy para ayudarte <br> con cualquier duda o pregunta que tengas sobre la universidad. </p>
            </div>
            <div class="cerrar">
                <label for="btn-modal" class="btn-modal">Cerrar</label>
            </div>
        </div>
</div>
         <div class="mini_ci">
            <img src="./img/mini_cicle.png" alt="">
           </div>
           <div class="mini_ci_two">
             <img src="./img/mini_cicle_two.png" alt="">
           </div>
           <div class="container-spinner">
             <div class="loader"></div>
           </div>
           <script src="./js/chat.js"></script>
           <script src="./js/umd.js"></script> 

<script> 

            let contador = 0; //Contador 

            const typed = new Typed(".typed", {
                        strings:[ "Hola, ¿cómo puedo ayudarte? Por cierto, también puedes seguirnos en nuestras redes sociales.  "],
                        stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar.
                        typeSpeed: 40, // Velocidad en mlisegundos para poner una letra,
                        smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
                        shuffle: false, // Alterar el orden en el que escribe las palabras.
                        backDelay: 1500, // Tiempo de espera despues de que termina de escribir una palabra.
                        loop: false, // Repetir el array de strings
                        loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
                        showCursor: false, // Mostrar cursor palpitanto
                        cursorChar: '|', // Caracter para el cursor
                        contentType: 'html', // 'html' o 'null' para texto sin formato
            })
              
    $(document).ready(function() {
        $("#send-btn").on("click", function() {
            sendMessage();
        });

        $("#data").on("keypress", function(e) {
            if (e.which === 13) {
                sendMessage();
            }
        });

        function sendMessage() {
            var value = $("#data").val();
            if ($.trim(value) == '') {
                return false;
            }
            let fecha = new Date();
            

            let momentoActual = new Date() 
            hora = momentoActual.getHours() 
            minuto = momentoActual.getMinutes()
            var dt = new Date(); 
            var h =  dt.getHours(), m = dt.getMinutes();
            var _time = "";
            if(h > 12 && h < 6) {
                _time = "am."
            }{
                _time = "pm."
            }
            let horaImprimible = hora + " : " + minuto + " " + _time       
            //Sonido-enviado
            const $audio_sent =document.createElement("audio");
            $audio_sent.src ="./audio/messenger__sent_.mp3";
            $audio_sent.play()
            var message = 
            `
            
                         
                    <div class="flex">
                        <div>
                            <div class="user-inbox inbox">
                                <div class="msg-header">
                                        <strong class="you">Tú</strong> 
                                            <div class="detalles-envio"> 
                                                <small class="user-small"> ${horaImprimible} </small>
                                            </div> 
                                        <p class="p-user" > ${value} </p>
                                </div> <br>
                            </div>
                        </div>
                        <div>
                            <div class="user-flex-img">
                                <img src="./img/R (1).png" title="Tù" class="fs-1" alt="">
                            </div>
                        </div>
                    </div>    
`;

         

            $(".form").append(message);
            $("#data").val('');

            // AJAX request
            $.ajax({
                url: 'php/mensaje.php',
                type: 'POST',
                data: {
                    text: value
                },
                success:  function(result) {

                   contador =  contador + 1
                    var reply = `
                    <div class="bot-flex">    
                        <div class="bot-flex-one">
                          <div class="bot-flex-img">
                            <img src="./img/icono-chat-bot.png" class="fs-1" alt="">
                          </div>
                        </div>
                        <div>
                            <div class="bot-inbox inbox">
                                <div class="msg-header result-border">
                                    <strong>Gregorin</strong>
                                    <small class="box-small"> ${horaImprimible} </small> <p class= "type_${contador}">  </p>
                                </div>
                            </div><br><br>
                        </div>
                    </div>`;
                
                    $(".form").append(reply);
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                
                  
                     const typed_ = new Typed(`.type_${contador}`, {
                        strings: [result],
                        typeSpeed: 40,
                        showCursor: false, // Mostrar cursor palpitanto
                     })

                     //Sonido-recibido
                     const $audio_reseive = document.createElement("audio");
                    $audio_reseive.src ="./audio/messenger_receive.mp3";
                    $audio_reseive.play()
                    
               
                   
                }
            });
        }
    });
    </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script src="js/main.js"  >       
   </script>
</body>

 