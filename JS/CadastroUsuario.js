class CadastroUsuario{
    constructor(){
        this.nome = document.querySelector('#nome');
        this.cpf = document.querySelector('#cpf');
        this.email = document.querySelector('#email');
        this.usuario = document.querySelector('#usuario');
        this.senha = document.querySelector('#senha');
        this.tipo = document.querySelector('#tipo-usuario');
        this.dataNasc = document.querySelector('#data');
        this.form = document.querySelector('#form');

        this.inicia();
    }

    inicia(){
        this.form.addEventListener('submit', event => {
            event.preventDefault();

            if(this.validaCampos()) this.form.submit();
        })
    }

    criaErro(campo, msg){
        let div = document.createElement('div');
        div.innerText = msg;
        div.setAttribute('class', 'error-cadastro-aluno');
        campo.insertAdjacentElement('afterend', div);
    }

    validaCampos(){

        this.form.querySelectorAll('.error-cadastro-aluno').forEach(e => e.remove());
        let valid = true;
        for(let campo of this.form.querySelectorAll('.form-control')){

            let label = campo.previousElementSibling.innerText;

            if(campo.classList.contains('nome')){
                if(campo.value === '' || campo.value.length === 0){
                    valid = false;
                    this.criaErro(campo, `Preencha o campo ${label.substring(0, label.length - 1)} com um valor válido`);
                }
            }
            else if(campo.classList.contains('cpf')){
                if(campo.value.length !== 11){
                    valid = false;
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)} deve conter 11 caracteres.`);
                    }
                }
            else if(campo.classList.contains('email')){
                if(campo.value === '' || campo.value.length === 0){
                    valid = false;
                    this.criaErro(campo, `Preencha o campo ${label.substring(0, label.length - 1)} com um valor válido`);
                    }
                }
            else if(campo.classList.contains('data')){
                if(campo.value === '' || campo.value.length === 0){
                     valid = false;
                     this.criaErro(campo, `Preencha o campo ${label.substring(0, label.length - 1)} com um valor válido`);
                    }

                }
            else if(campo.classList.contains('usuario')){
                if(campo.value.length < 5 || campo.value.length > 10){
                    valid = false;
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)} deve conter entre 5 e 10 caracteres.`);
                }
            }
            else if(campo.classList.contains('senha')){
                if(campo.value.length < 5 || campo.value.length > 10){
                    valid = false;
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)} deve conter entre 5 e 10 caracteres.`);
                }
            }
            else if(campo.classList.contains('tipo-usuario')){
                if(campo.value.length === 0 || campo.value.length === ''){
                    valid = false;
                    this.criaErro(campo, `${label.substring(0, label.length - 1)}.`);
                }
            }

        }
        return valid;
    }
}

let cadastro = new CadastroUsuario();