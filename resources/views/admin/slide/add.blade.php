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
                                    <li><input type="submit" class="btn add-row btn-primary btn_members_save" value="Save changes"></li>
                                    <li><button class="btn add-row btn-primary btn_members_cancel">Cancel</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="widget-wrap">
                        <div class="widget-container margin-top-0 clearfix">
                            <div class="widget-content">
                                <div class="unit" style="margin-bottom: 10px;">
                                    <label class="label">Title :</label>
                                    <div class="input">
                                        <input class="form-control" type="text" placeholder="Enter Title" id="name"  name="name">
                                    </div>
                                    <a href="" class="slug">Slug: full-width-fluid-layout-form-call-me.html</a>
                                </div>
                                <div class="unit">
                                    <label class="label">Categories :</label>
                                    <div class="input">
                                        <select id="select2-demo-5" class="form-control" data-plugin="select2" multiple="multiple">
                                            <option value="option1">HTML</option>
                                            <option value="option2">CSS</option>
                                            <option value="option3">Javascript</option>
                                            <option value="option4">PHP</option>
                                            <option value="option5">Bootstrap</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="unit">
                                    <label class="label">Images :</label>
                                    <div class="input prepend-small-btn">
                                        <div class="file-button">
                                            Browse
                                            <input class="form-control" type="file" onchange="document.getElementById('append-small-btn').value = this.value;">
                                        </div>
                                        <input class="form-control" type="text" id="append-small-btn" readonly="" placeholder="No file selected">
                                    </div>
                                </div>
                                <div class=" unit">
                                    <label class="label">Video :</label>
                                    <div class="input">
                                        <label class="icon-left" for="url">
                                            <i class="fa fa-globe"></i>
                                        </label>
                                        <input class="form-control" type="url" placeholder="http://www.example.com" id="url">
                                    </div>
                                </div>
                                <div class="unit">
                                    <label class="label">Content :</label>
                                    <textarea class="form-control" rows="20" placeholder="Enter Content ..."></textarea>
                                </div>
                                <div class="unit">
                                    <label class="label">Description :</label>
                                    <textarea class="form-control" placeholder="Description write"></textarea>
                                </div>
                                <div class="unit">
                                    <label class="label">Tags :</label>
                                    <input type="text" class="form-control" placeholder="Example : Music,Story,Audition" />
                                </div>
                                <div class="unit">
                                    <label class="label">Source :</label>
                                    <input type="text" class="form-control" placeholder="Example : VNExpress" />
                                </div>
                                <div class="unit">
                                    <label class="label">MD5 Enscription:</label>
                                    <input type="text" readonly class="form-control" value="{{ csrf_token() }}" placeholder="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="widget-wrap">
                        <div class="widget-container margin-top-0 clearfix">
                            <div class="widget-content">
                                <div class="unit" style="margin-bottom: 0px;">
                                    <div class="inline-group">
                                        <label class="checkbox-toggle">
                                            <input type="checkbox">
                                            <i></i>
                                            Status
                                        </label>
                                        <div class="rating-group">
                                            <label class="label">Rating :</label>
                                            <div class="ratings">
                                                <input id="5q" type="radio" name="quality-rating">
                                                <label for="5q">
                                                    <i class="fa fa-star"></i>
                                                </label>
                                                <input id="4q" type="radio" name="quality-rating">
                                                <label for="4q">
                                                    <i class="fa fa-star"></i>
                                                </label>
                                                <input id="3q" type="radio" name="quality-rating">
                                                <label for="3q">
                                                    <i class="fa fa-star"></i>
                                                </label>
                                                <input id="2q" type="radio" name="quality-rating">
                                                <label for="2q">
                                                    <i class="fa fa-star"></i>
                                                </label>
                                                <input id="1q" type="radio" name="quality-rating">
                                                <label for="1q">
                                                    <i class="fa fa-star"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="checkbox-toggle">
                                            <input type="checkbox">
                                            <i></i>
                                            P-FaceBook
                                        </label>
                                        <label class="checkbox-toggle">
                                            <input type="checkbox">
                                            <i></i>
                                            P-GooglePlus
                                        </label>
                                        <label class="checkbox-toggle">
                                            <input type="checkbox">
                                            <i></i>
                                            Top
                                        </label>
                                        <label class="checkbox-toggle">
                                            <input type="checkbox">
                                            <i></i>
                                            Hot
                                        </label>
                                        <div class="unit" style="margin-bottom: 10px;margin-top: 15px">
                                            <label class="label">Position Display :</label>
                                            <div class="input" >
                                                <input class="form-control" style="width: 50%" type="number" placeholder="0" id="name" name="name">
                                            </div>
                                        </div>
                                        <div class="unit" style="margin-bottom: 10px;margin-top: 15px">
                                            <label class="label">View :</label>
                                            <div class="input">
                                                <input class="form-control" type="number" placeholder="0" style="width: 50%" id="name" name="name">
                                            </div>
                                        </div>
                                        <div class="unit" style="margin-bottom: 10px;margin-top: 15px">
                                            <label class="label">Date Create :</label>
                                            <div class="input">
                                                <input type="text" disabled style="width: 60%" class="form-control date_current input-date-picker">
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