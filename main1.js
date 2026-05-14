document.addEventListener('DOMContentLoaded', function () {
    const burgerBtn = document.getElementById('burgerBtn');
    const headerNav = document.getElementById('headerNav');

    // Бургер меню
    if (burgerBtn && headerNav) {
        burgerBtn.addEventListener('click', () => {
            burgerBtn.classList.toggle('active-1');
            headerNav.classList.toggle('active-1');
        });

        document.addEventListener('click', (e) => {
            if (!burgerBtn.contains(e.target) && !headerNav.contains(e.target)) {
                burgerBtn.classList.remove('active-1');
                headerNav.classList.remove('active-1');
            }
        });
    }

    // === Модальное окно авторизации ===

    const authModal = document.querySelector('.modal.fade[id="exampleModalToggle"]');
    const authTrigger = document.querySelector('.auth'); 
    const authClose = authModal?.querySelector('.cross');

    if (authTrigger && authModal) {
        authTrigger.addEventListener('click', () => {
            authModal.style.display = 'block';
        });
    }

    if (authClose && authModal) {
        authClose.addEventListener('click', () => {
            authModal.style.display = 'none';
        });
    }

    // Закрытие по клику вне окна
    document.addEventListener('click', (e) => {
        if (authModal && authModal.style.display === 'block') {
            if (!authModal.querySelector('.modal-dialog').contains(e.target) && !authTrigger?.contains(e.target)) {
                authModal.style.display = 'none';
            }
        }
    });

    // === Модальное окно отзыва ===
    // Ищем второе модальное окно по классу .modal-2
    const reviewModal = document.querySelector('.modal-2.fade[id="exampleModalToggle"]');
    const reviewTrigger = document.querySelector('.modal-button');
    const reviewClose = reviewModal?.querySelector('.cross-2');

    if (reviewTrigger && reviewModal) {
        reviewTrigger.addEventListener('click', () => {
            reviewModal.style.display = 'block';
        });
    }

    if (reviewClose && reviewModal) {
        reviewClose.addEventListener('click', () => {
            reviewModal.style.display = 'none';
        });
    }

    // Закрытие по клику вне окна
    document.addEventListener('click', (e) => {
        if (reviewModal && reviewModal.style.display === 'block') {
            if (!reviewModal.querySelector('.modal-dialog').contains(e.target) && !reviewTrigger?.contains(e.target)) {
                reviewModal.style.display = 'none';
            }
        }
    });

    // === Слайдер отзывов ===
    const track = document.getElementById('reviewsTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    if (!track || !prevBtn || !nextBtn) {
        console.warn('Элементы слайдера не найдены. Проверьте HTML.');
        return;
    }

    let currentIndex = 0;
    let slideWidth = 0;

    const calculateWidth = () => {
        const firstCard = track.querySelector('.main-5__container_block');
        if (firstCard) {
            slideWidth = firstCard.offsetWidth + 20; // gap + padding
        }
    };

    const updateSlider = () => {
        track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    };

    const toggleButtons = () => {
        const totalCards = track.children.length;
        const visibleCards = Math.floor(track.parentElement.clientWidth / slideWidth);
        const maxIndex = Math.max(0, totalCards - visibleCards);

        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex >= maxIndex;

        prevBtn.style.opacity = currentIndex === 0 ? '0.5' : '1';
        nextBtn.style.opacity = currentIndex >= maxIndex ? '0.5' : '1';
    };

    calculateWidth();
    updateSlider();
    toggleButtons();

    nextBtn.addEventListener('click', () => {
        const totalCards = track.children.length;
        const visibleCards = Math.floor(track.parentElement.clientWidth / slideWidth);
        const maxIndex = Math.max(0, totalCards - visibleCards);

        if (currentIndex < maxIndex) {
            currentIndex++;
            updateSlider();
            toggleButtons();
        }
    });

    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
            toggleButtons();
        }
    });

    window.addEventListener('resize', () => {
        calculateWidth();
        updateSlider();
        toggleButtons();
    });
});