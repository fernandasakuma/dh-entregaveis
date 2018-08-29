window.onload = function() {

//Seletores - exercicio 1 
document.getElementById("titular").style.display = 'none'

//Seletores - exercicio 2
document.querySelector("#lechuza").style.filter = "grayscale(100%)"

//Seletores - exercicio 3
document.querySelectorAll("input").forEach(
function(element){
element.style.background = "red";
});

//DOM - Seletores e Atributos - exercicio 1
console.log(document.getElementById('copyright').attributes)

//DOM - Seletores e Atributos - exercicio 2
console.log(document.querySelector(".twitter").getAttribute('href'))

//DOM - Seletores e Atributos - exercicio 3
console.log(document.querySelector(".facebook").getAttribute('href'))

//DOM - Seletores e Atributos - exercicio 4
document.querySelector('.youtube').setAttribute('href','https://www.youtube.com/channel/UCRQdwmWMhTcqDFjPT4UPZYA')

//DOM - Seletores e Atributos - exercicio 5
console.log(document.querySelector("form").hasAttribute("action"))

//DOM - Seletores e Atributos - exercicio 6
document.querySelector('.formulario').removeAttribute("url")
document.querySelector('.formulario').setAttribute("action","http://www.digitalhouse.com")

//DOM - Seletores e Atributos - exercicio 7
document.querySelectorAll("h2").forEach(
    function(element){
    element.style.color = "red";
    });

//DOM - Seletores e Atributos - exercicio 8
document.querySelectorAll(".icon").forEach(
    function(element){
    element.style.color = "green";
    });

//Elementos - exercicio 1 - incompleto 
let botaonovo = document.createElement("BUTTON")
let pai = document.querySelector('botoes')
pai.appendChild(botaonovo)
botaonovo.onclick=function(){
    document.getElementById("lechuza").style.display = 'none'
}
}


