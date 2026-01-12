const courseTable = document.getElementById('course-form');
fetch('php/fetch_courses.php')
  .then(res => res.json())
  .then(data => {
    data.forEach(course => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${course.course_name}</td>
        <td>${course.category}</td>
        <td>$${course.price}</td>
      `;
      courseTable.appendChild(row);
    });
  });