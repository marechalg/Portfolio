document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('cv-modal');
    const consultBtn = document.getElementById('consult');
    const closeBtn = document.getElementById('modal-close');
    const iframe = document.getElementById('cv-iframe');
    const zoomInBtn = document.getElementById('zoom-in');
    const zoomOutBtn = document.getElementById('zoom-out');
    const zoomLevel = document.getElementById('zoom-level');

    let currentZoom = 1.5;

    function updateZoom() {
        iframe.style.transform = `scale(${currentZoom})`;
        zoomLevel.textContent = `${Math.round(currentZoom * 100)}%`;
        
        zoomOutBtn.disabled = currentZoom <= minZoom;
        zoomInBtn.disabled = currentZoom >= maxZoom;
    }

    consultBtn.addEventListener('click', () => {
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
        currentZoom = 1.5;
        updateZoom();
    });

    closeBtn.addEventListener('click', () => {
        modal.classList.remove('show');
        document.body.style.overflow = 'auto';
    });

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.remove('show');
            document.body.style.overflow = 'auto';
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('show')) {
            modal.classList.remove('show');
            document.body.style.overflow = 'auto';
        }
    });

    document.getElementById('download').addEventListener('click', () => {
        const fileUrl = '../cv_guewen_marechal_dev_opt_logiciel_systeme.pdf';
        const fileName = 'cv_guewen_marechal_dev_opt_logiciel_systeme.pdf';

        const link = document.createElement('a');
        link.href = fileUrl;
        link.setAttribute('download', fileName);
        document.body.appendChild(link);

        link.click();

        document.body.removeChild(link);
    });

    updateZoom();
});