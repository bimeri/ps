@extends('layout.base')

@section('title')
    Admin Dashboard
@endsection

@section('section')
    <div class="row gutters-20">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-green ">
                            <i class="flaticon-classmates text-green"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Students</div>
                            <div class="item-number"><span class="counter" data-num="{{\App\Student::count()}}">{{\App\Student::count()}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-blue">
                            <i class="flaticon-multiple-users-silhouette text-blue"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Teachers</div>
                            <div class="item-number"><span class="counter" data-num="{{\App\Role::whereSlug('teacher')->first()->users()->count()}}">{{\App\Role::whereSlug('teacher')->first()->users()->count()}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-yellow">
                            <i class="flaticon-couple text-orange"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Parents</div>
                            <div class="item-number"><span class="counter" data-num="{{\App\Role::whereSlug('parent')->first()->users()->count()}}">{{\App\Role::whereSlug('parent')->first()->users()->count()}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-red">
                            <i class="flaticon-money text-red"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Roles</div>
                            <div class="item-number"><span class="counter" data-num="{{\App\Role::count()}}">{{\App\Role::count()}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard summery End Here -->
    <!-- Dashboard Content Start Here -->
    <div class="row gutters-20">
        <div class="col-12 col-xl-8 col-6-xxxl">
            <div class="card dashboard-card-one pd-b-20">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Earnings</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-times text-orange-red"></i>Close</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                            </div>
                        </div>
                    </div>
                    <div class="earning-report">
                        <div class="item-content">
                            <div class="single-item pseudo-bg-blue">
                                <h4>Total Collections</h4>
                                <span>75,000</span>
                            </div>
                            <div class="single-item pseudo-bg-red">
                                <h4>Fees Collection</h4>
                                <span>15,000</span>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a class="date-dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-expanded="false">Jan 20, 2019</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Jan 20, 2019</a>
                                <a class="dropdown-item" href="#">Jan 20, 2021</a>
                                <a class="dropdown-item" href="#">Jan 20, 2020</a>
                            </div>
                        </div>
                    </div>
                    <div class="earning-chart-wrap">
                        <canvas id="earning-line-chart" width="660" height="320"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 col-3-xxxl">
            <div class="card dashboard-card-two pd-b-20">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Expenses</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-times text-orange-red"></i>Close</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                            </div>
                        </div>
                    </div>
                    <div class="expense-report">
                        <div class="monthly-expense pseudo-bg-Aquamarine">
                            <div class="expense-date">Jan 2019</div>
                            <div class="expense-amount"><span>$</span> 15,000</div>
                        </div>
                        <div class="monthly-expense pseudo-bg-blue">
                            <div class="expense-date">Feb 2019</div>
                            <div class="expense-amount"><span>$</span> 10,000</div>
                        </div>
                        <div class="monthly-expense pseudo-bg-yellow">
                            <div class="expense-date">Mar 2019</div>
                            <div class="expense-amount"><span>$</span> 8,000</div>
                        </div>
                    </div>
                    <div class="expense-chart-wrap">
                        <canvas id="expense-bar-chart" width="100" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 col-3-xxxl">
            <div class="card dashboard-card-three pd-b-20">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Students</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-times text-orange-red"></i>Close</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                            </div>
                        </div>
                    </div>
                    <div class="doughnut-chart-wrap">
                        <canvas id="student-doughnut-chart" width="100" height="300"></canvas>
                    </div>
                    <div class="student-report">
                        <div class="student-count pseudo-bg-blue">
                            <h4 class="item-title">Female Students</h4>
                            <div class="item-number">{{\App\Student::where('gender','female')->get()->count()}}</div>
                        </div>
                        <div class="student-count pseudo-bg-yellow">
                            <h4 class="item-title">Male Students</h4>
                            <div class="item-number">{{\App\Student::where('gender','male')->get()->count()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-6 col-4-xxxl">
            <div class="card dashboard-card-six pd-b-20">
                <div class="card-body">
                    <div class="heading-layout1 mg-b-17">
                        <div class="item-title">
                            <h3>Notice Board</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-times text-orange-red"></i>Close</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                            </div>
                        </div>
                    </div>
                    <div class="notice-box-wrap">

                        @foreach(request()->user()->receivedMessages() as $notice)
                            <div class="notice-list">
                                <div class="post-date bg-skyblue">{{$notice->created_at->format('d F, Y')}}</div>
                                <h6 class="notice-title"><a href="#">{{$notice->content}}</a></h6>
                                <div class="entry-meta"> {{$notice->user->first_name}} {{$notice->user->last_name}} / <span>{{$notice->created_at->diffForHumans()}}</span></div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{asset('assets/js')}}/Chart.min.js"></script>
    <script src="{{asset('assets/js')}}/jquery.counterup.min.js"></script>
    <script src="{{asset('assets/js')}}/moment.min.js"></script>
    <script src="{{asset('assets/js')}}/jquery.waypoints.min.js"></script>
    <script>
        /*-------------------------------------
          Doughnut Chart
      -------------------------------------*/
        if ($("#student-doughnut-chart").length) {

            var doughnutChartData = {
                labels: ["Female Students", "Male Students"],
                datasets: [{
                    backgroundColor: ["#304ffe", "#ffa601"],
                    data: [{{\App\Student::where('gender','female')->get()->count()}}, {{\App\Student::where('gender','male')->get()->count()}}],
                    label: "Total Students"
                }, ]
            };
            var doughnutChartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                cutoutPercentage: 65,
                rotation: -9.4,
                animation: {
                    duration: 2000
                },
                legend: {
                    display: false
                },
                tooltips: {
                    enabled: true
                },
            };
            var studentCanvas = $("#student-doughnut-chart").get(0).getContext("2d");
            var studentChart = new Chart(studentCanvas, {
                type: 'doughnut',
                data: doughnutChartData,
                options: doughnutChartOptions
            });
        }
    </script>
@endsection
