


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <?php \APP\core\base\View::getMeta()?>


    <base href="/">

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="../../../../global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="../../../../global_assets/js/main/jquery.min.js"></script>
    <script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="../../../../global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="../../../../global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="../../../../global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="../../../../global_assets/js/plugins/pickers/daterangepicker.js"></script>

    <script src="assets/js/app.js"></script>
    <script src="../../../../global_assets/js/demo_pages/dashboard.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/sparklines.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/lines.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/areas.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/donuts.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/bars.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/progress.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/pies.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/bullets.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-dark navbar-expand-xl rounded-top">

    <a href="/panel/" class="navbar-nav-link " >
        <img src="../../../../global_assets/images/dribbble.png" class="align-top mr-2 rounded" width="20" height="20" alt="">
        <b>CASHCALL.RU</b>
    </a>


    <div class="d-xl-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo1-mobile">
            <i class="icon-grid3"></i>
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-demo1-mobile">



        <span class="navbar-text ml-xl-3">
   Операторов онлайн:  <span class="badge bg-success"><b>8</b></span>
        </span>

        <ul class="navbar-nav ml-xl-auto">

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-bubbles5"></i>
                    <span class="d-md-none ml-2">Мои сообщения</span>
                    <span class="badge badge-pill bg-warning-400 ml-auto ml-xl-0">1</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Сообщения</span>
                        <a href="#" class="text-default"><i class="icon-compose"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3 position-relative">
                                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#">
                                            <span class="font-weight-semibold">James Alexander</span>
                                            <span class="text-muted float-right font-size-sm">04:58</span>
                                        </a>
                                    </div>

                                    <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                </div>
                            </li>



                        </ul>
                    </div>

                    <div class="dropdown-content-footer justify-content-center p-0">
                        <a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="" data-original-title="Показать все"><i class="icon-menu7 d-block top-0"></i></a>
                    </div>
                </div>
            </li>





            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
                    <span><?=$_SESSION['ulogin']['username']?></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> Мой профиль</a>
                    <a href="#" class="dropdown-item"><i class="icon-coins"></i> Баланс</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Настройки аккаунта</a>
                    <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Выход</a>
                </div>
            </li>




        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page header -->
<div class="page-header">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">

                <?php \APP\core\base\View::getBreadcrumbs();?>





            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">


                <a href="#" class="breadcrumb-elements-item">
                    <i class="icon-comment-discussion mr-2"></i>
                    Прочитать FAQ
                </a>


                <a href="#" class="breadcrumb-elements-item">
                    <i class="icon-comment-discussion mr-2"></i>
                    Написать тикет
                </a>







            </div>
        </div>
    </div>


</div>
<!-- /page header -->




<!-- Page content -->
<div class="page-content pt-0">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md align-self-start">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-main-toggle">
                <i class="icon-arrow-left8"></i>
            </a>
            <span class="font-weight-semibold">Main sidebar</span>
            <a href="#" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div>
        <!-- /sidebar mobile toggler -->


        <!-- Sidebar content -->
        <div class="sidebar-content nav-item-divider">
            <div class="card card-sidebar-mobile">


                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="card-body">
                        <div class="media">
                            <div class="mr-3">
                                <a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
                            </div>

                            <div class="media-body">
                                <div class="media-title font-weight-semibold"><?=$_SESSION['ulogin']['username']?></div>
                                <div class="font-size-xs opacity-50">
                                    <i class="fa fa-user font-size-sm"></i> Рекламодатель
                                </div>
                            </div>

                            <div class="ml-3 align-self-center">
                                <a href="/panel/profile/" class="text-white"><i class="icon-cog3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->

                <?php
                $active[$this->route['action']] = 'class="active"';
                ?>


                <!-- Main navigation -->
                <div class="card-body p-0">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">

                        <!-- Main -->
                        <li class="nav-item-header">
                            <div class="text-uppercase font-size-sm line-height-sm">МОИ ПРОЕКТЫ</div>
                        </li>


                        <li class="nav-item">
                            <a href="/panel/" class="nav-link <?=isset($active['index']) ? $active['index'] : ''; ?>">
                                <i class="icon-home4"></i>
                                <span>	Проекты </span>
                            </a>
                        </li>
                        <li class="nav-item"><a href="/panel/add" class="nav-link <?=isset($active['index']) ? $active['index'] : ''; ?>"><i class="icon-phone-plus"></i> <span>Добавить проект</span></a></li>
                        <!-- /main -->

                        <li class="nav-item-header">
                            <div class="text-uppercase font-size-sm line-height-sm">ОБЗОР БИРЖИ</div>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-users4"></i>
                                <span>	Операторы </span>
                                <span class="badge badge-pill bg-secondary ml-auto">39</span>

                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-stats-growth"></i>
                                <span>	Проекты </span>
                                <span class="badge badge-pill bg-secondary ml-auto">1</span>
                            </a>
                        </li>





                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content">

            <!-- Main charts -->
            <div class="row">

                <?=$content?>

        </div>
            <!-- /main charts -->





        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->




<!-- Footer -->
<div class="navbar navbar-expand-lg navbar-dark">
    <div class="text-center d-lg-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
            <i class="icon-unfold mr-2"></i>
            Footer
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-footer">
			<span class="navbar-text">
				&copy; 2020 <b><a href="/panel/">CASHCALL.RU</a></b> - Биржа удаленных операторов на телефоне.
			</span>

        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item"><a href="mailto: <?=CONFIG['BASEMAIL']['email']?>" class="navbar-nav-link" target="_blank"><i class="icon-mail-read mr-2"></i> <?=CONFIG['BASEMAIL']['email']?></a></li>


        </ul>
    </div>
</div>
<!-- /footer -->

</body>
</html>




<!DOCTYPE html>


