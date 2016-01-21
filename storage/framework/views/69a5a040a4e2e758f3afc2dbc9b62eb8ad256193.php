<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo e(isset($page_title) ? $page_title : "AdminLTE Dashboard"); ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo e(asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css")); ?>" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset("/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css")); ?>" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
<div class="wrapper">
    <?php echo $__env->make('admin/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('admin/sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <?php echo e(isset($page_title) ? $page_title : "WHISKY CASTLE"); ?>

                <small><?php echo e(isset($page_description) ? $page_description : null); ?></small>
            </h1>
        </section>
        <section class="content">
            <?php echo $__env->yieldContent('content'); ?>
        </section>
    </div>
    <?php echo $__env->make('admin/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<script src="<?php echo e(asset ("/bower_components/AdminLTE/plugins/jQuery/jQuery-2.1.3.min.js")); ?>"></script>
<script src="<?php echo e(asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js")); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset ("/bower_components/AdminLTE/dist/js/app.min.js")); ?>" type="text/javascript"></script>
</body>
</html>