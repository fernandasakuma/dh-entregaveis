import React, { Component } from 'react';
import './App.css';
import Botao from './Botao';
import Input from './Input';

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
    console.log(arr);

    this.setState({
      lista:arr
    })
  }


  render() {
    console.log(this.state)
    return (
      <div>
        <h1>To do List</h1>
        <Input tipo='text' onChange={this.armazena.bind(this)} />   
        <Botao title='adicionar' enviar={this.adicionarItem.bind(this)} />
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
