@extends('layouts.app')



@section('content')

    <h3 class="page-title">Course</h3>

    {!! Form::open(['method' => 'POST', 'route' => ['courses.store']]) !!}



    <div class="panel panel-default">

        <div class="panel-heading">

            Create

        </div>



        <div class="panel-body">

            <div class="row">

                <div class="col-xs-12 form-group">

                    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}

                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}

                    <p class="help-block"></p>

                    @if($errors->has('name'))

                        <p class="help-block">

                            {{ $errors->first('name') }}

                        </p>

                    @endif

                </div>

            </div>

            <div class="row">

                <div class="col-xs-12 form-group">

                    {!! Form::label('course_rate', 'Course Rate', ['class' => 'control-label']) !!}

                    {!! Form::text('course_rate', old('course_rate'), ['class' => 'form-control', 'placeholder' => '']) !!}

                    <p class="help-block"></p>

                    @if($errors->has('course_rate'))

                        <p class="help-block">

                            {{ $errors->first('course_rate') }}

                        </p>

                    @endif

                </div>

            </div>

            <div class="row">

                <div class="col-xs-12 form-group">

                    {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}

                    {!! Form::text('description', old('description'), ['class' => 'form-control', 'placeholder' => '']) !!}

                    <p class="help-block"></p>

                    @if($errors->has('description'))

                        <p class="help-block">

                            {{ $errors->first('description') }}

                        </p>

                    @endif

                </div>

            </div>

            <div class="row">

                <div class="col-xs-12 form-group">

                    {!! Form::label('link', 'Link', ['class' => 'control-label']) !!}

                    {!! Form::text('link', old('link'), ['class' => 'form-control', 'placeholder' => '']) !!}

                    <p class="help-block"></p>

                    @if($errors->has('link'))

                        <p class="help-block">

                            {{ $errors->first('link') }}

                        </p>

                    @endif

                </div>

            </div>

            <div class="row">

                <div class="col-xs-12 form-group">

                    {!! Form::label('section', 'Section', ['class' => 'control-label']) !!}

                    {!! Form::text('section', old('section'), ['class' => 'form-control', 'placeholder' => '']) !!}

                    <p class="help-block"></p>

                    @if($errors->has('section'))

                        <p class="help-block">

                            {{ $errors->first('section') }}

                        </p>

                    @endif

                </div>

            </div>



        </div>

    </div>



    {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}

    {!! Form::close() !!}

@stop