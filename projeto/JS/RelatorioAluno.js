class RelatorioAluno{
    constructor(){
        this.dataInicial = document.querySelector('#data-inicial');
        this.dataFinal = document.querySelector('#data-final');
        this.semestre = document.querySelector('#semestre');
        this.dia = document.querySelector('#dia');
        this.universidade = document.querySelector('#universidade');
        this.botao = document.querySelector('#botao');

        this.requisicao();
    }

    requisicao(){


        this.botao.addEventListener('click', event => {

            const data = {
                dataInicial: this.dataInicial.value,
                dataFinal: this.dataFinal.value,
                semestre: this.semestre.value,
                dia: this.dia.value,
                universidade: this.universidade.value,
            };

            const url = 'http://localhost:8090/integrador/projeto/Controller/relatorioAlunosController.php';

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            }).then(response => response.json())
                .then(result => {
                    console.log(result)
                })
                .catch(errpr => {
                    console.log('deu ruim irmao')
                })

        });
    }
}

let relatorio = new RelatorioAluno();