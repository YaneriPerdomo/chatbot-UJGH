<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Universidad Dr. Jose Gregorio Hernandez</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="img/ico-main.ico">
    <link rel="stylesheet" href="./style/cdn.css">
    <link rel="stylesheet" href="style/index.css">
   <style>
    .nav-main   {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
}

.nav-main a{
    text-decoration: none;
    color: rgb(49, 49, 49);
}

.small-logo {
    width: 3rem;
   
}

header{
   
    position: fixed;
    width: 100%;
    background: white;
    z-index: 999999;
}

 

.logo-ujgh{
    position: absolute;
    z-index: 9999;
}




/* Header */
label{
color: rgb(136, 136, 136);
font-weight: 400;
}

[type="button"]{
padding: 0.3rem 2rem 0.3rem 2rem;
border-radius: 0.4rem;
color: white;
border: 0;
font-weight: lighter;    
background: rgb(57,133,230);
background: linear-gradient(90deg, rgba(57,133,230,1) 34%, rgba(55,106,226,1) 62%, rgba(55,104,226,1) 64%);
transition: background-image 1s linear, box-shadow 1s linear;
}

[type="text"],select{
color: white;
background: rgb(53, 54, 58);
border:0;


}

[type="text"]:focus{
border: 0;
}
[type="button"]:hover{
background-image: linear-gradient(
    90deg,
    rgb(21, 86, 170) 20%,
    rgb(25, 88, 170) 50%
);
}

option:focus{
background-color: grey !important;
}

.nav-item > a{
color: rgb(97 97 97) ;
cursor: pointer;
}

header > nav, footer{

background-color:  (20, 22, 28) ;
}

header{
background-color:  white;
}


.ha{
width: 100% ;


}

.h{


width: 5rem;
padding: 0;

background-image: none !important;
}
span > img{
width: 90%;

}

.text-white2{
color: grey;
}


/*Imagen */

main .container-fluid > img{
max-height: 95vh;
min-height: 50rem;
width: 100%;
margin-bottom: 6rem;
clip-path: polygon(0 0, 100% 0, 100% 100%, 0 88%);
}

.detalls{
width: 100%;
height: 100%;
top: 3rem;
left: 0;
position:absolute;
background-position:  center center;
flex-direction: row;
justify-content: center;
align-items: center;
gap: 1rem;
flex-wrap: wrap;
}

.detalls h1{
color: yellow;
}

.detalls p{
color: white;
font-weight: 300;

}


img{
width: 100%;
height: 100%;
object-position: center center;
object-fit: cover;
}
.position-relative{

position: absolute;

}

.detalls > div {
transition: border-bottom 1s linear ;

display: block;

}

.detalls > div > a{
background: white;
padding-bottom: 1rem;
}


.container-fluid{
padding: 0rem;
}

.detalls >  div > a{
text-decoration: none;
}
.link-white{
background: #ffffff;
padding: 1rem;
color: black;
FONT-WEIGHT: 500;
}

.link-blue{
background: #4262bf !important;
padding: 1rem;
color: white !important;
FONT-WEIGHT: 500;
}

a >span:hover::after{
content: " ➡️ ";
}

.figure-logo > img{
    width: 60rem;
  }

  @media screen and (max-width: 768px) {
    .detalls{

  top: 9rem;

    }}
    
@media screen and (max-width: 480px) {
a > span{
font-size: 0.7rem;

}

.detalls{

    top: 9rem;

  }
}

.dev{
background-color: var(--background_yellow);
padding: 1rem;
position: fixed;
right: 0.5rem;
bottom: 0.5rem;
border-radius: 1rem 1rem 1rem 1rem;
cursor: pointer;
z-index: 999;
border: solid var(--background_blue) 0.2rem;
}

   </style>
</head>
<body>
    
<header class="d-flex justify-content-lg-center  w-100  justify-content-start  ">
    <nav class="navbar navbar-expand-lg     ">
        <div class="container-fluid  ">
            <button class="h navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ha w-50 p-0">
                    <img src="./img/5072748.png"  class="img-fluid w-50"  alt="">
                </span>
              </button>
              <div class="text-center ms-5 me-lg-5 ">
                 <a class="navbar-brand fw-medium fs-3" href="#"><img src="./img/logo-mini.png" class="small-logo" alt=""></a>          
              </div>   
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item ms-2 me-lg-2">
                <a class="nav-link active fw-bold " aria-current="page" href="#">Carreras</a>
              </li>
              <li class="nav-item ms-2 me-lg-2">
                <a class="nav-link fw-bold" href="#">Nosotros</a>
              </li>
              <li class="nav-item ms-2 me-lg-2">
                <a class="nav-link fw-bold" href="#">Contacto</a>
              </li>
              <li class="nav-item ms-2 me-lg-2">
                <a class="nav-link fw-bold" href="#">Autoridades</a>
              </li>
              <li class="nav-item ms-2 me-lg-2">
                <a class="nav-link fw-bold" href="#">Memorias Digitales</a>
              </li>
              <li class="nav-item ms-2 me-lg-2">
                <a class="nav-link fw-bold" href="#">Sistema</a>
              </li>
            </ul>       
          </div>
        </div>
      </nav>
</header>
    <main>
    <div id="Hogar" class="container-fluid w-100  position-relative ">       
            <img src="./img/fondo-universidad.png"
             class="img-fluid w-100 " alt="">
           <div class="detalls text-center align-self-center">
                   <div>
                      <figure class="figure-logo">
                        <img src="./img/black-logo.png" class="img-fluid  figure-logo__img" alt="">
                      </figure>
                        <a href=""><span class="link-white">Nuestras Carreras</span></a><br><br><br>
                        <a href="./main-page-chat.php"><span class="link-blue"> Asistente Virtual</span></a><br><br><br>
                        <a href=" "><span class="link-white">Ingresar al sistema</span></a><br><br><br>
                        <a href="" ><span class="link-blue">Revista Científica Arbitrada Innovación y Gerencia</span></a><br><br><br>
                   </div>                      
            </div>     
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </main>
    <script src="./js/index.js"></script>
    <script src="./js/cdn.js" ></script>
   
</body>
</html>