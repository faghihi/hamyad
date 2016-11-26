@extends('layouts.app')



@section('content')

    <h3 class="page-title">Review</h3>



    <div class="panel panel-default">

        <div class="panel-heading">

            View

        </div>



        <div class="panel-body">

            <div class="row">

                <div class="col-md-6">

                    <table class="table table-bordered table-striped">

                        <tr><th>Comment</th>

                            <td>{{ $review->comment }}</td></tr><tr><th>Teacher Rate</th>

                            <td>{{ $review->teacher_rate }}</td></tr><tr><th>Video Rate</th>

                            <td>{{ $review->video_rate }}</td></tr><tr><th>Category Rate</th>

                            <td>{{ $review->cat_rate }}</td></tr><tr><th>Pack Rate</th>

                            <td>{{ $review->pack_rate }}</td></tr>

                    </table>

                </div>

            </div>



            <p>&nbsp;</p>



            <a href="{{ route('reviews.index') }}" class="btn btn-default">Back to list</a>

        </div>

    </div>

@stop