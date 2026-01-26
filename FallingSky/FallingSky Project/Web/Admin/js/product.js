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
        <img src="../../uploads/products/${product.foto}" height="60">
      </td>
      <td>${product.nome}</td>
      <td>${product.categoria}</td>
      <td>${Number(product.preco).toFixed(2)} Kz</td>
      <td>${product.quantidade > 0 ? 'Em stock' : 'Esgotado'}</td>
      <td>${product.profissional}</td>
      <td>${product.status}</td>
      <td>
        <div class="btns">
          <button class="js-edit edit-btn" data-id="${product.id}" onclick="
            accessedEdit();
          "><ion-icon name="pencil-outline"></ion-icon></button>
          <button class="delete-btn" data-id="${product.id}"><ion-icon name="close-outline"></ion-icon></button>
        </div> 
      </td>
      
    </tr>
    `;
    productTable.appendChild(row);
  });
})
.catch(err => {
  console.error(err);
});


function accessedEdit(){
  
}