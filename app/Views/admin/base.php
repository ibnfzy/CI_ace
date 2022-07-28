<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Dashboard | <?= $title; ?></title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?= base_url('/'); ?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url('/'); ?>/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="<?= base_url('/'); ?>/assets/toastr/build/toastr.min.css">

    <!-- text fonts -->
    <link rel="stylesheet" href="<?= base_url('/'); ?>/assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?= base_url('/'); ?>/assets/css/ace.min.css" class="ace-main-stylesheet"
        id="main-ace-style" />
    <link rel="stylesheet" href="<?= base_url('/'); ?>/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?= base_url('/'); ?>/assets/css/ace-rtl.min.css" />

    <!-- ace settings handler -->
    <script src="<?= base_url('/'); ?>/assets/js/ace-extra.min.js"></script>
</head>

<body class="no-skin">
    <?= $this->include('admin/layout/navbar'); ?>

    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch (e) {}
        </script>

        <?= $this->include('admin/layout/sidebar'); ?>

        <div class="main-content">
            <div class="main-content-inner">
                <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="<?= base_url('U/'); ?>">Home</a>
                        </li>

                        <?php if ($title != 'Home') : ?>
                        <li>
                            <a href="#"><?= $parentdir; ?></a>
                        </li>
                        <li class="active"><?= $title ?></li>
                        <?php endif ?>


                    </ul><!-- /.breadcrumb -->

                    <!-- <div class="nav-search" id="nav-search">
                        <form class="form-search">
                            <span class="input-icon">
                                <input type="text" placeholder="Search ..." class="nav-search-input"
                                    id="nav-search-input" autocomplete="off" />
                                <i class="ace-icon fa fa-search nav-search-icon"></i>
                            </span>
                        </form>
                    </div> -->
                </div>

                <div class="page-content">
                    <?= $this->include('admin/layout/setting'); ?>
                    <!-- /.ace-settings-container -->

                    <?= $this->renderSection('content'); ?>
                    <!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

        <?= $this->include('admin/layout/footer'); ?>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="<?= base_url('/'); ?>/assets/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write(
        "<script src='<?= base_url('/'); ?>/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="<?= base_url('/'); ?>/assets/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->
    <script src="<?= base_url('/'); ?>/assets/js/sweetalert.js"></script>
    <script src="<?= base_url('/'); ?>/assets/toastr/build/toastr.min.js"></script>
    <script src="<?= base_url('/'); ?>/assets/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('/'); ?>/assets/js/jquery.dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url('/'); ?>/assets/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('/'); ?>/assets/js/buttons.flash.min.js"></script>
    <script src="<?= base_url('/'); ?>/assets/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('/'); ?>/assets/js/buttons.print.min.js"></script>
    <script src="<?= base_url('/'); ?>/assets/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url('/'); ?>/assets/js/dataTables.select.min.js"></script>

    <!-- ace scripts -->
    <script src="<?= base_url('/'); ?>/assets/js/ace-elements.min.js"></script>
    <script src="<?= base_url('/'); ?>/assets/js/ace.min.js"></script>

    <?= $this->renderSection('script'); ?>

    <script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "showDuration": "600",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    </script>

    <?php ?>

    <?php
    if (session()->getFlashdata('dataMessage')) {
        foreach (session()->getFlashdata('dataMessage') as $item) {
            echo '<script>toastr["' .
                session()->getFlashdata('type-status') . '"]("' . $item . '")</script>';
        }
    }
    if (session()->getFlashdata('message')) {
        echo '<script>toastr["' .
            session()->getFlashdata('type-status') . '"]("' . session()->getFlashdata('message') . '")</script>';
    }
    ?>
    <!-- inline scripts related to this page -->
</body>

</html>