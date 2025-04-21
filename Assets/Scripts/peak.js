window.addEventListener("scroll", function() {
    let header = document.getElementById("header");
    let footer = document.getElementById("footer");
    let accueilIMG = document.getElementById("accueil-img");
    
    let targetRect = accueilIMG.getBoundingClientRect();
    let isAtBottom = (window.innerHeight + window.scrollY) >= document.body.offsetHeight-100;

    if(isAtBottom) {
        footer.style.transform = "translateY(-200px)";
    }else {
        if (targetRect.bottom - targetRect.height/2 <= 0) {
            header.style.transform = "translateY(110px)";
            footer.style.transform = "translateY(-50px)";
        } else {
            header.style.transform = "translateY(-100px)";
            footer.style.transform = "translateY(50px)";
        }
    }
});