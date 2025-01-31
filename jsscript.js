javascript
document.addEventListener('DOMContentLoaded', function() {
    // Adicionar interatividade ao carrinho
    const botoesAdicionar = document.querySelectorAll('.produto button');
    botoesAdicionar.forEach(botao => {
        botao.addEventListener('click', function() {
            const produto = this.parentElement;
            const produtoId = produto.getAttribute('data-id');
            const quantidade = 1; // Quantidade padrão

            fetch('php/carrinho.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `produto_id=${produtoId}&quantidade=${quantidade}`
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
            });
        });
    });
});