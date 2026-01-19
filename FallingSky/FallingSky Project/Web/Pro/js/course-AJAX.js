const formCourse = document.getElementById('courseForm');

formCourse.addEventListener('submit', function(event) {
  event.preventDefault();

  const fd = new FormData(formCourse);

  fetch('php/add_course.php', {
    method: 'POST',
    body: fd
  })
  .then(response => response.json())
  .then(data => {
    alert(data.message);
    if (data.status === 'success') {
      formCourse.reset();
    }
  })
  .catch(error => {
  console.error(error);
  alert('Erro ao enviar o curso. Verifique a conexão ou o servidor.');
  });
});