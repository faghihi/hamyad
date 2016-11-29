@extends('backpack::layout')

@section('header')
    <section class="content-header" style="direction: rtl !important;">
        <h1>
            {{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
        </h1>
        <h1>
            <ol class="breadcrumb" style="direction: ltr !important;">
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
                <li class="active">{{ trans('backpack::base.dashboard') }}</li>
            </ol>
        </h1>

        <br />


    </section>
@endsection


@section('content')
    <div class="row" style="direction: rtl !important;">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">{{ trans('backpack::base.login_status') }}</div>
                </div>

                <div class="box-body">{{ trans('backpack::base.logged_in') }}</div>
            </div>
        </div>
    </div>
@endsection
