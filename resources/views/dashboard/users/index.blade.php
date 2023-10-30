@extends('dashboard.layout.layout')

@section('title' , trans('messages.users') )

@section('page_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/'.auth()->user()->lang.'/css/plugins/forms/form-validation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/'.auth()->user()->lang.'/css/core/menu/menu-types/vertical-menu.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/'.auth()->user()->lang.'/css/plugins/forms/pickers/form-flat-pickr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/'.auth()->user()->lang.'/css/plugins/forms/pickers/form-pickadate.min.css') }}">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/pickadate/pickadate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
    <!-- END: Vendor CSS-->


    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/'.auth()->user()->lang.'/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/'.auth()->user()->lang.'/css/plugins/forms/pickers/form-flat-pickr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/'.auth()->user()->lang.'/css/plugins/forms/pickers/form-pickadate.min.css') }}">
    <!-- END: Page CSS-->
@endsection


@section('content')
    @livewire('user-component')
@endsection

@section('vendor_page_scripts')

<script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.time.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/pickers/pickadate/legacy.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>

@endsection

@section('page_scripts')
    <script src="{{ asset('app-assets/js/scripts/forms/pickers/form-pickers.min.js') }}"></script>
@endsection

