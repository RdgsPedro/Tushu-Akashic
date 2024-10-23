const openBtn = document.getElementById('openBtn');
    const closeBtn = document.getElementById('closeBtn');
    const modal = document.getElementById('modalForm');
    const overlay = document.getElementById('overlay');
    const form = document.getElementById('floatingForm');

    // Função para abrir o modal
    openBtn.addEventListener('click', () => {
      modal.style.display = 'block';
      overlay.style.display = 'block';
    });

    // Função para fechar o modal

    closeBtn.addEventListener('click', () => {
      modal.style.display = 'none';
      overlay.style.display = 'none';
    });


    // Fechar modal ao submeter o formulário
    
    form.addEventListener('submit', (e) => {
      e.preventDefault(); 
      // Evita o recarregamento da página
      modal.style.display = 'none';
      overlay.style.display = 'none';
      alert('Formulário enviado com sucesso!');
    });