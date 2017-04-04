<aside class="leftbar">
    <div class="left-aside-container">
        <ul class="list-accordion tree-style">
            <li class="list-title">DASHBOARD</li>
            <li>
                <a href="{{url('admin/dashboard')}}"><i class="zmdi zmdi-view-dashboard"></i><span class="list-label"> Dashboard</span></a>
            </li>
            <li class="list-title">ACCOUNT</li>
            <li>
                <a href="#"><i class="zmdi zmdi-account"></i><span class="list-label"> Members</span></a>
                <ul>
                    <li><a href="{{url('admin/members')}}">All Members</a></li>
                    <li><a href="{{url('admin/members/add')}}">Members Add</a></li>
                    <li><a href="{{url('admin/members/blocks')}}">Members Blocks</a></li>
                    <li><a href="{{url('admin/members/social')}}">Members Social</a></li>
                </ul>
            </li>
            <li class="list-title">Tables</li>
            <li>
                <a href="{{url('admin/categories')}}"><i class="fa fa-tags"></i><span class="list-label"> Categories</span></a>
                <ul>
                    <li><a href="{{url('admin/categories')}}">All Categories</a></li>
                    <li><a href="{{url('admin/categories/add')}}">Categories Add</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-flag-o"></i><span class="list-label"> News</span></a>
                <ul>
                    <li><a href="{{url('admin/news')}}">All News</a></li>
                    <li><a href="{{url('admin/news/add')}}">News Add</a></li>
                </ul>
            </li>
            <li>
                <a href="{{url('admin/news')}}"><i class="fa fa-sliders"></i><span class="list-label"> Slide</span></a>
                <ul>
                    <li><a href="{{url('admin/slide')}}">All Slide</a></li>
                    <li><a href="{{url('admin/slide/add')}}">Slide Add</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-envelope-o"></i><span class="list-label"> Email</span></a>
                 <ul>
                    <li><a href="{{url('admin/email')}}">All Email</a></li>
                    <li><a href="{{url('admin/email/send-email')}}">Send Mail</a></li>
                </ul>
            </li>
            <li>
                <a href="{{url('admin/search')}}"><i class="fa fa-search"></i><span class="list-label"> Search</span></a>
            </li>
            <li>
                <a href="{{url('admin/ads')}}"><i class="fa fa-forumbee"></i><span class="list-label"> Ads</span></a>
                <ul>
                    <li><a href="{{url('admin/ads')}}">All Ads</a></li>
                    <li><a href="{{url('admin/ads/add')}}">Add Code</a></li>
                </ul>
            </li>
            
            <li>
                <a href="{{url('admin/comments')}}"><i class="zmdi zmdi-comments"></i><span class="list-label"> Comments</span></a>
            </li>

            <li class="list-title">Settings</li>
            <li>
                <a href="{{url('admin/comments')}}"><i class="fa fa-sliders"></i><span class="list-label"> Menu</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-flag-o"></i><span class="list-label"> Layout</span></a>
                <ul>
                    <li><a href="header.html">Page Header</a></li>
                    <li><a href="buttons-icons.html">Buttons &amp; Icons</a></li>
                    
                </ul>
            </li>
            <li>
                <a href="{{url('admin/news')}}"><i class="fa fa-line-chart"></i><span class="list-label"> Reports</span></a>
            </li>
            <li><a href="ui-widgets.html"><i class="fa fa-database"></i><span class="list-label">Database</span></a></li>
        </ul>
    </div>
</aside>