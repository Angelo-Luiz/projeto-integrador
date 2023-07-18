class EditarCadastro{
    constructor() {
        this.btnCarregar = document.querySelector('#carregar-formulario');
        this.secaoForm = document.querySelector('#section-form');
        this.operacao = document.querySelector('#operacao');
        this.formulario = document.querySelector('#formulario');
        this.cabecalho = document.querySelector('#cabecalho');
        this.corpo = document.querySelector('#corpo');
        this.btnDeletar = document.querySelector('#btn-deletar');

        this.carregaFormulario();
    }

    carregaFormulario(){
        this.btnCarregar.addEventListener('click', event => {
            this.exibeForm();
            if(this.operacao.value === '1'){
                console.log('Editar');
            }if(this.operacao.value === '2'){

                const url = 'http://localhost:8090/integrador/projeto-integrador/projeto/View/selectDeletarAjax.php';
                const data = {
                    operacao: this.operacao.value,
                    formulario: this.formulario.value
                }
                fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                }).then(response => response.text())
                    .then(response => {
                        this.cabecalho.innerHTML = "<h3>Deletar Aluno</h3>"
                        this.corpo.innerHTML = response;
                        this.btnDeletar.addEventListener('click', event => {
                            console.log(document.querySelector('#select-deletar').value);
                        })
                    });
            }
        });
    }

    exibeForm(){
        this.secaoForm.style.display = 'block';
    }
    ocultaForm(){
        this.secaoForm.style.display = 'none'
    }
}

let mod = new EditarCadastro();