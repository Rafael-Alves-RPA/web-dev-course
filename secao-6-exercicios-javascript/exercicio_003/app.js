/* ----------------------------------------------------------------------------

Exercício: 003
Enunciado: CONTADOR COM CORES PARA NEGATIVOS, ZERO E POSITIVOS
    
    A partir do HTML existente, apresentar um valor inicial igual a 0 e definir
    funcionalidades nos botões de decremento e incremento.
    No caso do valor ser zero o texto deve ser branco.
    No caso do valor ser negativo o texto deve ser vermelho puro.
    No caso do valor ser positivo o texto deve ser verde puro.

---------------------------------------------------------------------------- */

let valor = 0;
const value = document.getElementById("valor");

document.getElementById("btn_decremento").addEventListener("click", () => {
  if (valor == -10) return;
  --valor;
  set_valor();
});
document.getElementById("btn_incremento").addEventListener("click", () => {
  if (valor == 10) return;
  ++valor;
  set_valor();
});

function set_valor() {
  value.textContent = valor;
  //   if (valor === 0) {
  //     value.style.color = "white";
  //   } else if (valor > 0) {
  //     value.style.color = "green";
  //   } else if (valor < 0) {
  //     value.style.color = "red";
  //   }
  let color = valor == 0 ? "white" : valor < 0 ? "red" : "green";
  value.style.color = color;
}
