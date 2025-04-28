document.addEventListener('DOMContentLoaded', () => {
    const tabButtons = document.querySelectorAll('.tab-button');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('data-tab');
            const targetTab = document.getElementById(targetId);

            // Sembunyikan semua tab
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.add('tw-hidden');
            });

            // Update tab nav active
            tabButtons.forEach(btn => {
                btn.classList.remove('tw-tab-nav-active');
                btn.classList.add('tw-tab-nav-deactive');
            });

            // Tampilkan tab target
            targetTab.classList.remove('tw-hidden');
            button.classList.remove('tw-tab-nav-deactive');
            button.classList.add('tw-tab-nav-active');

            // Jalankan animasi setelah elemen terlihat
            const animeData = targetTab.getAttribute('data-anime');
            if (animeData && typeof anime !== "undefined") {
                // Jalankan setelah reflow
                requestAnimationFrame(() => {
                    anime({
                        targets: `#${targetId}`,
                        ...JSON.parse(animeData)
                    });
                });
            }
        });
    });
});
