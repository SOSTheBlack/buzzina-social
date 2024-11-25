@php
  $customizerHidden = 'customizer-hide';
  $configData = MaterializeTemplate::appClasses();
@endphp

@extends('layouts/blankLayout')

@section('title', 'Coming Soon - Pages')

@section('page-style')
  <!-- Page -->
  @vite('resources/assets/vendor/scss/pages/page-misc.scss')
@endsection

@section('content')
  <!-- We are Coming soon -->
  <div class="misc-wrapper">
    <h4 class="mb-2 mx-2">{{ config('app.name') }} será lançando em breve 🚀</h4>
    <h5 class="mb-6 mx-2">...::: {{ config('variables.templateSuffix') }} :::...</h5>
    <p class="mb-6 mx-2">Estamos criando algo incrível. Por favor, inscreva-se para ser notificado quando estiver pronto!</p>
    <form method="GET" action="{{ url()->route('dashboard.home') }}">
      <div class="mb-0 d-flex gap-4 align-items-center">
        <input type="text" class="form-control form-control-sm" placeholder="Insira seu e-mail" autofocus>
        <button type="submit" class="btn btn-primary">Notificar</button>
      </div>
    </form>
    <div class="d-flex justify-content-center mt-9">
      <img src="{{ asset('assets/img/illustrations/misc-coming-soon-object.png')}}" alt="misc-coming-soon" class="img-fluid misc-object d-none d-lg-inline-block" width="170">
      <img src="{{ asset('assets/img/illustrations/misc-bg-'.$configData['style'].'.png') }}" alt="misc-coming-soon" class="misc-bg d-none d-lg-inline-block" data-app-light-img="illustrations/misc-bg-light.png" data-app-dark-img="illustrations/misc-bg-dark.png">
      <img src="{{ asset('assets/img/illustrations/misc-coming-soon-illustration.png')}}" alt="misc-coming-soon" class="img-fluid z-1" width="190">
    </div>
  </div>
  <!-- /We are Coming soon -->
@endsection
