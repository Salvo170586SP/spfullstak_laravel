const isScrollNav = () => {
    const header = document.getElementById('primary-header');

    let windowPositionY = window.scrollY > 250;
    header.classList.toggle('active-nav', windowPositionY);
}

window.addEventListener('scroll', isScrollNav);