<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <div id="branding">
            </div>
    </div>
    <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
        <div class="logo">
            <a href="http://localhost/wordpress%202/wordpress/#">
                <img src="<?php echo get_theme_file_uri('img/care protect.png') ?>" alt="logo">
            </a>
        </div>
        <div class="nav-bar">
            <ul>
                <li class="home">
                    <a href="#">Home</a>
                </li>
                <div class="btn">Our Categories</div>
            </ul>
            <div class="drop">
                <a href="#second-page">News Updates</a>
                <a href="#third-page">COVID-19 Events</a>
                <a href="#fourt-page">Each selected editor</a>
            </div>
        </div>
    </nav>
    <section class="first-page">
        <h1>
            <div class="care">CARE</div>
            <div class="protect">PROTECT</div>
        </h1>
        <p class="slogan">
            Stay Productive despite the space<br />
            limit all our activities<br />
            because of the Pandemic
        </p>
    </section>

    </header>
    <div id="container">
        <main id="content" role="main">
            <script>
                // let btn = document.querySelector(".btn");
                // let drop = document.querySelector(".drop");
                // let subMenu = drop.querySelectorAll("a");

                // //* dropdown subMenu
                // btn.addEventListener("click", () => {
                //     btn.classList.toggle("click");
                //     drop.classList.toggle("active");
                // });

                // subMenu.forEach((menu) => {
                //     menu.addEventListener("click", () => {
                //         btn.innerHTML = menu.innerHTML;
                //         drop.classList.remove("active");
                //     });
                // });

                //* sticky navbar
                // let nav = document.querySelector("nav");
                // let pageY = nav.offsetTop;

                // window.addEventListener("scroll", () => {
                //     if (window.pageYOffset >= pageY) {
                //         nav.classList.add("sticky");
                //     } else {
                //         nav.classList.remove("sticky");
                //     }
                // });

                //* dropdown menu2
                const btn = document.querySelector('.btn')
                const drop = document.querySelector('.drop')
                const submenu = drop.querySelectorAll('a')


                btn.addEventListener('click', () => {
                    drop.classList.toggle('active')
                })
                window.addEventListener('click', (event) => {
                    const btn = document.querySelector('.btn')
                    if (event.target !== btn) {
                        drop.classList.remove('active')
                        console.log('window')
                    }
                })

                submenu.forEach((menu) => {
                    menu.addEventListener("click", () => {
                        btn.innerHTML = menu.innerHTML;
                    });
                });
            </script>
</body>

</html>