// EVENT HANDLERS
function funcao() {
  console.log("click");
}

function alterar_texto(e) {
  document.querySelector("h1").textContent = "Novo Título";
  console.log(e.target);
}
