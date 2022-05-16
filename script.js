'use strict';

const myForm = document.getElementById("myForm");
myForm.addEventListener('submit',gravar);

function gravar(e){
    e.preventDefault();
    const formData = new FormData(this);
    const searchParams = new URLSearchParams();

    for(const par of formData){
        searchParams.append(par[0],par[1]);
    }

    fetch('cadastrodealuno.php',{
        method:'POST',
        body:formData
    }).then(function(response){
        document.getElementById('nome_aluno').value=" ";
        document.getElementById('matricula').value=" ";
        return alert('Dados gravados com sucesso!');
    }).catch(function(error){
        console.log(error);
    });
}