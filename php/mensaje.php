<?php
include 'conexion.php'; // Incluir el archivo de conexión

// Función para tokenizar el texto
function tokenizeText($text) {
    // Usar la función de tokenización de PHP
    return explode(" ", $text);
}

// Función para agregar logos a las redes sociales y enlaces
function addContactInfoLogosAndLinks($text) {
    $logos = array(
        "Nuestro Propio Sitio Web" => array(
            "logo" => "img/logo redes/web.png",
            "link" => "http://ujgh.edu.ve/"
        ),
        "Numero de Teléfono" => array(
            "logo" => "img/logo redes/telefono.png",
            "link" => "tel:04126842016"
        ),
        "Correo de Contacto" => array(
            "logo" => "img/logo redes/correo.png",
            "link" => "contacto@ujgh.edu.ve y info@ujgh.edu.ve"
        ),
        "Instagram" => array(
            "logo" => "img/logo redes/instagram.png",
            "link" => "https://www.instagram.com/infoujgh/"
        ),
        "TikTok" => array(
            "logo" => "img/logo redes/TikTok.png",
            "link" => "https://www.tiktok.com/@infoujgh"
        ),
        "Twitter o X" => array(
            "logo" => "img/logo redes/x.png",
            "link" => "https://twitter.com/infoujgh"
        ),
        "Facebook" => array(
            "logo" => "img/logo redes/facebook.png",
            "link" => "https://www.facebook.com/infoujgh/about/?_rdr"
        ),
        "Threads" => array(
            "logo" => "img/logo redes/Threads.png",
            "link" => "https://www.instagram.com/infoujgh/"
        ),
    );

    foreach ($logos as $info => $data) {
        // Ajustar el tamaño de los logos
        $text = str_replace($info, "<a href='{$data['link']}' style='display: inline-block; margin-right: 10px;'><img src='{$data['logo']}' alt='{$info}' style='height: 3em; vertical-align: middle;'></a>", $text);
     }
 
     return $text;
 }

// Verificar si se ha recibido un mensaje del usuario a través de AJAX
if(isset($_POST['text'])){
    $getMesg = $_POST['text'];

    // Tokenizar el texto del usuario
    $tokens = tokenizeText($getMesg);

    try {
        // Establecer la conexión a la base de datos
        $pdo = conexion();

        // Consultar la pregunta que tiene más palabras en común con el mensaje del usuario
        $maxMatches = 0;
        $bestResponse = '';

        // Consultar las preguntas en la base de datos
        $query = "SELECT pregunta, respuesta FROM base_de_conocimientos";
        $stmt = $pdo->query($query);

        // Iterar sobre las preguntas y encontrar la que tenga más palabras en común
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $questionTokens = tokenizeText($row['pregunta']);
            $matches = count(array_intersect($tokens, $questionTokens));
            if ($matches > $maxMatches) {
                $maxMatches = $matches;
                $bestResponse = $row['respuesta'];
            }
        }

        // Verificar si la respuesta contiene la lista de carreras
        if (strpos($bestResponse, "En la UJGH, contamos con las siguientes Carreras:") !== false) {
            // Agregar enlaces a los PDFs debajo de cada carrera
            $bestResponse .= "<br><br>" .
            "<br>Estos son los Pensums de las Carreras:<br>".
                             "- <br><a href='pdf/Pensum-Escuela-de-Administracion.pdf'>Administración (FACES)</a><br>" .
                             "- <br><a href='pdf/Pensum-Escuela-de-Contaduria-Publica.pdf'>Contaduría Pública (FACES)</a><br>" .
                             "- <br><a href='pdf/Pensum-Escuela-de-Gerencia-de-Recursos-Humanos.pdf'>Gerencia de Recursos Humanos (FACES)</a><br>" .
                             "- <br><a href='pdf/Pensum-Escuela-de-Computacion.pdf'>Ingeniería en Computación (FING)</a><br>" .
                             "- <br><a href='pdf/Pensum-Escuela-de-Sistemas.pdf'>Ingeniería en Sistemas (FING)</a><br>" .
                             "- <br><a href='pdf/Pensum-Escuela-de-Educacion-Preescolar.pdf'>Educación Preescolar (FHAE)</a><br>" .
                             "- <br><a href='pdf/Pensum-Escuela-de-Educacion-Integral.pdf'>Educación Integral (FHAE)</a>";
        } 
        // Verificar si la respuesta contiene la información de contacto
if (strpos($bestResponse, "En la universidad de los Valores, siempre intentamos estar en el día a día de la tecnología y la comunicación, por eso tenemos diferentes formas de contacto, como lo son:") !== false) {
    // Agregar logos y enlaces de la información de contacto
    $bestResponse = addContactInfoLogosAndLinks($bestResponse);
}

        // Enviar la mejor respuesta encontrada o el mensaje predeterminado
        echo $bestResponse ?: "Lo siento, no puedo ayudarte con este inconveniente";

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage(); // Mostrar cualquier error de PDO
    }
} else {
    echo "Mensaje no recibido";
}
?>