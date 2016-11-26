@extends('layouts.app')



@section('content')

    <h3 class="page-title">Admin</h3>



    <p>

        <a href="{{ route('admins.create') }}" class="btn btn-success">Add new</a>

    </p>



    <div class="panel panel-default">

        <div class="panel-heading">

            List

        </div>



        <div class="panel-body">

            <table class="table table-bordered table-striped {{ count($admins) > 0 ? 'datatable' : '' }} dt-select">

                <thead>

                <tr>

                    <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>

                    <th>Name</th>

                    <th>Email</th>

                    <th>Password</th>

                    <th>Remember Token</th>

                    <th>Role</th>

                    <th>&nbsp;</th>

                </tr>

                </thead>



                <tbody>

                @if (count($admins) > 0)

                    @foreach ($admins as $admin)

                        <tr data-entry-id="{{ $admin->id }}">

                            <td></td>

                            <td>{{ $admin->name }}</td>

                            <td>{{ $admin->email }}</td>

                            <td>---</td>

                            <td>{{ $admin->remember_token }}</td>

                            <td>{{ $admin->role->title or '' }}</td>

                            <td><a href="{{ route('admins.show',[$admin->id]) }}" class="btn btn-xs btn-primary">View</a><a href="{{ route('admins.edit',[$admin->id]) }}" class="btn btn-xs btn-info">Edit</a>{!! Form::open(array(

                'style' => 'display: inline-block;',

                'method' => 'DELETE',

                'onsubmit' => "return confirm('".trans("Are you sure?")."');",

                'route' => ['admins.destroy', $admin->id])) !!}

                                {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}

                                {!! Form::close() !!}</td>

                        </tr>

                    @endforeach

                @else

                    <tr>

                        <td colspan="7">No entries in table</td>

                    </tr>

                @endif

                </tbody>

            </table>

        </div>

    </div>

@stop



@section('javascript')

    <script>

        window.route_mass_crud_entries_destroy = '{{ route('admins.mass_destroy') }}';

    </script>

@endsection