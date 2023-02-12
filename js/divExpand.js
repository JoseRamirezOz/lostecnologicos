const expandButtons = document.querySelectorAll('.expand-button');
const expandContainers = document.querySelectorAll('.expand-container');

for (let i = 0; i < expandButtons.length; i++) {
  expandButtons[i].addEventListener('click', function () {
    expandContainers[i].classList.toggle('expanded');

    if (expandContainers[i].classList.contains('expanded')) {
      expandButtons[i].innerHTML = '<i class="fa-expand-class fa-solid fa-arrow-up"></i>';
    } else {
      expandButtons[i].innerHTML = '<i class="fa-expand-class fa-solid fa-arrow-down"></i>';
    }
  });
}
