<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $titulo ?></title>
    <base href="<?= base_url() ?>"></base>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/1.6.4/fullcalendar.min.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.5.4/bootstrap-select.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.minicolors/2.1.2/jquery.minicolors.css" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/dropzone/3.8.4/css/dropzone.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.css">
    <link rel="stylesheet" href="css/boom.css" />
    <!--<link rel="stylesheet/less" type="text/css" href="css/styles.less" />-->
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="stylesheet" href="css/animations.min.css" />
    <link rel="stylesheet" href="css/social.min.css" />

    <!--fonts-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" />

</head>
<body>

<div> <?= $this->load->view($header) ?></div>
<div id="wrapper">
    <div id="sidebar-wrapper" class="pull-left stretch-right">
        <div id="sidebar" > <?= $this->load->view($sidebar) ?></div>
    </div>
    <div id="main-wrapper" class="col-sm-12">
        <span breadcrumb></span>
        <div id="main">
            <div class="fade-in"></div>
            <?= $this->load->view($contenido) ?>
        </div><!--/main-->
        <div><?= $this->load->view($footer) ?></div>
    </div>
</div>



<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular.min.js"></script>
<script src="http://angular-ui.github.io/ui-router/release/angular-ui-router.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.1/less.min.js"></script>


<!-- calendar dependencies -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/1.6.4/fullcalendar.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/1.6.4/gcal.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-calendar/0.8.0/calendar.min.js"></script>

<!-- google map dependency -->
<script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&dummy=.js"></script>
<div class="modal" id="modalLogout" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3>Salir <i class="fa fa-question-circle"></i></h3>
            </div>
            <div class="modal-body text-center">
                <p class="strong">¿Esta seguro de Salir?</p>
            </div>
            <div class="modal-footer">
                <div class="col-sm-4"><a href="" data-dismiss="modal" class="btn btn-default btn-block">Cancelar</a></div>
                <div class="col-sm-8"><a href="<?= base_url('login/logoutUser') ?>" data-dismiss="modal" class="btn btn-primary btn-block"><strong>Sí, Salir</strong></a></div>
            </div>
        </div>
    </div>
</div>


</body>
</html>