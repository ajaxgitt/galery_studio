<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" href="logoGalery-mejorado.png" />


    <title>Galery Studio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <header class="header">
        <a href="#" class="logo">
            <img src="logoGalery-mejorado.png" alt="">
            Galery
            <span>STUDIO</span>
        </a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <nav class="navbar">
            <a href="#home"> Home </a>
            <a href="#services"> categorias </a>
            <a href="#about"> about </a>
            <a href="#contact"> contact </a>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="home-img">
            <img src="img2.jpg" alt="">
        </div>
        <div class="home-content">
            {{-- <h1>It's <span>yecid</span> </h1> --}}
            <h3 class="text-animation">
                Que encontraras <span></span>
            </h3>
            <p>"Bienvenidos al espacio donde la imaginación toma forma. Aquí podrás explorar las obras que reflejan la
                esencia y la pasión de galery STUDIO. Cada pieza es un viaje único a través de la creatividad, el
                color y la emoción. ¡Descubre el arte que inspira y conecta!"</p>
        </div>
        <div class="social-icons">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-youtube'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-twitch'></i></a>
            <a href="#"><i class='bx bxl-tiktok'></i></a>

        </div>
        {{-- <a href="#"class="btn">Hire Me</a> --}}
    </section>

    <section id="services" class="services">

        <h2 class="heading">
            Categorias
        </h2>
        <div class="service-container">

            <div class="service-box">
                <a href="galery.blade.php" class="service-info">
                    <h4>GRafig Desing</h4>
                    <img src="img3.jpg"  class="imge" alt="">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint consequuntur provident architecto
                        enim odio maiores porro animi exercitationem.</p>
                </a>
            </div>

            <div class="service-box">
                <div class="service-info">
                    <h4>Frontend developer</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint consequuntur provident architecto
                        enim odio maiores porro animi exercitationem.</p>
                </div>
            </div>

            <div class="service-box">
                <div class="service-info">
                    <h4>ui /ux Desing</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint consequuntur provident architecto
                        enim odio maiores porro animi exercitationem.</p>
                </div>
            </div>

            <div class="service-box">
                <div class="service-info">
                    <h4>conten manager</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint consequuntur provident architecto
                        enim odio maiores porro animi exercitationem.</p>
                </div>
            </div>


            <div class="service-box">
                <div class="service-info">
                    <h4>texting</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint consequuntur provident architecto
                        enim odio maiores porro animi exercitationem.</p>
                </div>
            </div>

            <div class="service-box">
                <div class="service-info">
                    <h4>mobile app developer</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint consequuntur provident architecto
                        enim odio maiores porro animi exercitationem.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="about">
        <div class="about-content">
            <h2 class="heading">
                Sobre<span> mi</span>
            </h2>
            {{-- <h3 class="text-animation">
                <span></span>
            </h3> --}}
            <p>
                Hola, me presento, soy Ediwn Franz, un artista autodidacta que, junto a mi hermano, comenzó a
                experimentar con distintos materiales, pero fue la fibra de vidrio la que nos llamó la atención. Este
                material, ligero y resistente, al endurecerse, toma cualquier forma que le demos. Comenzamos creando
                máscaras de superhéroes con arcilla, y pronto descubrimos que podíamos hacer mucho más: escudos, figuras
                y cualquier cosa que nuestra imaginación nos dictara.

                Esa pasión nos llevó a fundar <span> Gallery Studio</span> , una start-up donde trabajamos con
                coleccionistas y museos creando
                figuras personalizadas. Lo mejor de todo es que seguimos disfrutando de cada pieza, de cada desafío, con
                la misma emoción del primer día.</p>
            {{-- <a href="#" class="btn">Read me</a> --}}
        </div>
        <div class="about-img">
            <img src="img3.jpg" alt="">
        </div>
    </section>


    <section id="contact" class="contact">
        <h2 class="heading">
            Contact <span>Me</span>
        </h2>
        <form action="#">
            <div class="input-box">
                <input type="text" placeholder="Full name">
                <input type="email" placeholder="email" name="" id="">
            </div>

            <div class="input-box">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea name="" id="" cols="20" rows="10" placeholder="your messague"></textarea>
            <input type="submit" value="Send messague" class="btn">
        </form>
    </section>

    <footer class="footer">
        <div class="social">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-youtube'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-twitch'></i></a>
            <a href="#"><i class='bx bxl-tiktok'></i></a>
        </div>
        <ul>
            <li>
                <a href="#">FAQ</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Abaunt me</a>
            </li>
            <li>
                <a href="#">contact</a>
            </li>
            <li>
                <a href="#">privacy prolicy</a>
            </li>
        </ul>
        <p class="copyright">
            @ yecid | all derechos reservados
        </p>
    </footer>

</body>

</html>
