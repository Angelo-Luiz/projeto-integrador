class CadastroAluno{
    constructor() {
        this.nome = document.querySelector('#nome');
        this.email = document.querySelector('#email');
        this.cpf = document.querySelector('#cpf');
        this.telefone = document.querySelector('#telefone');
        this.dataNasc = document.querySelector('#data');
        this.universidade = document.querySelector('#universidade');
        this.frequencia = document.querySelector('#frequencia');
        this.botao = document.querySelector('.botao');
        this.formulario = document.querySelector('#form');

        this.inicia();
    }

    inicia(){
        this.formulario.addEventListener('submit', (event) => {
           event.preventDefault();

          if(this.validaCampos(event)) {
              this.formulario.submit();
          }
        });
    }

    criaErro(campo, msg){
        let div = document.createElement('div');
        div.innerText = msg;
        div.setAttribute('class', 'error-cadastro-aluno');
        campo.insertAdjacentElement('afterend', div);
    }

    validaCampos(event){
        let valid = true;
        document.querySelectorAll('.error-cadastro-aluno').forEach(e => e.remove());
        for(let campo of document.querySelectorAll('.form-control')){

            let label = campo.previousElementSibling.innerText;

            if(campo.classList.contains('cpf')){
                if(campo.value === ''){
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)} é obrigatório.`);
                    valid = false;
                }
                else if(campo.value.length !== 11){
                    this.criaErro(campo, `Insira um valor válido do campo ${label.substring(0, label.length - 1)}.`);
                }
            }
            else if(campo.classList.contains('nome')){
                if(!campo.value || campo.value === ''){
                    this.criaErro(campo, `O campo ${label.substring(0, label.length -1)} é obrigatório.`);
                    valid = false;
                }
            }
            else if(campo.classList.contains('email')){
                if(!campo.value || campo.value === ''){
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)} é obrigatório`);
                    valid = false;
                }
            }
            else if(campo.classList.contains('telefone')){
                if(!campo.value || campo.value === ''){
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)} é obrigatório`);
                    valid = false;
                }
            }
            else if(campo.classList.contains('data')){
                if(!campo.value || campo.value === ''){
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)} é obrigatório`);
                    valid = false;
                }
            }
            else if(campo.classList.contains('universidade')){
                if(!campo.value || campo.value === ''){
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)} é obrigatório`);
                    valid = false;
                }
            }

        }

        return valid;
    }

}

let valida = new CadastroAluno();


