 @extends('admin.master')
 @section('content')
 <section class="main-container">
  <div class="container-fluid">
    <div class="page-header filled full-block light">
      <div class="row">
        <div class="col-md-7">
        </div>
        <div class="col-md-5">
          <div class="data-align-right">
            <div class="tbl-action-toolbar">
              <ul>
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
                <li><button class="btn add-row btn-primary" data-toggle="modal" data-target="#modal_add_customer"><i class="zmdi zmdi-plus"></i> Add New</button></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="widget-wrap">
          <div class="widget-container" style="margin-top: 0px;">
            <div class="widget-content">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-content">
                    <!-- start single select -->
                    <div class="unit" style="margin-top: -15px;">
                      <label>Keyword</label>
                      <input type="text" placeholder="Search Email..." class="form-control" name="">
                    </div>
                    <!-- start multiple select -->
                    <div class="unit" style="margin-top: 5px;">
                      <label>Select Active</label>
                      <select class="form-control">
                        <option>Select Option</option>
                        <option>Select Option</option>
                        <option>Select Option</option>
                        <option>Select Option</option>
                        <option>Select Option</option>
                      </select>
                    </div>
                    <div class="unit" style="margin-top: 5px;">
                      <label>Create</label>
                      <select class="form-control">
                        <option>Select Option</option>
                        <option>Select Option</option>
                        <option>Select Option</option>
                        <option>Select Option</option>
                        <option>Select Option</option>
                      </select>
                    </div>
                    <!-- end multiple select -->
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="widget-wrap material-table-widget" style="padding: 5px;">
          <div class="widget-container margin-top-0">
            <div class="widget-content">
              <div class="table-responsive">
                <table class="tbl_member table" style="margin-top: -5px">
                  <thead>
                    <tr>
                      <th><input type="checkbox" name=""></th>
                      <th> Categories Name<span class="footable-sort-indicator"></span></th>
                      <th> Parent<span class="footable-sort-indicator"></span></th>
                      <th>Display</th>
                      <th>View</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     <td><input type="checkbox" name=""></td>
                     <td><a href="">Story</a></td>
                     <td>------</td>
                     <td><span class="label label-success" title="Active">Active</span></td>
                     <td><span class="label label-success" title="view">View</span></td>
                     <td class="text-right">
                       <a class="row-delete" href="#">
                        <span class="zmdi zmdi-edit"></span>
                      </a>
                      <a class="row-delete" href="#">
                       <span class="zmdi zmdi-close"></span>
                     </a>
                   </td>
                 </tr>
                 <tr>
                   <td><input type="checkbox" name=""></td>
                   <td><a href="">----- Heniken</a></td>
                   <td>------</td>
                   <td><span class="label label-success" title="Active">Active</span></td>
                   <td><span class="label label-success" title="view">View</span></td>
                   <td class="text-right">
                     <a class="row-delete" href="#">
                      <span class="zmdi zmdi-edit"></span>
                    </a>
                    <a class="row-delete" href="#">
                     <span class="zmdi zmdi-close"></span>
                   </a>
                 </td>
               </tr>
               <tr>
                 <td><input type="checkbox" name=""></td>
                 <td><a href="">----- Music</a></td>
                 <td>------</td>
                 <td><span class="label label-success" title="Active">Active</span></td>
                 <td><span class="label label-success" title="view">View</span></td>
                 <td class="text-right">
                  <a class="row-delete" href="#">
                    <span class="zmdi zmdi-edit"></span>
                  </a>
                  <a class="row-delete" href="#">
                   <span class="zmdi zmdi-close"></span>
                 </a>
               </td>
             </tr>
             <tr>
               <td><input type="checkbox" name=""></td>
               <td><a href="">Social</a></td>
               <td>------</td>
               <td><span class="label label-success" title="Active">Active</span></td>
               <td><span class="label label-success" title="view">View</span></td>
               <td class="text-right">
                 <a class="row-delete" href="#">
                  <span class="zmdi zmdi-edit"></span>
                </a>
                <a class="row-delete" href="#">
                 <span class="zmdi zmdi-close"></span>
               </a>
             </td>
           </tr>
         </tbody>
       </table>
     </div>
   </div>
 </div>
</div>
</div>
</div>
</div>
<!--Footer Start Here -->
@include('admin.layout.footers')
<!--Footer End Here -->
</section>
@endsection