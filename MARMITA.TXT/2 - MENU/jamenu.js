class MobileNavbar {
    constructor(barramenu, navlinha, navLinks) {
      this.barramenu = document.querySelector(barramenu);
      this.navlinha = document.querySelector(navlinha);
      this.navLinks = document.querySelectorAll(navLinks);
      this.activeClass = "active";
  
      this.handleClick = this.handleClick.bind(this);
    }
  
    animateLinks() {
      this.navLinks.forEach((link, index) => {
        link.style.animation
          ? (link.style.animation = "")
          : (link.style.animation = `navLinkFade 0.5s ease forwards ${
              index / 7 + 0.3
            }s`);
      });
    }
  
    handleClick() {
      this.navlinha.classList.toggle(this.activeClass);
      this.barramenu.classList.toggle(this.activeClass);
      this.animateLinks();
    }
  
    addClickEvent() {
      this.barramenu.addEventListener("click", this.handleClick);
    }
  
    init() {
      if (this.barramenu) {
        this.addClickEvent();
      }
      return this;
    }
  }
  
  const mobileNavbar = new MobileNavbar(
    ".barramenu",
    ".navlista",
    ".navlista li",
  );
  mobileNavbar.init();


//full
function clicar() {
  var num1 = document.querySelector(".num1").value;
  var num2 = document.querySelector(".num2").value;
 
  var resultado = parseInt(num1) + parseInt(num2);
  document.querySelector(".resultado").innerHTML = resultado;
}

