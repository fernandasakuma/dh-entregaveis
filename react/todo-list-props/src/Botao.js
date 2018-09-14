import React, { Component } from 'react';

class Botao extends React.Component {
    render(){
        return(
            <button onClick={this.props.enviar}>
                {this.props.title}
            </button>
        )
    }
}

export default Botao;