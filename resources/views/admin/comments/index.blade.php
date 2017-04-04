 @extends('admin.master')
 @section('content')
 <style type="text/css">
   .description_short{
    font-size: 14px;
   }
 </style>
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
      <div class="col-md-12">
        <div class="widget-wrap" style="padding-top: 0px">
          <div class="widget-container margin-top-0">
            <div class="widget-content">
              <div class="recent-comments-list">
                <div class="recent-comments">
                  <div class="recent-comment-meta">
                    <div class="comment-user-thumb">
                      <a href="#"><img src="{{asset('public/admin/images/avatar/oykun.jpg')}}" alt="user"></a>
                    </div>
                    <div class="comment-user-info">
                      <ul>
                        <li class="u-name"><a href="#" class="bold">Allen V. Ellingsworth</a> commented on <a href="" class="bold">Lorem ipsum dolor</a></li>
                        <li class="p-time"><i class="zmdi zmdi-time"></i> 30 Min Ago</li>
                      </ul>
                    </div>
                    <span class="comments-reply"><a href="#"><i class="zmdi zmdi-mail-reply"></i></a></span>
                  </div>
                  <div class="comment-text">
                    <p class="description_short">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam sem, imperdiet at mollis vestibulum, bibendum id purus. Aliquam molestie, leo sed molestie condimentum, massa enim lobortis massa, in vulputate diam lorem quis justo. Nullam nec dignissim mi. In non varius nibh. Proin et eros nisi, eu vulputate libero. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ultricies augue id risus dapibus blandit...</p>
                  </div>
                </div>
                <div class="recent-comments">
                  <div class="recent-comment-meta">
                    <div class="comment-user-thumb">
                      <a href="#"><img src="{{asset('public/admin/images/avatar/oykun.jpg')}}" alt="user"></a>
                    </div>
                    <div class="comment-user-info">
                      <ul>
                        <li class="u-name"><a href="#" class="bold">Allen V. Ellingsworth</a> commented on <a href="" class="bold">Lorem ipsum dolor</a></li>
                        <li class="p-time"><i class="zmdi zmdi-time"></i> 30 Min Ago</li>
                      </ul>
                    </div>
                    <span class="comments-reply"><a href="#"><i class="zmdi zmdi-mail-reply"></i></a></span>
                  </div>
                  <div class="comment-text">
                    <p class="description_short">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam sem, imperdiet at mollis vestibulum, bibendum id purus. Aliquam molestie, leo sed molestie condimentum, massa enim lobortis massa, in vulputate diam lorem quis justo. Nullam nec dignissim mi. In non varius nibh. Proin et eros nisi, eu vulputate libero. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ultricies augue id risus dapibus blandit...</p>
                  </div>
                </div>
                <div class="recent-comments">
                  <div class="recent-comment-meta">
                    <div class="comment-user-thumb">
                      <a href="#"><img src="{{asset('public/admin/images/avatar/oykun.jpg')}}" alt="user"></a>
                    </div>
                    <div class="comment-user-info">
                      <ul>
                        <li class="u-name"><a href="#" class="bold">Allen V. Ellingsworth</a> commented on <a href="" class="bold">Lorem ipsum dolor</a></li>
                        <li class="p-time"><i class="zmdi zmdi-time"></i> 30 Min Ago</li>
                      </ul>
                    </div>
                    <span class="comments-reply"><a href="#"><i class="zmdi zmdi-mail-reply"></i></a></span>
                  </div>
                  <div class="comment-text">
                    <p class="description_short">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam sem, imperdiet at mollis vestibulum, bibendum id purus. Aliquam molestie, leo sed molestie condimentum, massa enim lobortis massa, in vulputate diam lorem quis justo. Nullam nec dignissim mi. In non varius nibh. Proin et eros nisi, eu vulputate libero. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ultricies augue id risus dapibus blandit...</p>
                  </div>
                </div>
                <div class="recent-comments">
                  <div class="recent-comment-meta">
                    <div class="comment-user-thumb">
                      <a href="#"><img src="{{asset('public/admin/images/avatar/oykun.jpg')}}" alt="user"></a>
                    </div>
                    <div class="comment-user-info">
                      <ul>
                        <li class="u-name"><a href="#" class="bold">Allen V. Ellingsworth</a> commented on <a href="" class="bold">Lorem ipsum dolor</a></li>
                        <li class="p-time"><i class="zmdi zmdi-time"></i> 30 Min Ago</li>
                      </ul>
                    </div>
                    <span class="comments-reply"><a href="#"><i class="zmdi zmdi-mail-reply"></i></a></span>
                  </div>
                  <div class="comment-text">
                    <p class="description_short">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam sem, imperdiet at mollis vestibulum, bibendum id purus. Aliquam molestie, leo sed molestie condimentum, massa enim lobortis massa, in vulputate diam lorem quis justo. Nullam nec dignissim mi. In non varius nibh. Proin et eros nisi, eu vulputate libero. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ultricies augue id risus dapibus blandit...</p>
                  </div>
                </div>
                <div class="recent-comments">
                  <div class="recent-comment-meta">
                    <div class="comment-user-thumb">
                      <a href="#"><img src="{{asset('public/admin/images/avatar/oykun.jpg')}}" alt="user"></a>
                    </div>
                    <div class="comment-user-info">
                      <ul>
                        <li class="u-name"><a href="#" class="bold">Allen V. Ellingsworth</a> commented on <a href="" class="bold">Lorem ipsum dolor</a></li>
                        <li class="p-time"><i class="zmdi zmdi-time"></i> 30 Min Ago</li>
                      </ul>
                    </div>
                    <span class="comments-reply"><a href="#"><i class="zmdi zmdi-mail-reply"></i></a></span>
                  </div>
                  <div class="comment-text">
                    <p class="description_short">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam sem, imperdiet at mollis vestibulum, bibendum id purus. Aliquam molestie, leo sed molestie condimentum, massa enim lobortis massa, in vulputate diam lorem quis justo. Nullam nec dignissim mi. In non varius nibh. Proin et eros nisi, eu vulputate libero. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ultricies augue id risus dapibus blandit...</p>
                  </div>
                </div>
                <div class="recent-comments">
                  <div class="recent-comment-meta">
                    <div class="comment-user-thumb">
                      <a href="#"><img src="{{asset('public/admin/images/avatar/oykun.jpg')}}" alt="user"></a>
                    </div>
                    <div class="comment-user-info">
                      <ul>
                        <li class="u-name"><a href="#" class="bold">Allen V. Ellingsworth</a> commented on <a href="" class="bold">Lorem ipsum dolor</a></li>
                        <li class="p-time"><i class="zmdi zmdi-time"></i> 30 Min Ago</li>
                      </ul>
                    </div>
                    <span class="comments-reply"><a href="#"><i class="zmdi zmdi-mail-reply"></i></a></span>
                  </div>
                  <div class="comment-text">
                    <p class="description_short">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam sem, imperdiet at mollis vestibulum, bibendum id purus. Aliquam molestie, leo sed molestie condimentum, massa enim lobortis massa, in vulputate diam lorem quis justo. Nullam nec dignissim mi. In non varius nibh. Proin et eros nisi, eu vulputate libero. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ultricies augue id risus dapibus blandit...</p>
                  </div>
                </div>
                <div class="recent-comments">
                  <div class="recent-comment-meta">
                    <div class="comment-user-thumb">
                      <a href="#"><img src="{{asset('public/admin/images/avatar/oykun.jpg')}}" alt="user"></a>
                    </div>
                    <div class="comment-user-info">
                      <ul>
                        <li class="u-name"><a href="#" class="bold">Allen V. Ellingsworth</a> commented on <a href="" class="bold">Lorem ipsum dolor</a></li>
                        <li class="p-time"><i class="zmdi zmdi-time"></i> 30 Min Ago</li>
                      </ul>
                    </div>
                    <span class="comments-reply"><a href="#"><i class="zmdi zmdi-mail-reply"></i></a></span>
                  </div>
                  <div class="comment-text">
                    <p class="description_short">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam sem, imperdiet at mollis vestibulum, bibendum id purus. Aliquam molestie, leo sed molestie condimentum, massa enim lobortis massa, in vulputate diam lorem quis justo. Nullam nec dignissim mi. In non varius nibh. Proin et eros nisi, eu vulputate libero. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ultricies augue id risus dapibus blandit...</p>
                  </div>
                </div>
                <div class="recent-comments">
                  <div class="recent-comment-meta">
                    <div class="comment-user-thumb">
                      <a href="#"><img src="{{asset('public/admin/images/avatar/oykun.jpg')}}" alt="user"></a>
                    </div>
                    <div class="comment-user-info">
                      <ul>
                        <li class="u-name"><a href="#" class="bold">Allen V. Ellingsworth</a> commented on <a href="" class="bold">Lorem ipsum dolor</a></li>
                        <li class="p-time"><i class="zmdi zmdi-time"></i> 30 Min Ago</li>
                      </ul>
                    </div>
                    <span class="comments-reply"><a href="#"><i class="zmdi zmdi-mail-reply"></i></a></span>
                  </div>
                  <div class="comment-text">
                    <p class="description_short">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam sem, imperdiet at mollis vestibulum, bibendum id purus. Aliquam molestie, leo sed molestie condimentum, massa enim lobortis massa, in vulputate diam lorem quis justo. Nullam nec dignissim mi. In non varius nibh. Proin et eros nisi, eu vulputate libero. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ultricies augue id risus dapibus blandit...</p>
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