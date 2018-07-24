/**
 * File navigation.js.
 *
 */
const openBtn = document.getElementById('open-menu-toggle');
const closeBtn = document.getElementById('close-menu-toggle');
const pane = document.getElementById('mobile-menu');
const activeClass = 'open';

openBtn.addEventListener('click', function () {
  closeBtn.setAttribute('aria-expanded', 'true');
  closeBtn.classList.add(activeClass);

  pane.setAttribute('aria-expanded', 'true');
  pane.classList.add(activeClass);

  document.getElementsByTagName('body')[0].classList.add(activeClass);
});

closeBtn.addEventListener('click', function () {
  this.setAttribute('aria-expanded', 'false');
  this.classList.remove(activeClass);

  pane.setAttribute('aria-expanded', 'false');
  pane.classList.remove(activeClass);

  document.getElementsByTagName('body')[0].classList.remove(activeClass);
});

const icons = Array.prototype.slice.call(
  document.querySelectorAll('#mobile-main-menu .icon-plus')
);

icons.map(item => {
  item.addEventListener('click', function () {
    item.classList.toggle('active');
    if (item.nextElementSibling.classList.contains('active')) {
      item.nextElementSibling.style.maxHeight = 0;
      setTimeout(
        function () {
          item.nextElementSibling.classList.remove('active');
        },
        750
      );
    } else {
      item.nextElementSibling.classList.add('active');
      item.nextElementSibling.style.maxHeight = item.nextElementSibling.scrollHeight +
        'px';
    }
  });
});