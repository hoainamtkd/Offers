 @extends('admin.master')
 @section('content')
 <section class="main-container">
    <div class="container-fluid">
        <div class="page-header filled full-block light">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{url('admin/members')}}" class="btn button btn-primary pull-right btn_edit_password" style="margin-left: 10px;">Back Home</a>
                    <a href="#edit_password" class="btn button btn-primary pull-right btn_edit_password" style="margin-left: 10px;">Change Password</a>
                    <button class="btn button btn-primary pull-right">Update Info</button>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="widget-wrap material-table-widget" style="padding: 5px;">
                   <div class="widget-container">
                    <div class="widget-content">
                        <div class="row" style="margin-left: 0px;margin-right: 0px">
                            <div class="col-md-4">
                                <form action="#" class="j-forms" novalidate="">
                                    <div class="form-content">
                                        <!-- start prepend big file button -->
                                        <img src="http://localhost/Laravel/public/admin/images/avatar-user.png" class="img-responsive">
                                        <div class="unit">
                                            <div class="input prepend-big-btn">
                                                <label class="icon-right" for="prepend-big-btn">
                                                    <i class="fa fa-download"></i>
                                                </label>
                                                <div class="file-button">
                                                    Browse
                                                    <input class="form-control" type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                </div>
                                                <input class="form-control" type="text" id="prepend-big-btn" readonly="" placeholder="no file selected">
                                            </div>
                                        </div>
                                        <!-- end prepend big file button -->
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-8">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Full Name : </label>
                                        <div class=" col-md-7">
                                            <p class="input-instruction">
                                                Trịnh Hoài Nam
                                            </p>
                                        </div>
                                        <div class="col-md-1"><i class="fa fa-pencil"></i></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Email : </label>
                                        <div class=" col-md-7">
                                            <p class="input-instruction">
                                                hoainamitc1995@gmail.com
                                            </p>
                                        </div>
                                        <div class=" col-md-1"><i class="fa fa-pencil"></i></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Phone : </label>
                                        <div class=" col-md-7">
                                            <p class="input-instruction">
                                                0120 667 6961
                                            </p>
                                        </div>
                                        <div class=" col-md-1"><i class="fa fa-pencil"></i></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Address : </label>
                                        <div class=" col-md-7">
                                            <p class="input-instruction">
                                                28 - Trịnh Đình Thảo - Phường Hòa Thạnh - Quận Tân Phú - Thành Phố Hồ Chí Minh
                                            </p>
                                        </div>
                                        <div class=" col-md-1"><i class="fa fa-pencil"></i></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Position : </label>
                                        <div class=" col-md-7">
                                            <p class="input-instruction">
                                               Admintrator
                                           </p>
                                       </div>
                                       <div class=" col-md-1"><i class="fa fa-pencil"></i></div>
                                   </div>
                                   <div class="form-group">
                                    <label class="col-md-4 control-label">Gender : </label>
                                    <div class=" col-md-7">
                                        <p class="input-instruction">
                                           Nam
                                       </p>
                                   </div>
                                   <div class=" col-md-1"><i class="fa fa-pencil"></i></div>
                               </div>
                               <div class="form-group">
                                <label class="col-md-4 control-label">Date of birth : </label>
                                <div class=" col-md-7">
                                    <p class="input-instruction">
                                       04/12/1995
                                   </p>
                               </div>
                               <div class=" col-md-1"><i class="fa fa-pencil"></i></div>
                           </div>
                           <div class="form-group">
                            <label class="col-md-4 control-label">Status : </label>
                            <div class=" col-md-7">
                                <p class="input-instruction">
                                   active
                               </p>
                           </div>
                           <div class=" col-md-1"><i class="fa fa-pencil"></i></div>
                       </div>
                   </form>
               </div>
           </div>
       </div>

   </div>

</div>
@include('admin.members.edit_password')
</div>
</div>
</div>
<!--Footer Start Here -->
@include('admin.members.add')
@include('admin.layout.footers')
<!--Footer End Here -->
</section>
@endsection