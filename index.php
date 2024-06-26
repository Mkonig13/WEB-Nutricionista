<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lic. Carla Cuenca</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="./styles/styles.css">
    <!-- Google Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100..900&family=Caudex:ital,wght@0,400;0,700;1,400;1,700&family=Forum&family=Goudy+Bookletter+1911&family=Petit+Formal+Script&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Belleza&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

</head>
<body>

    <!-- Navbar -->
    <header class="header">
        <a href="#home" class="logo"><img src="images/logo.png" alt=""></a>
        <nav>
            <ul class="navbar">
                <li><a href="#home">Inicio</a></li>
                <li><a href="#about">Sobre mi</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#recetas">Recetas</a></li>
                <li>
                    <?php
                    // Verifica si el usuario es admin
                    if (isset($_SESSION['mail']) && ($_SESSION['mail']) === 'admin@hotmail.com') {
                        echo '<a href="lista.php">Turno</a>';
                    } else {
                        echo '<a href="turno.php">Turno</a>';
                    }
                    ?>
                </li>
                <li><a href="sesion.php">Iniciar sesion</a></li>
            </ul>
            <div class="nav-toggle" id="nav-toggle">
                <i class="bx bx-menu" id="nav-open"></i>
            </div>
        </nav>
    </header>

    <div class="nav-menu" id="nav-menu">
        <ul class="nav-list">
            <li><a href="#home">Inicio</a></li>
            <li><a href="#about">Sobre mi</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#recetas">Recetas</a></li>
            <li>
                    <?php
                    // Verifica si el usuario es admin
                    if (isset($_SESSION['mail']) && ($_SESSION['mail']) === 'admin@hotmail.com') {
                        echo '<a href="lista.php">Turno</a>';
                    } else {
                        echo '<a href="turno.php">Turno</a>';
                    }
                    ?>
                </li>
            <li><a href="sesion.php">Iniciar sesion</a></li>
        </ul>
        <i class='bx bx-x' id="nav-close"></i>
    </div>

    <!-- WhatsApp Me -->
    <div id="whatsapp-button" class="whatsapp-button">
        <a href="https://wa.me/+5491134417767" target="_blank">
            <img src="images/wasap.png" alt="WhatsApp">
        </a>
    </div>

    <section class="modal">
        <div class="modal-container">
            <div class="receta-img-container">
                <img src="" alt="" class="modal-img">
            </div>
            <h1 class="receta-title"></h1>
            <div class="ingredientes-container-receta">
                <h4>Ingredientes:</h4>
                <ul class="lista-ingredientes">
                    <li></li>
                </ul>
            </div>
            <div class="preparacion-container">
                <h4>Preparacion:</h4>
                <ul class="lista-pasos">
                    <li></li>
                </ul>
            </div>

            <a href="" class="modal-close">Volver atras</a>
            
        </div>
    </section>

    <!-- Home Section Start -->
    <section class="home" id="home">
        <div class="home-container">
            <h1 class="home-title"></h1>
            <p class="home-text">¡Bienvenido! Descubrí cómo alcanzar tu mejor versión a través de la nutrición inteligente y el bienestar integral.</p>
        </div>

        <!-- Go Top Button -->

        <div class="go-top-container">
            <div class="go-top-button">
                <i class='bx bx-chevron-up'></i>
            </div>
        </div>

        <!-- Go Bot Button -->

        <div class="go-bot-button">
            <i class='bx bx-chevron-down go-bot'></i>
        </div>

        <div class="home-bot-shape">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>
    <!-- Home Section End -->

    <!-- About Section Start -->
    <section class="about" id="about">
        <div class="about-description"> 
            <div class="text-description">
                <h1>Sobre Carla</h1>
                <h4 class="padbot">Lic. en Nutrición - MN 10538 - MP 6207</h4>

                <p class="padbot">Hola, soy <b>Carla Cuenca</b>, una nutricionista apasionada con una trayectoria excepcional que se ha forjado a través de mi dedicación hacia la salud y el bienestar. Me gradué con honores de la <b>Facultad de Medicina de la Universidad de Buenos Aires (UBA)</b>, donde adquirí una sólida formación en ciencias de la salud que ha sentado las bases de mi enfoque holístico hacia la nutrición. Con 10 años de experiencia en la industria, he consolidado mi reputación como una profesional de confianza y con una <b>dedicación inquebrantable</b> hacia mis <b>pacientes y clientes</b>.</p>
                
                <p class="padbot">Mi especialización en <b>nutrición deportiva y antropometría</b> ha sido el pilar de mi carrera, permitiéndome trabajar con atletas de élite y equipos deportivos de renombre. A través de <b>estrategias nutricionales personalizadas</b> y basadas en la <b>evidencia científica</b>, he contribuido significativamente al <b>éxito y al rendimiento óptimo</b> de mis clientes, demostrando mi capacidad para traducir conocimientos teóricos en resultados tangibles en el campo.</p>

                <p>Además de mi carrera profesional, desafío las expectativas al equilibrar mi vida como madre con mi carrera en nutrición. Como madre de un niño de 4 años, entiendo las complejidades de mantener un estilo de vida saludable y nutrir a una familia en un mundo cada vez más ocupado y exigente. Esta experiencia personal me ha inspirado a proporcionar un apoyo integral a otras familias, combinando mi experiencia profesional con una perspectiva práctica y empática.</p>

            </div>
            <div class="image-description">
                <img src="./images/carla.png" alt="">
            </div>
        </div>

        <div class="about-instagram">
            <div class="image-instagram">
                <img src="./images/igphone.png" alt="">
            </div>
            <div class="text-instagram">
                <p class="padbot">También tengo un pasado deportivo notable como ex jugadora de voleibol profesional del equipo de River Plate. Mi experiencia en el deporte competitivo me ha proporcionado una comprensión única de la importancia de la nutrición en el rendimiento atlético y la salud general. Esta combinación de experiencia profesional y personal me distingue como una figura influyente y respetada en el campo de la nutrición y el bienestar.</p>
                <p class="padbot">Hoy en día, sigo comprometida con mi misión de promover la salud y el bienestar a través de la nutrición inteligente y el estilo de vida saludable. Mi enfoque centrado en el paciente y mi capacidad para adaptarme a las necesidades individuales me convierten en una aliada invaluable para aquellos que buscan mejorar su salud y alcanzar su máximo potencial. Con una dedicación implacable y una pasión innegable por mi trabajo, sigo siendo una fuerza impulsora en la industria de la nutrición, inspirando a otros a tomar el control de su salud y bienestar. ¡Únete a mí en este viaje hacia una vida más saludable y feliz!</p>
            </div>
        </div>

        <div class="about-bot-shape">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>
    <!-- About Section End-->

    <!-- Consultorio Section Start -->

    <!-- <section class="consultorio" id="consultorio">
        <h1 class="consultorio-title">Mi lugar de trabajo</h1>
        <div class="consultorio-first">
            <div class="consultorio-first-image">
                <img src="/images/office.jpg" alt="">
            </div>
            <div class="consultorio-first-description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima pariatur dignissimos natus, quis unde adipisci nisi quam, praesentium nam eveniet repudiandae inventore nobis voluptatum nihil rem debitis. Ducimus, voluptatem assumenda!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima pariatur dignissimos natus, quis unde adipisci nisi quam, praesentium nam eveniet repudiandae inventore nobis voluptatum nihil rem debitis. Ducimus, voluptatem assumenda!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima pariatur dignissimos natus, quis unde adipisci nisi quam, praesentium nam eveniet repudiandae inventore nobis voluptatum nihil rem debitis. Ducimus, voluptatem assumenda!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima pariatur dignissimos natus, quis unde adipisci nisi quam, praesentium nam eveniet repudiandae inventore nobis voluptatum nihil rem debitis. Ducimus, voluptatem assumenda!</p>
            </div>
        </div>
        <div class="consultorio-second">
            <div class="consultorio-second-description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima pariatur dignissimos natus, quis unde adipisci nisi quam, praesentium nam eveniet repudiandae inventore nobis voluptatum nihil rem debitis. Ducimus, voluptatem assumenda!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima pariatur dignissimos natus, quis unde adipisci nisi quam, praesentium nam eveniet repudiandae inventore nobis voluptatum nihil rem debitis. Ducimus, voluptatem assumenda!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima pariatur dignissimos natus, quis unde adipisci nisi quam, praesentium nam eveniet repudiandae inventore nobis voluptatum nihil rem debitis. Ducimus, voluptatem assumenda!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima pariatur dignissimos natus, quis unde adipisci nisi quam, praesentium nam eveniet repudiandae inventore nobis voluptatum nihil rem debitis. Ducimus, voluptatem assumenda!</p>
            </div>
            <div class="consultorio-second-image">
                <img src="/images/office.jpg" alt="">
            </div>
        </div>
        <div class="consultorio-shape">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z" class="shape-fill"></path>
            </svg>
        </div>
    </section> -->

    <!-- Consultorio Section End -->

    <!-- Servicios Section Start -->

    <section class="servicios" id="servicios">
        <h1 class="servicios-title padbot">Servicios</h1>
        <p>SESIONES NUTRICIONALES DE FORMA PRESENCIAL Y VIRTUAL</p>
        <div class="servicios-container">
            <div class="servicios-item">
                <div class="item-description">
                    <img src="./images/chat.webp" alt="">
                    <h3>Evaluación y planificación de la dieta personalizada</h3>
                </div>
                <div class="item-text">
                    <p>Realizar una evaluación completa de la ingesta dietética actual, los hábitos alimenticios, el estado de salud y los objetivos individuales de cada cliente. A partir de esta evaluación, elaborar un plan de alimentación personalizado que incluya recomendaciones específicas sobre los tipos de alimentos a consumir, las porciones adecuadas y la distribución óptima de nutrientes para mejorar la salud y alcanzar los objetivos específicos de cada cliente.</p>
                </div>
                <a class="item-turno">SOLICITAR TURNO</a>
            </div>
            <div class="servicios-item">
                <div class="item-description">
                    <img src="./images/seguimiento.webp" alt="">
                    <h3>Asesoramiento en nutrición deportiva</h3>
                </div>
                <div class="item-text">
                    <p>Trabajar en estrecha colaboración con atletas y deportistas para optimizar su rendimiento a través de la alimentación adecuada. Esto implica proporcionar recomendaciones sobre la ingesta de carbohidratos, proteínas y grasas en función del tipo de deporte, la duración e intensidad del entrenamiento, así como la planificación de comidas antes, durante y después del ejercicio para maximizar la energía y la recuperación muscular.</p>
                </div>
                <a class="item-turno">SOLICITAR TURNO</a>
            </div>
            <div class="servicios-item">
                <div class="item-description">
                    <img src="./images/inbody.webp" alt="">
                    <h3>Control de peso y manejo de la composición corporal</h3>
                </div>
                <div class="item-text">
                    <p>Realizar un seguimiento del peso, la composición corporal y otros indicadores de salud para establecer metas realistas y alcanzables en términos de pérdida o ganancia de peso. Desarrollar estrategias nutricionales específicas, como la creación de un déficit calórico o la implementación de pautas de alimentación equilibrada, y proporcionar apoyo continuo y motivación para ayudar a los clientes a mantener un estilo de vida saludable a largo plazo.</p>
                </div>
                <a class="item-turno">SOLICITAR TURNO</a>
            </div>
            <div class="servicios-item">
                <div class="item-description">
                    <img src="./images/metabolismo.webp" alt="">
                    <h3>Educación en alimentación infantil y familiar</h3>
                </div>
                <div class="item-text">
                    <p>Ofrecer orientación a los padres sobre cómo fomentar hábitos alimenticios saludables desde una edad temprana, incluyendo la introducción de alimentos sólidos, la preparación de meriendas nutritivas y la creación de un ambiente alimentario positivo en el hogar. Proporcionar recursos y herramientas prácticas para ayudar a las familias a superar los desafíos comunes relacionados con la alimentación infantil, como la alimentación selectiva y las preferencias alimentarias.</p>
                </div>
                <a class="item-turno">SOLICITAR TURNO</a>
            </div>
            <div class="servicios-item">
                <div class="item-description">
                    <img src="./images/corporate.webp" alt="">
                    <h3>Consultas de seguimiento y apoyo continuo</h3>
                </div>
                <div class="item-text">
                    <p>Establecer una relación de confianza y colaboración con los clientes a través de consultas de seguimiento regulares, donde se revisen los progresos, se aborden los desafíos y se realicen ajustes en el plan de alimentación según sea necesario. Brindar apoyo emocional y motivacional para ayudar a los clientes a mantener la adherencia a los cambios dietéticos y superar las barreras que puedan surgir en el camino hacia una mejor salud.</p>
                </div>
                <a class="item-turno">SOLICITAR TURNO</a>
            </div>
            <div class="servicios-item">
                <div class="item-description">
                    <img src="./images/grocery.webp" alt="">
                    <h3>Educación en etiquetado de alimentos y compras saludables</h3>
                </div>
                <div class="item-text">
                    <p>Capacitar a los clientes para que tomen decisiones informadas al comprar alimentos, enseñándoles a leer y entender las etiquetas de los productos, identificar ingredientes clave y evaluar el contenido nutricional. Proporcionar consejos prácticos para realizar compras saludables, como hacer una lista de compras antes de ir al supermercado, elegir alimentos frescos y minimizar el consumo de alimentos procesados y ultraprocesados.</p>
                </div>
                <a class="item-turno">SOLICITAR TURNO</a>
            </div>
        </div>

        <div class="servicios-shape">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- Servicios Section End -->

    <!-- Recetas Section Start -->

    <section class="recetas" id="recetas">
        <h1 class="recetas-title">Recetas</h1>
        <p>Explora nuestra sección de recetas saludables, donde encontrarás una amplia variedad de platos deliciosos y nutritivos, cuidadosamente seleccionados para inspirarte en tu viaje hacia una alimentación equilibrada y sabrosa. Desde opciones rápidas y fáciles para el día a día hasta recetas más elaboradas para ocasiones especiales, estamos aquí para ayudarte a disfrutar de la comida mientras cuidas de tu salud. Nuestras recetas están diseñadas para adaptarse a diferentes preferencias dietéticas y restricciones alimentarias, asegurando que todos puedan encontrar algo que les encante.</p>
        <div class="container">

            <div class="card">
                <div class="img-container">
                    <img src="./images/recipe0.jpg" alt="" class="img-receta">
                </div>
                <div class="content">
                    <h5>Recetas</h5>
                    <h3>Galletitas de Remolacha y Naranja</h3>
                    <p>Ingredientes: 200g de Remolacha cocida, 100g de Salvado de avena, 100g de Avena instantánea molida, 60g de Azúcar Mescabo, 1 Cucharada sopera de Polvo de Hornear ...</p>
                </div>
            </div>

            <div class="card">
                <div class="img-container">
                    <img src="./images/recipe1.jpg" alt="" class="img-receta">
                </div>
                <div class="content">
                    <h5>Recetas</h5>
                    <h3>Galletitas Chocobanana</h3>
                    <p>Ingredientes: 2 Huevos, 200g de Harina de Avena o Avena Instantánea, 100g de Azúcar Mescabo o 8 sobres de Sucralosa, 1⁄2 Cucharada sopera de Polvo de Hornear ...</p>
                </div>
            </div>

            <div class="card">
                <div class="img-container">
                    <img src="./images/recipe2.jpg" alt="" class="img-receta">
                </div>
                <div class="content">
                    <h5>Recetas</h5>
                    <h3>Muffins Chocobeet</h3>
                    <p>Ingredientes: 2 Huevos, 250g de remolacha cocida, 100g de Harina integral, 150g de harina de avena instantánea, 8 sobres de Sucralosa en polvo (o también 80g de azúcar Mascabado) ...</p>
                </div>
            </div>

            <div class="card">
                <div class="img-container">
                    <img src="./images/recipe3.jpg" alt="" class="img-receta">
                </div>
                <div class="content">
                    <h5>Recetas</h5>
                    <h3>Brownie de Algarroba</h3>
                    <p>Mezclar el azúcar junto con la harina de algarroba previamente mezclada con el polvo de hornear y el bicarbonato e incorporarle el aceite y unir ...</p>
                </div>
            </div>

        </div>
        <div class="more-container">
            <a href="./recipes.html">VER TODAS LAS RECETAS</a>
        </div>      
    </section>

    <!-- Recetas Section End -->

    <!-- Contact Section Start 
    
    <section class="contacto" id="contacto">
        <div class="custom-shape-divider-top-1710973018">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="form">
            <div class="contact-info">
                <h1>Charlemos</h1>
                <p class="contact-text">Juntos trabajaremos para transformar tus hábitos, y encontrar una alimentación que se adecúe a tus necesidades y metas en este momento.</p>
                <p>Dejame tu consulta sobre encuentros presenciales, talleres, retiros, materiales o sobre lo que quieras.</p>
                <div class="info">
                    <div class="information">
                        <i class="bx bx-map icon"></i>
                        <p>Bauness 2254, Villa Urquiza [Martes]</p>
                    </div>
                    <div class="information">
                        <i class="bx bx-map icon"></i>
                        <p>Av. Triunvirato 4141, Villa Urquiza [Sabado]</p>
                    </div>
                    <div class="information">
                        <i class="bx bx-envelope icon" ></i>
                        <p>lorem@ipsum.com</p>
                    </div>
                    <div class="information">
                        <i class="bx bxl-whatsapp icon"></i>
                        <p>11-1234-5678</p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>
                <form action="index.html" autocomplete="off">
                    <div class="input-container">
                        <input type="text" name="name" class="input">
                        <label for="">Nombre</label>
                        <span>Usuario</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input">
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input"></textarea>
                        <label for="">Mensaje</label>
                        <span>Mensaje</span>
                    </div>
                    <div class="btn-form-container">
                        <input type="submit" value="Enviar" class="btn custom-btn btn-form">
                    </div>                    
                </form>
            </div>
        </div>
    </section>-->

    <!-- Contact Section End -->

    <!-- Footer Start -->

    <footer class="footer" id="footer">
        <div class="footer-logo-container">
            <img src="./images/logo.png" alt="">
        </div>
        <div class="footer-box-container">
            <div class="footer-box">
                <h4>Carla Cuenca</h4>
                <p>Lic. en Nutricion - UBA</p>
                <p>MN 10538 - MP 6207</p>
            </div>
            <div class="footer-box">
                <h4>Turnos</h4>
                <p>Bauness 2254, Villa Urquiza [Martes]</p>
                <p>Av. Triunvirato 4141, Villa Urquiza [Sabado]</p>
            </div>
            <div class="footer-box">
                <h4>Contacto</h4>
                <div class="box-info">
                    <p>lorem@ipsum.com</p>
                </div>
                <div class="box-info">
                    <p>11-1234-5678</p>
                </div>
            </div>
        </div>

    </footer>
    <div class="copyright">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam aut autem quidem consequatur illum et?</p>
    </div>

    <!-- Footer End -->


    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- Typed js -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <!-- Custom Scripts Link -->
    <script src="./js/scripts.js"></script>
    <script src="./js/scriptsRecipe.js"></script>

</body>
</html>