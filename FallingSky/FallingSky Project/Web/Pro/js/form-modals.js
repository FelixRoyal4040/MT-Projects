const modalProduct = document.querySelector('.modal-product');
const modalCourse = document.querySelector('.modal-course');
function viewForm(){
  if(!modalProduct.classList.contains('show-form')){
    modalProduct.classList.add('show-form');
  } 
}

function closeForm(){
  if(modalProduct.classList.contains('show-form')){
    modalProduct.classList.remove('show-form');
  }
}

function viewFormCourse(){
  if(!modalCourse.classList.contains('show-course-form')){
    modalCourse.classList.add('show-course-form');
  } 
}
function closeFormCourse(){
  if(modalCourse.classList.contains('show-course-form')){
    modalCourse.classList.remove('show-course-form');
  }
}