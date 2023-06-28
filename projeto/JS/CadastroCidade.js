
class CadastroCidade{
    constructor(){
        this.nome = document.querySelector('#nome');
        this.cep = document.querySelector('#cep');
        this.uf = document.querySelector('#uf');
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
        this.form.querySelectorAll('.error-cadastro-aluno').forEach(e => e.remove());
        for(let campo of document.querySelectorAll('.form-control ')){
            let label = campo.previousElementSibling.innerText;

            if(campo.classList.contains('nome')){
                if(campo.value === '' || campo.value.length === 0){
                    valid = false;
                    this.criaErro(campo, `Insira uma valor válido no campo ${label.substring(0, label.length - 1)}.`);
                }
            }

            else if(campo.classList.contains('cep')){
                if(campo.value === '' || campo.value.length !== 8){
                    valid = false;
                    this.criaErro(campo, `Insira uma valor válido no campo ${label.substring(0, label.length - 1)}.`);
                }
            }

            else if(campo.classList.contains('uf')){
                if(campo.value === '' || campo.value.length !== 2){
                    valid = false;
                    this.criaErro(campo, `Insira uma valor válido no campo ${label.substring(0, label.length - 1)}.`)
                }
            }

        }

        return valid;
    }
}

let cadastroCidade = new CadastroCidade();