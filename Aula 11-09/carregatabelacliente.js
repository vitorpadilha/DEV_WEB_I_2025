document.addEventListener("DOMContentLoaded", (ev)=> {
  ev.preventDefault(); 
  fetch('http://localhost:3000/clientes').then(
    async response => {
      let clientes = await response.json();
      console.log(clientes);
      const tabela = document.getElementsByTagName("table")[0];
      clientes.forEach(cliente => {
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
    }
  )
});