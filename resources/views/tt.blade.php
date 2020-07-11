<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section class="content">

                        
                    <div class="row"><div class="col-md-12"><div class="box">
    
        <div class="box-header with-border">
        <div class="pull-right">
            
<div class="dropdown pull-right column-selector" style="margin-right: 10px">
    <button type="button" class="btn btn-sm btn-instagram dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-table"></i>
        &nbsp;
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" style="padding: 10px;height: auto;max-height: 500px;overflow-x: hidden;">
        <li>
            <ul style="padding: 0;">
                <li class="checkbox icheck" style="margin: 0;">
    <label style="width: 100%;padding: 3px;" class="">
        <div class="icheckbox_minimal-blue checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="column-select-item" value="id" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;&nbsp;ID
    </label>
</li>
<li class="checkbox icheck" style="margin: 0;">
    <label style="width: 100%;padding: 3px;" class="">
        <div class="icheckbox_minimal-blue checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="column-select-item" value="username" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;&nbsp;Username
    </label>
</li>
<li class="checkbox icheck" style="margin: 0;">
    <label style="width: 100%;padding: 3px;" class="">
        <div class="icheckbox_minimal-blue checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="column-select-item" value="name" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;&nbsp;Name
    </label>
</li>
<li class="checkbox icheck" style="margin: 0;">
    <label style="width: 100%;padding: 3px;" class="">
        <div class="icheckbox_minimal-blue checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="column-select-item" value="roles" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;&nbsp;Roles
    </label>
</li>
<li class="checkbox icheck" style="margin: 0;">
    <label style="width: 100%;padding: 3px;" class="">
        <div class="icheckbox_minimal-blue checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="column-select-item" value="created_at" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;&nbsp;Created At
    </label>
</li>
<li class="checkbox icheck" style="margin: 0;">
    <label style="width: 100%;padding: 3px;" class="">
        <div class="icheckbox_minimal-blue checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="column-select-item" value="updated_at" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;&nbsp;Updated At
    </label>
</li>
            </ul>
        </li>
        <li class="divider">
        </li><li class="text-right">
            <button class="btn btn-sm btn-default column-select-all">All</button>&nbsp;&nbsp;
            <button class="btn btn-sm btn-primary column-select-submit">Submit</button>
        </li>
    </ul>
</div>
            
<div class="btn-group pull-right" style="margin-right: 10px">
    <a href="http://localhost:8000/admin/auth/users?_pjax=%23pjax-container&amp;_export_=all" target="_blank" class="btn btn-sm btn-twitter" title="Export"><i class="fa fa-download"></i><span class="hidden-xs"> Export</span></a>
    <button type="button" class="btn btn-sm btn-twitter dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <li><a href="http://localhost:8000/admin/auth/users?_pjax=%23pjax-container&amp;_export_=all" target="_blank">All</a></li>
        <li><a href="http://localhost:8000/admin/auth/users?_pjax=%23pjax-container&amp;_export_=page%3A1" target="_blank">Current page</a></li>
        <li><a href="http://localhost:8000/admin/auth/users?_pjax=%23pjax-container&amp;_export_=selected%3A__rows__" target="_blank" class="export-selected">Selected rows</a></li>
    </ul>
</div>
            
<div class="btn-group pull-right grid-create-btn" style="margin-right: 10px">
    <a href="http://localhost:8000/admin/auth/users/create" class="btn btn-sm btn-success" title="New">
        <i class="fa fa-plus"></i><span class="hidden-xs">&nbsp;&nbsp;New</span>
    </a>
</div>

        </div>
                <div class="pull-left">
            <div class="btn-group grid-select-all-btn" style="display:none;margin-right: 5px;">
    <a class="btn btn-sm btn-default hidden-xs"><span class="selected"></span></a>
    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    </div>
 <div class="btn-group" style="margin-right: 5px" data-toggle="buttons">
    <label class="btn btn-sm btn-dropbox 5eb9c1e52b2dd-filter-btn " title="Filter">
        <input type="checkbox"><i class="fa fa-filter"></i><span class="hidden-xs">&nbsp;&nbsp;Filter</span>
    </label>

    </div>
        </div>
            </div>
    
    <div class="box-header with-border hide" id="filter-box">
    <form action="http://localhost:8000/admin/auth/users?_pjax=%23pjax-container" class="form-horizontal" pjax-container="" method="get">

        <div class="row">
                        <div class="col-md-12">
                <div class="box-body">
                    <div class="fields-group">
                                                    <div class="form-group">
    <label class="col-sm-2 control-label"> ID</label>
    <div class="col-sm-8">
        <div class="input-group input-group-sm">
            <div class="input-group-addon">
            <i class="fa fa-pencil"></i>
        </div>

    <input type="text" class="form-control id" placeholder="ID" name="id" value="">
</div>    </div>
</div>
                                            </div>
                </div>
            </div>
                    </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="btn-group pull-left">
                            <button class="btn btn-info submit btn-sm"><i class="fa fa-search"></i>&nbsp;&nbsp;Search</button>
                        </div>
                        <div class="btn-group pull-left " style="margin-left: 10px;">
                            <a href="http://localhost:8000/admin/auth/users?_pjax=%23pjax-container" class="btn btn-default btn-sm"><i class="fa fa-undo"></i>&nbsp;&nbsp;Reset</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>

    

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding" style="">
        <table class="table table-hover" id="grid-table5eb9c1e514230">
            <thead>
                <tr>
                                        <th class="column-__row_selector__"> <div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="grid-select-all" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;</th>
                                        <th class="column-id">ID<a class="fa fa-fw fa-sort" href="http://localhost:8000/admin/auth/users?_pjax=%23pjax-container&amp;_sort%5Bcolumn%5D=id&amp;_sort%5Btype%5D=desc"></a></th>
                                        <th class="column-username">Username</th>
                                        <th class="column-name">Name</th>
                                        <th class="column-roles">Roles</th>
                                        <th class="column-created_at">Created At</th>
                                        <th class="column-updated_at">Updated At</th>
                                        <th class="column-__actions__">Action</th>
                                    </tr>
            </thead>

            
            <tbody>

                
                                <tr>
                                        <td class="column-__row_selector__">
                        <div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="grid-row-checkbox" data-id="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                    </td>
                                        <td class="column-id">
                        1
                    </td>
                                        <td class="column-username">
                        admin
                    </td>
                                        <td class="column-name">
                        Administrator
                    </td>
                                        <td class="column-roles">
                        <span class="label label-success">Administrator</span>
                    </td>
                                        <td class="column-created_at">
                        2020-05-11 20:59:11
                    </td>
                                        <td class="column-updated_at">
                        2020-05-11 20:59:11
                    </td>
                                        <td class="column-__actions__">
                        <div class="grid-dropdown-actions dropdown">
    <a href="#" style="padding: 0 10px;" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-ellipsis-v"></i>
    </a>
    <ul class="dropdown-menu" style="min-width: 70px !important;box-shadow: 0 2px 3px 0 rgba(0,0,0,.2);border-radius:0;left: -65px;top: 5px;">

                <li><a href="http://localhost:8000/admin/auth/users/1/edit">Edit</a></li>
                <li><a href="http://localhost:8000/admin/auth/users/1">Show</a></li>
        
            </ul>
</div>
                    </td>
                                    </tr>
                            </tbody>

            

        </table>

    </div>

    

    <div class="box-footer clearfix">
        Showing <b>1</b> to <b>1</b> of <b>1</b> entries<ul class="pagination pagination-sm no-margin pull-right">
    <!-- Previous Page Link -->
        <li class="page-item disabled"><span class="page-link">«</span></li>
    
    <!-- Pagination Elements -->
        <!-- "Three Dots" Separator -->
    
    <!-- Array Of Links -->
                <li class="page-item active"><span class="page-link">1</span></li>
                
    <!-- Next Page Link -->
        <li class="page-item disabled"><span class="page-link">»</span></li>
    </ul>

<label class="control-label pull-right" style="margin-right: 10px; font-weight: 100;">

        <small>Show</small>&nbsp;
        <select class="input-sm grid-per-pager" name="per-page">
            <option value="http://localhost:8000/admin/auth/users?_pjax=%23pjax-container&amp;per_page=10">10</option>
<option value="http://localhost:8000/admin/auth/users?_pjax=%23pjax-container&amp;per_page=20" selected="">20</option>
<option value="http://localhost:8000/admin/auth/users?_pjax=%23pjax-container&amp;per_page=30">30</option>
<option value="http://localhost:8000/admin/auth/users?_pjax=%23pjax-container&amp;per_page=50">50</option>
<option value="http://localhost:8000/admin/auth/users?_pjax=%23pjax-container&amp;per_page=100">100</option>
        </select>
        &nbsp;<small>entries</small>
    </label>

    </div>
    <!-- /.box-body -->
</div>
</div></div>
        
    </section>

</body>
</html>