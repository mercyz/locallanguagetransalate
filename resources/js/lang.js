require('./bootstrap');
import axios from "axios";
const transbutton = document.getElementById("translate_lang");
const clearBtn = document.getElementById("clear_trans");
const textFromInput = document.getElementById("word");
let inputNav = document.querySelectorAll(".nav_trans_custom");
    transbutton.addEventListener("click", function(){

        console.log("clicked");
        inputNav.forEach(items  => {
            if(items.classList.contains("active")){
                let selectedLanguage =  items.getAttribute("aria-controls");
              let   url = "api/search"
                axios.post(url,{
                    word : textFromInput.value ,
                    lang : selectedLanguage
                }).then( e  => {
                   let  data = e.data.data
                    data.forEach( item => {
                        let englishText =  document.querySelector("#englishText")
                        let khanaText =  document.querySelector("#khanaText")
                        let gokanaText =  document.querySelector("#gokanaText")
                        englishText.innerHTML = item.english
                        khanaText.innerHTML = item.khana
                        gokanaText.innerHTML = item.gokana
                    })
                })
            }
        });
    })
    clearBtn.addEventListener("click", function(){

        let englishText =  document.querySelector("#englishText")
        let khanaText =  document.querySelector("#khanaText")
        let gokanaText =  document.querySelector("#gokanaText")
        textFromInput.value = ""
        englishText.innerText = ""
        khanaText.innerText = ""
        gokanaText.innerText = ""
    })
