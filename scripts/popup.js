import { marked } from 'https://esm.sh/marked';

document.querySelectorAll('article button').forEach(async btn => {
    const modal = btn.closest('article').querySelector('dialog');
    if (!modal) return;
    
    const md = modal.querySelector('template[md]');
    const desc = modal.querySelector('div');
    
    desc.innerHTML = marked.parse(md.content.textContent.replace(/^[ \t]+/gm, ''));
    
    document.querySelectorAll('code').forEach(el => {
        el.title = 'Copier';
        
        el.addEventListener('click', () => {
            navigator.clipboard.writeText(el.textContent);
            el.title = 'Copié';
        })
    })
    
    modal.addEventListener('click', e => {
        if (e.target !== modal) return;
        const rect = modal.getBoundingClientRect();
        const inDialog = e.clientX >= rect.left && e.clientX <= rect.right
        && e.clientY >= rect.top  && e.clientY <= rect.bottom;
        if (!inDialog) modal.close();
    })
    
    btn.addEventListener('click', () => {
        modal.showModal();
    })
})
