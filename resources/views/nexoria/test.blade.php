<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel Slider</title>
    <title href="https://wpriverthemes.com/gixus"></title>
    <link rel="stylesheet" href="{{ asset('assets/wp-content/themes/gixus/assets/css/test.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  
<main class="Main">

  
  <section class="Carousel" id="carousel" tabindex="-1">
    <h2 class="Hidden">Carousel</h2>
    <article class="Card Card--overlay Card--square" id="card-1">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="480" height="480" loading="lazy" src="{{ asset('assets/imgs/temp1.png') }}">
      </div>
      <div class="Card__main">
        <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 1/1 aspect ratio</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    <!--/Card-->
    <article class="Card Card--overlay Card--wide" id="card-2">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="720" height="480" loading="lazy" src="{{ asset('assets/imgs/temp2.png') }}">
      </div>
      <div class="Card__main">
        <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 16/9 aspect ratio</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    <!--/Card-->
    <article class="Card Card--overlay Card--portrait" id="card-3">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="360" height="480" loading="lazy" src="{{ asset('assets/imgs/temp3.png') }}">
      </div>
      <div class="Card__main">
        <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 3/4 aspect ratio</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    <!--/Card-->
    <article class="Card Card--overlay Card--photo" id="card-4">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="708" height="480" loading="lazy" src="{{ asset('assets/imgs/temp3.png') }}">
      </div>
      <div class="Card__main">
        <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 4/3 aspect ratio</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    <!--/Card-->
    <article class="Card Card--overlay Card--square" id="card-5">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="480" height="480" loading="lazy" src="https://images.unsplash.com/photo-1622987437805-5c6f7c2609d7?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyMzMxOTA3NA&ixlib=rb-1.2.1&q=85&height=480">
      </div>
      <div class="Card__main">
        <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 1/1 aspect ratio</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    <!--/Card-->
    <article class="Card Card--overlay Card--wide" id="card-6">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="720" height="480" loading="lazy" src="https://images.unsplash.com/photo-1607935911096-f31f85819be7?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyMzMyNTI1NA&ixlib=rb-1.2.1&q=85&height=480">
      </div>
      <div class="Card__main">
        <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 16/9 aspect ratio</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    <!--/Card-->
    <article class="Card Card--overlay Card--portrait" id="card-7">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="360" height="480" loading="lazy" src="https://images.unsplash.com/photo-1622595522218-f318265a40f4?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyMzMxOTE1Ng&ixlib=rb-1.2.1&q=85&height=480">
      </div>
      <div class="Card__main">
        <h2><a class="Card__link" href="#">Prefer 3/4 aspect ratio</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    <!--/Card-->
    <article class="Card Card--overlay Card--photo" id="card-8">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="708" height="480" loading="lazy" src="https://images.unsplash.com/photo-1621045246196-4c7ce9092d3a?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyMzMxOTIyOQ&ixlib=rb-1.2.1&q=85&height=480">
      </div>
      <div class="Card__main">
        <h2><a class="Card__link" href="#">Prefer 4/3 aspect ratio</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    <!--/Card-->
  </section>
  <!--/Carousel-->
  
  <nav class="Pagination">
    <h2 class="Hidden">Carousel Navigation</h2>
    <button class="Arrow" type="button" aria-controls="carousel" disabled>
      <svg width="16" height="16" viewBox="0 0 16 16" role="presentation">
        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
      </svg>
      <span class="Hidden">Previous slide</span>
    </button>
    <button class="Arrow" type="button" aria-controls="carousel" disabled>
      <svg width="16" height="16" viewBox="0 0 16 16" role="presentation">
        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
      </svg>
      <span class="Hidden">Next slide</span>
    </button>
    <div class="Dots">
      <a href="#card-1" class="Dot" tabindex="-1"><span class="Hidden">Slide 1</span></a>
      <a href="#card-2" class="Dot" tabindex="-1"><span class="Hidden">Slide 2</span></a>
      <a href="#card-3" class="Dot" tabindex="-1"><span class="Hidden">Slide 3</span></a>
      <a href="#card-4" class="Dot" tabindex="-1"><span class="Hidden">Slide 4</span></a>
      <a href="#card-5" class="Dot" tabindex="-1"><span class="Hidden">Slide 5</span></a>
      <a href="#card-6" class="Dot" tabindex="-1"><span class="Hidden">Slide 6</span></a>
      <a href="#card-7" class="Dot" tabindex="-1"><span class="Hidden">Slide 7</span></a>
      <a href="#card-8" class="Dot" tabindex="-1"><span class="Hidden">Slide 8</span></a>
    </div>
  </nav>
</main>
<!--/Main-->
<!-- 
<h2>Check out <a target="_blank" href="https://codepen.io/WillyW/pen/RwRrvjv">Circle Carousel</a></h2> -->
</body>

</html>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>

(() => {
  // Respect user perference
  const isReducedMotion = window.matchMedia(
    '(prefers-reduced-motion: reduce)'
  ).matches;

  // Helper to apply inline CSS
  const setStyleProps = ($el, styles) => {
    for (const [key, value] of Object.entries(styles)) {
      if (value === false) {
        $el.style.removeProperty(key);
      } else {
        $el.style.setProperty(key, value);
      }
    }
  };

  document.querySelectorAll('.Carousel').forEach(($carousel) => {
    $carousel.scrollLeft = 0;

    const $cards = Array.from($carousel.querySelectorAll('.Card'));
    const $pagination = $carousel.nextElementSibling;
    const [$previous, $next] = $pagination.querySelectorAll('.Arrow');
    $pagination.querySelector('.Dot').classList.add('Dot--active');

    const $start = document.createElement('div');
    const $end = document.createElement('div');
    $carousel.prepend($start);
    $carousel.append($end);

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.target === $start) {
          if ($previous) {
            $previous.disabled = entry.isIntersecting;
          }
        }
        if (entry.target === $end) {
          if ($next) {
            $next.disabled = entry.isIntersecting;
          }
        }
      });
    });
    observer.observe($start);
    observer.observe($end);

    const scrollTo = ($card) => {
      let offset = getOffset($card);
      const left = document.dir === 'rtl' ? -offset : offset;
      const behavior = isReducedMotion ? 'auto' : 'smooth';
      $carousel.scrollTo({left, behavior});
    };

    const getOffset = ($el) => {
      let offset = $el.offsetLeft;
      if (document.dir === 'rtl') {
        offset = $carousel.offsetWidth - (offset + $el.offsetWidth);
      }
      return offset;
    };

    $previous.addEventListener('click', (ev) => {
      ev.preventDefault();
      let $card = $cards[0];
      const scroll = Math.abs($carousel.scrollLeft);
      $cards.forEach(($item) => {
        const offset = getOffset($item);
        if (offset - scroll < -1 && offset > getOffset($card)) {
          $card = $item;
        }
      });
      scrollTo($card);
    });

    $next.addEventListener('click', (ev) => {
      ev.preventDefault();
      let $card = $cards[$cards.length - 1];
      const scroll = Math.abs($carousel.scrollLeft);
      $cards.forEach(($item) => {
        const offset = getOffset($item);
        if (offset - scroll > 1 && offset < getOffset($card)) {
          $card = $item;
        }
      });
      scrollTo($card);
    });

    $pagination.addEventListener('click', (ev) => {
      if (ev.target.classList.contains('Dot')) {
        ev.preventDefault();
        const $card = document.querySelector(new URL(ev.target.href).hash);
        if ($card) scrollTo($card);
      }
    });

    // Highlight nearest "Dot" in pagination
    let scrollTimeout;
    $carousel.addEventListener(
      'scroll',
      () => {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
          let $dot = $pagination.querySelector('.Dot--active');
          if ($dot) $dot.classList.remove('Dot--active');
          let $active;
          const scroll = Math.abs($carousel.scrollLeft);
          if (scroll <= 0) {
            $active = $cards[0];
          }
          if (scroll >= $carousel.scrollWidth - $carousel.offsetWidth) {
            $active = $cards[$cards.length - 1];
          }
          if (!$active) {
            let oldDiff;
            $cards.forEach(($card) => {
              const newDiff = Math.abs(scroll - getOffset($card));
              if (!$active || newDiff < oldDiff) {
                $active = $card;
                oldDiff = newDiff;
              }
            });
          }
          $dot = $pagination.querySelector(
            `[href="#${($active ?? $card[0]).id}"]`
          );
          if ($dot) $dot.classList.add('Dot--active');
        }, 50);
      },
      {passive: true}
    );

    // Improve arrow key navigation
    $carousel.addEventListener('keydown', (ev) => {
      if (/^(Arrow)?Left$/.test(ev.key)) {
        ev.preventDefault();
        (document.dir === 'rtl' ? $next : $previous).click();
      } else if (/(Arrow)?Right$/.test(ev.key)) {
        ev.preventDefault();
        (document.dir === 'rtl' ? $previous : $next).click();
      }
    });

    // Improve transition when tabbing focus

    let scrollLeft = 0;
    $carousel.addEventListener(
      'blur',
      (ev) => {
        scrollLeft = $carousel.scrollLeft;
      },
      {capture: true}
    );
    $carousel.addEventListener(
      'focus',
      (ev) => {
        $carousel.scrollLeft = scrollLeft;
        const $card = ev.target.closest('.Card');
        if ($card) scrollTo($card);
      },
      {capture: true}
    );
  });

  // Optional polyfill for Safari 14
  if (!isReducedMotion && !window.CSS.supports('scroll-behavior: smooth')) {
    import('https://cdn.skypack.dev/smoothscroll-polyfill').then((module) => {
      module.polyfill();
    });
  }
})();

(() => {
  // Toggle right-to-left for demo
  document.querySelector('#toggle-rtl').addEventListener('change', (ev) => {
    document.dir = ev.target.checked ? 'rtl' : 'ltr';
    document.querySelectorAll('.Carousel').forEach(($carousel) => {
      $carousel.scrollLeft = 0;
    });
  });

  // Toggle single slides class for demo
  document.querySelector('#toggle-single').addEventListener('change', (ev) => {
    document.querySelectorAll('.Carousel').forEach(($carousel) => {
      $carousel.classList.toggle('Carousel--single', ev.target.checked);
    });
  });
})();
</script>