const abrir = document.getElementById("abrir");
const fechar = document.getElementById("fechar");
const popup = document.getElementById("popup");

abrir.addEventListener("click", () => {
    popup.classList.remove("escondido");
});
fechar.addEventListener("click", () => {
    popup.classList.add("escondido");
});