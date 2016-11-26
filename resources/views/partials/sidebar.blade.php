@inject('request', 'Illuminate\Http\Request')

<div class="page-sidebar-wrapper">

    <div class="page-sidebar navbar-collapse collapse">

        <ul class="page-sidebar-menu"

            data-keep-expanded="false"

            data-auto-scroll="true"

            data-slide-speed="200">

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">

                <a href="{{ url('/') }}">

                    <i class="fa fa-wrench"></i>

                    <span class="title">Dashboard</span>

                </a>

            </li>



            @if(Auth::user()->role_id == 1)

                <li class="{{ $request->segment(1) == 'roles' ? 'active' : '' }}">

                    <a href="{{ route('roles.index') }}">

                        <i class="fa fa-key"></i>

                        <span class="title">Roles</span>

                    </a>

                </li>

            @endif

            @if(Auth::user()->role_id == 1)

                <li class="{{ $request->segment(1) == 'users' ? 'active' : '' }}">

                    <a href="{{ route('users.index') }}">

                        <i class="fa fa-gears"></i>

                        <span class="title">Users</span>

                    </a>

                </li>

            @endif

            <li class="{{ $request->segment(1) == 'user_actions' ? 'active' : '' }}">

                <a href="{{ route('user_actions.index') }}">

                    <i class="fa fa-gears"></i>

                    <span class="title">User actions</span>

                </a>

            </li>

            <li class="{{ $request->segment(1) == 'admins' ? 'active' : '' }}">

                <a href="{{ route('admins.index') }}">

                    <i class="fa fa-gears"></i>

                    <span class="title">Admin</span>

                </a>

            </li>

            <li class="{{ $request->segment(1) == 'courses' ? 'active' : '' }}">

                <a href="{{ route('courses.index') }}">

                    <i class="fa fa-gears"></i>

                    <span class="title">Course</span>

                </a>

            </li>

            <li class="{{ $request->segment(1) == 'reviews' ? 'active' : '' }}">

                <a href="{{ route('reviews.index') }}">

                    <i class="fa fa-gears"></i>

                    <span class="title">Review</span>

                </a>

            </li>

            <li class="{{ $request->segment(1) == 'tags' ? 'active' : '' }}">

                <a href="{{ route('tags.index') }}">

                    <i class="fa fa-gears"></i>

                    <span class="title">Tag</span>

                </a>

            </li>





            <li>

                <a href="#logout" onclick="$('#logout').submit();">

                    <i class="fa fa-arrow-left"></i>

                    <span class="title">Logout</span>

                </a>

            </li>

        </ul>

    </div>

</div>

{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}

<button type="submit">Logout</button>

{!! Form::close() !!}