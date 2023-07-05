
    const prev = document.getElementById('cv-prev');
    
    prev.addEventListener("click", function () {
        /* console.log('click'); */
        prev.classList.toggle("active-prev");
    });
    
    const next = document.getElementById('cv-next');
    next.addEventListener("click", function () {
        /* console.log('click'); */
        next.classList.toggle("active-next");
        
    });

    