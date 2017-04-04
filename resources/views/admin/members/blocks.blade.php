 @extends('admin.master')
 @section('content')
 <style type="text/css">
     .box-block {
        padding: 1.25rem;
    }
    .box {
        position: relative;
        display: block;
        margin-bottom: 0.75rem;
        border: 1px solid rgba(0, 0, 0, 0.125);
    }
    .bg-white {
        background-color: #fff !important;
    }
    .row.row-sm [class*=col-] {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
    }
    .b-a-radius-circle {
        padding: 10px;
        border-radius: 50% !important;
    }

    .tag-danger{
        background: #ff5252;
        color:#fff;
    }
    .tag {
        padding: 0.2em 0.4em 0.3em;
        font-size: 80%;
        min-width: 20px;
        border-radius: 0;
    }
    .btn-outline-primary {
        color: #3e70c9;
        border-color: #3e70c9;
    }
    .btn-rounded {
        border-radius: 25rem;
    }
    .tag-success{
        color:#fff;
        background-color: #139c9b;
    }
    .row_name{
        font-weight: 600;
        font-size: 16px;
    }
    .btn_close , .btn_close:hover{
        position: absolute;
        right: 10px;
        cursor:pointer;
        top: -15px;
    }
</style>
<section class="main-container">
    <div class="container-fluid">
        <div class="page-header filled full-block light" style="margin-bottom: 10px;">
            <div class="row">
                <div class="col-md-7"></div>
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
                                <li><a href="{{url('admin/members/add')}}" class="btn btn-primary"><i class="zmdi zmdi-plus"></i> Add News</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="row row-sm">
                <div class="col-md-4">
                    <div class="box box-block bg-white">
                        <div class="row">

                            <div class="col-md-4 col-sm-4 text-center">
                                <img class="img-fluid b-a-radius-circle img-responsive" src="{{asset('public/admin/images/avatar/2.jpg')}}" alt="">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="row_name">John Doe </div>
                                <span class="tag tag-success">SuperAdmin</span>
                                <div class="address">1355 Market Street, Suite 900<br>
                                  San Francisco, CA 94103<br>
                                  <abbr title="Phone">Phone:</abbr> (123) 456-7890</br>
                                  <div class="btn_close">x</div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                <div class="box box-block bg-white">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 text-center">
                            <img class="img-fluid b-a-radius-circle img-responsive" src="{{asset('public/admin/images/avatar/2.jpg')}}" alt="">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="row_name"><s>John Doe</s></div>
                            <span class="tag tag-danger">Inactive</span>
                            <div class="address">1355 Market Street, Suite 900<br>
                              San Francisco, CA 94103<br>
                              <abbr title="Phone">Phone:</abbr> (123) 456-7890
                              <div class="btn_close">x</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
            <div class="box box-block bg-white">
                <div class="row">
                    <div class="col-md-4 col-sm-4 text-center">
                        <img class="img-fluid b-a-radius-circle img-responsive" src="{{asset('public/admin/images/avatar/2.jpg')}}" alt="">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="row_name">John Doe</div>
                        <span class="tag tag-success">SuperAdmin</span>
                        <div class="address">1355 Market Street, Suite 900<br>
                          San Francisco, CA 94103<br>
                          <abbr title="Phone">Phone:</abbr> (123) 456-7890
                          <div class="btn_close">x</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-4">
        <div class="box box-block bg-white">
            <div class="row">
                <div class="col-md-4 col-sm-4 text-center">
                    <img class="img-fluid b-a-radius-circle img-responsive" src="{{asset('public/admin/images/avatar/2.jpg')}}" alt="">
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="row_name">John Doe</div>
                    <span class="tag tag-success">SuperAdmin</span>
                    <div class="address">1355 Market Street, Suite 900<br>
                      San Francisco, CA 94103<br>
                      <abbr title="Phone">Phone:</abbr> (123) 456-7890
                      <div class="btn_close">x</div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-md-4">
    <div class="box box-block bg-white">
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center">
                <img class="img-fluid b-a-radius-circle img-responsive" src="{{asset('public/admin/images/avatar/2.jpg')}}" alt="">
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="row_name">John Doe</div>
                <span class="tag tag-success">SuperAdmin</span>
                <div class="address">1355 Market Street, Suite 900<br>
                  San Francisco, CA 94103<br>
                  <abbr title="Phone">Phone:</abbr> (123) 456-7890
                  <div class="btn_close">x</div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-md-4">
    <div class="box box-block bg-white">
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center">
                <img class="img-fluid b-a-radius-circle img-responsive" src="{{asset('public/admin/images/avatar/2.jpg')}}" alt="">
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="row_name">John Doe</div>
                <span class="tag tag-success">SuperAdmin</span>
                <div class="address">1355 Market Street, Suite 900<br>
                  San Francisco, CA 94103<br>
                  <abbr title="Phone">Phone:</abbr> (123) 456-7890
                  <div class="btn_close">x</div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-md-4">
    <div class="box box-block bg-white">
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center">
                <img class="img-fluid b-a-radius-circle img-responsive" src="{{asset('public/admin/images/avatar/2.jpg')}}" alt="">
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="row_name">John Doe</div>
                <span class="tag tag-success">SuperAdmin</span>
                <div class="address">1355 Market Street, Suite 900<br>
                  San Francisco, CA 94103<br>
                  <abbr title="Phone">Phone:</abbr> (123) 456-7890
                  <div class="btn_close">x</div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-md-4">
    <div class="box box-block bg-white">
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center">
                <img class="img-fluid b-a-radius-circle img-responsive" src="{{asset('public/admin/images/avatar/2.jpg')}}" alt="">
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="row_name">John Doe</div>
                <span class="tag tag-success">SuperAdmin</span>
                <div class="address">1355 Market Street, Suite 900<br>
                  San Francisco, CA 94103<br>
                  <abbr title="Phone">Phone:</abbr> (123) 456-7890
                  <div class="btn_close">x</div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-md-4">
    <div class="box box-block bg-white">
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center">
                <img class="img-fluid b-a-radius-circle img-responsive" src="{{asset('public/admin/images/avatar/2.jpg')}}" alt="">
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="row_name">John Doe</div>
                <span class="tag tag-success">SuperAdmin</span>
                <div class="address">1355 Market Street, Suite 900<br>
                  San Francisco, CA 94103<br>
                  <abbr title="Phone">Phone:</abbr> (123) 456-7890
                  <div class="btn_close">x</div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-md-4">
    <div class="box box-block bg-white">
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center">
                <img class="img-fluid b-a-radius-circle img-responsive" src="{{asset('public/admin/images/avatar/2.jpg')}}" alt="">
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="row_name">John Doe</div>
                <span class="tag tag-success">SuperAdmin</span>
                <div class="address">1355 Market Street, Suite 900<br>
                  San Francisco, CA 94103<br>
                  <abbr title="Phone">Phone:</abbr> (123) 456-7890
                  <div class="btn_close">x</div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-md-4">
    <div class="box box-block bg-white">
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center">
                <img class="img-fluid b-a-radius-circle img-responsive" src="{{asset('public/admin/images/avatar/2.jpg')}}" alt="">
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="row_name">John Doe</div>
                <span class="tag tag-success">SuperAdmin</span>
                <div class="address">1355 Market Street, Suite 900<br>
                  San Francisco, CA 94103<br>
                  <abbr title="Phone">Phone:</abbr> (123) 456-7890
                  <div class="btn_close">x</div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-md-4">
    <div class="box box-block bg-white">
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center">
                <img class="img-fluid b-a-radius-circle img-responsive" src="{{asset('public/admin/images/avatar/2.jpg')}}" alt="">
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="row_name">John Doe</div>
                <span class="tag tag-success">SuperAdmin</span>
                <div class="address">1355 Market Street, Suite 900<br>
                  San Francisco, CA 94103<br>
                  <abbr title="Phone">Phone:</abbr> (123) 456-7890
                  <div class="btn_close">x</div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-md-4">
    <div class="box box-block bg-white">
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center">
                <img class="img-fluid b-a-radius-circle img-responsive" src="{{asset('public/admin/images/avatar/2.jpg')}}" alt="">
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="row_name">John Doe</div>
                <span class="tag tag-success">SuperAdmin</span>
                <div class="address">1355 Market Street, Suite 900<br>
                  San Francisco, CA 94103<br>
                  <abbr title="Phone">Phone:</abbr> (123) 456-7890
                  <div class="btn_close">x</div>
              </div>
          </div>
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