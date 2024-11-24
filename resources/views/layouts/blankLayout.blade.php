@isset($pageConfigs)
    {!! MaterializeTemplate::updatePageConfig($pageConfigs) !!}
@endisset
@php
    $configData = MaterializeTemplate::appClasses();

    /* Display elements */
    $customizerHidden = ($customizerHidden ?? '');

@endphp

@extends('layouts/commonMaster' )

@section('layoutContent')

    <!-- Content -->
    @yield('content')
    <!--/ Content -->

@endsection
