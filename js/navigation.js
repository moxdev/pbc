/**
 * File navigation.js.
 *
 */
const btn = document.getElementById('menu-toggle');
const pane = document.getElementById('mobile-menu');
const activeClass = 'open';

btn.addEventListener('click', function () {
  // addTopMargin();
  if (this.classList.contains(activeClass)) {
    this.setAttribute('aria-expanded', 'false');
    this.classList.remove(activeClass);

    pane.setAttribute('aria-expanded', 'false');
    pane.classList.remove(activeClass);

    document.getElementsByTagName('body')[0].classList.remove(activeClass);
  } else {
    this.setAttribute('aria-expanded', 'true');
    this.classList.add(activeClass);

    pane.setAttribute('aria-expanded', 'true');
    pane.classList.add(activeClass);

    document.getElementsByTagName('body')[0].classList.add(activeClass);
  }
});

// const icons = Array.prototype.slice.call(
//   document.querySelectorAll('#mobile-main-menu .arrow')
// );

// icons.map(item => {
//   item.addEventListener('click', function () {
//     item.classList.toggle('active');
//     if (item.nextElementSibling.classList.contains('active')) {
//       item.nextElementSibling.style.maxHeight = 0;
//       setTimeout(
//         function () {
//           item.nextElementSibling.classList.remove('active');
//         },
//         750
//       );
//     } else {
//       item.nextElementSibling.classList.add('active');
//       item.nextElementSibling.style.maxHeight = item.nextElementSibling.scrollHeight +
//         'px';
//     }
//   });
// });

// function addTopMargin() {
//   pane.scrollTop = 0;
//   const barHeight = document.getElementById('top-bar').clientHeight;
//   const scrolled = window.pageYOffset;
//   pane.style.top = barHeight - scrolled + 'px';
// }

// window.addEventListener('DOMContentLoaded', addTopMargin);
// window.addEventListener('orientationchange', addTopMargin);
