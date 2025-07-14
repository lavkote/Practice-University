<?php

session_start();

require_once __DIR__ . '\src\helpr.php' ;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Написать отзыв</title>
    <link rel="shortcut icon" href="/Images/Vector.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Arsenal+SC:ital,wght@0,400;0,700;1,400;1,700&family=Comfortaa:wght@300..700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="header">
      <div class="mainavatar"></div>
      <div class="left">
        <p class="name"><? print(getName()) ?></p>
        <p id="reviews">отзывов: <span><? print(getNumReview()) ?></span></p>
      </div>
      <div class="right">
        <a class="btn" href="#">Написать отзыв</a
        ><a class="btn" href="regist.html">Регистрация</a>
      </div>
    </header>
    <main id="review">
      <form action="src/reviewCreate.php" method="post" id="reviewform">
        <h1>Форма отзыва</h1> 
        <select class="registr" id="search" name="search">
                <div class="dropdownlist">
                  <option class="list" value="<?echo(getGameNameFromID(1))?>">Выбрать игру</option>
                  <option class="list" value="<?echo(getGameNameFromID(1))?>"><?echo(getGameNameFromID(1))?></option>
                  <option class="list" value="<?echo(getGameNameFromID(1))?>"><?echo(getGameNameFromID(3))?></option>
                  <option class="list" value="<?echo(getGameNameFromID(1))?>"><?echo(getGameNameFromID(2))?></option>
                  <option class="list" value="<?echo(getGameNameFromID(1))?>"><?echo(getGameNameFromID(1))?></option>
                  <option class="list" value="<?echo(getGameNameFromID(1))?>"><?echo(getGameNameFromID(3))?></option>
                </div>
              </div>
            </div>
          </select>
        <input type="range" id="range" name="grade" min="1" max="10" value="2" />
        <div class="gradeword">
          <span>Худшая игра</span><span>Лучшая игра</span>
        </div>
        <textarea
          id="review_text"
          name="message"
          placeholder="Введите свои впечатления об игре"
        ></textarea
        ><button class="btn" id="reviewbtn">Оставить отзыв</button>
      </form>
    </main>
    <footer>
      <a class="mainpage" href="index.php">Вернуться на главную</a>
    </footer>
    <script src="code.php"></script>
  </body>
</html>
