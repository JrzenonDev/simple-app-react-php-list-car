import React from 'react';
import Tabela from './Tabela';

export default class App extends React.Component {

    // trabalhando com estados
    constructor() {

        // chmando a classe super do react
        super();

        this.state=({
            db: []
        });

        this.exibirCarros();
    }

    // método
    exibirCarros() {
        fetch("http://localhost:80/")
        .then((response) => response.json())
        .then((responseJson) =>
        {
            // mudando o estado do db
            this.setState({
                db: responseJson

            });
            //console.log(this.state.db);
        })
    }

    render() {
        return(
            <div>
                <Tabela arrayCarros={this.state.db} />
            </div>
        );
    }
}