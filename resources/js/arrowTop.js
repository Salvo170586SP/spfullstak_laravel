window.addEventListener("scroll", () => {
    const scrolled = window.scrollY;
    /* console.log('scrolled: ' + scrolled); */

    const arrow = document.getElementById("up");

    //se lo scroll arriva a 399
    if (Math.ceil(scrolled) > 399) {
        //aggiungo la classe show
        arrow.classList.add("show");
    } else if (Math.ceil(scrolled) < 399) {
        //altrimenti se è minore tolgo la classe show
        arrow.classList.remove("show");
    }
});