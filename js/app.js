const btn = document.querySelector('[data-toggle]');
const nav = document.querySelector('#NavCollapse');

console.log(btn);

btn.addEventListener('click', toggleMenu);
nav.addEventListener('click', hideMenu);

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        hideMenu();
    }
});

function toggleMenu(e) {
    (btn.getAttribute('aria-expanded') === 'true')
        ? btn.setAttribute('aria-expanded', 'false')
        : btn.setAttribute('aria-expanded', 'true')

    btn.classList.toggle('active');

    nav.classList.toggle('show');
}

function hideMenu() {
    btn.classList.remove('active');
    nav.classList.remove('show');
    btn.setAttribute('aria-expanded', 'false');
}
