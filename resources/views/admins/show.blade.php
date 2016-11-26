@extends('layouts.app')



@section('content')

    <h3 class="page-title">Admin</h3>



    <div class="panel panel-default">

        <div class="panel-heading">

            View

        </div>



        <div class="panel-body">

            <div class="row">

                <div class="col-md-6">

                    <table class="table table-bordered table-striped">

                        <tr><th>Name</th>

                            <td>{{ $admin->name }}</td></tr><tr><th>Email</th>

                            <td>{{ $admin->email }}</td></tr><tr><th>Password</th>

                            <td>---</td></tr><tr><th>Remember Token</th>

                            <td>{{ $admin->remember_token }}</td></tr><tr><th>Role</th>

                            <td>{{ $admin->role->title or '' }}</td></tr>

                    </table>

                </div>

            </div>



            <p>&nbsp;</p>



            <a href="{{ route('admins.index') }}" class="btn btn-default">Back to list</a>

        </div>

    </div>

@stop