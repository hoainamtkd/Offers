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
                <div class="col-md-5">
                    <div class="widget-wrap">
                        <div class="widget-container margin-top-0 clearfix">
                            <div class="widget-content">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="widget-wrap">
                        <div class="widget-container margin-top-0 clearfix">
                            <div class="widget-content">
                                @include('admin.layout.error')
                                <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">

                                <div class="col-md-12">
                                 <div class="form-content">
                                    <div class="row">
                                        <div class="unit col-md-6">
                                            <label class="label">First Name :</label>
                                            <div class="input">
                                                <input class="form-control" type="text" placeholder="Enter Frist Name" value="{!! old('first_name') !!}" id="first_name" name="first_name">
                                            </div>
                                        </div>
                                        <div class="unit col-md-6">
                                            <label class="label">Last Name :</label>
                                            <div class="input">

                                                <input class="form-control" value="{!! old('last_name') !!}" type="text" placeholder="Enter Last Name" id="last_name" name="last_name">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- start email url -->
                                    <div class="row">
                                        <div class="col-md-6 unit">
                                            <label class="label">Email :</label>
                                            <div class="input">
                                                <input class="form-control" value="{!! old('email') !!}" type="email" placeholder="email@example.com" name="email" id="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6 unit">
                                            <label class="label">Phone :</label>
                                            <div class="input">
                                                <input class="form-control" type="text" placeholder="(+84)1206676961"  value="{!! old('phone') !!}" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-md-6 unit">
                                            <label class="label">Username :</label>
                                            <div class="input">
                                                <input class="form-control" type="text" placeholder="Username" value="{!! old('username') !!}" name="username" id="username">
                                            </div>
                                        </div>
                                        <div class="col-md-6 unit">
                                            <label class="label">Password :</label>
                                            <div class="input">
                                                <input class="form-control" type="password" placeholder="Password" name="password" id="password">
                                            </div>
                                        </div>
                                        <div class="col-md-6 unit">
                                            <label class="label">Confirm Password :</label>
                                            <div class="input">

                                                <input class="form-control" type="password" placeholder="Confirm Password" name="cf_password" id="cf_password">
                                            </div>
                                        </div>
                                        <div class="col-md-6 unit">
                                            <label class="label">Country :</label>
                                            <label class="input select">
                                                <select class="form-control" id="country" name="country">
                                                    <option value="none">Select country</option>
                                                    <option value="0">Apple</option>
                                                    <option value="1">Banana</option>
                                                    <option value="2">Coconut</option>
                                                    <option value="3">Mango</option>
                                                    <option value="4">Melon</option>
                                                    <option value="5">Orange</option>
                                                    <option value="6">Pear</option>
                                                    <option value="7">Watermelon</option>
                                                </select>
                                                <i></i>
                                            </label>
                                        </div>
                                        <div class="unit">
                                            <div class="col-md-12">
                                                <label class="label">Date of birth :</label>
                                            </div>
                                            <div class="col-md-2 unit">
                                                <label class="input select">
                                                    <select class="form-control" id="date" name="date">
                                                        <option value="1" selected="">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                    <i></i>
                                                </label>
                                            </div>
                                            <div class="col-md-4 unit">
                                                <label class="input select">
                                                    <select class="form-control" id="month" name="month">
                                                        <option value="1" selected="">January</option>
                                                        <option value="2">February</option>
                                                        <option value="3">March</option>
                                                        <option value="4">April</option>
                                                        <option value="5">May</option>
                                                        <option value="6">June</option>
                                                        <option value="7">July</option>
                                                        <option value="8">August</option>
                                                        <option value="9">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                    <i></i>
                                                </label>
                                            </div>
                                            <div class="col-md-3 unit">
                                                <label class="input select">
                                                    <select class="form-control" name="year" id="year">
                                                        <option value="2015" selected="">2015</option>
                                                        <option value="2016">2014</option>
                                                        <option value="2017">2013</option>
                                                        <option value="2018">2012</option>
                                                        <option value="2019">2011</option>
                                                        <option value="2020">2010</option>
                                                        <option value="2021">2009</option>
                                                        <option value="2022">2008</option>
                                                        <option value="2021">2007</option>
                                                        <option value="2022">2006</option>
                                                        <option value="2021">2005</option>
                                                        <option value="2022">2004</option>
                                                        <option value="2021">2003</option>
                                                        <option value="2022">2002</option>
                                                        <option value="2021">2001</option>
                                                        <option value="2022">2000</option>
                                                        <option value="2021">1999</option>
                                                        <option value="2022">1998</option>
                                                        <option value="2021">1997</option>
                                                        <option value="2022">1996</option>
                                                        <option value="2021">1995</option>
                                                        <option value="2022">1994</option>
                                                        <option value="2021">1993</option>
                                                        <option value="2022">1992</option>
                                                        <option value="2021">1991</option>
                                                        <option value="2022">1990</option>
                                                        <option value="2021">1989</option>
                                                        <option value="2022">1988</option>
                                                        <option value="2021">1987</option>
                                                        <option value="2022">1986</option>
                                                        <option value="2021">1985</option>
                                                        <option value="2022">1984</option>
                                                        <option value="2021">1983</option>
                                                        <option value="2022">1982</option>
                                                        <option value="2021">1981</option>
                                                        <option value="2022">1980</option>
                                                        <option value="2021">1979</option>
                                                        <option value="2022">1978</option>
                                                        <option value="2021">1977</option>
                                                        <option value="2022">1976</option>
                                                        <option value="2021">1975</option>
                                                        <option value="2022">1974</option>
                                                        <option value="2021">1973</option>
                                                        <option value="2022">1972</option>
                                                        <option value="2021">1971</option>
                                                        <option value="2022">1970</option>
                                                        <option value="2021">1969</option>
                                                        <option value="2022">1968</option>
                                                        <option value="2021">1967</option>
                                                        <option value="2022">1966</option>
                                                        <option value="2021">1965</option>
                                                        <option value="2022">1964</option>
                                                        <option value="2021">1963</option>
                                                        <option value="2022">1962</option>
                                                        <option value="2021">1961</option>
                                                        <option value="2022">1960</option>
                                                        <option value="2021">1959</option>
                                                        <option value="2022">1958</option>
                                                        <option value="2021">1957</option>
                                                        <option value="2022">1956</option>
                                                        <option value="2021">1955</option>
                                                        <option value="2022">1954</option>
                                                        <option value="2021">1953</option>
                                                        <option value="2022">1952</option>
                                                        <option value="2021">1951</option>
                                                        <option value="2022">1950</option>
                                                        <option value="2021">1949</option>
                                                        <option value="2022">1948</option>
                                                        <option value="2021">1947</option>
                                                        <option value="2022">1946</option>
                                                        <option value="2021">1945</option>
                                                        <option value="2022">1944</option>
                                                        <option value="2021">1943</option>
                                                        <option value="2022">1942</option>
                                                        <option value="2021">1941</option>
                                                        <option value="2022">1940</option>
                                                    </select>
                                                    <i></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 unit">
                                            <label class="label">Address :</label>
                                            <div class="input">
                                                <textarea type="email" class="form-control" placeholder="Address" name="address" id="address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- start checbox and radio -->
                                    <div class="row">
                                     <div class="unit">
                                        <div class="col-md-12">
                                            <label class="label">Role / Gender / Status :</label>
                                        </div>
                                        <div class="col-md-4 unit">
                                            <label class="input select">
                                                <select class="form-control" id="role" name="role">
                                                    <option>Select Roles</option>
                                                    <option value="1">Admin</option>
                                                    <option value="2">Poster</option>
                                                </select>
                                                <i></i>
                                            </label>
                                        </div>
                                        <div class="col-md-4 unit">
                                            <label class="input select">
                                                <select class="form-control" id="gender" name="gender">
                                                    <option>Select Gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                                <i></i>
                                            </label>
                                        </div>
                                        <div class="col-md-4 unit">
                                            <label class="input select">
                                                <select class="form-control" name="status" id="status">
                                                    <option value="1">Active</option>
                                                    <option value="2">Disable</option>
                                                </select>
                                                <i></i>
                                            </label>
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
</form>
</div>
<!--Footer Start Here -->
@include('admin.layout.footers')
<!--Footer End Here -->
</section>
<script src="{{asset('public/admin/js/members/member.js')}}"></script>
@endsection