const isScrollNav = () => {
    const header = document.getElementById('primary-header');

    let windowPositionY = window.scrollY > 10;
    header.classList.toggle('active-nav', windowPositionY);
}

window.addEventListener('scroll', isScrollNav);