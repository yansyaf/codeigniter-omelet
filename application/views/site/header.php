<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png" />

        <title></title>

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url() ?>assets/bootstrap-3.0.2/css/bootstrap.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="<?= base_url() ?>assets/site/sticky-footer-navbar.css" rel="stylesheet" />

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <style>
            .container > .navbar-collapse {
                margin-right: 88px; /*set margin this way in your custom styesheet*/
            }
        </style>

    </head>

    <body>

        <!-- Wrap all page content here -->
        <div id="wrap">

            <!-- Fixed navbar -->
            <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?= base_url() ?>"><?= $site_name; ?></a>
                    </div>
                    <div class="collapse navbar-collapse pull-right">
                        <ul class="nav navbar-nav">
                            <?php if ($is_logged_in) { ?>
                                <li>
                                    <a href="#"><strong><?php echo $username; ?></strong></a>
                                </li>                            
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"> Edit Account</li>
                                        <li><a href="<?php echo base_url()?>auth/logout/"> Sign out</a></li>
                                    </ul>
                                </li>
                            <?php } ?>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
