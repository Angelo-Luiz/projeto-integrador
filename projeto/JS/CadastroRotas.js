class CadastroRotas{
    constructor(){
        this.desc = document.querySelector('#descricao');
        this.cidade = document.querySelector('#cidade');
        this.cidade2 = document.querySelector('#cidade2');
        this.distancia = document.querySelector('#distancia');
        this.form = document.querySelector('#form');

        this.inicia();
    }

    inicia(){
        this.form.addEventListener('submit', event => {
            event.preventDefault();

            if(this.validaCampos()) this.form.submit();;
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
        document.querySelectorAll('.error-cadastro-aluno').forEach(e => e.remove());

        for(let campo of this.form.querySelectorAll('.form-control')){

            let label = campo.previousElementSibling.innerText;

            if(campo.classList.contains('descricao')){
                if(campo.value === '' || campo.value.length === 0){
                    valid = false;
                    this.criaErro(campo,`Preencha o campo ${label.substring(0, label.length - 1)} com um valor válido.`)
                }
            }
            else if(campo.classList.contains('cidade')){
                if(campo.value === 0 || campo.value === ''){
                    valid = false;
                    this.criaErro(campo, `Preencha o campo ${label.substring(0, label.length - 1)} com um valor válido.`);
                    }
            }
            else if(campo.classList.contains('cidade2')){
                if(campo.value === 0 || campo.value === ''){
                    valid = false;
                    this.criaErro(campo, `Preencha o campo ${label.substring(0, label.length - 1)} com um valor válido.`);
                }
            }
            if(campo.classList.contains('distancia')){
                if(campo.value === '' || campo.value.length === 0){
                    valid = false;
                    this.criaErro(campo,`Preencha o campo ${label.substring(0, label.length - 1)} com um valor válido.`)
                }
            }
        }

        if(this.cidade.value === this.cidade2.value){
            valid = false;
            this.criaErro(this.cidade2, `Selecione duas cidades diferente para o trajeto.`)
        }

        return valid;
    }
}

let cadastro = new CadastroRotas();