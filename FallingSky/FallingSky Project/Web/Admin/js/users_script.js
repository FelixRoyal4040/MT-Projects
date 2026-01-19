fetch('php/users_table.php')
.then(res =>res.json())
.then(data=>{
  const table = document.querySelector('.js-users_table-costumers');
  data.forEach(get=>{
      table.innerHTML += `
      <tr>
        <td><ion-icon name="person-outline"></ion-icon></td>
        <td>${get.nome}</td>
        <td>${get.email}</td>
      </tr>
      `;
  });
});

fetch('php/pro_table.php')
  .then(res =>res.json())
  .then(data=>{
    const table = document.querySelector('.js-users_table-workers');
    data.forEach(get=>{
        table.innerHTML += `
        <tr>
          <td><ion-icon name="person-outline"></ion-icon></td>
          <td>${get.nome}</td>
          <td>${get.email}</td>
          <td>${get.area}</td>
          <td>${get.status}</td>
        </tr>
        `;
    });
  });