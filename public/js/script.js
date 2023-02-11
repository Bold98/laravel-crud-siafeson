var myNav = document.getElementById("nav");

window.onscroll = function() {
  "use strict";
  if (document.body.scrollTop >= 20 || document.documentElement.scrollTop >= 20) {
    myNav.classList.add("scroll");
  } else {
    myNav.classList.remove("scroll");
  }
};