/* ----------------------------------------------------------------------------

Exercício: 001
Enunciado: CONTADOR
    
    A partir do HTML existente, apresentar um valor inicial igual a 0 e definir
    funcionalidades nos botões de decremento e incremento. Ao clicar em cada
    um dos botões, o utilizador irá aumentar ou diminuir o valor em uma unidade.

---------------------------------------------------------------------------- */

let valor = 0;

const value = document.getElementById("valor");

document.getElementById("btn_decremento").addEventListener("click", () => {
  value.textContent = --valor;
});
document.getElementById("btn_incremento").addEventListener("click", () => {
  value.textContent = ++valor;
});
