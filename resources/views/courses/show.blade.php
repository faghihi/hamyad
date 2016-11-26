@extends('layouts.app')



@section('content')

    <h3 class="page-title">Course</h3>



    <div class="panel panel-default">

        <div class="panel-heading">

            View

        </div>



        <div class="panel-body">

            <div class="row">

                <div class="col-md-6">

                    <table class="table table-bordered table-striped">

                        <tr><th>Name</th>

                            <td>{{ $course->name }}</td></tr><tr><th>Course Rate</th>

                            <td>{{ $course->course_rate }}</td></tr><tr><th>Description</th>

                            <td>{{ $course->description }}</td></tr><tr><th>Link</th>

                            <td>{{ $course->link }}</td></tr><tr><th>Section</th>

                            <td>{{ $course->section }}</td></tr>

                    </table>

                </div>

            </div>



            <p>&nbsp;</p>



            <a href="{{ route('courses.index') }}" class="btn btn-default">Back to list</a>

        </div>

    </div>

@stop