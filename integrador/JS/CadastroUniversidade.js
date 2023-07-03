
class CadastroUniversidade{
    constructor() {
        this.nome = document.querySelector('#nome');
        this.cidade = document.querySelector('#cidade');
        this.sigla = document.querySelector('#sigla');
        this.form = document.querySelector('#form');

        this.inicia();

    }

    inicia(){

        this.form.addEventListener('submit', event => {
            event.preventDefault();
            if(this.validaCampos()) this.form.submit();
        });

    }

    criaErro(campo, msg){
        let div = document.createElement('div');
        div.innerText = msg;
        div.setAttribute('class', 'error-cadastro-aluno');
        campo.insertAdjacentElement('afterend', div);
    }
    validaCampos(){

        let valid = true;
        document.querySelectorAll('.error-cadastro-aluno').forEach(e => e.remove());
        for(let campo of document.querySelectorAll('.form-control')){

            let label = campo.previousElementSibling.innerText;
            if(campo.classList.contains('nome')){
                if(campo.value === '' || campo.value.length === 0){
                    valid = false;
                    this.criaErro(campo, `Preencha o campo ${label.substring(0, label.length - 1)} com um valor válido.`);
                }
            }
            else if(campo.classList.contains('sigla')){
                if(campo.value === '' || campo.value.length === 0){
                    valid = false;
                    this.criaErro(campo, `Preencha o campo ${label.substring(0, label.length - 1)} com um valor válido.`);
                }
            }
            else if(campo.classList.contains('cidade')){
                console.log('toaqui')
                if(campo.value === 0 || campo.value === ''){
                    valid = false;
                    console.log('toaqui')
                    this.criaErro(campo, `Preencha o campo ${label.substring(0, label.length - 1)} com um valor válido.`);
                }
            }

        }

        return valid;
    }
}

let validaCadastro = new CadastroUniversidade();