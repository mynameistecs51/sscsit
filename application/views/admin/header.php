<!DOCTYPE html>
<html >

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title;?></title>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url();?>css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>css/sb-admin-2.css" rel="stylesheet" type="text/css">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>css/plugins/morris.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- start bootstrap data table -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>DataTables/media/css/jquery.dataTables.css">
    <style type="text/css" class="init">
        div.dataTables_wrapper {
            margin-bottom: 3em;
        }
    </style>
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>DataTables/media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>DataTables/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" class="init">
        $(document).ready(function () {
            $('table.display').dataTable();
        });
    </script>
    <!-- end data table bootstrap -->
    <!-- start bootstrap switch -->
    <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-switch.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap-switch.css">
    <!-- end bootstrap switch -->
    <!-- Multi  select -->
    <link href="<?php echo base_url();?>css/bootstrap-select.css" rel="stylesheet" type="text/css">
    <!-- ./ end mulit select -->
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
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header" style="margin-top: 30px;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php echo anchor('main','<img src="'.base_url().'images/logo.png" alt="logo"/>','class="navbar-brand" ');?>
                    <?php //echo anchor('main/home','หลักหลัก',' class="navbar-brand"');?>
                </div>
                <!-- /.navbar-header -->

                <div class="nav navbar-top-links navbar-right " style="margin-top:20px;">
                    <ul class="navbar-brand">
                        <li>
                            <?php echo anchor('main/home','หลักหลัก',' class="navbar-brand "');?>
                        </li>
                        <li>
                            <?php echo anchor('main/admin','ทั่วไป',' class="navbar-brand "');?>
                        </li>
                        <li>
                            <?php echo anchor('main/data_Table','จัดการสิทธิ์',' class="navbar-brand "');?>
                        </li>
                        <li class="centered">
                            <?php
                            echo ' <img src="https://graph.facebook.com/'.$fb_data['uid'].'/picture" alt="" class="pic" /><br/>'/*.$fb_data['me']['name']." "*/. anchor('main/logout','Logout');
                            ?>
                        </li>
                    </ul>
                </div> <!-- /. end dif nav navbar-top-links navbar-right./-->

            </nav>