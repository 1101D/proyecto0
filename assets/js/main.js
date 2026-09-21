document.addEventListener('DOMContentLoaded', () => {
    // Menú móvil
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');

    navToggle?.addEventListener('click', () => {
        navLinks.classList.toggle('open');
    });

    navLinks?.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => navLinks.classList.remove('open'));
    });

    // Filtro de galería
    const filterButtons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.project-card');
    const emptyState = document.querySelector('.empty-state');

    filterButtons.forEach((btn) => {
        btn.addEventListener('click', () => {
            filterButtons.forEach((b) => b.classList.remove('active'));
            btn.classList.add('active');

            const filtro = btn.dataset.filter;
            let visibles = 0;

            cards.forEach((card) => {
                const coincide = filtro === 'todos' || card.dataset.categoria === filtro;
                card.style.display = coincide ? '' : 'none';
                if (coincide) visibles++;
            });

            if (emptyState) {
                emptyState.style.display = visibles === 0 ? 'block' : 'none';
            }
        });
    });

    // Modal de detalle de proyecto
    const modalOverlay = document.querySelector('.modal-overlay');
    const modalImg = modalOverlay?.querySelector('img');
    const modalTitle = modalOverlay?.querySelector('.modal-title');
    const modalDesc = modalOverlay?.querySelector('.modal-desc');
    const modalStack = modalOverlay?.querySelector('.modal-stack');
    const modalDemo = modalOverlay?.querySelector('.modal-demo');
    const modalRepo = modalOverlay?.querySelector('.modal-repo');

    const abrirModal = (card) => {
        const data = card.dataset;
        modalImg.src = data.imagen;
        modalImg.alt = data.titulo;
        modalTitle.textContent = data.titulo;
        modalDesc.textContent = data.descripcion;
        modalStack.innerHTML = data.stack
            .split('|')
            .map((tech) => `<li>${tech}</li>`)
            .join('');
        modalDemo.href = data.demo;
        modalRepo.href = data.repo;
        modalOverlay.classList.add('open');
    };

    const cerrarModal = () => modalOverlay.classList.remove('open');

    cards.forEach((card) => {
        card.addEventListener('click', () => abrirModal(card));
    });

    modalOverlay?.querySelector('.modal-close')?.addEventListener('click', cerrarModal);
    modalOverlay?.addEventListener('click', (e) => {
        if (e.target === modalOverlay) cerrarModal();
    });
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') cerrarModal();
    });
});
