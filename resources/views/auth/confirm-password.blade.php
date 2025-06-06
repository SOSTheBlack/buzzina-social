@php
    use Illuminate\Support\Facades\Route;
    $configData = MaterializeTemplate::appClasses();
    $customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/blankLayout')

@section('title', 'Confirm Password')

@section('page-style')
    {{-- Page Css files --}}
    @vite('resources/assets/vendor/scss/pages/page-auth.scss')
@endsection

@section('content')
    <div
        class="authentication-wrapper authentication-cover">
        <!-- Logo -->
        <a href="{{url('/')}}"
           class="auth-cover-brand d-flex align-items-center gap-2">
            <span
                class="app-brand-logo demo">@include('_partials.macros',["width"=>25,"withbg"=>'var(--bs-primary)'])</span>
            <span
                class="app-brand-text demo text-heading fw-semibold">{{config('app.name')}}</span>
        </a>
        <!-- /Logo -->
        <div
            class="authentication-inner row m-0">

            <!-- /Left Section -->
            <div
                class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center justify-content-center p-12 pb-2">
                <img
                    src="{{asset('assets/img/illustrations/auth-forgot-password-illustration-'.$configData['style'].'.png') }}"
                    class="auth-cover-illustration w-100"
                    alt="auth-illustration"
                    data-app-light-img="illustrations/auth-forgot-password-illustration-light.png"
                    data-app-dark-img="illustrations/auth-forgot-password-illustration-dark.png" />
                <img
                    src="{{asset('assets/img/illustrations/auth-cover-forgot-password-mask-'.$configData['style'].'.png') }}"
                    class="authentication-image"
                    alt="mask"
                    data-app-light-img="illustrations/auth-cover-forgot-password-mask-light.png"
                    data-app-dark-img="illustrations/auth-cover-forgot-password-mask-dark.png" />
            </div>
            <!-- /Left Section -->

            <!-- Confirm Password -->
            <div
                class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-12 p-6">
                <div
                    class="w-px-400 mx-auto">
                    <h4 class="mb-1">
                        Confirme
                        sua
                        senha
                        🔒</h4>
                    <p class="mb-5">
                        Por
                        favor
                        confirme
                        sua
                        senha
                        antes
                        de
                        continuar.</p>
                    <form
                        id="twoStepsForm"
                        class="mb-5"
                        action="{{ route('password.confirm') }}"
                        method="POST">
                        @csrf
                        <div
                            class="mb-5">
                            <div
                                class="form-password-toggle">
                                <div
                                    class="input-group input-group-merge @error('password') is-invalid @enderror">
                                    <div
                                        class="form-floating form-floating-outline">
                                        <input
                                            type="password"
                                            id="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                        <label
                                            for="password">Senha</label>
                                    </div>
                                    <span
                                        class="input-group-text cursor-pointer"><i
                                            class="ri-eye-off-line"></i></span>
                                </div>
                                @error('password')
                                <span
                                    class="invalid-feedback"
                                    role="alert">
                  <span
                      class="fw-medium">{{ $message }}</span>
                </span>
                                @enderror
                            </div>
                        </div>
                        <button
                            class="btn btn-primary d-grid w-100">
                            Confirmar
                            Senha
                        </button>
                    </form>
                </div>
            </div>
            <!-- /Confirm Password -->
        </div>
    </div>
@endsection
