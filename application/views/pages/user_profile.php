<div class="container-fluid">
    <div class="row">
        <div class="col-sm-1">
            <a href="/users"><img data-toggle="tooltip" title="Profile image" class="img-rounded img-responsive" src="img/people/men4.jpg"></a>
        </div>
        <div class="col-sm-6"><h1><?= $usuario ?></h1></div>
        <div class="col-sm-5">
            <blockquote class="bg-danger small" remove-me>
                <span>Notice: We've update your profile layout since your last login.</span>
            </blockquote>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3"><!--left col-->
            <ul class="list-group">
                <li class="list-group-item list-group-item-info"><i class="fa fa-user"></i> Profile</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Joined</strong></span> 7.13.2014</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Last seen</strong></span> Yesterday</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span> Joseph Doe</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Website <i class="fa fa-link"></i></strong></span> <a href="http://bootply.com">bootply.com</a></li>
            </ul>
            <ul class="list-group">
                <li class="list-group-item list-group-item-info"><i class="fa fa-dashboard"></i> Activity</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-tag fa-lg"></i> Tags</div>
                <div class="panel-body">
                    <a href="/resources/bootstrap-3"><span class="label label-default">bootstrap-3</span></a>
                    <a href="/resources/glyphicons"><span class="label label-default">glyphicons</span></a>
                    <a href="/resources/icons"><span class="label label-default">icons</span></a>
                    <a href="/resources/carousel"><span class="label label-default">carousel</span></a>
                    <a href="/resources/layout"><span class="label label-default">layout</span></a>
                    <a href="/resources/panel"><span class="label label-default">panel</span></a>
                    <a href="/resources/snippet"><span class="label label-default">snippet</span></a>
                    <a href="/resources/images"><span class="label label-default">images</span></a>
                    <a href="/resources/grid"><span class="label label-default">grid</span></a>
                    <a href="/resources/responsive"><span class="label label-default">responsive</span></a>
                    <a href="/resources/gallery"><span class="label label-default">gallery</span></a>
                    <a href="/resources/thumbnails"><span class="label label-default">thumbnails</span></a>
                    <a href="/resources/dashboard"><span class="label label-default">dashboard</span></a>
                    <a href="/resources/full"><span class="label label-default">full</span></a>
                    <a href="/resources/list-group"><span class="label label-default">list-group</span></a>
                    <a href="/resources/fade"><span class="label label-default">fade</span></a>
                    <a href="/resources/transition"><span class="label label-default">transition</span></a>
                    <a href="/resources/nav"><span class="label label-default">nav</span></a>
                    <a href="/resources/login"><span class="label label-default">login</span></a>
                </div><!--panel-body-->
            </div><!--panel-->

            <div class="panel panel-default">
                <div class="panel-heading">Social Media</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-2 text-center"><a href="javascript:;"><i class="fa fa-facebook fa-lg"></i></a></div>
                        <div class="col-xs-2 text-center"><a href="javascript:;"><i class="fa fa-instagram fa-lg"></i></a></div>
                        <div class="col-xs-2 text-center"><a href="javascript:;"><i class="fa fa-github fa-lg"></i></a></div>
                        <div class="col-xs-2 text-center"><a href="javascript:;"><i class="fa fa-twitter fa-lg"></i></a></div>
                        <div class="col-xs-2 text-center"><a href="javascript:;"><i class="fa fa-google-plus fa-lg"></i></a></div>
                    </div>
                </div>
            </div>
        </div><!--/col-3-->
        <div class="col-md-9">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="javascript:;" data-target="#home" data-toggle="tab">Home</a></li>
                <li><a href="javascript:;" data-target="#messages" data-toggle="tab">Messages</a></li>
                <li><a href="javascript:;" data-target="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content pad-0">
                <div class="tab-pane active" id="home">
                    <div class="table-responsive panel">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Label 1</th>
                                <th>Label 2</th>
                                <th>Label 3</th>
                                <th>Label 4</th>
                                <th>Label 5</th>
                                <th>Label 6</th>
                            </tr>
                            </thead>
                            <tbody id="items" class="page-me" data-pager="#pagerUserTable" data-per-page="5">
                            <tr ng-repeat="i in [1,2,3,4,5,6,7,8,9,10]">
                                <td>{{$index}}</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Cell content {{$index}}</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell{{$index}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center">
                                <ul class="pagination" id="pagerUserTable"></ul>
                            </div>
                        </div>
                    </div><!--/table-resp-->

                    <h4>Recent Activity</h4>
                    <div ng-controller="listCtrl" class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                            <tr ng-repeat="item in list">
                                <td>
                                    <button type="button" class="close" ng-click="deleteItem($index)" aria-hidden="true">×</button>
                                    <strong>{{item.username}}</strong> {{item.action}} in <strong>`{{item.category}}`</strong>
                                </td>
                                </td>
                            </tbody>
                        </table>
                    </div><!--/listCtrl-->
                </div><!--/tab-pane home-->

                <div class="tab-pane" id="messages">
                    <ul class="list-group">
                        <li class="list-group-item text-muted">Inbox <span class="fa fa-inbox fa-lg"></span></li>
                        <li class="list-group-item text-right"><a href="javascript:;" class="pull-left">Here is your a link to the latest summary report from the..</a> 7.13.2014</li>
                        <li class="list-group-item text-right"><a href="javascript:;"class="pull-left">Hi Joe, There has been a request on your account since that was..</a> 7.11.2014</li>
                        <li class="list-group-item text-right"><a href="javascript:;"class="pull-left">Nullam sapien massaortor. A lobortis vitae, condimentum justo...</a> 7.10.2014</li>
                        <li class="list-group-item text-right"><a href="javascript:;"class="pull-left">Thllam sapien massaortor. A lobortis vitae, condimentum justo...</a> 7.10.2014</li>
                        <li class="list-group-item text-right"><a href="javascript:;"class="pull-left">Wesm sapien massaortor. A lobortis vitae, condimentum justo...</a> 7.09.2014</li>
                        <li class="list-group-item text-right"><a href="javascript:;"class="pull-left">For therepien massaortor. A lobortis vitae, condimentum justo...</a> 6.30.2014</li>
                        <li class="list-group-item text-right"><a href="javascript:;"class="pull-left">Also we, havesapien massaortor. A lobortis vitae, condimentum justo...</a> 6.28.2014</li>
                        <li class="list-group-item text-right"><a href="javascript:;"class="pull-left">Swedish chef is assaortor. A lobortis vitae, condimentum justo...</a> 6.20.2014</li>
                    </ul>
                </div><!--/tab-pane messages-->
                <div class="tab-pane" id="settings">
                    <form class="form" action="##" method="post" id="registrationForm">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name"><h4>First name</h4></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="last_name"><h4>Last name</h4></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="phone"><h4>Phone</h4></label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="mobile"><h4>Mobile</h4></label>
                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="email"><h4>Location</h4></label>
                                <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="password"><h4>Password</h4></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="password2"><h4>Verify</h4></label>
                                <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="button"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg btn-default" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                        </div>
                    </form>
                </div><!--/tab-pane settings-->
            </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
