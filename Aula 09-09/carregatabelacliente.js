let clientes = {
 lista:[
    {nome: "José", id: 2, nascimento: "Bom Jardim"},
    {nome: "João", id: 3, nascimento: "Miracema"},
    {nome: "Alberto", id: 4, nascimento: "Nova Friburgo"},
 ]
};

//LISTA PRODUTOS https://dontpad.com/dev_sistemas_cefet_web
document.addEventListener("DOMContentLoaded", (ev)=> {
  ev.preventDefault();
  const tabela = document.getElementsByTagName("table")[0];
  clientes.lista.forEach(cliente => {
    const linha = document.createElement("tr");
    tabela.appendChild(linha);
    //NOME
    let colunaNome = document.createElement("td");
    colunaNome.textContent = cliente.nome;
    linha.appendChild(colunaNome);
    //NASCIMENTO
    let colunaNascimento = document.createElement("td");
    colunaNascimento.textContent = cliente.nascimento;
    linha.appendChild(colunaNascimento);
  });
});