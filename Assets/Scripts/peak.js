window.addEventListener("scroll", function() {
    let header = document.getElementById("header");
    let footer = document.getElementById("footer");
    let accueilH1 = document.getElementById("accueil-h1");
    
    let targetRect = accueilH1.getBoundingClientRect();
    let isAtBottom = (window.innerHeight + window.scrollY) >= document.body.offsetHeight;

    if(isAtBottom) {
        footer.style.transform = "translateY(-200px)";
    }else {
        if (targetRect.bottom <= 0) {
            header.style.transform = "translateY(110px)";
            footer.style.transform = "translateY(-50px)";
        } else {
            header.style.transform = "translateY(-100px)";
            footer.style.transform = "translateY(50px)";
        }
    }
});