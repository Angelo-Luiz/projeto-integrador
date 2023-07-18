class RelatorioAluno{
    constructor(){
        this.dataInicial = document.querySelector('#data-inicial');
        this.dataFinal = document.querySelector('#data-final');
        this.semestre = document.querySelector('#semestre');
        this.dia = document.querySelector('#dia');
        this.universidade = document.querySelector('#universidade');
        this.botao = document.querySelector('#botao');
        this.form = document.querySelector('#form');
        this.tabela = document.querySelector('#tbody-aluno');


       if(this.validaCampos()) { this.requisicao(); }
    }

    criaErro(campo, msg){
        let div = document.createElement('div');
        div.innerText = msg;
        div.setAttribute('class', 'error-cadastro-aluno');
        campo.insertAdjacentElement('afterend', div);
    }

    validaCampos(){
        let valid = true;

        this.botao.addEventListener('click', event => {

            this.form.querySelectorAll('.error-cadastro-aluno').forEach(e => e.remove());
            if(this.dataFinal.value < this.dataInicial.value){
                valid = false;
                this.criaErro(this.dataFinal, `Preencha os campos com uma data válida.`);
            }
        });

        return valid;
    }

    requisicao(){


        this.botao.addEventListener('click', event => {

            const data = {
                dataInicial: this.dataInicial.value,
                dataFinal: this.dataFinal.value,
                semestre: this.semestre.value,
                dia: this.dia.value,
                universidade: this.universidade.value
            };

            const url = 'http://localhost:8090/integrador/projeto-integrador/projeto/Controller/relatorioAlunosController.php';

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            }).then(response => response.json())
                .then(result => {
                    console.log(result)
                    this.montaTabela(result);
                })
                .catch(errpr => {
                    console.log('deu ruim irmao');
                })

        });
    }

    montaTabela(result){
        this.tabela.querySelectorAll('tr > td').forEach(e => e.remove());
        for(let i of result){
            let tr = document.createElement('tr');
            let tdId = document.createElement('td');
            let tdNome = document.createElement('td');
            let tdCpf = document.createElement('td');
            let tdEmail = document.createElement('td');
            let tdTelefone = document.createElement('td');
            let tdData = document.createElement('td');

            tdId.innerText = i.id;
            tr.appendChild(tdId);
            tdNome.innerText = i.nome_completo;
            tr.appendChild(tdNome);
            tdCpf.innerText = i.cpf;
            tr.appendChild(tdCpf);
            tdEmail.innerText = i.email;
            tr.appendChild(tdEmail);
            tdTelefone.innerText = i.telefone;
            tr.appendChild(tdTelefone);
            tdData.innerText = i.data_nascimento;
            tr.appendChild(tdData);

            this.tabela.appendChild(tr);
        }

    }

}

let relatorio = new RelatorioAluno();