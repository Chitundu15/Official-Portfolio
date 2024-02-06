document.addEventListener('mousemove', (e) => {
    document.body.style.setProperty('--x', e.clientX + 'px');
    document.body.style.setProperty('--y', e.clientY + 'px');
});

document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', function () {
      navLinks.classList.toggle('active');
      hamburger.classList.toggle('is-active');
    });
  });

  //Scroll to section handler
  function scrollToSection(sectionId) {
    var section = document.getElementById(sectionId);
    section.scrollIntoView({ behavior: 'smooth' });

    // Optional: Add a class to highlight the active link
    var links = document.querySelectorAll('a');
    links.forEach(function (link) {
        link.classList.remove('active');
    });
    document.querySelector('a[href="#' + sectionId + '"]').classList.add('active');
}