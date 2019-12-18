<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sosluev Alexander</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <style>
        .reg {
            background-color: rgb(0, 0, 0);
            padding: 10px;
            float: right;
        }

        .reg a {
            color: white;
            padding: 5px;
            border: 1px solid rgb(0, 201, 246);
            border-radius: 30px;

        }
      .phhp{
          color: aliceblue;
          
      }
    </style>
</head>

<body>
    <header>
        <div class="phhp">
        <?php

    echo "Hello," ;
    echo "Вы вошли";

    ?>

</div>
            <div class="reg">

                <a href="index1.php">Register</a>
                <a href="login.php">Login</a>
<a href="exit.php">Exit</a>

            </div>
        
        <div class="logo">
            <a href="index.html"><b> Sosluev Alexander </b></a>
        </div>
        <nav>
            <div class="topnav" id="myTopnav">
                    <a href="index.html">HOME</a>
                    <a href="projects.html">PROJECTS</a>
                    <a href="blog.html">BLOG</a>
                    <a href="contact.html">CONTACT</a>
                    <a href="location.html">LOCATION</a>
                    <a href="contact.html">CONTACT</a>
                <a id="menu" href="#" class="icon">&#9776</a>
            </div>
        </nav>
    </header>
    <main>
        <img src="img/web.jpg" alt="" class="mw-100">

        <div class="advantages__container">
            <div class="advantages">
                <div class="advantages__item">
                    <img src="img/002-student.png" alt="">
                    <h3>Я</h3>
                    <p>Студент 3 курса,ЧНТУ <br>
                        <b>Спецальность:</b>Комп'ютерная инженерия <br>
                        <b>Факультет:</b> ФЭИТ
                    </p>
                </div>
                <div class="advantages__item">
                    <img src="img/001-diploma.png" alt="">
                    <h3>Знания языков програмирование</h3>

                    <ul>
                        <li>
                            Java <br>
                            <progress min="0" max="100" value="50">
                            </progress>
                        </li>
                        <li>C++ <br> <progress min="0" max="100" value="30">
                            </progress></li>
                        <li>Js <br> <progress min="0" max="100" value="80">
                            </progress></li>
                        <li>HTML <br> <progress min="0" max="100" value="80">
                            </progress></li>
                        <li>CSS <br> <progress min="0" max="100" value="85">
                            </progress></li>
                    </ul>

                </div>
                <div class="advantages__item">
                    <img src="img/032-mathematics.png" alt="">
                    <h3>Умения пользования програмамми</h3>

                    <ul>
                        <li>Adobe Photoshop <br> <progress min="0" max="100" value="25">
                            </progress></li>
                        <li>vs code <br> <progress min="0" max="100" value="45">
                            </progress></li>
                        <li>Microsoft Office <br> <progress min="0" max="100" value="85">
                            </progress></li>
                        <li></li>
                    </ul>
                </div>
                <div class="advantages__item">
                    <img src="img/013-geography.png" alt="">
                    <h3>Знание ОС</h3>

                    <ul>
                        <li>Windows <br>
                            <progress min="0" max="100" value="75">
                            </progress>
                        </li>
                        <li>Linux(Ubuntu) <br>
                            <progress min="0" max="100" value="45">
                            </progress></li>
                    </ul>
                </div>

                <div class="advantages__item">
                    <img src="img/050-video tutorial.png" alt="">
                    <h3>Хобби</h3>
                    <ul>
                        <li>Спорт</li>
                        <li>Кодинг</li>
                        <li>Музыка</li>
                    </ul>
                </div>
                <div class="advantages__item">
                    <img src="img/025-library.png" alt="">
                    <h3>Мои проекти</h3>
                    <a href="projects.html">Нажмите что бы перейти</a>
                </div>

            </div>
        </div>
    </main>
    <footer>
        <nav>
                <a href="index.html">HOME</a>
                <a href="projects.html">PROJECTS</a>
                <a href="blog.html">BLOG</a>
                <a href="contact.html">CONTACT</a>
                <a href="location.html">LOCATION</a>
                <a href="contact.html">CONTACT</a>
        </nav>
        <div class="logo">
            <a href="index.html"><b> Sosluev Alexander </b></a>
        </div>
        <div class="social">
        <a href="#"><img src="img/social/messenger.png" alt=""></a>
            <a href="#"><img src="img/social/facebook.png" alt=""></a>
            <a href="#"><img src="img/social/youtube.png" alt=""></a>
            <a href="#"><img src="img/social/inst.png" alt=""></a>
            </div> <address>Sosluev Alexander 2019</address>
    </footer>
    <script src="js/script.js">  </script>
</body>

</html>