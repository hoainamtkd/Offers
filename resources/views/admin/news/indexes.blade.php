 @extends('admin.master')
 @section('content')
 <style type="text/css">
   .view_news:hover{
    cursor: pointer;
}
.view_news:hover{
    cursor: pointer;
}
.btn_close_search , .btn_close_search:hover{
    position: absolute;
    right: 10px;
    top: 0;
    color:#139c9b;
    cursor: pointer;
}
.filter_search{
    display: none;
}
</style>
<section class="main-container">
    <div class="container-fluid">
        <div class="page-header filled full-block light">
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <div class="data-align-right">
                        <div class="tbl-action-toolbar">
                            <ul>
                                <li><button class="btn btn-primary btn_filter_news"><i class="fa fa-filter"></i> Filter</button></li>
                                <li class="dropdown">
                                    <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-eye"></i> Display</a>
                                    <ul class="dropdown-menu">
                                        <li><a href=""><span class="checkbox-inline"><input type="checkbox" checked="checked" name=""> Show Select</span></a></li>
                                        <li><a href=""><span class="checkbox-inline"><input type="checkbox" checked="checked" name=""> Show Detail</span></a></li>
                                        <li><a href=""><span class="checkbox-inline"><input type="checkbox" checked="checked" name=""> Show First Name</span></a></li>
                                        <li><a href=""> <span class="checkbox-inline"><input type="checkbox" checked="checked" name="">Show Last Name</span></a></li>
                                        <li><a href=""> <span class="checkbox-inline"><input type="checkbox" checked="checked" name=""> Show Job Title</span></a></li>
                                        <li><a href=""> <span class="checkbox-inline"><input type="checkbox" checked="checked" name=""> Show DOB</span></a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-archive"></i> Action</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"> <i class="fa fa-file-o"></i> Delete Selected</a></li>
                                        <li><a href="#"> <i class="fa fa-file-o"></i> Edit Selected</a></li>
                                        <li><a href="#"> <i class="fa fa-file-o"></i> Hide Selected</a></li>
                                        <li><a href="#"> <i class="fa fa-file-o"></i> Show Selected</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-archive"></i> Export</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" onclick="$('#exportable-tbl').tableExport({type:'json',escape:'false'});"> <i class="fa fa-file-o"></i> JSON</a></li>
                                        <li><a href="#" onclick="$('#exportable-tbl').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});"> <i class="fa fa-file-o"></i> JSON (ignoreColumn)</a></li>
                                        <li><a href="#" onclick="$('#exportable-tbl').tableExport({type:'json',escape:'true'});"> <i class="fa fa-file-o"></i> JSON (with Escape)</a></li>
                                        <li><a href="#" onclick="$('#exportable-tbl').tableExport({type:'xml',escape:'false'});"> <i class="fa fa-file-code-o"></i> XML</a></li>
                                        <li><a href="#" onclick="$('#exportable-tbl').tableExport({type:'sql'});"> <i class="fa fa-file-code-o"></i> SQL</a></li>
                                        <li><a href="#" onclick="$('#exportable-tbl').tableExport({type:'csv',escape:'false'});"> <i class="fa fa-file-code-o"></i> CSV</a></li>
                                        <li><a href="#" onclick="$('#exportable-tbl').tableExport({type:'txt',escape:'false'});"> <i class="fa fa-file-text-o"></i> TXT</a></li>
                                        <li><a href="#" onclick="$('#exportable-tbl').tableExport({type:'excel',escape:'false'});"> <i class="fa fa-file-excel-o"></i> XLS</a></li>
                                        <li><a href="#" onclick="$('#exportable-tbl').tableExport({type:'doc',escape:'false'});"> <i class="fa fa-file-word-o"></i> Word</a></li>
                                        <li><a href="#" onclick="$('#exportable-tbl').tableExport({type:'powerpoint',escape:'false'});"> <i class="fa fa-file-powerpoint-o"></i> PowerPoint</a></li>
                                        <li><a href="#" onclick="$('#exportable-tbl').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> <i class="fa fa-file-pdf-o"></i> PDF</a></li>


                                    </ul>
                                </li>
                                <li><a href="{{url('admin/news/add')}}" class="btn add-row btn-primary"><i class="zmdi zmdi-plus"></i> Add New</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="widget-wrap filter_search col-md-12 material-table-widget" style="padding: 20px 30px 30px; display: block;">
                    <div class="widget-container margin-top-0">
                        <div class="widget-content">
                            <span class="btn_close_search">x</span>
                            <div class="col-md-10 unit" style="margin-top: 10px;">
                                <div class="input-group m-b-sm">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Select All <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Select All</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <input type="text" class="form-control" aria-label="...">
                                </div>
                            </div>
                            <div class="col-md-2 unit" style="margin-top: 10px;padding-left: 0px;">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="widget-wrap material-table-widget" style="padding: 5px;">

                    <div class="widget-container margin-top-0">
                        <div class="widget-content">
                            <table class="tbl_member table">
                                <thead>
                                    <tr>
                                        <th class="text-center"><input type="checkbox" name=""></th>
                                        <th class="text-center">Title</th>
                                        <th class="text-center">Create Date</th>
                                        <th class="text-center">Poster</th>
                                        <th class="text-center">Categories</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Review</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td><input type="checkbox" name=""></td>
                                        <td><a href="#">Traffic Court Referee Boudreaux 22 Jun 1972</a></td>
                                        <td>22 Jun 1972</td>
                                        <td>Supper Admin</td>
                                        <td>Music</td>
                                        <td><span class="label label-success" title="Active">Active</span></td>
                                        <td><span class="label label-success view_news" title="Active">View</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox" name=""></td>
                                        <td><a href="#">Traffic Court Referee Boudreaux 22 Jun 1972</a></td>
                                        <td>22 Jun 1972</td>
                                        <td>Supper Admin</td>
                                        <td>Music</td>
                                        <td><span class="label label-success" title="Active">Active</span></td>
                                        <td><span class="label label-success view_news" title="Active">View</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox" name=""></td>
                                        <td><a href="#">Traffic Court Referee Boudreaux 22 Jun 1972</a></td>
                                        <td>22 Jun 1972</td>
                                        <td>Supper Admin</td>
                                        <td>Music</td>
                                        <td><span class="label label-success" title="Active">Active</span></td>
                                        <td><span class="label label-success view_news" title="Active">View</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox" name=""></td>
                                        <td><a href="#">Traffic Court Referee Boudreaux 22 Jun 1972</a></td>
                                        <td>22 Jun 1972</td>
                                        <td>Supper Admin</td>
                                        <td>Music</td>
                                        <td><span class="label label-success" title="Active">Active</span></td>
                                        <td><span class="label label-success view_news" title="Active">View</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox" name=""></td>
                                        <td><a href="#">Traffic Court Referee Boudreaux 22 Jun 1972</a></td>
                                        <td>22 Jun 1972</td>
                                        <td>Supper Admin</td>
                                        <td>Music</td>
                                        <td><span class="label label-success" title="Active">Active</span></td>
                                        <td><span class="label label-success view_news" title="Active">View</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox" name=""></td>
                                        <td><a href="#">Traffic Court Referee Boudreaux 22 Jun 1972</a></td>
                                        <td>22 Jun 1972</td>
                                        <td>Supper Admin</td>
                                        <td>Music</td>
                                        <td><span class="label label-success" title="Active">Active</span></td>
                                        <td><span class="label label-success view_news" title="Active">View</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox" name=""></td>
                                        <td><a href="#">Traffic Court Referee Boudreaux 22 Jun 1972</a></td>
                                        <td>22 Jun 1972</td>
                                        <td>Supper Admin</td>
                                        <td>Music</td>
                                        <td><span class="label label-success" title="Active">Active</span></td>
                                        <td><span class="label label-success view_news" title="Active">View</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox" name=""></td>
                                        <td><a href="#">Traffic Court Referee Boudreaux 22 Jun 1972</a></td>
                                        <td>22 Jun 1972</td>
                                        <td>Supper Admin</td>
                                        <td>Music</td>
                                        <td><span class="label label-success" title="Active">Active</span></td>
                                        <td><span class="label label-success view_news" title="Active">View</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox" name=""></td>
                                        <td><a href="#">Traffic Court Referee Boudreaux 22 Jun 1972</a></td>
                                        <td>22 Jun 1972</td>
                                        <td>Supper Admin</td>
                                        <td>Music</td>
                                        <td><span class="label label-success" title="Active">Active</span></td>
                                        <td><span class="label label-success view_news" title="Active">View</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox" name=""></td>
                                        <td><a href="#">Traffic Court Referee Boudreaux 22 Jun 1972</a></td>
                                        <td>22 Jun 1972</td>
                                        <td>Supper Admin</td>
                                        <td>Music</td>
                                        <td><span class="label label-success" title="Active">Active</span></td>
                                        <td><span class="label label-success view_news" title="Active">View</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox" name=""></td>
                                        <td><a href="#">Traffic Court Referee Boudreaux 22 Jun 1972</a></td>
                                        <td>22 Jun 1972</td>
                                        <td>Supper Admin</td>
                                        <td>Music</td>
                                        <td><span class="label label-success" title="Active">Active</span></td>
                                        <td><span class="label label-success view_news" title="Active">View</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox" name=""></td>
                                        <td><a href="#">Traffic Court Referee Boudreaux 22 Jun 1972</a></td>
                                        <td>22 Jun 1972</td>
                                        <td>Supper Admin</td>
                                        <td>Music</td>
                                        <td><span class="label label-success" title="Active">Active</span></td>
                                        <td><span class="label label-success view_news" title="Active">View</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox" name=""></td>
                                        <td><a href="#">Traffic Court Referee Boudreaux 22 Jun 1972</a></td>
                                        <td>22 Jun 1972</td>
                                        <td>Supper Admin</td>
                                        <td>Music</td>
                                        <td><span class="label label-success" title="Active">Active</span></td>
                                        <td><span class="label label-success view_news" title="Active">View</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox" name=""></td>
                                        <td><a href="#">Traffic Court Referee Boudreaux 22 Jun 1972</a></td>
                                        <td>22 Jun 1972</td>
                                        <td>Supper Admin</td>
                                        <td>Music</td>
                                        <td><span class="label label-success" title="Active">Active</span></td>
                                        <td><span class="label label-success view_news" title="Active">View</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox" name=""></td>
                                        <td><a href="#">Traffic Court Referee Boudreaux 22 Jun 1972</a></td>
                                        <td>22 Jun 1972</td>
                                        <td>Supper Admin</td>
                                        <td>Music</td>
                                        <td><span class="label label-success" title="Active">Active</span></td>
                                        <td><span class="label label-success view_news" title="Active">View</span></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>s
                </div>
            </div>
        </div>
    </div>
    <!--Footer Start Here -->
    @include('admin.layout.footers')
    <!--Footer End Here -->
</section>
<script src="{{asset('public/admin/js/js-news.js')}}"></script>
@endsection