window.addEventListener("scroll", function() {
    let header = document.getElementById("header");
    let accueilH1 = document.getElementById("accueil-h1");
    
    let targetRect = accueilH1.getBoundingClientRect();

    if (targetRect.bottom <= 0) {
        header.style.transform = "translateY(120px)";
    } else {
        header.style.transform = "translateY(-100px)";
    }
});
