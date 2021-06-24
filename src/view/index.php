<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sorte Verde</title>
        <!-- Favicon-->
        <link rel="sortcut icon" type="image/gif" href="assets/img/icon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
    <?php include_once "navegacao.php" ?>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/icon.png" alt="" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Sorte Verde</h1>
                <br>
                <h5>Salve a terra</h5>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
            </div>
            <?php
                include_once "../verifica.php";
            ?>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Matérias</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                
                    <?php
                        include_once "../fachada.php";

                        $dao = $factory->getMateriaDao();

                        foreach ($dao->buscaTodos() as $materia)
                        {
                            $caminhoImagem = $materia->getImagem();
                            $descMateria = $materia->getDescricao();
                            $tituloMateria = $materia->getNome();

                            echo "<div class=\"row justify-content-center\">";
                            echo "<div class=\"col-md-9 col-lg-9 mb-9\">";
                            echo "<div class=\"portfolio-item mx-auto\">";
                            echo "<div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">";
                            echo "<div class=\"portfolio-item-caption-content text-center text-white\"><i class=\"fas fa-plus fa-3x\"></i></div>";
                            echo "</div>";
                            echo "<h1 style=\"text-align: center\"><label font-bold=\"true\"></label>$tituloMateria</h1>";
                            echo "<img class=\"img-fluid\" src=\"$caminhoImagem\" alt=\"\" />";
                            echo "<p style=\"padding-top: 10px\">$descMateria</p>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                        }
                    ?>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Sobre</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ml-auto"><p class="lead">O objetivo desse site é ser um portal 
                        com dicas e matérias sobre reciclagem e meio ambiente. 
                        O site permite que seu usuário cadastre um login para buscar 
                        os melhores lugares para descartar os resíduos. Nós estimulamos 
                        a correta destinação de resíduos, como pilhas, baterias e equipamentos 
                        eletrônicos, pois lixo só é ruim quando descartado de maneira errada,  </p></div>
                    <div class="col-lg-4 mr-auto"><p class="lead">
                        se corretamente destinado ele se transforma em fonte de renda para várias pessoas, 
                        além de reduzir os impactos ambientais ao planeta. Para cada tipo de resíduo tem a 
                        aba para você buscar as associações ou centros de triagens mais próximos. Além disso, 
                        tem matérias relevantes e dicas de como obter hábitos mais sustentáveis e ecológicos.</p></div>
                </div>
            </div>
        </section>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © Sorte Verde 2021</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
