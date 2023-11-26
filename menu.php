<!DOCTYPE HTML>
<?php include_once './assets/head.php'?>
<title>TravelTour - Menú</title>
</head>


<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <div id="page">

        <?php include_once './assets/header-footer-menu.php'?>

        <div class="page-content">

            <div class="content notch-clear">
                <div class="d-flex pt-2">
                    <div class="align-self-center me-auto">
                        <strong class="text-uppercase opacity-60 font-12">Bienvenido</strong>
                        <h1 class="mt-n2 font-30">Travel & Tour</h1>
                    </div>
                </div>
            </div>

            <div class="content mt-n1">
                <div class="search-box bg-theme color-theme rounded-m shadow-l">
                    <i class="fa fa-search"></i>
                    <input type="text" class="border-0" placeholder="Buscar una actividad" data-search>
                    <a href="#" class="clear-search disabled mt-0"><i class="fa fa-times color-red-dark"></i></a>
                </div>
                <div class="search-results disabled-search-list mt-3">
                    <div class="card card-style mx-0 px-2 p-0 mb-0">
                        <?php
					include('./config.php');
					$sqlActividades = ("SELECT * FROM `actividades`");
					$queryActividades = mysqli_query($con, $sqlActividades);
					?>
                        <?php 
                    while ($dataActividad = mysqli_fetch_array($queryActividades)) { ?>
                        <a href="#" class="d-flex py-2" data-filter-item
                            data-filter-name="all <?php echo strtolower($dataActividad['actividad']); ?>">
                            <div>
                                <img src="images/media/<?php echo $dataActividad['id']; ?>_img1.jpg"
                                    class="rounded-sm me-3" width="50" alt="img">
                            </div>
                            <div>
                                <span class="color-highlight font-400 d-block pt-0 text-uppercase font-10">Actividad en
                                    Lunahuana</span>
                                <strong
                                    class="color-theme font-16 d-block mt-n2"><?php echo ($dataActividad['actividad']); ?></strong>
                            </div>
                            <div class="ms-auto text-end align-self-center pe-2">
                                <h5 class="line-height-xs font-18 pt-3">S/. <?php echo $dataActividad['precio']; ?></h5>
                                <span
                                    class="font-10 d-block mt-n2"><?php echo trim($dataActividad['tiempo'],"."); ?></span>
                            </div>
                        </a>
                        <?php } 
                    ?>
                    </div>
                </div>
            </div>
            <div class="search-no-results disabled mt-4">
                <div class="card card-style">
                    <div class="content">
                        <h1>Sin resultados</h1>
                        <p>
                            No se encontraron datos.
                        </p>
                    </div>
                </div>
            </div>


            <div class="d-flex px-3 mb-n3">
                <div class="align-self-center">
                    <h4 class="mb-0">Recomendados</h4>
                </div>
            </div>

            <div class="splide double-slider slider-no-dots visible-slider" id="double-slider-1a">
                <div class="splide__track">
                    <div class="splide__list">
                        <?php
					include('./config.php');
					$sqlActividades2 = ("SELECT * FROM `actividades` where destacado='1'");
					$queryActividades2 = mysqli_query($con, $sqlActividades2);
					?>
                        <?php 
                    while ($dataActividad2 = mysqli_fetch_array($queryActividades2)) { ?>
                        <div class="splide__slide">
                            <a href="actividad.php?id=<?php echo $dataActividad2['id']; ?>" class="mx-3"
                                data-menu="menu-reserve">
                                <div class="card card-style me-0 mb-0"
                                    style="background-image:url(images/media/<?php echo $dataActividad2['id']; ?>_img2.jpg);"
                                    data-card-height="250">
                                    <div class="card-top p-2">
                                        <span class="color-theme bg-theme px-2 py-1 rounded-xs font-11"><i
                                                class="fa fa-star color-yellow-dark"></i></span>
                                    </div>
                                    <div class="card-bottom p-2 px-2">
                                        <h4 class="color-white line-height-s">
                                            <?php echo $dataActividad2['actividad']; ?></h4>
                                        <span class="color-white font-10 opacity-60"><i class="fa fa-tags pe-2"></i>S./
                                            <?php echo $dataActividad2['precio']; ?> -
                                            <?php echo $dataActividad2['tiempo']; ?></span>
                                    </div>
                                    <div class="card-overlay bg-gradient"></div>
                                </div>
                            </a>
                        </div>
                        <?php } 
                    ?>
                    </div>
                </div>
            </div>

            <div class="d-flex px-3">
                <div class="align-self-center">
                    <h4 class="mb-0">Todas las actividades</h4>
                </div>
            </div>

            <div class="content mt-2 mb-n3">
                <div class="row">
                    <?php
			include('./config.php');
					$sqlActividades1 = ("SELECT * FROM `actividades`");
					$queryActividades1 = mysqli_query($con, $sqlActividades1);
					?>
                    <?php 
                    while ($dataActividad1 = mysqli_fetch_array($queryActividades1)) { ?>
                    <div class="col-6 pe-2">
                        <a href="actividad.php?id=<?php echo $dataActividad1['id']; ?>" data-menu="menu-reserve"
                            class="card card-style mx-0 mb-3">
                            <!-- <div class="card-top m-2">
							<span class="bg-white color-black font-11 px-2 py-1 font-700 rounded-xs shadow-xxl">15% OFF</span>
						</div> -->
                            <img src="images/media/<?php echo $dataActividad1['id']; ?>_img1.jpg" alt="img"
                                class="img-fluid">
                            <div class="p-2">
                                <h4 class="mb-0"><?php echo $dataActividad1['actividad']; ?></h4>
                            </div>
                            <div class="divider mb-0"></div>
                            <h5 class="p-2 font-12">S/. <?php echo $dataActividad1['precio']; ?><span
                                    class="float-end font-400 font-11 color-green-dark"><?php echo $dataActividad1['tiempo']; ?></span>
                            </h5>
                        </a>
                    </div>
                    <?php } 
                    ?>
                    <!-- <div class="col-6 ps-2">
					<a href="#" data-menu="menu-reserve" class="card card-style mx-0 mb-3">
						<div class="card-top m-2">
							<span class="bg-white color-black font-11 px-2 py-1 font-700 rounded-xs shadow-xxl">25% OFF</span>
						</div>
						<img src="images/travel/7m.jpg" alt="img" width="100" class="img-fluid">
						<div class="p-2">
							<h4 class="mb-0">Mountain Hikes</h4>
							<p class="mb-0 font-11 mt-n1 opacity-70"><i class="fa fa-map-marker pe-2"></i>Europe, France</p>
						</div>
						<div class="divider mb-0"></div>
						<h5 class="p-2 font-12">$1320 / 5 Days <span class="float-end font-400 font-11 color-yellow-dark">5 Left</span></h5>
					</a>
				</div> -->
                </div>
            </div>

            <?php include_once './assets/footer.php'?>

        </div>
        <!-- End of Page Content-->

        <!-- All Menus, Action Sheets, Modals, Notifications, Toasts, Snackbars get Placed outside the <div class="page-content"> -->
        <?php include_once './assets/menu-footer.php'?>

    </div>

    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/custom.js"></script>


</body>