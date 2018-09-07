
 //   fetch('http://jsonplaceholder.typecode.com/posts')
    // toda vez que uma funcão for seguida de .then é uma promise
 //   .then(function(response){
 //       response.json().then(function(dados){
 //           console.log(dados)
 //       })
 //   })

 //   function mostrarNoLog(algumaCoisa){
 //       console.log(algumaCoisa)
 //   }

    function mostrarNaTela(dados){
    let conteudo = ''

    dados.forEach(post => {
        let title = post.title
        let body = post.body
            
        conteudo = conteudo + '<h2>' + title +'</h2>'
        conteudo = conteudo + '<p>' + body +'</p>'
            
        document.body.innerHTML = conteudo
        })
    }

    //arrowfunction: 
    fetch('https://jsonplaceholder.typicode.com/posts')
    .then((response) => response.json())
    .then(mostrarNaTela)
    


    //tipos de função no js: 
    //function nomeFuncao(){
    //}

    //let nomeFuncao(){
    //}

    //let nomeFuncao = () => {
    //}
