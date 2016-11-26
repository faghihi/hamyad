@extends('layouts.app')



@section('content')

    <h3 class="page-title">Course</h3>



    <p>

        <a href="{{ route('courses.create') }}" class="btn btn-success">Add new</a>

    </p>



    <div class="panel panel-default">

        <div class="panel-heading">

            List

        </div>



        <div class="panel-body">

            <table class="table table-bordered table-striped {{ count($courses) > 0 ? 'datatable' : '' }} dt-select">

                <thead>

                <tr>

                    <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>

                    <th>Name</th>

                    <th>Course Rate</th>

                    <th>Description</th>

                    <th>Link</th>

                    <th>Section</th>

                    <th>&nbsp;</th>

                </tr>

                </thead>



                <tbody>

                @if (count($courses) > 0)

                    @foreach ($courses as $course)

                        <tr data-entry-id="{{ $course->id }}">

                            <td></td>

                            <td>{{ $course->name }}</td>

                            <td>{{ $course->course_rate }}</td>

                            <td>{{ $course->description }}</td>

                            <td>{{ $course->link }}</td>

                            <td>{{ $course->section }}</td>

                            <td><a href="{{ route('courses.show',[$course->id]) }}" class="btn btn-xs btn-primary">View</a><a href="{{ route('courses.edit',[$course->id]) }}" class="btn btn-xs btn-info">Edit</a>{!! Form::open(array(

                'style' => 'display: inline-block;',

                'method' => 'DELETE',

                'onsubmit' => "return confirm('".trans("Are you sure?")."');",

                'route' => ['courses.destroy', $course->id])) !!}

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

        window.route_mass_crud_entries_destroy = '{{ route('courses.mass_destroy') }}';

    </script>

@endsection