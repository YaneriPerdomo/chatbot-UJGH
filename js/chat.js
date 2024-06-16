//Modificaciones que se realizaron con javascript para la vista del chat.

//spinner-animation 
 let container_spinner = document.querySelector(".container-spinner")
 const body = document.querySelector("body");

 setTimeout(() => {
     //Remover después de 1 segundo la clase contenedor-spinner usando una palabra reservada del DOM
     body.removeChild(body.children[5]) //Eliminar el hijo numero 4 del body
 }, 1000);

//responsive
   function responsivaphoto(mediaquery){
    let breakpoint = window.matchMedia(mediaquery)
  
    const responsive =  (e) => {
        const body = document.querySelector("body > div ");
           
        if(e.matches){  
         body.removeChild(body.children[0])
            const wrapper =document.querySelector("wrapper")
          
        }else{
            body.innerHTML = `  <figure class="figure-robot">
                                    <img src="./img/robot-vector.png" alt="">
                                </figure>
                            `
        }
    }
   breakpoint.addListener(responsive)

}

window.addEventListener("DOMContentLoaded",(e) => {
  responsivaphoto("(max-width: 960px)")
})
