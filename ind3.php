<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
    <script type="text/javascript" src="scripts/xd.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
    <link rel="shortcut icon" href="app/icons/favicon.ico" />
    <title>TravelTour - VR</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Opinion');
            data.addColumn('number', 'Cantidad');
            data.addRows([
                <?php
                            include('./config.php');
                            $sqlInd = ("SELECT opinion, COUNT(*) as total FROM ind3 GROUP BY opinion;");
                            $queryInd = mysqli_query($con, $sqlInd);
                            ?>
                                <?php 
                            while ($dataInd = mysqli_fetch_array($queryInd)) { ?>
                ['<?php echo ($dataInd['opinion']); ?>', <?php echo ($dataInd['total']); ?>],
                <?php } ?>
            ]);
            var options = {
                title: 'Recuento de Opiniones del aplicativo'
            };
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>
<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">
    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>
    <div id="page">
        <div class="header header-fixed header-logo-center">
            <a href="menu.php" class="header-title back-to-top">Travel & Tour</a>
            <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
        </div>

        <div id="footer-bar" class="footer-bar-1">
            <a href="info.php"><i class="fa fa-info"></i><span>Información</span></a>
            <a href="menu.php"><i class="fa fa-home"></i><span>Inicio</span></a>
            <a href="#" data-menu="menu-settings"><i class="fa fa-cog"></i><span>Ajustes</span></a>
        </div>
        <div class="page-content header-clear-medium">
            <div class="card card-style">
                <div class="content mb-0">
                    <h1 class="text-center mb-2">Recuento de opiniones</h1>
                    <div id="chart_div" style="width: 100%; height: 500px; margin: auto;"></div>                       
                    <div class="footer card card-style">
                        <a href="#" class="footer-title"><span class="color-highlight">TravelTour</span></a>
                        <p class="footer-text"><span>Aplicativo enfocado al turismo en Lunahuana, elaborado para el
                                Semillero de
                                Investigación CLAB</span><br><br>Diseñado por Enabled y configurado por krozDev</p>
                        <div class="text-center mb-3">
                            <a href="#" class="icon icon-xs rounded-sm shadow-l me-1 bg-facebook"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" data-menu="menu-share"
                                class="icon icon-xs rounded-sm me-1 shadow-l bg-highlight"><i
                                    class="fa fa-share-alt "></i></a>
                            <a href="#" class="back-to-top icon icon-xs rounded-sm shadow-l bg-dark-light"><i
                                    class="fa fa-angle-up"></i></a>
                        </div>
                        <p class="footer-copyright">Copyright &copy; CLAB <span id="copyright-year">2023</span>. All
                            Rights
                            Reserved.</p>
                        <p class="footer-links"><a href="#" class="color-highlight">Política de privacidad</a> | <a
                                href="#" class="color-highlight">Términos y condiciones</a> | <a href="#"
                                class="back-to-top color-highlight">Volver arriba</a></p>
                        <div class="clear"></div>
                    </div>
                </div>
                <div id="menu-settings" class="menu menu-box-bottom menu-box-detached">
                    <div class="menu-title mt-0 pt-0">
                        <h1>Ajuste</h1>
                        <p class="color-highlight">Aplica modificaciones al diseño</p><a href="#" class="close-menu"><i
                                class="fa fa-times color-white"></i></a>
                    </div>
                    <div class="divider divider-margins mb-n2"></div>
                    <div class="content">
                        <div class="list-group list-custom-small">
                            <a href="#" data-toggle-theme data-trigger-switch="switch-dark-mode" class="pb-2 ms-n1">
                                <i class="fa font-12 fa-moon rounded-s bg-highlight color-white me-3"></i>
                                <span>Modo oscuro</span>
                                <div class="custom-control scale-switch ios-switch">
                                    <input data-toggle-theme type="checkbox" class="ios-input" id="switch-dark-mode">
                                    <label class="custom-control-label" for="switch-dark-mode"></label>
                                </div>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                        <div class="list-group list-custom-large">
                            <a data-menu="menu-highlights" href="#">
                                <i class="fa font-14 fa-tint bg-green-dark rounded-s"></i>
                                <span>Color auxiliar</span>
                                <strong>Escoger entre los 16 colores diferentes</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                            <a data-menu="menu-backgrounds" href="#" class="border-0">
                                <i class="fa font-14 fa-cog bg-blue-dark rounded-s"></i>
                                <span>Color de fondo</span>
                                <strong>Escoger entre los 10 colores diferentes</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached">
                    <div class="menu-title">
                        <h1>Color auxiliar</h1>
                        <p class="color-highlight">Configurar el color auxiliar</p><a href="#" class="close-menu"><i
                                class="fa fa-times"></i></a>
                    </div>
                    <div class="divider divider-margins mb-n2"></div>
                    <div class="content">
                        <div class="highlight-changer">
                            <a href="#" data-change-highlight="blue"><i class="fa fa-circle color-blue-dark"></i><span
                                    class="color-blue-light">Predeterminado</span></a>
                            <a href="#" data-change-highlight="red"><i class="fa fa-circle color-red-dark"></i><span
                                    class="color-red-light">Red</span></a>
                            <a href="#" data-change-highlight="orange"><i
                                    class="fa fa-circle color-orange-dark"></i><span
                                    class="color-orange-light">Orange</span></a>
                            <a href="#" data-change-highlight="pink2"><i class="fa fa-circle color-pink2-dark"></i><span
                                    class="color-pink-dark">Pink</span></a>
                            <a href="#" data-change-highlight="magenta"><i
                                    class="fa fa-circle color-magenta-dark"></i><span
                                    class="color-magenta-light">Purple</span></a>
                            <a href="#" data-change-highlight="aqua"><i class="fa fa-circle color-aqua-dark"></i><span
                                    class="color-aqua-light">Aqua</span></a>
                            <a href="#" data-change-highlight="teal"><i class="fa fa-circle color-teal-dark"></i><span
                                    class="color-teal-light">Teal</span></a>
                            <a href="#" data-change-highlight="mint"><i class="fa fa-circle color-mint-dark"></i><span
                                    class="color-mint-light">Mint</span></a>
                            <a href="#" data-change-highlight="green"><i
                                    class="fa fa-circle color-green-light"></i><span
                                    class="color-green-light">Green</span></a>
                            <a href="#" data-change-highlight="grass"><i class="fa fa-circle color-green-dark"></i><span
                                    class="color-green-dark">Grass</span></a>
                            <a href="#" data-change-highlight="sunny"><i
                                    class="fa fa-circle color-yellow-light"></i><span
                                    class="color-yellow-light">Sunny</span></a>
                            <a href="#" data-change-highlight="yellow"><i
                                    class="fa fa-circle color-yellow-dark"></i><span
                                    class="color-yellow-light">Goldish</span></a>
                            <a href="#" data-change-highlight="brown"><i class="fa fa-circle color-brown-dark"></i><span
                                    class="color-brown-light">Wood</span></a>
                            <a href="#" data-change-highlight="night"><i class="fa fa-circle color-dark-dark"></i><span
                                    class="color-dark-light">Night</span></a>
                            <a href="#" data-change-highlight="dark"><i class="fa fa-circle color-dark-light"></i><span
                                    class="color-dark-light">Dark</span></a>
                            <div class="clearfix"></div>
                        </div>
                        <a href="#" data-menu="menu-settings"
                            class="mb-3 btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Volver
                            a ajustes</a>
                    </div>
                </div>
                <div id="menu-backgrounds" class="menu menu-box-bottom menu-box-detached">
                    <div class="menu-title">
                        <h1>Color de fondo</h1>
                        <p class="color-highlight">Configurar el color de fondo</p><a href="#" class="close-menu"><i
                                class="fa fa-times"></i></a>
                    </div>
                    <div class="divider divider-margins mb-n2"></div>
                    <div class="content">
                        <div class="background-changer">
                            <a href="#" data-change-background="default"><i class="bg-theme"></i><span
                                    class="color-dark-dark">Predeterminado</span></a>
                            <a href="#" data-change-background="plum"><i class="body-plum"></i><span
                                    class="color-plum-dark">Plum</span></a>
                            <a href="#" data-change-background="magenta"><i class="body-magenta"></i><span
                                    class="color-dark-dark">Magenta</span></a>
                            <a href="#" data-change-background="dark"><i class="body-dark"></i><span
                                    class="color-dark-dark">Dark</span></a>
                            <a href="#" data-change-background="violet"><i class="body-violet"></i><span
                                    class="color-violet-dark">Violet</span></a>
                            <a href="#" data-change-background="red"><i class="body-red"></i><span
                                    class="color-red-dark">Red</span></a>
                            <a href="#" data-change-background="green"><i class="body-green"></i><span
                                    class="color-green-dark">Green</span></a>
                            <a href="#" data-change-background="sky"><i class="body-sky"></i><span
                                    class="color-sky-dark">Sky</span></a>
                            <a href="#" data-change-background="orange"><i class="body-orange"></i><span
                                    class="color-orange-dark">Orange</span></a>
                            <a href="#" data-change-background="yellow"><i class="body-yellow"></i><span
                                    class="color-yellow-dark">Yellow</span></a>
                            <div class="clearfix"></div>
                        </div>
                        <a href="#" data-menu="menu-settings"
                            class="mb-3 btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Volver
                            a ajustes</a>
                    </div>
                </div>
                <div id="menu-share" class="menu menu-box-bottom menu-box-detached">
                    <div class="menu-title mt-n1">
                        <h1>Share the Love</h1>
                        <p class="color-highlight">Just Tap the Social Icon. We'll add the Link</p><a href="#"
                            class="close-menu"><i class="fa fa-times"></i></a>
                    </div>
                    <div class="content mb-0">
                        <div class="divider mb-0"></div>
                        <div class="list-group list-custom-small list-icon-0">
                            <a href="auto_generated" class="shareToFacebook external-link">
                                <i class="font-18 fab fa-facebook-square color-facebook"></i>
                                <span class="font-13">Facebook</span>
                                <i class="fa fa-angle-right"></i>
                            </a>
                            <a href="auto_generated" class="shareToTwitter external-link">
                                <i class="font-18 fab fa-twitter-square color-twitter"></i>
                                <span class="font-13">Twitter</span>
                                <i class="fa fa-angle-right"></i>
                            </a>
                            <a href="auto_generated" class="shareToLinkedIn external-link">
                                <i class="font-18 fab fa-linkedin color-linkedin"></i>
                                <span class="font-13">LinkedIn</span>
                                <i class="fa fa-angle-right"></i>
                            </a>
                            <a href="auto_generated" class="shareToWhatsApp external-link">
                                <i class="font-18 fab fa-whatsapp-square color-whatsapp"></i>
                                <span class="font-13">WhatsApp</span>
                                <i class="fa fa-angle-right"></i>
                            </a>
                            <a href="auto_generated" class="shareToMail external-link border-0">
                                <i class="font-18 fa fa-envelope-square color-mail"></i>
                                <span class="font-13">Email</span>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
            <script type="text/javascript" src="scripts/custom.js"></script>
</body>