<section class="modal" id="modal">
        <div class="modal__inner container">
          <button class="modal__close" id="modal__close">
            <img src="<?php  echo get_template_directory_uri() ?>/assets/img/close.svg" alt="Close" />
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