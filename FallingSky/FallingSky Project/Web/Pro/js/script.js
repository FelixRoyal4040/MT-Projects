  fetch('php/T2.php')
  .then(rest => rest.json())
  .then(data=>{
    const table = document.querySelector('.T2');
    data.forEach(user=>{
        table.innerHTML += `
        <tr>
          <td><ion-icon name="person-outline"></ion-icon></td>
          <td>${user.nome}</td>
          <td><ion-icon name="information-circle-outline"></ion-icon></td>
        </tr>
        `;
    });
  });

/*
  fetch('php/buyers_count.php')
  .then(rest => rest.text())
  .then(data=>{
    document.querySelector('.js-buyers-count')
      .innerHTML = data;
    });
*/
  fetch('php/products_count.php')
  .then(rest => rest.text())
  .then(data=>{
    document.querySelector('.js-products-count')
      .innerHTML = data;
    });

  fetch('php/courses_count.php')
  .then(rest => rest.text())
  .then(data=>{
    document.querySelector('.js-courses-count')
      .innerHTML = data;
    });

  fetch('php/stock_count.php')
  .then(rest => rest.text())
  .then(data=>{
    document.querySelector('.js-stock-count')
      .innerHTML = data;
    });
