//exercicio 5
function qualONumero(){
let numero1 = prompt('Digite um número:')
let numero2 = prompt('Digite outro número:')
let confirmacao = confirm('Seus números são:'+ numero1 + ' e ' + numero2 +'?')

if (!confirmacao){
window.location = 'file:///C:/xampp/htdocs/dh-entregaveis/AULA2JS/index2.html'
} else {
    if (parseInt(numero1) > parseInt(numero2)) {
        alert('O numero maior é '+ numero1)
    } else if (parseInt(numero2) > parseInt(numero1)) {
        alert('O numero maior é '+ numero2)
    } else {
        alert('Mesmo numero')
    }
}
}

qualONumero()

