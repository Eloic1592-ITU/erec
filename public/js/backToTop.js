/**
 * Back to top button
 */

const backToTop = document.getElementById("back-to-top");
if (backToTop) {
  const toggleBackToTop = () => {
    if (window.scrollY > 100) {
      backToTop.classList.add("active");
    } else {
      backToTop.classList.remove("active");
    }
  };
  window.addEventListener("load", toggleBackToTop);
  window.addEventListener("scroll", toggleBackToTop);
}

