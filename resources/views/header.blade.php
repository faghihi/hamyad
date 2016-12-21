
    <!-- start Header -->

        <!-- start Navbar (Header) -->
        <nav class="navbar navbar-primary navbar-fixed-top navbar-sticky-function">

            <div id="top-header">

                <div class="container">

                    <div class="row">
                        <div class="col-sm-offset-6 col-sm-6">
                            @if(! Auth::check())
                            <div class="top-header-widget">
                                <a href="/login" class="btn-ajax-login">
                                    <i class="ion-log-in mr-3"></i> ورود
                                </a>
                            </div>
                            <div class="top-header-widget ">
                                <a href="/register" class="btn-ajax-register">
                                    <i class="ion-person-add mr-3"></i> ثبت نام
                                </a>
                            </div>
                            @else
                                <div class="top-header-widget ">
                                    {{Auth::user()->name}}
                                        <span>خوش آمدی</span>
                                </div>
                                <div class="top-header-widget hidden-xs">
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="ion-log-out mr-3"></i> خروج
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            @endif
                                {{--@if(!isset($user) || $user=='0')--}}
                            {{--<div class="top-header-widget">--}}
                                {{--<a href="/login" class="btn-ajax-login">--}}
                                    {{--<i class="ion-log-in mr-3"></i> ورود--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--<div class="top-header-widget ">--}}
                                {{--<a href="/register" class="btn-ajax-register">--}}
                                    {{--<i class="ion-person-add mr-3"></i> ثبت نام--}}
                                    {{--<i class="ion-person-add mr-3"></i> {{$user}}--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--@else--}}
                                {{--<div class="top-header-widget ">--}}
                                    {{--{{$user}}--}}
                                        {{--<span>خوش آمدی</span>--}}
                                {{--</div>--}}
                                {{--<div class="top-header-widget hidden-xs">--}}
                                    {{--<a href="#">--}}
                                        {{--<i class="ion-log-out mr-3"></i> خروج--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--@endif--}}


                        </div>
                    </div>

                </div>

            </div>

            <div class="container">

                <div class="navbar-header">
                    <a class="navbar-brand" href="/"><i class="education-icon-book7"></i>هم<strong class="uppercase">یاد</strong></a>
                </div>

                <div id="navbar" class="collapse navbar-collapse navbar-arrow">

                    <ul class="nav navbar-nav navbar-right" id="responsive-menu">

                        <li>
                            <a href="/">خانه</a>
                        </li>
                        <li>
                            <a href="/login">بخش کاربری</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">آموزش </a>
                            <ul>
                                <li><a href="/courses">دوره ها</a></li>
                                <li><a href="/packs">بسته ها</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/instructor">اساتید</a>
                        </li>
                        <li>
                            <a href="blog.html">بلاگ هم یاد</a>
                        </li>
                        <li><a href="/contactUs">ارتباط با ما </a></li>
                        <li>
                            <a href="/FAQ">سوالات متداول</a>
                        </li>

                    </ul>


                </div>

            </div>

            <div id="slicknav-mobile"></div>

        </nav>
        <!-- end Navbar (Header) -->

    <!-- end Header -->

