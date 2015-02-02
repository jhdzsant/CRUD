<script>
    $('.sidebar-toggle').click(function(){
        /* toggle the sidebar */
        $('#wrapper').addClass("active");                   // add override state
        $('#wrapper').toggleClass("collapsed");             // collapse if not already collapsed
        $('#sidebar-wrapper').toggleClass("stretch-right");

        /* change the toggle icon */
        $(this).find('.toggle-icon').toggleClass('fa-caret-left');
    });

    $(window).resize(function(e){
        /* if the sidebar hasn't been collapsed, reset it by removing the active state */
        if ($(this).width()>768 && !$('#wrapper').hasClass("collapsed")) {
            $('#wrapper').removeClass("active");
        }
    });
</script>
<li class="sidebar-toggle">
    <a href="<?= base_url('home') ?>"><i class="fa fa-tachometer menu-icon"></i> <span >Inicio <i class="text-muted pull-right fa fa-plus-square-o"></i></span></a>
    <ul class="nav nav-sub pull-down collapse" id="dashboardMenu">
        <li><a href="/dashboard-1">Dashboard 1</a></li>
        <li><a href="/dashboard-2">Dashboard 2</a></li>
    </ul>
</li>
<li><a href="<?= base_url('usuario') ?>"><i class="fa fa-users menu-icon"></i> <span >Usuarios</span></a></li>
<li><a href="<?= base_url('cliente') ?>"><i class="fa fa-users menu-icon"></i> <span >Cliente</span></a></li>
<li><a href="<?= base_url('cliente/altaCliente') ?>"><i class="fa fa-users menu-icon"></i> <span >Alta-Cliente</span></a></li>
<!--<li data-ng-class="{active: isActive('/elements')}">
    <a href="/elements" ng-init="collapseUi=true" ng-click="collapseUi=!collapseUi"><i class="fa fa-briefcase menu-icon"></i> <span >UI Kit <i class="text-muted pull-right fa fa-plus-square-o"></i></span></a>
    <ul class="nav nav-sub pull-down collapse" ng-class="{in: !collapseUi}" id="uiMenu">
        <li data-ng-class="{active: isActive('/elements-2')}"><a href="/elements-2">Bootstrap Elements</a></li>
        <li data-ng-class="{active: isActive('/layout-grid')}"><a href="/layout-grid">Responsive Grid</a></li>
    </ul>
</li>
<li data-ng-class="{active: isActive('/charts')}">
    <a href="/charts" ng-init="collapseCharts=true" ng-click="collapseCharts=!collapseCharts"><i class="fa fa-bar-chart-o menu-icon"></i> <span >Charts <i class="text-muted pull-right fa fa-plus-square-o"></i></span> </a>
    <ul class="nav nav-sub pull-down collapse" ng-class="{in: !collapseCharts}" id="chartsMenu">
        <li data-ng-class="{active: isActive('/charts-flot')}"><a href="/charts-flot">Flot Charts</a></li>
        <li data-ng-class="{active: isActive('/charts-morris')}"><a href="/charts-morris">Morris Charts</a></li>
    </ul>
</li>
<li data-ng-class="{active: isActive('/forms')}">
    <a href="/forms" ng-init="collapseForms=true" ng-click="collapseForms=!collapseForms"><i class="fa fa-check-square-o menu-icon"></i> <span>Forms <i class="text-muted pull-right fa fa-plus-square-o"></i></span> </a>
    <ul class="nav nav-sub pull-down collapse" ng-class="{in: !collapseForms}" id="formsMenu">
        <li data-ng-class="{active: isActive('/forms-advanced')}"><a href="/forms-advanced">Forms &amp; Plugins</a></li>
    </ul>
<li data-ng-class="{active: isActive('/widgets')}"><a href="/widgets"><i class="fa fa-cube menu-icon"></i> <span >Widgets</span></a></li>
<li data-ng-class="{active: isActive('/inbox')}"><a href="/inbox"><i class="fa fa-envelope menu-icon"></i> <span >Inbox</span></a></li>
<li data-ng-class="{active: isActive('/maps')}">
    <a href="/maps" ng-init="collapseMaps=true" ng-click="collapseMaps=!collapseMaps"><i class="fa fa-map-marker fa-lg menu-icon"></i> <span >Maps</span></a>
    <ul class="nav nav-sub pull-down collapse" ng-class="{in: !collapseMaps}" id="mapsMenu">
        <li><a href="/maps-vector">Vector Map</a></li>
    </ul>
</li>
<li data-ng-class="{active: isActive('/calendar')}"><a href="/calendar"><i class="fa fa-calendar-o menu-icon"></i> <span >Calendar</span></a></li>
<li data-ng-class="{active: isActive('/fonts')}"><a href="/fonts" ng-init="collapseFonts=true" ng-click="collapseFonts=!collapseFonts"><i class="fa fa-eye menu-icon"></i> <span>Icon Fonts <i class="text-muted pull-right fa fa-plus-square-o"></i></span></a></li>
<ul class="nav nav-sub pull-down collapse " ng-class="{in: !collapseFonts}" id="fontsMenu">
    <li data-ng-class="{active: isActive('/fonts')}"><a href="/fonts">Glyphicons <span class="label label-info">200</span></a></li>
    <li data-ng-class="{active: isActive('/fonts-fa')}"><a href="/fonts-fa">FontAwesome <span class="label label-info">550</span></a></li>
</ul>
<li data-ng-class="{active: isActive('/pages')}">
    <a href="/pages" ng-init="collapsePages=true" ng-click="collapsePages=!collapsePages"><i class="fa fa-file-text-o menu-icon"></i> <span >Pages <i class="text-muted pull-right fa fa-plus-square-o"></i></span></a>
    <ul class="nav nav-sub pull-down collapse " ng-class="{in: !collapsePages}" id="pagesMenu">
        <li data-ng-class="{active: isActive('/blank')}"><a href="/blank">Blank</a></li>
        <li data-ng-class="{active: isActive('/contact')}"><a href="/contact">Contact</a></li>
        <li data-ng-class="{active: isActive('/faq')}"><a href="/faq">FAQ</a></li>
        <li data-ng-class="{active: isActive('/resources')}"><a href="/resources">Results</a></li>
        <li><a href="javascript:;" ng-init="collapseLayouts=true" ng-click="collapseLayouts=!collapseLayouts">Layouts  <i class="fa fa-caret-down"></i></a>
            <ul class="nav nav-sub pull-down collapse" ng-class="{in: !collapseLayouts}" id="layoutsMenu">
                <li data-ng-class="{active: isActive('/layout-grid')}"><a href="/layout-grid">Responsive Grid</a></li>
                <li data-ng-class="{active: isActive('/layout-image-grid')}"><a href="/layout-image-grid">Images &amp; Text</a></li>
            </ul>
        </li>
        <li data-ng-class="{active: isActive('/error-404')}"><a href="/error-404">Error - 404</a></li>
        <li data-ng-class="{active: isActive('/error-500')}"><a href="/error-500">Error - 500</a></li>
        <li data-ng-class="{active: isActive('/login')}"><a href="/login">Login</a></li>
        <li><a href="" data-toggle="modal" data-target="#modalLogout">Logout</a></li>
        <li data-ng-class="{active: isActive('/signup')}"><a href="/signup">Register</a></li>
    </ul>
</li> -->
<li data-ng-class="{active: isActive('/bonus')}">
    <a href="/bonus" ng-init="collapseBonus=true" ng-click="collapseBonus=!collapseBonus" class="text-success"><i class="fa fa-star-o fa-lg menu-icon"></i> <span >Extras <i class="text-muted pull-right fa fa-plus-square-o"></i></span></a>
    <ul class="nav nav-sub pull-down collapse" ng-class="{in: !collapseBonus}" id="bonusMenu">
        <li data-ng-class="{active: isActive('/todo')}"><a href="/todo"><i class="fa fa-tasks menu-icon"></i> Tasks</a></li>
        <li data-ng-class="{active: isActive('/timeline')}"><a href="/timeline"><i class="fa fa-clock-o menu-icon"></i> Timeline</a></li>
        <li data-ng-class="{active: isActive('/users')}"><a href="/users"><i class="fa fa-user menu-icon"></i> Users <span title="Users count" class="badge pull-right">{{users.length}}</span></a></li>
        <li data-ng-class="{active: isActive('/gallery')}"><a href="/gallery"><i class="fa fa-camera-retro menu-icon"></i> Gallery</a></li>
        <li data-ng-class="{active: isActive('/filemanager')}"><a href="/filemanager"><i class="fa fa-file-o menu-icon"></i> File Manager</a></li>
        <li data-ng-class="{active: isActive('/dropzone')}"><a href="/dropzone"><i class="fa fa-upload menu-icon"></i> Dropzone</a></li>
        <li data-ng-class="{active: isActive('/social')}"><a href="/social"><i class="fa fa-twitter menu-icon"></i> Social Pack</a></li>
    </ul>
</li>

