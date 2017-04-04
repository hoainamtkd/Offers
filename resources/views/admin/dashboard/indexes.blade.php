 @extends('admin.master')
 @section('content')
 <section class="main-container">
    <div class="container-fluid">
        <div class="page-header filled full-block light">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2>Dashboard</h2>
                    <p>Bootstrap3 supported admin template</p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="list-page-breadcrumb">
                        <li><a href="#">Home <i class="zmdi zmdi-chevron-right"></i></a></li>
                        <li><a href="#">Layout <i class="zmdi zmdi-chevron-right"></i></a></li>
                        <li class="active-page"> Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="stats-widget stats-widget">
                    <div class="widget-header">
                        <h3>Today's Stats</h3>
                        <p>Total earnings and items sales today</p>
                    </div>
                    <div class="widget-stats-list">
                        <ul>
                            <li><label>Earning:</label> $400 USD</li>
                            <li><label>Items Sold:</label> 20 Items </li>
                            <li><label>Last Hour Sales:</label> $34 USD </li>
                        </ul>
                    </div>
                    <div class="w_bg_teal stats-chart-container">
                        <div id="widget-stats-chart" class="stats-chart" style="padding: 0px; position: relative;">
                            <canvas class="flot-base" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas><canvas class="flot-overlay" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="widget-wrap stats-widget">
                        <div class="widget-header">
                            <h3>Monthly Stats</h3>
                            <p>Monthly earnings and items sales</p>
                        </div>
                        <div class="widget-stats-list">
                            <ul>
                                <li><label>Earning:</label> $5,000 USD</li>
                                <li><label>Items Sold:</label> 400 Items </li>
                                <li><label>Last Month Earning:</label> $2,434 USD </li>
                            </ul>
                        </div>
                        <div class="w_bg_deep_purple stats-chart-container">
                            <div id="widget-monthly-chart" class="stats-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas><canvas class="flot-overlay" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="widget-wrap stats-widget">
                        <div class="widget-header">
                            <h3>Alltime Stats</h3>
                            <p>All earnings and items sales</p>
                        </div>
                        <div class="widget-stats-list">
                            <ul>
                                <li><label>Earning:</label> $98,300 USD</li>
                                <li><label>Items Sold:</label> 8,296 Items </li>
                                <li><label>Last Year Earning:</label> $78,034 USD </li>
                            </ul>
                        </div>
                        <div class="w_bg_cyan stats-chart-container">
                            <div id="widget-alltime-chart" class="stats-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas><canvas class="flot-overlay" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="widget-wrap stats-widget">
                        <div class="widget-header">
                            <h3>Alltime Stats</h3>
                            <p>All earnings and items sales</p>
                        </div>
                        <div class="widget-stats-list">
                            <ul>
                                <li><label>Earning:</label> $98,300 USD</li>
                                <li><label>Items Sold:</label> 8,296 Items </li>
                                <li><label>Last Year Earning:</label> $78,034 USD </li>
                            </ul>
                        </div>
                        <div class="w_bg_cyan stats-chart-container">
                            <div id="widget-alltime-chart" class="stats-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas><canvas class="flot-overlay" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="widget-wrap stats-widget">
                        <div class="widget-header">
                            <h3>Alltime Stats</h3>
                            <p>All earnings and items sales</p>
                        </div>
                        <div class="widget-stats-list">
                            <ul>
                                <li><label>Earning:</label> $98,300 USD</li>
                                <li><label>Items Sold:</label> 8,296 Items </li>
                                <li><label>Last Year Earning:</label> $78,034 USD </li>
                            </ul>
                        </div>
                        <div class="w_bg_cyan stats-chart-container">
                            <div id="widget-alltime-chart" class="stats-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas><canvas class="flot-overlay" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="widget-wrap stats-widget">
                        <div class="widget-header">
                            <h3>Alltime Stats</h3>
                            <p>All earnings and items sales</p>
                        </div>
                        <div class="widget-stats-list">
                            <ul>
                                <li><label>Earning:</label> $98,300 USD</li>
                                <li><label>Items Sold:</label> 8,296 Items </li>
                                <li><label>Last Year Earning:</label> $78,034 USD </li>
                            </ul>
                        </div>
                        <div class="w_bg_cyan stats-chart-container">
                            <div id="widget-alltime-chart" class="stats-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas><canvas class="flot-overlay" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="widget-wrap stats-widget">
                        <div class="widget-header">
                            <h3>Alltime Stats</h3>
                            <p>All earnings and items sales</p>
                        </div>
                        <div class="widget-stats-list">
                            <ul>
                                <li><label>Earning:</label> $98,300 USD</li>
                                <li><label>Items Sold:</label> 8,296 Items </li>
                                <li><label>Last Year Earning:</label> $78,034 USD </li>
                            </ul>
                        </div>
                        <div class="w_bg_cyan stats-chart-container">
                            <div id="widget-alltime-chart" class="stats-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas><canvas class="flot-overlay" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="widget-wrap stats-widget">
                        <div class="widget-header">
                            <h3>Alltime Stats</h3>
                            <p>All earnings and items sales</p>
                        </div>
                        <div class="widget-stats-list">
                            <ul>
                                <li><label>Earning:</label> $98,300 USD</li>
                                <li><label>Items Sold:</label> 8,296 Items </li>
                                <li><label>Last Year Earning:</label> $78,034 USD </li>
                            </ul>
                        </div>
                        <div class="w_bg_cyan stats-chart-container">
                            <div id="widget-alltime-chart" class="stats-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas><canvas class="flot-overlay" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="widget-wrap stats-widget">
                        <div class="widget-header">
                            <h3>Alltime Stats</h3>
                            <p>All earnings and items sales</p>
                        </div>
                        <div class="widget-stats-list">
                            <ul>
                                <li><label>Earning:</label> $98,300 USD</li>
                                <li><label>Items Sold:</label> 8,296 Items </li>
                                <li><label>Last Year Earning:</label> $78,034 USD </li>
                            </ul>
                        </div>
                        <div class="w_bg_cyan stats-chart-container">
                            <div id="widget-alltime-chart" class="stats-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas><canvas class="flot-overlay" width="286" height="80" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 286px; height: 80px;"></canvas></div>
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