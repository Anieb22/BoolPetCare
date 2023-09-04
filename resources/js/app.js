import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const buttons = document.querySelectorAll('[data-bs-toggle="collapse"]');

buttons.forEach(button => {
    button.addEventListener('click', () => {
        // Otteniamo l'ID del target dal pulsante
        const targetId = button.getAttribute('data-bs-target');
        const target = document.querySelector(`targetId`);

        // Creiamo un oggetto di tipo Collapse e lo apriamo
        const bsCollapse = new bootstrap.Collapse(target);
        bsCollapse.toggle();
    });
});
