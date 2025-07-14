<?php

session_start();

require_once __DIR__ . '\src\helpr.php' ;

//проверка на получение Id игры

if(!isset($_GET['gameID'])){
  header("Location: /index.php");
}

$gameID = $_GET['gameID'];

//print_r($gameID);

$connect = getDb();

// подгружаем игру
$sql = "SELECT * FROM `games` WHERE `id` = ('$gameID') ";

$result = mysqli_query($connect, $sql);
$result = mysqli_fetch_all($result);


foreach($result as $item){
$game = $item;
}


// подгружаем обзоры на данную игру

$sql = "SELECT * FROM `review` WHERE `gameId` = ('$gameID')";

$result = mysqli_query($connect, $sql);
$result = mysqli_fetch_all($result);

$reviewList = [];

foreach($result as $item){
$reviewList[] = $item;
}

//Подсчёт оценки
$sumOfGrades = 0;
for($i = 0; $i < count($reviewList); $i++){
$sumOfGrades += $reviewList[$i][4];
}

$finalGrade = $sumOfGrades / (count($reviewList));

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?print($game[1])?></title>
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
        <p class="name"><?php print(getName())?></p>
        <p id="reviews">отзывов: <span><? print(getNumReview()); ?></span></p>
      </div>
      <div class="right">
        <a class="btn" href="review.php" target="_blank">Написать отзыв</a
        ><a class="btn" href="regist.html">Регистрация</a>
      </div>
    </header>
    <main>
      <style>
        .background{
          background-image: url("/Images/Atomic_Heart.webp");
          background-size: cover;
          background-position: center;
        }
      </style>
      <article class="background">
        <span class="generalgrade"><?print($finalGrade)?></span>
        <div class="info">
          <h1 id="gamename"><?print($game[1])?></h1>
          <p class="text">
            <?print($game[5])?>
          </p>
          <br />
          <div class="spanhead">
            <span>Дата выхода: </span>
            <p id="gamedate"><?print($game[4])?></p>
          </div>
          <div class="spanhead">
            <span>Разработчик:</span>
            <p id="gameauthor"><?print($game[3])?></p>
          </div>
        </div>
      </article>
      <section>
        <h1 id="revieweek">Лучшие отзывы по этой игре</h1>
        <article class="revieweek">
          <article class="review">
            <span class="grade"><?print($reviewList[count($reviewList) - 1][4])?></span>
            <p class="reviewtext">
              <?print($reviewList[count($reviewList) - 1][5])?>
            </p>
            <div class="reviewaccount">
              <div class="reviewacc">
                <p class="reviewname"><?print(getNameFromID($reviewList[count($reviewList) - 1][1]))?></p>
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
                <p class="reviewname"><?print(getNameFromID($reviewList[count($reviewList) - 2][1]))?></p>
                <p class="reviewgame"><?print(getGameNameFromID($reviewList[count($reviewList) - 2][2]))?></p>
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
