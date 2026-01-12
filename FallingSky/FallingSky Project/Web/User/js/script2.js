const tabs = document.querySelectorAll('.navbar-menu>a');

tabs.forEach(tab => tab.addEventListener('click', () =>{
  tabToggled(tab);
}));

const tabToggled = (tab) => {
  tabs.forEach(tab => tab.classList.remove('selected'));
  tab.classList.add('selected');

  const contents = document.querySelectorAll('.content');
  contents.forEach(content => content.classList.remove('show'));

  const contentId = tab.getAttribute('content-id');
  const content = document.getElementById(contentId);

  content.classList.add('show');
}