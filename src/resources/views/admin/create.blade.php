@extends('core::admin.master')

@section('title', __('roles::global.New'))

@section('content')

    @include('core::admin._button-back', ['module' => 'roles'])
    <h1>
        @lang('roles::global.New')
    </h1>

    {!! BootForm::open()->action(route('admin::index-roles'))->multipart()->role('form') !!}
        @include('roles::admin._form')
    {!! BootForm::close() !!}

@endsection
