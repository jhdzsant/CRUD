<!DOCTYPE html>
<html data-ng-app="myApp">
<head>
    <meta charset="utf-8">
    <title>Home</title>
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

<?= $this->load->view($contenido) ?>

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


</body>
</html>