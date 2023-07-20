const cards = document.querySelectorAll('.card');
const texts = document.querySelectorAll('.text');

cards.forEach((card, i) => {
    card.addEventListener('click', () => {
        texts.forEach((text, j) => {
            text.style.display = (i === j) ? 'block' : 'none';
        });
        cards.forEach((btn, k) => {
            btn.classList[(i === k) ? 'add' : 'remove']('active');
        });
    });
});