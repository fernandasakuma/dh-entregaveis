import React, { Component } from 'react';
import './App.css';

class App extends Component {
constructor(){
  super();

  this.state = {
    lista:[]
    }
}

armazena(event){
  // console.log(event.target)
   const novoitem = event.target.value;

   this.setState({
    novoitem
   })
 }

  adicionarItem() {
    const arr = [
      ...this.state.lista,
      ...this.state.novoitem

    ];

  }

  render() {
    return (
      <div>
        <h1>To do List</h1>
        <input type="text" name='novoitem'onChange ={this.armazena.bind(this)}/> />
        <button onClick={this.adicionarItem.bind(this)}>
        adicionar
        </button>
        <ul>
        {
          this.state.lista.map(item => {
            <li>{item}</li>
          })
        }  
        </ul>
      </div>
    );
  }
}

export default App;
