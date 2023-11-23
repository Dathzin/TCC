let prevScrollpos = window.pageYOffset;
const header = document.querySelector(".header");
const concluirBtn = document.getElementById("concluirBtn");

window.onscroll = function() {
  const currentScrollPos = window.pageYOffset;

  if (prevScrollpos > currentScrollPos) {
    header.classList.remove("scroll-hide");
  } else {
    header.classList.add("scroll-hide");
  }

  prevScrollpos = currentScrollPos;
};

if (concluirBtn) {
  concluirBtn.addEventListener("click", function() {
    // Adicione ou remova a classe para alterar a cor do botão
    this.classList.toggle("concluido");

    // Lógica adicional, se necessário
  });
}