(function () {
    const iconBurger = document.querySelector(".header__nav-container-burger");
    const mainMenu = document.querySelector(".main-menu-expand");
    iconBurger.addEventListener("click", function (e) {
      document.body.classList.toggle("lock");
      iconBurger.classList.toggle("active");
      mainMenu.classList.toggle("active");
    });
  
    const navLinks = document.querySelectorAll(".menu__item");
    navLinks.forEach((navLink) => {
      navLink.addEventListener("click", (_) => {
            if (iconBurger.classList.contains("active")) {
                document.body.classList.remove("lock");
                iconBurger.classList.remove("active");
                navigationsBody.classList.remove("active");
            }
          }
      );
    });
  })();