document.addEventListener('DOMContentLoaded', function () {
  const pageName = window.location.pathname;

  if (pageName === '/' || pageName === '/index.php') {
    var splide_eventos = new Splide('#splide_eventos', {
      type: 'loop',
      perPage: 2,
      gap: -60,
      pagination: false,
      focus: 'center',
    });
    splide_eventos.mount();

    var splide_videos = new Splide('#splide_videos', {
      type: 'loop',
      perPage: 1,
      pagination: false,
      focus: 'center',
    });
    splide_videos.mount();

    var splide_parceiros = new Splide('#splide_parceiros', {
      type: 'loop',
      perPage: 3,
      pagination: false,
      focus: 'center',
      autoWidth: true,
      gap: 40,
    });
    splide_parceiros.mount();
  }

  if (pageName === '/pages/quem-somos.php') {
    var splide_equipe = new Splide('#splide_equipe', {
      // type: 'loop',
      perPage: 1,
      pagination: false,
      focus: 'center',
      autoWidth: true,
      // gap: 40,
    });
    splide_equipe.mount();

    var splide_cases = new Splide('#splide_cases', {
      // type: 'loop',
      perPage: 1,
      pagination: false,
      focus: 'center',
      autoWidth: true,
      // gap: 40,
    });
    splide_cases.mount();
  }

  window.addEventListener('scroll', function () {
    const header = document.getElementById('header');
    const scrollTop = window.scrollY || document.documentElement.scrollTop;

    // Adjust the top value based on scroll position
    header.style.top = Math.max(55 - scrollTop, 0) + 'px';

    // Transition for smooth animation
    header.style.transition = 'top 0.3s';
  });
});
