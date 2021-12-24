<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Old+Standard+TT&display=swap&subset=cyrillic" rel="stylesheet">
    <title>Портфолио Junior верстальщика</title>
  </head>

  <body>
    <header class="page-header">
      <div class="container">
        <a href="mailto:enot_neopoznanniy@gmail.com" class="header-email">enot_neopoznanniy@gmail.com</a>
        <a href="tel:+79876543210" class="header-phone">+7 987 654 32 10</a>
        <button type="button" name="theme">Theme</button>
      </div>
    </header>

    <section class="hero-image">
      <div class="container">
        <h1 class="heading">Неопознанный Енот</h1>
        <p>Junior верстальщик</p>
      </div>
    </section>

    <section class="intro">
      <div class="container">
        <h2 class="subheading">Давайте познакомимся</h2>
        <figure class="user-image">
          <img src="files/user.jpg" width="928" height="536" alt="Фотография Неопознанного Енота">
        </figure>
        <div class="">
          <h3>Пара слов о себе</h3>
          <p>Текст с парой слов о себе.</p>
        </div>
        <div class="">
          <h3>Чем могу быть полезен</h3>
          <p>Текст о том, чем могу быть полезен.</p>
        </div>
        <div class="skills">
          <h3>Мои навыки</h3>
          <dl class="skills-list">
            <dt class="skill-html">HTML</dt>
            <dd class="level"><div style="width: 60%">60%</div></dd>
            <dt class="skill-css">CSS</dt>
            <dd class="level"><div style="width: 40%">40%</div></dd>
          </dl>
        </div>
      </div>
    </section>

    <section class="portfolio">
      <div class="container">
        <h2 class="subheading">Мои работы</h2>
        <figure class="project-image">
          <img src="files/project.jpg" width="928" height="536" alt="Cайт магазина товаров для дома">
        </figure>
        <h3>Магазин товаров для дома</h3>
        <p>Мой первый сайт.</p>

        <h3>Блог начинающего верстальщика</h3>
        <p>Статический блог про обучение HTML и CSS.</p>
      </div>
    </section>

    <footer class="page-footer">
      <div class="container">
        <p>Copyright &copy; <?php echo date("Y"); ?> enot_neopoznanniy</p>
        <a href="mailto:enot_neopoznanniy@gmail.com" class="footer-email">enot_neopoznanniy@gmail.com</a>
        <a href="tel:+79876543210" class="footer-">+7 987 654 32 10</a>
      <div>
    </footer>
  </body>
</html>
