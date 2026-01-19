const courseTable = document.getElementById('course-list');
fetch('php/fetch_courses.php')
  .then(res => res.json())
  .then(data => {
    data.forEach(course => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${course.id}</td>
        <td>${course.nome}</td>
        <td>${course.categoria}</td>
        <td>${Number(course.preco).toFixed(2)} Kz</td>
        <td>${course.status}</td>
        <td>${course.profissional}</td>
        <td>
          <div class="btns">
            <button class="edit-btn" data-id="${course.id}"><ion-icon name="pencil-outline"></ion-icon></button>
            <button class="delete-btn" data-id="${course.id}"><ion-icon name="close-outline"></ion-icon></button>
          </div>
        </td>
      `;
      courseTable.appendChild(row);
    });
  })
  .catch(err => {
    console.error(err);
  });
