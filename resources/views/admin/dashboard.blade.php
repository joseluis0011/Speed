@extends('admin.layout')
@section('header')
    <div class="os-tabs-w mx-4">
        <div class="os-tabs-controls">
            <ul class="nav nav-tabs upper">
                <li class="nav-item"><a aria-expanded="false" class="nav-link" data-toggle="tab"
                                        href="#tab_overview"> Active</a></li>
                <li class="nav-item"><a aria-expanded="false" class="nav-link" data-toggle="tab"
                                        href="#tab_sales"> Overview</a></li>
                <li class="nav-item"><a aria-expanded="false" class="nav-link" data-toggle="tab"
                                        href="#tab_sales"> Closed</a></li>
                <li class="nav-item"><a aria-expanded="true" class="nav-link active" data-toggle="tab"
                                        href="#tab_sales"> Required</a></li>
            </ul>
            <ul class="nav nav-pills smaller d-none d-lg-flex">
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#"> Today</a></li>
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#"> 7 Days</a>
                </li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#"> 14 Days</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#"> Last Month</a></li>
            </ul>
        </div>
    </div>
@stop
@section('content')
    <div class="col-lg-7">
        <div class="padded-lg"><!--START - Projects list-->
            <div class="projects-list">
                <div class="project-box">
                    <div class="project-head">
                        <div class="project-title"><h5>Website Redesign</h5></div>
                        <div class="project-users">
                            <div class="avatar"><img alt="" src="img/avatar3.jpg"></div>
                            <div class="avatar"><img alt="" src="img/avatar1.jpg"></div>
                            <div class="avatar"><img alt="" src="img/avatar5.jpg"></div>
                            <div class="avatar"><img alt="" src="img/avatar2.jpg"></div>
                            <div class="more">+ 5 More</div>
                        </div>
                    </div>
                    <div class="project-info">
                        <div class="row align-items-center">
                            <div class="col-sm-5">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="el-tablo highlight">
                                            <div class="label">Open tasks</div>
                                            <div class="value">15</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="el-tablo highlight">
                                            <div class="label">Contributors</div>
                                            <div class="value">24</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 offset-sm-2">
                                <div class="os-progress-bar primary">
                                    <div class="bar-labels">
                                        <div class="bar-label-left"><span>Progress</span><span
                                                    class="positive">+10</span></div>
                                        <div class="bar-label-right"><span
                                                    class="info">72/100</span></div>
                                    </div>
                                    <div class="bar-level-1" style="width: 100%">
                                        <div class="bar-level-2" style="width: 72%">
                                            <div class="bar-level-3" style="width: 36%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-box">
                    <div class="project-head">
                        <div class="project-title"><h5>Marketing Text</h5></div>
                        <div class="project-users">
                            <div class="avatar"><img alt="" src="img/avatar7.jpg"></div>
                            <div class="avatar"><img alt="" src="img/avatar6.jpg"></div>
                            <div class="avatar"><img alt="" src="img/avatar4.jpg"></div>
                            <div class="avatar"><img alt="" src="img/avatar1.jpg"></div>
                            <div class="more">+ 5 More</div>
                        </div>
                    </div>
                    <div class="project-info">
                        <div class="row align-items-center">
                            <div class="col-sm-5">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="el-tablo highlight">
                                            <div class="label">Open tasks</div>
                                            <div class="value">27</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="el-tablo highlight">
                                            <div class="label">Contributors</div>
                                            <div class="value">12</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 offset-sm-2">
                                <div class="os-progress-bar primary">
                                    <div class="bar-labels">
                                        <div class="bar-label-left"><span>Progress</span><span
                                                    class="positive">+10</span></div>
                                        <div class="bar-label-right"><span
                                                    class="info">56/100</span></div>
                                    </div>
                                    <div class="bar-level-1" style="width: 100%">
                                        <div class="bar-level-2" style="width: 56%">
                                            <div class="bar-level-3" style="width: 28%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-box">
                    <div class="project-head">
                        <div class="project-title"><h5>Sales Directions</h5></div>
                        <div class="project-users">
                            <div class="avatar"><img alt="" src="img/avatar6.jpg"></div>
                            <div class="avatar"><img alt="" src="img/avatar4.jpg"></div>
                            <div class="avatar"><img alt="" src="img/avatar3.jpg"></div>
                            <div class="avatar"><img alt="" src="img/avatar7.jpg"></div>
                            <div class="more">+ 5 More</div>
                        </div>
                    </div>
                    <div class="project-info">
                        <div class="row align-items-center">
                            <div class="col-sm-5">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="el-tablo highlight">
                                            <div class="label">Open tasks</div>
                                            <div class="value">45</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="el-tablo highlight">
                                            <div class="label">Contributors</div>
                                            <div class="value">37</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 offset-sm-2">
                                <div class="os-progress-bar primary">
                                    <div class="bar-labels">
                                        <div class="bar-label-left"><span>Progress</span><span
                                                    class="positive">+10</span></div>
                                        <div class="bar-label-right"><span
                                                    class="info">32/100</span></div>
                                    </div>
                                    <div class="bar-level-1" style="width: 100%">
                                        <div class="bar-level-2" style="width: 32%">
                                            <div class="bar-level-3" style="width: 16%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-box">
                    <div class="project-head">
                        <div class="project-title"><h5>New Hiring</h5></div>
                        <div class="project-users">
                            <div class="avatar"><img alt="" src="img/avatar2.jpg"></div>
                            <div class="avatar"><img alt="" src="img/avatar3.jpg"></div>
                            <div class="avatar"><img alt="" src="img/avatar1.jpg"></div>
                            <div class="avatar"><img alt="" src="img/avatar5.jpg"></div>
                            <div class="more">+ 5 More</div>
                        </div>
                    </div>
                    <div class="project-info">
                        <div class="row align-items-center">
                            <div class="col-sm-5">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="el-tablo highlight">
                                            <div class="label">Open tasks</div>
                                            <div class="value">32</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="el-tablo highlight">
                                            <div class="label">Contributors</div>
                                            <div class="value">17</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 offset-sm-2">
                                <div class="os-progress-bar primary">
                                    <div class="bar-labels">
                                        <div class="bar-label-left"><span>Progress</span><span
                                                    class="positive">+10</span></div>
                                        <div class="bar-label-right"><span
                                                    class="info">85/100</span></div>
                                    </div>
                                    <div class="bar-level-1" style="width: 100%">
                                        <div class="bar-level-2" style="width: 85%">
                                            <div class="bar-level-3" style="width: 42%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--END - Projects list--></div>
    </div>
    <div class="col-lg-5 b-l-lg">
        <div class="padded-lg"><!--START - Projects Statistics-->
            <div class="element-wrapper">
                <div class="element-actions">
                    <form class="form-inline justify-content-sm-end"><select
                                class="form-control form-control-sm rounded">
                            <option value="Pending">Today</option>
                            <option value="Active">Last Week</option>
                            <option value="Cancelled">Last 30 Days</option>
                        </select></form>
                </div>
                <h6 class="element-header">Project Statistics</h6>
                <div class="element-box">
                    <div class="padded m-b">
                        <div class="centered-header"><h6>Period Statistics</h6></div>
                        <div class="row">
                            <div class="col-6 b-r b-b">
                                <div class="el-tablo centered padded-v-big highlight bigger">
                                    <div class="label">Users</div>
                                    <div class="value">24</div>
                                </div>
                            </div>
                            <div class="col-6 b-b">
                                <div class="el-tablo centered padded-v-big highlight bigger">
                                    <div class="label">Tasks</div>
                                    <div class="value">251</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="padded m-b">
                        <div class="centered-header"><h6>Completions</h6></div>
                        <div class="os-progress-bar primary">
                            <div class="bar-labels">
                                <div class="bar-label-left"><span>Progress</span><span
                                            class="positive">+12</span></div>
                                <div class="bar-label-right"><span class="info">72/100</span></div>
                            </div>
                            <div class="bar-level-1" style="width: 100%">
                                <div class="bar-level-2" style="width: 72%">
                                    <div class="bar-level-3" style="width: 25%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="os-progress-bar primary">
                            <div class="bar-labels">
                                <div class="bar-label-left"><span>Progress</span><span
                                            class="negative">-5</span></div>
                                <div class="bar-label-right"><span class="info">54/100</span></div>
                            </div>
                            <div class="bar-level-1" style="width: 100%">
                                <div class="bar-level-2" style="width: 54%">
                                    <div class="bar-level-3" style="width: 25%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="os-progress-bar primary">
                            <div class="bar-labels">
                                <div class="bar-label-left"><span>Progress</span><span
                                            class="positive">+5</span></div>
                                <div class="bar-label-right"><span class="info">86/100</span></div>
                            </div>
                            <div class="bar-level-1" style="width: 100%">
                                <div class="bar-level-2" style="width: 86%">
                                    <div class="bar-level-3" style="width: 25%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="padded">
                        <div class="centered-header"><h6>Tasks Closed</h6></div>
                        <div class="el-chart-w">
                            <canvas height="130" id="liteLineChart" width="300"></canvas>
                        </div>
                    </div>
                </div>
            </div><!--END - Projects Statistics--></div>
    </div>
@endsection
