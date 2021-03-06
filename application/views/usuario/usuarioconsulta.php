<html>
<div class="container-fluid">
    <!--userlist-->
    <div class="panel panel-default" ng-controller="usuariosCtrl">
        <div class="panel-heading">
            <a id="refreshUserList" class="pull-right refresh-me" data-target="#userListPanel" href="javascript:;"><span class="fa fa-refresh"></span></a>
            <h4>Usuarios</h4>
        </div>
        <div class="panel-body panel-refresh" id="userListPanel">
             <div class="table-responsive" ng-show="filteredItems > 0">
                <table id="user-signups" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th class="hidden-xs">Id</th>
                        <th class="hidden-xs">Email</th>
                        <th>Password</th>
                    </tr>
                    </thead>
                    <tbody class="refresh-container">
                    <?php foreach($usuario as $fila){ ?>

                    <tr>
                        <td class="hidden-xs" ng-click=""><?php echo  $fila->id ?></td>
                        <td class="hidden-xs" ng-click=""><?php echo $fila->email ?></td>
                        <td> <?php echo $fila->password ?> </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                    <tfoot>
                    <tr><td colspan="6">
                            <div class="text-center">
                                <ul class="pagination">
                                    <li ng-class="{disabled: currentPage == 0}">
                                        <a class="btn btn-default btn-sm" href="" ng-click=""><i class=" fa fa-angle-left"></i> Prev</a>
                                    </li>
                                    <li ng-class="{disabled: currentPage == pagedItems.length - 1}">
                                        <a class="btn btn-default btn-sm" href="" ng-click="">Next <i class="fa fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div> <!--/.table-responsive-->
        </div><!--/.panel-body-->
    </div><!--/.panel-->
    <!--/userlist-->
</div>
</html>