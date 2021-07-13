class navbar{
    constructor(MeNu, navList, navLinks){
        this.MeNu = document.querySelector(MeNu)
        this.navList = document.querySelector(navList)
        this.navLinks = document.querySelector(navLinks)
        this.activeclass = "active;"
    
        this.handleClick = this.handleClick.bind(this);
    
    }

    
    handleClick(){
        console.log(this);
        this.navList.classList.toggle(this.activeClass);
    }
    
    
    
    
    
    addClickEvent(){
        this.mobileMenu.addEventListener("click", this.handleClick);
    } 

init(){
    if(this.MeNu) { 
     this.addClickEvent();
    }
   return this;
    }
}