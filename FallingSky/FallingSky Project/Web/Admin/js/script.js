fetch('php/T.php')
  .then(res =>res.json())
  .then(data=>{
    const table = document.querySelector('.js-table');
    data.forEach(get=>{
        table.innerHTML += `
        <tr>
          <td>${get.nome}</td>
          <td>${get.email}</td>
          <td>${get.status}</td>
          <td>
            <div class="btns">
              <a href="php/aprove.php?id=${get.id}" class="btn1"><ion-icon name="checkmark-outline"></ion-icon></a> 
              <a href="php/refuse.php?id=${get.id}" class="btn2"><ion-icon name="ban-outline"></ion-icon></a>
            </div>
          </td>
        </tr>
        `;
    });
  });
  
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


  fetch('php/workers.php')
  .then(rest => rest.text())
  .then(data=>{
    document.querySelector('.js-workers-count')
      .innerHTML = data;
    });

  fetch('php/costumers.php')
  .then(rest => rest.text())
  .then(data=>{
    document.querySelector('.js-costumers-count')
      .innerHTML = data;
    });

  fetch('php/admins.php')
  .then(rest => rest.text())
  .then(data=>{
    document.querySelector('.js-admins-count')
      .innerHTML = data;
    });

  fetch('php/stock_count.php')
  .then(rest => rest.text())
  .then(data=>{
    document.querySelector('.js-stock-count')
      .innerHTML = data;
    });