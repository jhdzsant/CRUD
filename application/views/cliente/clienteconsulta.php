

<div class="container-fluid" ng-app="myApp">
    <!--userlist-->
    <div class="panel panel-default" ng-controller="clienteCtrl">
        <div class="panel-heading">
            <a id="refreshUserList" class="pull-right refresh-me" data-target="#userListPanel" href="javascript:;"><span class="fa fa-refresh"></span></a>
            <h4>Clientes</h4>
        </div>

        <div class="panel-body panel-refresh" id="userListPanel">
            <div class="row">
                <div class="col-md-2">Mostrar:
                    <select ng-model="entryLimit" class="form-control">
                        <option>5</option>
                        <option>10</option>
                        <option>20</option>
                        <option>50</option>
                        <option>100</option>
                    </select>
                </div>
                <div class="col-md-3">Filtrar:
                    <input type="text" ng-model="search" ng-change="filter()" placeholder="Filtrar" class="form-control" />
                </div>
                <div class="col-md-4">
                    <h5>Filtrados {{ filtered.length }} of {{ totalItems}} total de Clientes</h5>
                </div>
            </div>
            <div class="table-responsive" ng-show="filteredItems > 0">
                <table id="user-signups" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th class="hidden-xs">Id</th>
                        <th class="hidden-xs">Nombre del Cliente&nbsp;<a ng-click="sort_by('nombreCliente')"><i class="glyphicon glyphicon-sort"></i></a></th>
                        <th class="hidden-xs">RFC del Cliente&nbsp;<a ng-click="sort_by('rfcCliente')"><i class="glyphicon glyphicon-sort"></i></a></th>
                        <th class="hidden-xs">Estatus del Cliente&nbsp;<a ng-click="sort_by('statusCliente')"><i class="glyphicon glyphicon-sort"></i></a></th>
                        <th class="hidden-xs">Telefono del Cliente&nbsp;<a ng-click="sort_by('telefonoCliente')"><i class="glyphicon glyphicon-sort"></i></a></th>
                    </tr>
                    </thead>
                    <tbody class="refresh-container">


                        <tr ng-repeat="data in filtered = (list | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                            <td>{{data.idCliente}}</td>
                            <td>{{data.nombreCliente}}</td>
                            <td>{{data.rfcCliente}}</td>
                            <td>{{data.statusCliente}}</td>
                            <td>{{data.telefonoCliente}}</td>
                        </tr>

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

