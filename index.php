<?php
//ОСТОРОЖНО, КОСТЫЛИ!!!

session_start();

require_once __DIR__ . '\src\helpr.php' ;

$auth = isAuth();

$connect = getDb();


//подгружаем обзоры

$sql = "SELECT * FROM `review`";

$result = mysqli_query($connect, $sql);
$result = mysqli_fetch_all($result);

$reviewList = [];


foreach($result as $item){
$reviewList[] = $item;
}

//подгружаем игры

$sql = "SELECT * FROM `games`";

$result = mysqli_query($connect, $sql);
$result = mysqli_fetch_all($result);

$gamesList = [];

foreach($result as $item){
$gamesList[] = $item;
}


//print_r($reviewList);
//print_r(count($reviewList));


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
        <p class="name"> <?php print(getName()) ?> </p>
        <p id="reviews">отзывов: <span> <? print(getNumReview()); ?> </span></p>
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
          <form action="gamedescription.php" method="get">
            <input type="hidden" name="gameID" value="2">
            <input type="submit" value="Run me now!">
            <a
              target="_blank"
              id="game1"
              class="thirdgame"
              ><?print(getGameNameFromID(2))?></a
            >
          </form>
          <a
            href="gamedescription.php"
            target="_blank"
            id="game2"
            class="secgame"
            >Название игры</a
          >
          <form action="gamedescription.php" method="get">
            <input type="hidden" name="gameID" value="1">
            <input type="submit" value="Run me now!">
            <a
              href="gamedescription.php"
              target="_blank"
              id="game3"
              class="maingame"
              ><?print(getGameNameFromID(1))?></a
            >
          <form>
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
            <span class="grade"><?print($reviewList[count($reviewList) - 1][4])?></span>
            <p class="reviewtext">
              <?print($reviewList[count($reviewList) - 1][5])?>
            </p>
            <div class="reviewaccount">
              <div class="reviewacc">
                <p class="name"><?print(getNameFromID($reviewList[count($reviewList) - 1][1]))?></p>
                <p class="reviewgame"><?print(getGameNameFromID($reviewList[count($reviewList) - 1][2]))?></p>
              </div>
              <div class="avatar" />
            </div>
          </article>
          <article class="review">
            <span class="grade"><?print($reviewList[count($reviewList) - 2][4])?></span>
            <p class="reviewtext">
              <?print($reviewList[count($reviewList) - 2][5])?>
            </p>
            <div class="reviewaccount">
              <div class="reviewacc">
                <p class="name"><?print(getNameFromID($reviewList[count($reviewList) - 2][1]))?></p>
                <p class="reviewgame"><?print(getGameNameFromID($reviewList[count($reviewList) - 2][2]))?></p>
              </div>
              <div class="avatar" />
            </div>
          </article>
          <article class="review">
            <span class="grade"><?print($reviewList[count($reviewList) - 3][4])?></span>
            <p class="reviewtext">
              <?print($reviewList[count($reviewList) - 3][5])?>
            </p>
            <div class="reviewaccount">
              <div class="reviewacc">
                <p class="name"><?print(getNameFromID($reviewList[count($reviewList) - 3][1]))?></p>
                <p class="reviewgame"><?print(getGameNameFromID($reviewList[count($reviewList) - 3][2]))?></p>
              </div>
              <div class="avatar" />
            </div>
          </article>
          <article class="review">
            <span class="grade"><?print($reviewList[count($reviewList) - 4][4])?></span>
            <p class="reviewtext">
              <?print($reviewList[count($reviewList) - 4][5])?>
            </p>
            <div class="reviewaccount">
              <div class="reviewacc">
                <p class="name"><?print(getNameFromID($reviewList[count($reviewList) - 4][1]))?></p>
                <p class="reviewgame"><?print(getGameNameFromID($reviewList[count($reviewList) - 4][2]))?></p>
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
