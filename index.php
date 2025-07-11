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
    <title>GameTime</title>
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
        <p class="name"> <?php echo $login ?> </p>
        <p id="reviews">отзывов: <span>1</span></p>
      </div>
      <div class="right">
        <a class="btn" href="review.php" target="_blank">Написать отзыв</a
        ><a class="btn" href="regist.html">Регистрация</a>
      </div>
    </header>
    <main>
      <section>
        <h1 id="carousel">Лучшие игры недели</h1>
        <article class="carousel">
          <a
            href="gamedescription.php"
            target="_blank"
            id="game1"
            class="thirdgame"
            >Название игры</a
          >
          <a
            href="gamedescription.php"
            target="_blank"
            id="game2"
            class="secgame"
            >Название игры</a
          >
          <a
            href="gamedescription.php"
            target="_blank"
            id="game3"
            class="maingame"
            >Название игры</a
          >
          <a
            href="gamedescription.php"
            target="_blank"
            id="game4"
            class="secgame"
            >Название игры</a
          >
          <a
            href="gamedescription.php"
            target="_blank"
            id="game5"
            class="thirdgame"
            >Название игры</a
          >
        </article>
      </section>
      <section>
        <h1 id="revieweek">Лучшие отзывы за неделю</h1>
        <article class="revieweek">
          <article class="review">
            <span class="grade">10</span>
            <p class="reviewtext">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus
              velit accusamus sed, eos magni minima!
            </p>
            <div class="reviewaccount">
              <div class="reviewacc">
                <p class="name">AccountName</p>
                <p class="reviewgame">Game Name</p>
              </div>
              <div class="avatar" />
            </div>
          </article>
          <article class="review">
            <span class="grade">10</span>
            <p class="reviewtext">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus
              velit accusamus sed, eos magni minima!
            </p>
            <div class="reviewaccount">
              <div class="reviewacc">
                <p class="name">AccountName</p>
                <p class="reviewgame">Game Name</p>
              </div>
              <div class="avatar" />
            </div>
          </article>
          <article class="review">
            <span class="grade">10</span>
            <p class="reviewtext">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus
              velit accusamus sed, eos magni minima!
            </p>
            <div class="reviewaccount">
              <div class="reviewacc">
                <p class="name">AccountName</p>
                <p class="reviewgame">Game Name</p>
              </div>
              <div class="avatar" />
            </div>
          </article>
          <article class="review">
            <span class="grade">10</span>
            <p class="reviewtext">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus
              velit accusamus sed, eos magni minima!
            </p>
            <div class="reviewaccount">
              <div class="reviewacc">
                <p class="name">AccountName</p>
                <p class="reviewgame">Game Name</p>
              </div>
              <div class="avatar" />
            </div>
          </article>
        </article>
      </section>
    </main>
    <footer>
      <span>Весь контент был взят из открытых источников</span>
    </footer>
    <script src="code.php"></script>
  </body>
</html>
