
class CadastroFuncionario{
    constructor(){
        this.nome = document.querySelector('#nome');
        this.cpf = document.querySelector('#cpf');
        this.email = document.querySelector('#email');
        this.endereco = document.querySelector('#endereco');
        this.dataAdmissao = document.querySelector('#data');
        this.telefone = document.querySelector('#telefone');
        this.cargo = document.querySelector('#cargo');
        this.salario = document.querySelector('#salario');
        this.form = document.querySelector('#form');

        this.inicia();
    }

    inicia(){

        this.form.addEventListener('submit', event => {
            event. preventDefault();

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
        let valid = true;
        this.form.querySelectorAll('.error-cadastro-aluno').forEach(e => e.remove());
        for(let campo of this.form.querySelectorAll('.form-control')){
            let label = campo.previousElementSibling.innerText;
            // console.log(campo)
            if(campo.classList.contains('nome')){
                if(campo.value === '' || campo.value.length === 0){
                    valid = false;
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)} é obrigatório.`);
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
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)} é obrigatório.`);
                }
            }
            else if(campo.classList.contains('endereco')){
                if(campo.value === '' || campo.value.length === 0){
                    valid = false;
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)} é obrigatório.`);
                }
            }
            else if(campo.classList.contains('data')){
                if(campo.value === '' || campo.value.length === 0){
                    valid = false;
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)} é obrigatório.`);
                }
            }
            else if(campo.classList.contains('cargo')){
                if(campo.value.length === 0 || campo.value.length === ''){
                    valid = false;
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)}é obrigatório.`);
                }
            }
            else if(campo.classList.contains('salario')){
                if(campo.value.length === 0 || campo.value.length === ''){
                    valid = false;
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)} é obrigatório.`);
                }
            }
        }

        return valid;
    }
}

let cadastro = new CadastroFuncionario();