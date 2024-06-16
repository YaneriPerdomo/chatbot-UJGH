function gregorin(){
    const container_modal = document.querySelector(".container-modal");
                                                             
                            setTimeout(() => {
                            //Api para generar la voz artificial 
                                let texto = "Hola, mi nombre es Gregorin y estoy para ayudarte con cualquier duda o pregunta que tengas sobre la universidad de los valores";
                                const hablar = (texto) => speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
                                hablar(texto);
                                setTimeout(() => {
                                    container_modal.style.display = "none"
                                    setTimeout(() => {
                                        const typed = new Typed(".typed", {
                                            strings:[ "Tu Asistente Virtual para resolver todas tus dudas"],
                                            typeSpeed: 67,
                                            showCursor: false, // Mostrar cursor palpitanto
                                        })
                                        setTimeout(() => {
                                            let slider = document.querySelector(".slide-track")
                                        slider.style.display = "block";
                                        let slider_main =document.querySelector(".slider");
                                        slider_main.classList.add("border-s")
                                            setTimeout(() => {
                                                slider_main.classList.remove("border-s");
                                                
                                            }, 30000);
                                        }, 15000);
                                    }, 0);
                                }, 7000);
                            }, 3000);

}

gregorin()