<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pro ISMS Web Application </title>
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,600' rel='stylesheet' type='text/css'>
    <link href="<?=CSS;?>bootstrap.min.css" rel="stylesheet">
    <link href="<?=CSS;?>style.css" rel="stylesheet">
    <link href="<?=CSS;?>color.css" rel="stylesheet">
    <link href="<?=CSS;?>plugins/morris.css" rel="stylesheet">
    <link href="<?=FONT_AWESOME?>css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="white" style="border-bottom:1px solid #ccc; padding:5px 20px;font-size:90%">LISENSI DIBERIKAN KEPADA: <b>PT. MEDIA BARU DIGITAL</b></div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">PRO ISMS WEB APPLICATION</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-unlock"></i> Ubah Password</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav blue-grey darken-2 white-text">
                   <li class="">
                        <a href="<?=BASEURL?>"><i class="fa fa-fw fa-dashboard"></i>&nbsp;DASHBOARD</a>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#administrator"><i class="fa fa-lock"></i> ADMINISTRATOR <i class="fa fa-fw fa-angle-double-down"></i></a>
                        <ul id="administrator" class="collapse">
                            <li><a href="#"><i class="fa fa-user"></i>&nbsp;Manajemen User</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#masterdata"><i class="fa fa-database"></i> MASTER DATA <i class="fa fa-fw fa-angle-double-down"></i></a>
                        <ul id="masterdata" class="collapse">
                            <li><a href="#"><i class="fa fa-hdd-o"></i>&nbsp;Aktifitas Utama</a></li>
                            <li><a href="#"><i class="fa fa-calculator"></i>&nbsp;Nilai Resiko Pengukuran</a></li>
                            <li><a href="#"><i class="fa fa-bar-chart"></i>&nbsp;Nilai Efektifitas Pengukuran</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i>&nbsp;Periode</a></li>
                            <li><a href="#"><i class="fa fa-pencil"></i>&nbsp;Temuan Audit</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#monitoring"><i class="fa fa-desktop"></i> MONITORING <i class="fa fa-fw fa-angle-double-down"></i></a>
                        <ul id="monitoring" class="collapse">
                            <li><a href="#"><i class="fa fa-plus-square"></i>&nbsp;Sistem Manejemen</a></li>
                            <li><a href="#"><i class="fa fa-building-o"></i>&nbsp;Risk Treatment Plan</a></li>
                            <li><a href="#"><i class="fa fa-qrcode"></i>&nbsp;Pengukuran Efektifitas Kontrol</a></li>
                            <li><a href="#"><i class="fa fa-sliders"></i>&nbsp;Audit</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#riskregister"><i class="fa fa-asterisk"></i> RISK REGISTER <i class="fa fa-fw fa-angle-double-down"></i></a>
                        <ul id="riskregister" class="collapse">
                            <li><a href="#">Aktifitas Utama</a></li>
                            <li><a href="#">NRA</a></li>
                            <li><a href="#">Efektifitas</a></li>
                            <li><a href="#">Periode</a></li>
                            <li><a href="#">Temuan Audit</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#asetregister"><i class="fa fa-files-o"></i> ASET REGISTER <i class="fa fa-fw fa-angle-double-down"></i></a>
                        <ul id="asetregister" class="collapse">
                            <li><a href="#">Aktifitas Utama</a></li>
                            <li><a href="#">NRA</a></li>
                            <li><a href="#">Efektifitas</a></li>
                            <li><a href="#">Periode</a></li>
                            <li><a href="#">Temuan Audit</a></li>
                        </ul>
                    </li>

                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#manajemeninsiden"><i class="fa fa-stack-overflow"></i> MANAJEMEN INSIDEN <i class="fa fa-fw fa-angle-double-down"></i></a>
                        <ul id="manajemeninsiden" class="collapse">
                            <li><a href="#">Aktifitas Utama</a></li>
                            <li><a href="#">NRA</a></li>
                            <li><a href="#">Efektifitas</a></li>
                            <li><a href="#">Periode</a></li>
                            <li><a href="#">Temuan Audit</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#pustakaiso"><i class="fa fa-book"></i> PUSTAKA ISO <i class="fa fa-fw fa-angle-double-down"></i></a>
                        <ul id="pustakaiso" class="collapse">
                            <li><a href="#">Aktifitas Utama</a></li>
                            <li><a href="#">NRA</a></li>
                            <li><a href="#">Efektifitas</a></li>
                            <li><a href="#">Periode</a></li>
                            <li><a href="#">Temuan Audit</a></li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid top50">
                    <?=$contents;?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?=JS?>jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=JS?>bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?=JS?>plugins/morris/raphael.min.js"></script>
    <script src="<?=JS?>plugins/morris/morris.min.js"></script>
    <script src="<?=JS?>plugins/morris/morris-data.js"></script>

</body>

</html>
