@extends('layouts.app')



@section('content')

    <h3 class="page-title">Tag</h3>



    <p>

        <a href="{{ route('tags.create') }}" class="btn btn-success">Add new</a>

    </p>



    <div class="panel panel-default">

        <div class="panel-heading">

            List

        </div>



        <div class="panel-body">

            <table class="table table-bordered table-striped {{ count($tags) > 0 ? 'datatable' : '' }} dt-select">

                <thead>

                <tr>

                    <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>

                    <th>Tag Name</th>

                    <th>&nbsp;</th>

                </tr>

                </thead>



                <tbody>

                @if (count($tags) > 0)

                    @foreach ($tags as $tag)

                        <tr data-entry-id="{{ $tag->id }}">

                            <td></td>

                            <td>{{ $tag->tag_name }}</td>

                            <td><a href="{{ route('tags.show',[$tag->id]) }}" class="btn btn-xs btn-primary">View</a><a href="{{ route('tags.edit',[$tag->id]) }}" class="btn btn-xs btn-info">Edit</a>{!! Form::open(array(

                'style' => 'display: inline-block;',

                'method' => 'DELETE',

                'onsubmit' => "return confirm('".trans("Are you sure?")."');",

                'route' => ['tags.destroy', $tag->id])) !!}

                                {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}

                                {!! Form::close() !!}</td>

                        </tr>

                    @endforeach

                @else

                    <tr>

                        <td colspan="3">No entries in table</td>

                    </tr>

                @endif

                </tbody>

            </table>

        </div>

    </div>

@stop



@section('javascript')

    <script>

        window.route_mass_crud_entries_destroy = '{{ route('tags.mass_destroy') }}';

    </script>

@endsection