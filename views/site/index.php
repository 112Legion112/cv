<?php
/* @var $this \yii\web\View view component instance */

$this->title = 'Резюме';

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'It is about me',
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'php, web, back-end, html, css, yii2, java, EE'
]);
$this->registerLinkTag([
    'href' => 'https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic',
    'rel' => 'stylesheet',
    'type' => 'text/css',
]);
$this->registerLinkTag([
    'rel' => 'stylesheet',
    'href' => 'assets/plugins/bootstrap/css/bootstrap.min.css',
]);
$this->registerLinkTag([
    'rel' => 'stylesheet',
    'href' => 'assets/plugins/font-awesome/css/font-awesome.css',
]);
$this->registerLinkTag([
    'id' => 'theme-style',
    'rel' => 'stylesheet',
    'href' => 'assets/css/styles.css',
]);
$this->registerJsFile('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js',[
    'condition' => 'Ite IE9'
]);
$this->registerJsFile('https://oss.maxcdn.com/respond/1.4.2/respond.min.js',[
    'condition' => 'Ite IE9'
]);
?>

<div class="wrapper">
    <div class="sidebar-wrapper">
        <div class="profile-container">
            <img class="profile" src="assets/images/profile.png" alt="" />
            <h1 class="name">Максим Агеев</h1>
            <h3 class="tagline">Back-end developer</h3>
        </div><!--//profile-container-->

        <div class="contact-container container-block">
            <ul class="list-unstyled contact-list">
                <li class="email"><i class="fa fa-envelope"></i><a href="mailto: ageev.maks2014@yandex.ru">ageev.maks2014@yandex.ru</a></li>
                <li class="github"><i class="fa fa-github"></i><a href="https://github.com/112Legion112" target="_blank">112Legion112</a></li>
                <li class="twitter"><i class="fa fa-twitter"></i><a href="https://twitter.com/Max78366443" target="_blank">@Max78366443</a></li>
            </ul>
        </div><!--//contact-container-->
        <div class="education-container container-block">
            <h2 class="container-block-title">Образование</h2>
            <div class="item">
                <h4 class="degree"><a href="http://dt45.ru/">WEB - дизайн</a></h4>
                <h5 class="meta">Дворец Детского (Юношеского) Творчества</h5>
                <div class="time">2012 - 2013</div>
            </div><!--//item-->
            <div class="item">
                <h4 class="degree"><a href="http://www.usurt.ru/">Компьютерные сети и комплексы</a></h4>
                <h5 class="meta">УрГУПС</h5>
                <div class="time">2014 - 2018</div>
            </div><!--//item-->
        </div><!--//education-container-->

        <div class="languages-container container-block">
            <h2 class="container-block-title">Языки</h2>
            <ul class="list-unstyled interests-list">
                <li>Русский <span class="lang-desc">(Основной)</span></li>
                <li>English <span class="lang-desc">(Разговорный)</span></li>
            </ul>
        </div><!--//interests-->

        <div class="interests-container container-block">
            <h2 class="container-block-title">Интересы</h2>
            <ul class="list-unstyled interests-list">
                <li>Пейнтбол</li>
                <li>Бильярд</li>
                <li>Компьютерные игры</li>
            </ul>
        </div><!--//interests-->

    </div><!--//sidebar-wrapper-->

    <div class="main-wrapper">

        <section class="section summary-section">
            <h2 class="section-title"><i class="fa fa-user"></i>Кратко о себе</h2>
            <div class="summary">
                <p>Занимаюсь программированием с 14 лет первый языки Pascal, Delphi, обучался в <a href="http://dt45.ru/">ДД(Ю)Т</a> 2013 - 2015.
                    Самостоятельно изучал язык C++. Занимался разработкой на игровом движке <a href="https://www.yoyogames.com/gamemaker">GMS</a>.
                  Владею Английским языком на разговорном уровне. В настоящий момент
                    специализируюсь в языке Java, обучаюсь в <a href="http://foxminded.com/">FoxmindEd</a> разработке на сервере.</p>
            </div><!--//summary-->
        </section><!--//section-->

        <section class="section projects-section">
            <h2 class="section-title"><i class="fa fa-archive"></i>Проекты</h2>

            <div class="intro">
                <p>Это мои проекты</p>
            </div><!--//intro-->

            <div class="item">
                <span class="project-title"><a href="https://github.com/112Legion112/clear-html">АрсПромМеталл</a></span> - <span class="project-tagline">Сайт о компаний занимающейся продажей металла</span>
            </div><!--//item-->

            <div class="item">
                <span class="project-title"><a href="https://github.com/112Legion112/Chat" target="_blank">Консольный чат</a></span> -
                <span class="project-tagline">Чат с использованием командной консоли. Работающей под любой Операционной системой. Разработан на Java.</span>
            </div><!--//item-->

            <div class="item">
                <span class="project-title"><a href="https://github.com/112Legion112/Learn_Swing" target="_blank">Игрушка</a></span> - <span class="project-tagline">Проект по изучению стандартной GUI библиотеки Java - Swing</span>
            </div><!--//item-->

            <div class="item">
                <span class="project-title"><a href="https://github.com/112Legion112/LearnJava" target="_blank">Learn Java</a>
                </span> - <span class="project-tagline">Проект по изучению функциональности языка Java. </span>
            </div><!--//item-->

        </section><!--//section-->

        <section class="skills-section section">
            <h2 class="section-title"><i class="fa fa-rocket"></i>Профессиональные способности</h2>
            <div class="skillset">
                <div class="item">
                    <h3 class="level-title">Java</h3>
                    <div class="level-bar">
                        <div class="level-bar-inner" data-level="98%">
                        </div>
                    </div><!--//level-bar-->
                </div><!--//item-->

                <div class="item">
                    <h3 class="level-title">PHP</h3>
                    <div class="level-bar">
                        <div class="level-bar-inner" data-level="68%">
                        </div>
                    </div><!--//level-bar-->
                </div><!--//item-->


                <div class="item">
                    <h3 class="level-title">HTML</h3>
                    <div class="level-bar">
                        <div class="level-bar-inner" data-level="60%">
                        </div>
                    </div><!--//level-bar-->
                </div><!--//item-->

                <div class="item">
                    <h3 class="level-title">CSS</h3>
                    <div class="level-bar">
                        <div class="level-bar-inner" data-level="50%">
                        </div>
                    </div><!--//level-bar-->
                </div><!--//item-->

                <div class="item">
                    <h3 class="level-title">GIT</h3>
                    <div class="level-bar">
                        <div class="level-bar-inner" data-level="55%">
                        </div>
                    </div><!--//level-bar-->
                </div><!--//item-->

                <div class="item">
                    <h3 class="level-title">Photoshop</h3>
                    <div class="level-bar">
                        <div class="level-bar-inner" data-level="45%">
                        </div>
                    </div><!--//level-bar-->
                </div><!--//item-->

            </div>
        </section><!--//skills-section-->

    </div><!--//main-body-->
</div>

<!-- Javascript -->
<script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- custom js -->
<script type="text/javascript" src="assets/js/main.js"></script>



