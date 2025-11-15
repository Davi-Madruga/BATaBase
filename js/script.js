//ITENS
const abrir_itens = document.getElementById("itens");
const fechar_itens = document.getElementById("fechar_itens");
const popup_itens = document.getElementById("popup_itens");

abrir_itens.addEventListener("click", () => {
    popup_itens.classList.remove("escondido");
});
fechar_itens.addEventListener("click", () => {
    popup_itens.classList.add("escondido");
});

//VILOES
const abrir_viloes = document.getElementById("viloes");
const fechar_viloes = document.getElementById("fechar_viloes");
const popup_viloes = document.getElementById("popup_viloes");

abrir_viloes.addEventListener("click", () => {
    popup_viloes.classList.remove("escondido");
});
fechar_viloes.addEventListener("click", () => {
    popup_viloes.classList.add("escondido");
});

//VEICULOS
const abrir_veiculos = document.getElementById("veiculos");
const fechar_veiculos = document.getElementById("fechar_veiculos");
const popup_veiculos = document.getElementById("popup_veiculos");

abrir_veiculos.addEventListener("click", () => {
    popup_veiculos.classList.remove("escondido");
});
fechar_veiculos.addEventListener("click", () => {
    popup_veiculos.classList.add("escondido");
});

//TRAJES
const abrir_trajes = document.getElementById("trajes");
const fechar_trajes = document.getElementById("fechar_trajes");
const popup_trajes = document.getElementById("popup_trajes");

abrir_trajes.addEventListener("click", () => {
    popup_trajes.classList.remove("escondido");
});
fechar_trajes.addEventListener("click", () => {
    popup_trajes.classList.add("escondido");
});