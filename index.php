<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>МАРС</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="wrapper">
      <section class="hero">
        <header class="header">
          <div class="header__inner container">
            <img class="logo" src="<?php get_template_directory_uri() ?>/assets/img/Mars.svg" alt="MARS" />

            <div class="header__inner-right">
              <div class="header__burger" id="menu__open">
                <span></span>
                <span></span>
                <span></span>
              </div>
              <nav>
                <ul>
                  <li><a href="#">О марсе</a></li>
                  <li><a href="#">Процесс</a></li>
                  <li><a href="#">Билеты</a></li>
                  <li><a href="#">Новости</a></li>
                  <li><a href="#">Контакты</a></li>
                </ul>
              </nav>
              <div class="header__mobile-menu" id="mobile-menu">
               
                <nav>
                  <button class="modal__close" id="menu__close">
                    <img src="<?php get_template_directory_uri() ?>/assets/img/close.svg" alt="Close" />
                  </button>
                  <ul>
                    <li><a href="#">О марсе</a></li>
                    <li><a href="#">Процесс</a></li>
                    <li><a href="#">Билеты</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Контакты</a></li>
                  </ul>
                </nav>
              </div>
              <button class="button" id="open_modal">Купить билеты</button>
            </div>
          </div>
        </header>

        <div class="utp">
          <div class="utp__inner container">
            <div class="utp__line"></div>
            <div class="utp__title">
              <p class="utp__title-text">Точка назначения:</p>
              <p class="utp__title-mars">МАРС</p>
            </div>
          </div>
        </div>
        <img class="shoom" src="<?php get_template_directory_uri() ?>/assets/img/shoom.png" alt="shoom">
      </section>
      <section class="modal" id="modal">
        <div class="modal__inner container">
          <button class="modal__close" id="modal__close">
            <img src="<?php get_template_directory_uri() ?>/assets/img/close.svg" alt="Close" />
          </button>
          <p class="modal__title">БРОНИРОВАНИЕ<br />БИЛЕТОВ</p>
          <form action="">
            <div class="inputs">
              <div class="date_start">
                <label for="start">Дата заезда</label>
                <input type="date" id="start" name="start" />
              </div>
              <div class="date_stop">
                <label for="stop">Дата выезда</label>
                <input type="date" id="stop" name="stop" />
              </div>
              <div class="count">
                <label for="count">Количество</label>
                <div class="count_block">
                  <input
                    type="number"
                    id="count"
                    value="1"
                    min="1"
                    name="count"
                  />
                  <p>человек</p>
                </div>
              </div>
            </div>
            <button>Купить билеты</button>
          </form>
        </div>
      </section>
    </div>

    <script src="<?php get_template_directory_uri() ?>dist/js/index.js" defer></script>
  </body>
</html>
