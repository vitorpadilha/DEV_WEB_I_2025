document.addEventListener("DOMContentLoaded", 
    (ev)=>{     
        let formCad = document.getElementById("formCadastroFuncionario");
        let campoSalario = document.getElementById("salario");
        formCad.addEventListener("submit", (ev2)=>{
            ev2.preventDefault();
            let campoNome = document.getElementById("nome");
            let campoTelefone = document.getElementById("telefone");
            validaFormulario(campoNome.value, campoSalario.value, campoTelefone.value)?formCad.submit():null;
        });
        campoSalario.addEventListener("keyup", (ev2)=>{
            
        if(!["1","2","3","4","5","6","7","8","9","0",","].find((el)=>{
            return ev2.key == el
        })) {
                campoSalario.value = campoSalario.value.substring(0, campoSalario.value.length-1);
            }
        });
    }
);
let validaFormulario = (nome, salario, telefone) => {
    return true;
};