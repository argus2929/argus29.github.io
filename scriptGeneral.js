

//HREF AL INDEX EN EL LOGO
var logo = document.getElementById("logo");

logo.addEventListener("click", function () {
  window.location.href = "index.html";
});

var btnBurgerClose = document.getElementById("btnBurgerClose");
var btnBurgerExpand = document.getElementById("btnBurgerExpand");
var navbaropciones = document.getElementById("navbar-opciones");

btnBurgerExpand.addEventListener("click", function () {
  btnBurgerExpand.style.display = "none";
  btnBurgerClose.style.display = "flex";
  navbaropciones.style.display = "flex";
});
btnBurgerClose.addEventListener("click", function () {
  btnBurgerClose.style.display = "none";
  btnBurgerExpand.style.display = "flex";
  navbaropciones.style.display = "none";
});
