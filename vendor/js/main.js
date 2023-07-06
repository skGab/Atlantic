document.addEventListener('DOMContentLoaded', function () {
  const pageName = window.location.pathname;

  AOS.init();

  // SLIDES HOME
  if (pageName === '/' || pageName === '/index') {
    var splide_eventos = new Splide('#splide_eventos', {
      type: 'loop',
      perPage: 4,
      gap: 40,
      // autoWidth: true,
      pagination: false,
      focus: 'center',
      breakpoints: {
        768: {
          perPage: 2,
          autoWidth: false,
        },
      },
    });
    splide_eventos.mount();

    var splide_videos = new Splide('#splide_videos', {
      type: 'loop',
      perPage: 2,
      pagination: false,
      gap: 50,
      // autoWidth: true,
      // focus: 'center',
      breakpoints: {
        768: {
          perPage: 1,
          autoWidth: false,
        },
      },
    });
    splide_videos.mount();

    var splide_parceiros = new Splide('#splide_parceiros', {
      type: 'loop',
      pagination: false,
      autoWidth: true,
      gap: 50,
      breakpoints: {
        768: {
          autoWidth: true,
          gap: 30,
        },
      },
    });
    splide_parceiros.mount();
  }

  // SLIDES QUEM SOMOS
  if (pageName === '/quem-somos/') {
    var splide_equipe = new Splide('#splide_equipe', {
      type: 'loop',
      perPage: 3,
      pagination: false,
      // focus: 'center',
      // autoWidth: true,
      gap: 30,
      breakpoints: {
        992: {
          perPage: 2,
        },
        768: {
          perPage: 1,
        },
      },
    });
    splide_equipe.mount();

    var splide_cases = new Splide('#splide_cases', {
      type: 'loop',
      perPage: 4,
      pagination: false,
      focus: 'center',
      breakpoints: {
        992: {
          perPage: 3,
        },
        768: {
          perPage: 1,
        },
      },
    });

    // Function to update the title and description
    function updateCaseInfo() {
      var activeSlide = splide_cases.Components.Elements.list.querySelector(
        '.splide__slide.is-active'
      );

      var h3 = activeSlide.querySelector('h3'); // get h3 from active slide
      var p = activeSlide.querySelector('p'); // get p from active slide

      if (h3 && p) {
        var caseDescElement = document.querySelector('.cases_desc'); // select the description container
        var titleElement = caseDescElement.querySelector('h3'); // select title element
        var descriptionElement = caseDescElement.querySelector('p'); // select description element

        // Change title and description
        titleElement.textContent = h3.textContent;
        descriptionElement.textContent = p.textContent;
      }
    }

    // Call updateCaseInfo on the 'active' event
    splide_cases.on('active', updateCaseInfo);

    // Mount the carousel
    splide_cases.mount();

    // Call updateCaseInfo immediately after the carousel is mounted
    updateCaseInfo();
  }

  // SLIDES MARKETFIT
  if (pageName === '/atlantic-marketfit/') {
    var splide_potencial = new Splide('#splide_potencial', {
      type: 'loop',
      perPage: 4,
      pagination: false,
      // focus: 'center',
      // autoWidth: true,
      gap: 20,
      breakpoints: {
        992: {
          perPage: 3,
        },
        768: {
          perPage: 1,
          // gap: 50,;
        },
      },
    });
    splide_potencial.mount();
  }

  // ANIMAÇÃO MENU
  window.addEventListener('scroll', function () {
    const header = document.getElementById('header');
    const scrollTop = window.scrollY || document.documentElement.scrollTop;

    // Adjust the top value based on scroll position
    header.style.top = Math.max(45 - scrollTop, 0) + 'px';

    // Transition for smooth animation
    header.style.transition = 'top 0.3s';
  });
});
