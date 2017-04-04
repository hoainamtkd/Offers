 @extends('admin.master')
 @section('content')
 
<section class="main-container">
    <div class="container-fluid">
        <form class="j-forms frm_members" method="post" id="j-forms-validation" novalidate="novalidate">
            <div class="page-header filled full-block light">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                        </div>
                        <div class="data-align-right col-md-6">
                            <div class="tbl-action-toolbar">
                                <ul>
                                    <li><input type="submit" class="btn add-row btn-primary btn_members_save" value="Send Email"></li>
                                    <li><button class="btn add-row btn-primary btn_members_cancel">Cancel</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="widget-wrap">
                        <div class="widget-header block-header margin-bottom-0 clearfix" style="margin-top: -10px;padding-bottom: 15px;">
                            <div class="pull-left">
                                <h3>Option</h3>
                                <p>All kind of selectbox </p>
                            </div>
                        </div>
                        <div class="widget-container">
                            <div class="widget-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="#" class="j-forms" novalidate="">
                                            <div class="form-content">
                                                <!-- start single select -->
                                                <div class="unit" style="margin-top: -15px;">
                                                    <input type="text" placeholder="Search Email..." class="form-control" name="">
                                                </div>
                                                <!-- end single select -->

                                                <!-- start multiple select -->
                                                <div class="unit">
                                                    <ul class="scroll_bar_email">
                                                        <li><a href="">example@gmail.com</a>
                                                        <label class="fa fa-angle-right pull-right add_email_input"></label></li>
                                                        <li><a href="">hoainamit@gmail.com</a><label class="fa fa-angle-right pull-right add_email_input"></label></li>
                                                        <li><a href="">hoainamitc1995@gmail.com</a>
                                                        <label class="fa fa-angle-right pull-right add_email_input"></label></li>
                                                        <li><a href="">trinhhoainam20072000@gmail.com</a><label class="fa fa-angle-right pull-right add_email_input"></label></li>
                                                        <li><a href="">hoainamitc1995@gmail.com</a>
                                                        <label class="fa fa-angle-right pull-right add_email_input"></label></li>
                                                        <li><a href="">hoainamitc1995@gmail.com</a>
                                                        <label class="fa fa-angle-right pull-right add_email_input"></label></li>
                                                        <li><a href="">hoainamitc1995@gmail.com</a>
                                                        <label class="fa fa-angle-right pull-right add_email_input"></label></li>
                                                        <li><a href="">hoainamitc1995@gmail.com</a>
                                                        <label class="fa fa-angle-right pull-right add_email_input"></label></li>
                                                        <li><a href="">hoainamitc1995@gmail.com</a>
                                                        <label class="fa fa-angle-right pull-right add_email_input"></label></li>
                                                        <li><a href="">hoainamitc1995@gmail.com</a>
                                                        <label class="fa fa-angle-right pull-right add_email_input"></label></li>
                                                        <li><a href="">hoainamitc1995@gmail.com</a>
                                                        <label class="fa fa-angle-right pull-right add_email_input"></label></li>
                                                        <li><a href="">hoainamitc1995@gmail.com</a>
                                                        <label class="fa fa-angle-right pull-right add_email_input"></label></li>
                                                        <li><a href="">hoainamitc1995@gmail.com</a>
                                                        <label class="fa fa-angle-right pull-right add_email_input"></label></li>
                                                        <li><a href="">hoainamitc1995@gmail.com</a>
                                                        <label class="fa fa-angle-right pull-right add_email_input"></label></li>
                                                        <li><a href="">hoainamitc1995@gmail.com</a>
                                                        <label class="fa fa-angle-right pull-right add_email_input"></label></li>
                                                        
                                                       



                                                    </ul>
                                                </div>
                                                <!-- end multiple select -->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="widget-wrap">
                        <div class="widget-container margin-top-0 clearfix">
                            <div class="widget-content">
                                <input type="hidden" name="_token" id="token" value="TOlNh4N3Jk7xo25eHvofNurQ2OsS0OF09G3GpH9E">

                                <div class="col-md-12">
                                   <div class="form-content">
                                    <div class="row">
                                        <div class="unit col-md-12">
                                            <label class="label">Subject :</label>
                                            <div class="input">
                                                <input class="form-control" type="text" placeholder="Subject" value="" id="categories_name" name="categories_name">
                                            </div>
                                        </div>
                                        <div class="unit col-md-6">
                                            <label class="label">Email :</label>
                                            <input class="form-control" type="text" placeholder="Email" value="" id="categories_name" name="categories_name">
                                        </div>
                                    </div>
                                    <!-- start email url -->
                                    <!-- start checbox and radio -->
                                    <div class="row">
                                       <div class="unit">
                                        <div class="col-md-12">
                                            <label class="label">Message :</label>
                                        </div>
                                        <div class="col-md-12 unit">
                                            <textarea class="form-control" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- end enable input -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</form>
</div>
<!--Footer Start Here -->
@include('admin.layout.footers')
<!--Footer End Here -->
</section>
<script src="{{asset('public/admin/js/members/member.js')}}"></script>
@endsection