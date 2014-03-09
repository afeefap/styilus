<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RMSA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta charset="utf-8">
    </head>
    <?= $_styles ?>
    <link href="<?= base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet" />
    <link href="<?= base_url("assets/css/bootstrap-responsive.min.css") ?>" rel="stylesheet" />
    <link href="<?= base_url("assets/css/style.css") ?>" rel="stylesheet" />
    <link href="<?= base_url("assets/css/print.css") ?>" rel="stylesheet" media="print" />
    <script>
        site_url = "<?= site_url() ?>";
    </script>        
    <style type="text/css">
		#wrapper  {
			margin-top:50px;          
		}	
		.navbar-inverse .brand {
			padding-left:5%;
		}	
		.navbar-fixed-top, .navbar-fixed-bottom, .navbar-static-top {
            margin-left: -10px;
            margin-right: -10px;
        }
    </style>
</head>
<body>
    <header class="navbar-static-top">
    <?=$menu?>
    </header>
    <div id="wrapper">
        <div class="row-fluid  thumbnails">  
            <?=$this->session->flashdata('message');?>
            <?= $content ?>
        </div>
    </div><!--wrapper-->
    <? require 'public/footer.html'; ?>
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-dropdown.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-transition.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-alert.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-modal.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-dropdown.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-scrollspy.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-tab.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-tooltip.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-popover.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-button.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-collapse.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-carousel.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-typeahead.js') ?>"></script>
    <script>
            $(document).ready(function() {
                $('.dropdown-toggle').dropdown();
            });
        </script>
    <?= $_scripts ?>
    
</body>
</html>
