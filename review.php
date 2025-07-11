<?php

session_start();

require_once __DIR__ . '\src\helpr.php' ;

$login = getName();

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
        <p class="name"><?php echo $login ?></p>
        <p id="reviews">отзывов: <span>1</span></p>
      </div>
      <div class="right">
        <a class="btn" href="#">Написать отзыв</a
        ><a class="btn" href="regist.html">Регистрация</a>
      </div>
    </header>
    <main id="review">
      <h1>Форма отзыва</h1>
      <div class="search">
        <input
          type="search"
          class="registr"
          id="search"
          placeholder="Найти игру"
        /><img src="Images/icon_search.svg" alt="icon_search" />
      </div>
      <input type="range" id="range" min="1" max="10" value="2" />
      <div class="gradeword">
        <span>Худшая игра</span><span>Лучшая игра</span>
      </div>
      <textarea
        id="review_text"
        placeholder="Введите свои впечатления об игре"
      ></textarea
      ><button class="btn" id="reviewbtn">Оставить отзыв</button>
    </main>
    <footer>
      <a class="mainpage" href="index.php">Вернуться на главную</a>
    </footer>
    <script src="code.php"></script>
  </body>
</html>
