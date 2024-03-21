<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Area of Triangle, in PHP" />
    <meta name="keywords" content="mths, ics2o" />
    <meta name="author" content="Dang" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>Area of Triangle,in PHP</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Area of Triangle, in PHP</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="right-image">
          <img src="./images/area_of_trinagle.png" alt="laptop image" width="250" />
        </div>
        <br />
        <div class="page-content">Enter the length and base in cm.</div>
        <div class="page-content-php">
          <form action="answer.php" method="POST">
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="length-of-triangle">
              <label class="mdl-textfield__label" for="length-of-triangle">Length of triangle (cm)</label>
              <span class="mdl-textfield__error">Input is not a number!</span>
            </div>
            <br />
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="base-of-triangle">
              <label class="mdl-textfield__label" for="base-of-triangle">base of triangle (cm)</label>
              <span class="mdl-textfield__error">Input is not a number!</span>
            </div>
            <br />
            <!-- Accent-colored raised button with ripple -->
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
              Calculate
            </button>
          </form>
        </div>
      </main>
    </div>
  </body>
</html>
