/* 
OBJETIVO:
Ao clicar no botão, alterar a cor de fundo da caixa para aquamarine,
apresentar o texto 'clique' na consola e
remover o evento click do botão
*/

let caixa = document.querySelector(".caixa");
let btn = document.querySelector("button");

function executar() {
  caixa.classList.add("cor-fundo-caixa");
  console.log("clique");
  btn.removeEventListener("click", executar);
}

btn.addEventListener("click", executar);
