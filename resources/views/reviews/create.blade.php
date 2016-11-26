@extends('layouts.app')



@section('content')

    <h3 class="page-title">Review</h3>

    {!! Form::open(['method' => 'POST', 'route' => ['reviews.store']]) !!}



    <div class="panel panel-default">

        <div class="panel-heading">

            Create

        </div>



        <div class="panel-body">

            <div class="row">

                <div class="col-xs-12 form-group">

                    {!! Form::label('comment', 'Comment', ['class' => 'control-label']) !!}

                    {!! Form::text('comment', old('comment'), ['class' => 'form-control', 'placeholder' => '']) !!}

                    <p class="help-block"></p>

                    @if($errors->has('comment'))

                        <p class="help-block">

                            {{ $errors->first('comment') }}

                        </p>

                    @endif

                </div>

            </div>

            <div class="row">

                <div class="col-xs-12 form-group">

                    {!! Form::label('teacher_rate', 'Teacher Rate', ['class' => 'control-label']) !!}

                    {!! Form::text('teacher_rate', old('teacher_rate'), ['class' => 'form-control', 'placeholder' => '']) !!}

                    <p class="help-block"></p>

                    @if($errors->has('teacher_rate'))

                        <p class="help-block">

                            {{ $errors->first('teacher_rate') }}

                        </p>

                    @endif

                </div>

            </div>

            <div class="row">

                <div class="col-xs-12 form-group">

                    {!! Form::label('video_rate', 'Video Rate', ['class' => 'control-label']) !!}

                    {!! Form::text('video_rate', old('video_rate'), ['class' => 'form-control', 'placeholder' => '']) !!}

                    <p class="help-block"></p>

                    @if($errors->has('video_rate'))

                        <p class="help-block">

                            {{ $errors->first('video_rate') }}

                        </p>

                    @endif

                </div>

            </div>

            <div class="row">

                <div class="col-xs-12 form-group">

                    {!! Form::label('cat_rate', 'Category Rate', ['class' => 'control-label']) !!}

                    {!! Form::text('cat_rate', old('cat_rate'), ['class' => 'form-control', 'placeholder' => '']) !!}

                    <p class="help-block"></p>

                    @if($errors->has('cat_rate'))

                        <p class="help-block">

                            {{ $errors->first('cat_rate') }}

                        </p>

                    @endif

                </div>

            </div>

            <div class="row">

                <div class="col-xs-12 form-group">

                    {!! Form::label('pack_rate', 'Pack Rate', ['class' => 'control-label']) !!}

                    {!! Form::text('pack_rate', old('pack_rate'), ['class' => 'form-control', 'placeholder' => '']) !!}

                    <p class="help-block"></p>

                    @if($errors->has('pack_rate'))

                        <p class="help-block">

                            {{ $errors->first('pack_rate') }}

                        </p>

                    @endif

                </div>

            </div>



        </div>

    </div>



    {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}

    {!! Form::close() !!}

@stop