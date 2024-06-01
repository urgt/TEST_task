

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>МАРС</title>
    <?php  echo wp_head(); ?>
  </head>
  <body>
    <div class="wrapper">

    <?php get_template_part('parts/menu'); ?>
      <!-- <header class="header">
        <div class="header__inner container">
          <img class="logo" src="<?php  echo get_template_directory_uri() ?>/assets/img/Mars.svg" alt="MARS" />

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
                  <img src="<?php  echo get_template_directory_uri() ?>/assets/img/close.svg" alt="Close" />
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
      </header> -->
<?php
get_template_part('parts/modal');