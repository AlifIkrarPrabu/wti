import './bootstrap';
import './bootstrap';


document.addEventListener('DOMContentLoaded', () => {
    // 1. Logika Toggle Mobile Menu Utama (Hamburger)
    const button = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    if (button && menu) {
        button.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    }

    // 2. Logika Toggle Accordion Layanan Kami
    const layananButton = document.getElementById('mobile-layanan-button');
    const layananContent = document.getElementById('mobile-layanan-content');
    const layananArrow = document.getElementById('layanan-arrow');

    if (layananButton && layananContent && layananArrow) {
        layananButton.addEventListener('click', () => {
            layananContent.classList.toggle('hidden');
            // Rotasi panah (0 deg jika tertutup, 180 deg jika terbuka)
            layananArrow.classList.toggle('rotate-180');
        });
    }

    // 3. Logika Toggle Accordion Kontak
    const kontakButton = document.getElementById('mobile-kontak-button');
    const kontakContent = document.getElementById('mobile-kontak-content');
    const kontakArrow = document.getElementById('kontak-arrow');

    if (kontakButton && kontakContent && kontakArrow) {
        kontakButton.addEventListener('click', () => {
            kontakContent.classList.toggle('hidden');
            // Rotasi panah (0 deg jika tertutup, 180 deg jika terbuka)
            kontakArrow.classList.toggle('rotate-180');
        });
    }
});