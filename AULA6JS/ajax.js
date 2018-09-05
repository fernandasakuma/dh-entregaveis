  
let xmlhttp = new XMLHttpRequest()

xmlhttp.onreadystatechange = function(){
    if (xmlhttp.readyState === 4 && xmlhttp.status === 200){
        let resposta = JSON.parse(xmlhttp.responseText)
        //console.log(resposta)


        let respostaEmArray = Object.entries(resposta.contenido)
        respostaEmArray.forEach(function(item){
        let pais = item[0]
        let id = item[1]
        console.log(respostaEmArray)

        let option = document.createElement('option')
        let texto = document.createTextNode(pais)

        option.setAttribute('value',id)
        option.appendChild(texto)
        selectPaises.appendChild(option)
        })
    }
}

// fazer o exercicio 7!!!!!

xmlhttp.open("GET","http://pilote.techo.org/?do=api.getPaises", true)
xmlhttp.send()