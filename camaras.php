<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 require "login/loginheader.php"; 
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>CRUD MVC PHP + MySQL</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">
<link href="dist/jquery.bootgrid.css" rel="stylesheet" />
<script src="dist/jquery-1.11.1.min.js"></script>
<script src="dist/bootstrap.min.js"></script>
<script src="dist/jquery.bootgrid.min.js"></script>


<script>

$("#employee_grid").bootgrid({
        ajax: true,
        post: function ()
        {
            /* To accumulate custom parameter with the request object */
            return {
                id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
            };
        },
        url: "response.php",
        formatters: {
            
        }
   });


</script>


    </head>
    <body>

    <div class="container">


<h1 class="page-header">Productos </h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=proveedor&a=Nuevo">Nuevo Proveedor</a>
    <a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Producto</a>
</div>


<table id="employee_grid" class="table table-condensed table-hover table-striped" width="100%" cellspacing="0" data-toggle="bootgrid">
            <thead>
                <tr>
                    <th data-column-id="id" data-type="numeric">Empid</th>
                    <th data-column-id="employee_name">Name</th>
                    <th data-column-id="employee_salary">Salary</th>
                    <th data-column-id="employee_age">Age</th>
                </tr>
            </thead>
</table>





<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Código Producto</th>
            <th style="width:120px;">NIT Proveedor</th>
            <th style="width:120px;">Nombre Producto</th>
            <th style="width:120px;">Precio Unitario</th>
            <th style="width:120px;">Descripción</th>
        </tr>
    </thead>
    <tbody> 
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idProducto; ?></td>
            <td><?php echo $r->nit; ?></td>
            <td><?php echo $r->nomprod; ?></td>
            <td><?php echo $r->precioU; ?></td>
            <td><?php echo $r->descrip; ?></td>
            <td>
                <a href="?c=producto&a=Crud&idProducto=<?php echo $r->idProducto; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=producto&a=Eliminar&idProducto=<?php echo $r->idProducto; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


<div class="row">       
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" data-original-title="">
                            <h2><i class="fa fa-user"></i><span class="break"></span>Members</h2>
                            <div class="panel-actions">
                                <a href="table.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
                                <a href="table.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                                <a href="table.html#" class="btn-close"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-lg-6"><div id="DataTables_Table_0_length" class="dataTables_length"><label><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-lg-6"><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></div></div></div><table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                              <thead>
                                  <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 303px;">Username</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 218px;">Date registered</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 119px;">Role</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 119px;">Status</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 263px;">Actions</th></tr>
                              </thead>   
                              
                          <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                                    <td class=" sorting_1">Adam Alister</td>
                                    <td class=" ">2012/01/21</td>
                                    <td class=" ">Staff</td>
                                    <td class=" ">
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td class=" ">
                                        <a class="btn btn-success" href="table.html#">
                                            <i class="fa fa-search-plus "></i>                                            
                                        </a>
                                        <a class="btn btn-info" href="table.html#">
                                            <i class="fa fa-edit "></i>                                            
                                        </a>
                                        <a class="btn btn-danger" href="table.html#">
                                            <i class="fa fa-trash-o "></i> 
                                        </a>
                                    </td>
                                </tr><tr class="even">
                                    <td class=" sorting_1">Adinah Ralph</td>
                                    <td class=" ">2012/06/01</td>
                                    <td class=" ">Admin</td>
                                    <td class=" ">
                                        <span class="label label-default">Inactive</span>
                                    </td>
                                    <td class=" ">
                                        <a class="btn btn-success" href="table.html#">
                                            <i class="fa fa-search-plus "></i>                                            
                                        </a>
                                        <a class="btn btn-info" href="table.html#">
                                            <i class="fa fa-edit "></i>                                            
                                        </a>
                                        <a class="btn btn-danger" href="table.html#">
                                            <i class="fa fa-trash-o "></i> 
                                        </a>
                                    </td>
                                </tr><tr class="odd">
                                    <td class=" sorting_1">Ajith Hristijan</td>
                                    <td class=" ">2012/03/01</td>
                                    <td class=" ">Member</td>
                                    <td class=" ">
                                        <span class="label label-warning">Pending</span>
                                    </td>
                                    <td class=" ">
                                        <a class="btn btn-success" href="table.html#">
                                            <i class="fa fa-search-plus "></i>                                            
                                        </a>
                                        <a class="btn btn-info" href="table.html#">
                                            <i class="fa fa-edit "></i>                                            
                                        </a>
                                        <a class="btn btn-danger" href="table.html#">
                                            <i class="fa fa-trash-o "></i> 

                                        </a>
                                    </td>
                                </tr><tr class="even">
                                    <td class=" sorting_1">Alphonse Ivo</td>
                                    <td class=" ">2012/01/01</td>
                                    <td class=" ">Member</td>
                                    <td class=" ">
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td class=" ">
                                        <a class="btn btn-success" href="table.html#">
                                            <i class="fa fa-search-plus "></i>  
                                        </a>
                                        <a class="btn btn-info" href="table.html#">
                                            <i class="fa fa-edit "></i>  
                                        </a>
                                        <a class="btn btn-danger" href="table.html#">
                                            <i class="fa fa-trash-o "></i> 
                                        </a>
                                    </td>
                                </tr><tr class="odd">
                                    <td class=" sorting_1">Anton Phunihel</td>
                                    <td class=" ">2012/01/01</td>
                                    <td class=" ">Member</td>
                                    <td class=" ">
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td class=" ">
                                        <a class="btn btn-success" href="table.html#">
                                            <i class="fa fa-search-plus "></i>  
                                        </a>
                                        <a class="btn btn-info" href="table.html#">
                                            <i class="fa fa-edit "></i>  
                                        </a>
                                        <a class="btn btn-danger" href="table.html#">
                                            <i class="fa fa-trash-o "></i> 
                                        </a>
                                    </td>
                                </tr><tr class="even">
                                    <td class=" sorting_1">Bao Gaspar</td>
                                    <td class=" ">2012/01/01</td>
                                    <td class=" ">Member</td>
                                    <td class=" ">
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td class=" ">
                                        <a class="btn btn-success" href="table.html#">
                                            <i class="fa fa-search-plus "></i>                                            
                                        </a>
                                        <a class="btn btn-info" href="table.html#">
                                            <i class="fa fa-edit "></i>                                            
                                        </a>
                                        <a class="btn btn-danger" href="table.html#">
                                            <i class="fa fa-trash-o "></i> 

                                        </a>
                                    </td>
                                </tr><tr class="odd">
                                    <td class=" sorting_1">Bernhard Shelah</td>
                                    <td class=" ">2012/06/01</td>
                                    <td class=" ">Admin</td>
                                    <td class=" ">
                                        <span class="label label-default">Inactive</span>
                                    </td>
                                    <td class=" ">
                                        <a class="btn btn-success" href="table.html#">
                                            <i class="fa fa-search-plus "></i>                                            
                                        </a>
                                        <a class="btn btn-info" href="table.html#">
                                            <i class="fa fa-edit "></i>                                            
                                        </a>
                                        <a class="btn btn-danger" href="table.html#">
                                            <i class="fa fa-trash-o "></i> 

                                        </a>
                                    </td>
                                </tr><tr class="even">
                                    <td class=" sorting_1">Bünyamin Kasper</td>
                                    <td class=" ">2012/08/23</td>
                                    <td class=" ">Staff</td>
                                    <td class=" ">
                                        <span class="label label-danger">Banned</span>
                                    </td>
                                    <td class=" ">
                                        <a class="btn btn-success" href="table.html#">
                                            <i class="fa fa-search-plus "></i>                                            
                                        </a>
                                        <a class="btn btn-info" href="table.html#">
                                            <i class="fa fa-edit "></i>                                            
                                        </a>
                                        <a class="btn btn-danger" href="table.html#">
                                            <i class="fa fa-trash-o "></i> 

                                        </a>
                                    </td>
                                </tr><tr class="odd">
                                    <td class=" sorting_1">Carlito Roffe</td>
                                    <td class=" ">2012/08/23</td>
                                    <td class=" ">Staff</td>
                                    <td class=" ">
                                        <span class="label label-danger">Banned</span>
                                    </td>
                                    <td class=" ">
                                        <a class="btn btn-success" href="table.html#">
                                            <i class="fa fa-search-plus "></i>                                            
                                        </a>
                                        <a class="btn btn-info" href="table.html#">
                                            <i class="fa fa-edit "></i>                                            
                                        </a>
                                        <a class="btn btn-danger" href="table.html#">
                                            <i class="fa fa-trash-o "></i> 
                                        </a>
                                    </td>
                                </tr><tr class="even">
                                    <td class=" sorting_1">Chidubem Gottlob</td>
                                    <td class=" ">2012/02/01</td>
                                    <td class=" ">Staff</td>
                                    <td class=" ">
                                        <span class="label label-danger">Banned</span>
                                    </td>
                                    <td class=" ">
                                        <a class="btn btn-success" href="table.html#">
                                            <i class="fa fa-search-plus "></i>                                            
                                        </a>
                                        <a class="btn btn-info" href="table.html#">
                                            <i class="fa fa-edit "></i>                                            
                                        </a>
                                        <a class="btn btn-danger" href="table.html#">
                                            <i class="fa fa-trash-o "></i> 
                                        </a>
                                    </td>
                                </tr></tbody></table><div class="row"><div class="col-lg-12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div></div><div class="col-lg-12 center"><div class="dataTables_paginate paging_bootstrap"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>            
                        </div>
                    </div>
                </div><!--/col-->
            
            </div>


            <div class="row">
                <div class="col-xs-12">
                    <hr />

                    <footer class="footer-distributed">

                            <div class="footer-right">
                                <a href="https://twitter.com/rbaenan"><i class="fa fa-twitter"></i></a>
                                <a href="https://github.com/rbaena"><i class="fa fa-github"></i></a>
                          </div>

                            <div class="footer-left">
                                <p class="footer-links">
                                    <a href="index.php">Inicio</a>
                                </p>
                                <p>Diseño de Bases de Datos &copy; 2016</p>
                            </div>
                        </footer>
                </div>
            </div>
        </div>

        <script src="assets/js/jquery-1.11.2.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/js/ini.js"></script>
        <script src="assets/js/jquery.anexsoft-validator.js"></script>
    </body>
</html>
            