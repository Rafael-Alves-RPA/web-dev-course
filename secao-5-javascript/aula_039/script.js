/* 
OBJETIVO:
O mesmo exercício anterior, mas com unificação da instrução
para os 3 elementos e sem propagação de eventos.
*/

let elements = document.querySelectorAll("section, article, div");

elements.forEach((event) => {
  event.addEventListener("click", (e) => {
    e.stopPropagation();
    console.log(e.target.tagName);
  });
});
