//exercicio 1
let mudarCorVermelho = function(){
    document.body.style.background = "red"
    }

let mudarCorAzul = function(){
    document.body.style.background = "blue"
    }

let x = '1'
let paragrafo = document.createElement('div')
document.body.appendChild(paragrafo)
let contador = '0'

button.addEventListener("click", function(){
    alert("Olá mundo")


    if (x === '1'){
    mudarCorAzul() 
    x = '2'
    } else { 
    mudarCorVermelho()
    x = '1'
    } 
    contador++
    paragrafo.innerHTML = ('Clique Número:' + contador )
    })