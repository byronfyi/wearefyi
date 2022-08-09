const btn = document.querySelector('[data-toggle]');
const nav = document.querySelector('#NavCollapse');

btn.addEventListener('click', toggleCollapse);

function toggleCollapse(e) {
    (btn.getAttribute('aria-expanded') === 'true')
        ? btn.setAttribute('aria-expanded', 'false')
        : btn.setAttribute('aria-expanded', 'true')

    btn.classList.toggle('active');

    nav.classList.toggle('show');
}

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        nav.classList.remove('show');
        btn.classList.remove('active');
        nav.classList.remove('show');
        btn.setAttribute('aria-expanded', 'false');
    }
});
