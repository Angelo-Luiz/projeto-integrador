class CadastroVeiculo{
    constructor(){
        this.placa = document.querySelector('#placa');
        this.marca = document.querySelector('#marca');
        this.modelo = document.querySelector('#modelo');
        this.km = document.querySelector('#km');
        this.dataAquisicao = document.querySelector('#data');
        this.eixos = document.querySelector('#eixos');
        this.categoria = document.querySelector('#categoria');
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
        let valid = true;

        this.form.querySelectorAll('.error-cadastro-aluno').forEach(e => e.remove());

        for(let campo of this.form.querySelectorAll('.form-control')){

            let label = campo.previousElementSibling.innerText;

            if(campo.classList.contains('placa')){
                if(campo.value.length === 0 || campo.value.length > 7){
                    valid = false;
                    this.criaErro(campo, `Preencha o campo ${label.substring(0, label.length - 1)} com um valor válido.`);
                }

            }
            else if(campo.classList.contains('marca')){
                if(campo.value === '' || campo.value.length === 0){
                    valid = false;
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)} é obrigatório.`);
                }
            }
            else if(campo.classList.contains('modelo')){
                if(campo.value === '' || campo.value.length === 0){
                    valid = false;
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)} é obrigatório.`);
                }
            }
            else if(campo.classList.contains('km')){
                if(campo.value <= 0 || campo.value.length === 0){
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
            else if(campo.classList.contains('eixos')){
                if(campo.value.length === 0){
                    valid = false;
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)} é obrigatório.`);
                }
                else if(campo.value <= 1){
                    valid = false;
                    this.criaErro(campo, `Preencha o campo ${label.substring(0, label.length - 1)} com um valor válido.`)
                }
            }
            else if(campo.classList.contains('categoria')){
                if(campo.value === '' || campo.value.length === 0){
                    valid = false;
                    this.criaErro(campo, `O campo ${label.substring(0, label.length - 1)} é obrigatório.`);
                }
            }
        }

        return valid;
    }
}

let cadastro = new CadastroVeiculo();