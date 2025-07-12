<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Название игры</title>
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
        <p class="name">AccountName</p>
        <p id="reviews">отзывов: <span>1</span></p>
      </div>
      <div class="right">
        <a class="btn" href="review.php" target="_blank">Написать отзыв</a
        ><a class="btn" href="regist.html">Регистрация</a>
      </div>
    </header>
    <main>
      <article class="background">
        <span class="generalgrade">10</span>
        <div class="info">
          <h1 id="gamename">Название игры</h1>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Praesentium, quaerat. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Est dolore exercitationem obcaecati aspernatur
            voluptas illum excepturi laborum molestiae deserunt praesentium?
          </p>
          <br />
          <div class="spanhead">
            <span>Дата выхода:</span>
            <p id="gamedate">08.07.25</p>
          </div>
          <div class="spanhead">
            <span>Разработчик:</span>
            <p id="gameauthor">тим чери</p>
          </div>
        </div>
      </article>
      <section>
        <h1 id="revieweek">Лучшие отзывы по этой игре</h1>
        <article class="revieweek">
          <article class="review">
            <span class="grade">10</span>
            <p class="reviewtext">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus
              velit accusamus sed, eos magni minima! Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Ipsam, debitis. Lorem ipsum dolor
              sit amet consectetur adipisicing elit. Assumenda, odio!
            </p>
            <div class="reviewaccount">
              <div class="reviewacc">
                <p class="reviewname">AccountName</p>
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
                <p class="reviewname">AccountName</p>
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
                <p class="reviewname">AccountName</p>
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
      <a class="mainpage" href="index.php">Вернуться на главную</a>
    </footer>
    <script src="code.php"></script>
  </body>
</html>
