function elevarAoSegundo(x,y){
return x**y
}

console.log('exercicio 1',elevarAoSegundo(2,2))

let quadrado = function(v){
    return v*v
}

console.log('exercicio 2',quadrado(9))

//function atribuicao(){
//    var numero = 5
//}
//console.log('exercicio 3'numero)

function trianguloRetangulo(a,b){
    function hipotenusa(){
        return (a*a + b*b)**(0.5)
    }
    return a+b+hipotenusa()
}

console.log('exercicio 4', trianguloRetangulo(3,4))


function meuSanduiche(a,b,callback){
    console.log( 'estou comendo um sanduiche de: '+ a +' e '+ b)
    setTimeout( function(){
        callback()
      }, 5000 )
}

function fim (){
    console.log('terminei de comer meu sanduíche')
}

meuSanduiche('queijo', 'presunto', fim)