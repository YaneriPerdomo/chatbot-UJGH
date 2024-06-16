/*función que le permite manipular el desplazamiento en la vista principal (índice)*/
function scrollp() {
    document.addEventListener("scroll" , (e) => {
        let header = document.querySelector("body > header")
        let nav_link = document.querySelectorAll(".nav-link")
        if(scrollY > 200){
            nav_link.forEach(element => {
                element.style.color = "white"
            });
            header.style.backgroundColor = "rgb(26,138,252)";
        }else{
            header.style.backgroundColor = "white"
            nav_link.forEach(element => {
                element.removeAttribute("style")
            });
        }
        
       
    })
   }
   scrollp()

   console.log("Yaneri")