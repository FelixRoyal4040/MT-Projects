const tabs = document.querySelectorAll('.side-menu>ul>li');

tabs.forEach(tab => tab.addEventListener('click', () =>{
  tabToggled(tab);
}));

const tabToggled = (tab) => {
  tabs.forEach(tab => tab.classList.remove('active'));
  tab.classList.add('active');

  const contents = document.querySelectorAll('.content');
  contents.forEach(content => content.classList.remove('show'));

  const contentId = tab.getAttribute('content-id');
  const content = document.getElementById(contentId);

  content.classList.add('show');
}