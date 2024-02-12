// este código não será executado antes dos elementos do body existir,

// document.addEventListener("readystatechange", (event) => {
//   if (event.target.readyState === "complete") {
//     document.querySelector("button").addEventListener("click", () => {
//       document.querySelector("h1").innerText = "Texto do título alterado";
//     });
//   }
// });

document.addEventListener("DOMContentLoaded", () => {
  document.querySelector("button").addEventListener("click", () => {
    document.querySelector("h1").innerText = "Texto do título alterado";
  });
});
