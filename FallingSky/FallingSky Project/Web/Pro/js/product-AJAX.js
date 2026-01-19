const form = document.getElementById('productForm');

form.addEventListener('submit', function(event) {
  event.preventDefault();

  fetch('php/add_product.php', {
    method: 'POST',
    body: new FormData(form)
  })
  .then(response => response.json())
  .then(data => {
    alert(data.message);
    if (data.status === 'success') {
      form.reset();
      // Optionally, refresh the product list or perform other actions
    }
  })
  .catch(error => {
    console.error(error);
    alert('Erro ao enviar o curso. Verifique a conexão ou o servidor.');
  })
});