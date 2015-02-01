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

<!--sidebar toggle arrow-->
<ul class="nav">
    <li>
        <a href="#" data-target="#sidebar-wrapper" class="sidebar-toggle" title="Toggle sidebar">
            <i class="fa fa-fw fa-bars"></i>
            <i class="fa fa-caret-left toggle-icon hidden-xs"></i>
        </a>
    </li>
</ul>

<!--sidebar items (menu-items-sm)-->
<ul menu-items class="nav" id="menuSm"></ul>

<!--sidebar items (menu-items-sm)-->
<ul class="nav" id="menuSm">
   <?= $this->load->view($menu_items) ?>
</ul>