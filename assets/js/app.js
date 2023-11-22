/** @format */

(() => {
  const $navLinks = document.getElementById("navLinks");
  const $xmark = document.querySelector(".fa-xmark");
  const $bars = document.querySelector(".fa-bars");
  //   Toggle Menu
  $bars.addEventListener("click", function () {
    $navLinks.style.right = "0";
  });

  $xmark.addEventListener("click", function () {
    $navLinks.style.right = "-200px";
  });
})();
