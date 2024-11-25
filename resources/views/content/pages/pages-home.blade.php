@php
    $configData = MaterializeTemplate::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
    <h4>
        Home
        Page</h4>
    <p>
        For
        more
        layout
        options
        refer
        <a
            target="_blank"
            rel="noopener noreferrer">documentation</a>.
    </p>
@endsection
