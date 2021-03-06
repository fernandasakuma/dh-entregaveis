import React, { Component } from 'react';
import './App.css';

class App extends Component {
constructor(){
  super();

  this.state = {
    lista:[],
    item: ''
    }
}

armazena(event){
   const item = event.target.value;

   this.setState({
    item
   })
 }


  adicionarItem() {
    const arr = [
      ...this.state.lista,
      this.state.item

    ];
    this.setState({
      lista:arr
    })
  }


  render() {
    console.log(this.state)
    return (
      <div>
        <h1>To do List</h1>
        <input type="text" name='novoitem'onChange ={this.armazena.bind(this)} />
        <button onClick={this.adicionarItem.bind(this)}>
        adicionar
        </button>
        <ul>
        {
          this.state.lista.map((item) => 
          <li>{item}</li>)
        }  
        </ul>
      </div>
    );
  }
}

export default App;
