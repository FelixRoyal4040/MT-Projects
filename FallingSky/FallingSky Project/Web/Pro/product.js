const productTable = document.getElementById('product-list');

fetch('php/fetch_products.php')
.then(res => res.json())
.then(data => {
  productTable.innerHTML = '';

  data.forEach(product => {
    const row = document.createElement('tr');
    row.innerHTML = `
    <tr>
      <td>${product.id}</td>
      <td>
        <img src="uploads/products/${product.foto}" height="80">
      </td>
      <td>${product.nome}</td>
      <td>${product.categoria}</td>
      <td>${Number(product.preco).toFixed(2)} Kz</td>
      <td>${product.quantidade > 0 ? 'Em stock' : 'Esgotado'}</td>
      <td>${product.status}</td>
      <td>
        <button class="edit-btn" data-id="${product.id}">Edit</button>
        <button class="delete-btn" data-id="${product.id}">Delete</button>
      </td>
    </tr>
    `;
    productTable.appendChild(row);
  });
})
.catch(err => {
  console.error(err);
});
