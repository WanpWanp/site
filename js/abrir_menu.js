var hamburguer = document.querySelector(".hamburguer");

hamburguer.addEventListener("click", function() {
    document.querySelector(".container").classList.toggle("abrir-menu");
});
document.querySelector(".backdrop").addEventListener('click', e => {
    document.querySelector(".container").classList.remove("abrir-menu");
});

document.querySelector("nav ul").addEventListener("click", e => {
    console.log("click")
    document.querySelector(".container").classList.remove("abrir-menu");
});