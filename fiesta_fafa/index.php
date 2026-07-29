<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> HBD Fafa </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/animaciones.css">

</head>

<body>
    <div id="fondo"></div>
    <div id="nieve"></div>
    <div id="estrellas"></div>
    <div id="medusas"></div>
    <main id="contenedor">

        <section id="bienvenida">
            <img src="img/sobre.png" alt="Sobre" id="sobre">

            <h1>
                <span class="emoji"> 💗 </span>
                 Fafa's Dream Party 
                 <span class="emoji"> 🪼 </span>
            </h1>

            <p class="descripcion">
                <br>
                Hoy celebramos a una persona increíble.
                Gracias por formar parte de este día tan especial.
            </p>

            <button id="btnEntrar">
                 Abrir invitación
            </button>

            <p class="creditos">
                Made with ❤️ by kenia.SSBR
            </p>
        </section>


        <section id="formulario" style="display:none;">
            <img src="img/fafa.jpg" id="fotoFafa">
            <h2>
                <span class="emoji2"> 💗 </span>
                ¡Bienvenido(a) a la fiesta de Fafa! 
                <span class="emoji2">🪼 </span>

                </h2>
            <p class="textoFormulario">
                Déjale una carta de cumpleaños con mucho cariño.
            </p>
            
            <form id="formFelicitacion" enctype="multipart/form-data">
                <input type="text" id="nombre" placeholder="Tu nombre" required>
                <textarea id="mensaje" placeholder="Escribe aquí tu felicitación..." rows="6" required></textarea>

        <label class="subirFoto">
            📷 Agrega una foto
            <p class="ejemploFoto"> De Momo o Jacke </p>

            <input type="file" id="foto" accept="image/*" hidden>

        </label>

        <button type="submit">
            💌 Enviar felicitación
        </button>
    </form>
</section>

<section id="muro">
    <div id="encabezadoMuro">
        <h2>
            <span class="emoji3">💌</span>
            Cartas para Fafa
            <span class="emoji3">💌</span>

        </h2>

        <p class="textoMuro">
            Cada sobre guarda un mensaje escrito con mucho cariño.
            <br>
            Elige uno para descubrir una sorpresa. ✨
        </p>

    </div>
    <div id="contenedorCartas">
    </div>

    <div id="finalFiesta">

    <h2>
        ✨ Gracias por llegar hasta aquí ✨
    </h2>

    <img src="img/jacke.jpg" id="fotoArtista" alt="Artista favorito">

    <p>
        Esperamos que este día
        <br>
        te haya sacado una sonrisa.
    </p>

    <h3>
        🎁 Feliz cumpleaños 💗
    </h3>

    <img src="img/pastel1.png" id="pastel">

    

</div>
</section>

<div id="visorCarta">
    <div id="fondoOscuro"></div>
    <div id="cartaGrande">
        <button id="cerrarCarta">✕</button>
        <img id="fotoCarta" src="" alt="Foto">
        <h3 id="nombreCarta"></h3>
        <p id="mensajeCarta"></p>
        <div id="fechaGrande"></div>
    </div>
</div>

    </main>

    <audio id="musica" loop>
        <source src="audio/fancy.mp3" type="audio/mpeg">
    </audio>

<div id="modalExito" class="modal">
    <div class="modalContenido">
        <h2>🎉 ¡Felicitación enviada!</h2>
        <p>
            Tu carta ya forma parte de la fiesta. 💗
        </p>

        <button id="cerrarModal">
            Seguir viendo la fiesta ✨
        </button>
    </div>
</div>
    <script src="js/cartas.js"></script>
    <script src="js/musica.js"></script>
    <script src="js/script.js"></script>

</body>
</html>