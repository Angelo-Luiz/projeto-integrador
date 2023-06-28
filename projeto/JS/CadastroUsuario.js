class CadastroUsuario{
    constructor(){
        this.nome = document.querySelector('#nome');
        this.cpf = document.querySelector('#cpf');
        this.email = document.querySelector('#email');
        this.usuario = document.querySelector('#usuario');
        this.senha = document.querySelector('#senha');
        this.tipo = document.querySelector('#tipo-usuario');
        this.dataNasc = document.querySelector('#data');
    }
}

let cadastro = new CadastroUsuario();