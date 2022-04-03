<!DOCTYPE html>
<html lang="<?php echo $page_lang; ?>">
<!-- <html lang="ru"> -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>NewAgeLab</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Roboto:wght@400;500;700;900&display=swap"
    rel="stylesheet">
<link href="assets/css/styles.3b10a06dfaeb44e756e0.css" rel="stylesheet"></head>

<body class="page">
  <section class="header">

  <div class="container">
    
    <div class="header__lang list">
      <button type="button" class="header__lang-item">UA</button>
      <button type="button" class="header__lang-item active">EN</button>
      <button type="button" class="header__lang-item">FR</button>
    </div>
  </div>

  <div class="header__box">
    <div class="container">
      
      <p class="header__logo"><span class="header__logo--part">Web</span>Studio</p>

      
      <ul class="header__list list">
        <li class="header__list-item">
          <a href="/">Lorem ipsum dolor sit</a>
        </li>
        <li class="header__list-item">
          <a href="/">Lorem ipsum</a>
        </li>
        <li class="header__list-item">
          <a href="/">Lorem ipsum dolor</a>
        </li>
        <li class="header__list-item">
          <a href="/">Lorem ipsum dolor sit, amet consectetur</a>
        </li>
        <li class="header__list-item">
          <a href="/">Lorem ipsum dolor</a>
        </li>
        <li class="header__list-item">
          <a href="/">Lorem ipsum dolor sit</a>
        </li>
      </ul>

      
      <div class="header__menu-mob">
        
        <button type="button" class="menu-button" data-menu-button aria-expanded="false" aria-controls="mobile-menu">
          <svg width="24" height="16" aria-label="Переключатель мобильного меню">
            <use class="menu-button__icon-menu menu-icon" href="assets/img/94bea751625691c907e7.svg#icon-menu_24px"></use>
            <use class="menu-button__icon-cross menu-icon" href="assets/img/94bea751625691c907e7.svg#icon-close_24px"></use>
          </svg>
        </button>

        <p class="header__menu-title">Menu</p>

        
        <div class="mobile-menu container" id="mobile-menu" data-menu>
          <nav>
            <ul class="mobile-menu__site-nav list">
              <li class="mobile-menu__site-nav-item">
                <a href="/" class="mobile-menu__site-nav-link mobile-menu__site-nav-link--mobile-active">Lorem,
                  ipsum</a>
              </li>
              <li class="mobile-menu__site-nav-item">
                <a href="/" class="mobile-menu__site-nav-link">Lorem, ipsum dolor</a>
              </li>
              <li class="mobile-menu__site-nav-item">
                <a href="/" class="mobile-menu__site-nav-link">Lorem ipsum dolor sit</a>
              </li>
              <li class="mobile-menu__site-nav-item">
                <a href="/" class="mobile-menu__site-nav-link">Lorem ipsum</a>
              </li>
              <li class="mobile-menu__site-nav-item">
                <a href="/" class="mobile-menu__site-nav-link">Lorem ipsum</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </div>

  <nav class="header__menu-desk">
    <div class="container">
      <ul class="desk-menu__site-nav list">
        <li class="desk-menu__site-nav-item">
          <a href="/" class="desk-menu__site-nav-link">Lorem,
            ipsum</a>
        </li>
        <li class="desk-menu__site-nav-item">
          <a href="/" class="desk-menu__site-nav-link">Lorem, ipsum dolor</a>
        </li>
        <li class="desk-menu__site-nav-item">
          <a href="/" class="desk-menu__site-nav-link">Lorem ipsum dolor sit</a>
        </li>
        <li class="desk-menu__site-nav-item">
          <a href="/" class="desk-menu__site-nav-link">Lorem ipsum</a>
        </li>
        <li class="desk-menu__site-nav-item">
          <a href="/" class="desk-menu__site-nav-link">Lorem ipsum</a>
        </li>
      </ul>
    </div>
  </nav>

</section>
    <section class="first">
  <div class="container">

    <form method="POST" class="form" id="form">
      <h2 class="form__title">
        Lorem ipsum dolor sit.
      </h2>
      <label>
        Your name
        <input name="f_name" placeholder="John" required>
      </label>
      <div class="form__input-box">
        <label>
          Your last name
          <input name="l_name" placeholder="Last name">
        </label>
        <label>
          Your location
          <input name="l_name" placeholder="Location">
        </label>
      </div>
      <div class="form__input-box">
        <label>
          Your e-mail
          <input type="email" name="email" placeholder="E-mail" required>
        </label>
        <label>
          Your phone
          <input type="tel" name="phone" placeholder="Phone" autocomplete="off" required>
        </label>
      </div>

      <button class="form__btn" type="submit">
        Submit
      </button>
    </form>

    <div class="first__box">
      <p class="first__descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero reprehenderit architecto, alias modi commodi labore laborum.</p>
      <p class="first__accent">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

      <a href="/">
        <button type="button" class="first__btn">MORE</button>
      </a>
    </div>
  </div>
</section>
      <section class="second">
  <div class="container">
    
    <h2 class="second__title">Lorem ipsum dolor sit</h2>

    <div class="second__desk-box">
      <div class="card second__card">
        <img src="assets/img/9cab99ba4c93cca2f176.jpg" class="card-img-top second__card-img" alt="...">
        <div class="card-body second__card-body">
          <h4 class="second__card-title">Lorem ipsum dolor sit</h4>
          <p class="card-text second__card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
  
      <div class="card second__card">
        <img src="assets/img/4e96a07ef490ee7a7ac3.jpg" class="card-img-top second__card-img" alt="...">
        <div class="card-body second__card-body">
          <h4 class="second__card-title">Lorem, ipsum</h4>
          <p class="card-text second__card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
  
      <div class="card second__card">
        <img src="assets/img/9aa04265353c94f638e1.jpg" class="card-img-top second__card-img" alt="...">
        <div class="card-body second__card-body">
          <h4 class="second__card-title">Lorem, ipsum dolor</h4>
          <p class="card-text second__card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>

  </div>
</section>

        <section class="third">
  <div class="container">

    <h2 class="third__title">Lorem, ipsum</h2>
    <ul class="third__list">
      <li class="third__list-item">
        <a href="" class="third__list-link">
          <svg class="third__list-icon" width="44" height="49">
            <use href="assets/img/94bea751625691c907e7.svg#icon-logo-1"></use>
          </svg>
        </a>
      </li>
      <li class="third__list-item">
        <a href="" class="third__list-link">
          <svg class="third__list-icon" width="40" height="52">
            <use href="assets/img/94bea751625691c907e7.svg#icon-logo-2"></use>
          </svg>
        </a>
      </li>
      <li class="third__list-item">
        <a href="" class="third__list-link">
          <svg class="third__list-icon" width="41" height="42">
            <use href="assets/img/94bea751625691c907e7.svg#icon-logo-3"></use>
          </svg>
        </a>
      </li>
      <li class="third__list-item">
        <a href="" class="third__list-link">
          <svg class="third__list-icon" width="80" height="42">
            <use href="assets/img/94bea751625691c907e7.svg#icon-logo-4"></use>
          </svg>
        </a>
      </li>
      <li class="third__list-item">
        <a href="" class="third__list-link">
          <svg class="third__list-icon" width="59" height="47">
            <use href="assets/img/94bea751625691c907e7.svg#icon-logo-5"></use>
          </svg>
        </a>
      </li>
      <li class="third__list-item">
        <a href="" class="third__list-link">
          <svg class="third__list-icon" width="88" height="45">
            <use href="assets/img/94bea751625691c907e7.svg#icon-logo-6"></use>
          </svg>
        </a>
      </li>
      <li class="third__list-item">
        <a href="" class="third__list-link">
          <svg class="third__list-icon" width="44" height="49">
            <use href="assets/img/94bea751625691c907e7.svg#icon-logo-1"></use>
          </svg>
        </a>
      </li>
      <li class="third__list-item">
        <a href="" class="third__list-link">
          <svg class="third__list-icon" width="40" height="52">
            <use href="assets/img/94bea751625691c907e7.svg#icon-logo-2"></use>
          </svg>
        </a>
      </li>
      <li class="third__list-item">
        <a href="" class="third__list-link">
          <svg class="third__list-icon" width="41" height="42">
            <use href="assets/img/94bea751625691c907e7.svg#icon-logo-3"></use>
          </svg>
        </a>
      </li>
      <li class="third__list-item">
        <a href="" class="third__list-link">
          <svg class="third__list-icon" width="80" height="42">
            <use href="assets/img/94bea751625691c907e7.svg#icon-logo-4"></use>
          </svg>
        </a>
      </li>
      <li class="third__list-item">
        <a href="" class="third__list-link">
          <svg class="third__list-icon" width="59" height="47">
            <use href="assets/img/94bea751625691c907e7.svg#icon-logo-5"></use>
          </svg>
        </a>
      </li>
      <li class="third__list-item">
        <a href="" class="third__list-link">
          <svg class="third__list-icon" width="88" height="45">
            <use href="assets/img/94bea751625691c907e7.svg#icon-logo-6"></use>
          </svg>
        </a>
      </li>
    </ul>

    <span class="third__toggle">MORE</span>
  </div>
</section>
          <section class="fourth">
  <div class="container">
    
    <h2 class="fourth__title">Lorem ipsum dolor sit amet</h2>

        <ul class="fourth__list">

            <li class="fourth__list-item">
                <p class="fourth__list-item-quest">1. Lorem ipsum dolor sit amet consectetur?</p>
                <p class="fourth__list-item-ans">Lorem, ipsum <b>lorem, ipsum</b>, Lorem ipsum dolor sit amet consectetur adipisicing elit <b>lorem ipsum dolor sit</b> lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </li>

            <li class="fourth__list-item">
                <p class="fourth__list-item-quest">2. Lorem ipsum dolor sit, amet consectetur adipisicing elit?</p>
                <p class="fourth__list-item-ans">Lorem ipsum <b>lorem, ipsum dolor</b>, lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat?<b>Lorem ipsum dolor sit amet</b>
                    Lorem, ipsum dolor.</p>
            </li>

            <li class="fourth__list-item">
                <p class="fourth__list-item-quest">3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non?</p>
                <p class="fourth__list-item-ans"><b>Non</b>. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam aut placeat iusto veritatis, at earum.</p>
            </li>

            <li class="fourth__list-item">
                <p class="fourth__list-item-quest">4. Lorem ipsum dolor sit amet consectetur adipisicing?</p>
                <p class="fourth__list-item-ans">Lorem, ipsum dolor <b>lorem, ipsum.</b>, lorem ipsum dolor sit.
                </p>
            </li>

            <li class="fourth__list-item">
                <p class="fourth__list-item-quest">5. Lorem ipsum dolor sit amet consectetur adipisicing?</p>
                <p class="fourth__list-item-ans">Lorem, ipsum dolor <b>lorem, ipsum.</b>, lorem ipsum dolor sit.
                </p>
            </li>

            <li class="fourth__list-item">
                <p class="fourth__list-item-quest">6. Lorem ipsum dolor sit amet consectetur adipisicing?</p>
                <p class="fourth__list-item-ans">Lorem, ipsum dolor <b>lorem, ipsum.</b>, lorem ipsum dolor sit.
                </p>
            </li>

            <li class="fourth__list-item">
                <p class="fourth__list-item-quest">7. Lorem ipsum dolor sit amet consectetur adipisicing?</p>
                <p class="fourth__list-item-ans">Lorem, ipsum dolor <b>lorem, ipsum.</b>, lorem ipsum dolor sit.
                </p>
            </li>

            <li class="fourth__list-item">
                <p class="fourth__list-item-quest">8. Lorem ipsum dolor sit amet consectetur adipisicing?</p>
                <p class="fourth__list-item-ans">Lorem, ipsum dolor <b>lorem, ipsum.</b>, lorem ipsum dolor sit.
                </p>
            </li>

            <li class="fourth__list-item">
                <p class="fourth__list-item-quest">9. Lorem ipsum dolor sit amet consectetur adipisicing?</p>
                <p class="fourth__list-item-ans">Lorem, ipsum dolor <b>lorem, ipsum.</b>, lorem ipsum dolor sit.
                </p>
            </li>

        </ul>

        <button type="button" class="fourth__btn scroll-btn">SUBMIT APPLICATION</button>

  </div>
</section>


            <script src="./assets/js/jquery-3.5.1.min.js"></script>
            <script src="./assets/js/bootstrap.bundle.min.js"></script>

            <script>
              $(".scroll-btn").each(function () {
                $(this).click((e) => {
                  e.preventDefault();
                  $("html").animate(
                    {
                      scrollTop: $(".form").offset().top,
                    },
                    800
                  );
                });
              });
            </script>
<script defer src="assets/js/index.3b10a06dfaeb44e756e0.js"></script></body>

</html>