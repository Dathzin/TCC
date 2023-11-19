let prevScrollpos = window.pageYOffset;

window.onscroll = function() {
  const currentScrollPos = window.pageYOffset;

  if (prevScrollpos > currentScrollPos) {
    document.querySelector(".header").classList.remove("scroll-hide");
  } else {
    document.querySelector(".header").classList.add("scroll-hide");
  }

  prevScrollpos = currentScrollPos;
};