@php
    use Illuminate\Support\Facades\Route;
    $configData = MaterializeTemplate::appClasses();
    $customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/blankLayout')

@section('title', 'Reset Password')

@section('page-style')
    {{-- Page Css files --}}
    @vite('resources/assets/vendor/scss/pages/page-auth.scss')
@endsection

@section('content')
    <div
        class="position-relative">
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
                        src="{{asset('assets/img/illustrations/auth-reset-password-illustration-'.$configData['style'].'.png') }}"
                        class="auth-cover-illustration w-100"
                        alt="auth-illustration"
                        data-app-light-img="illustrations/auth-reset-password-illustration-light.png"
                        data-app-dark-img="illustrations/auth-reset-password-illustration-dark.png" />
                    <img
                        src="{{asset('assets/img/illustrations/auth-cover-reset-password-mask-'.$configData['style'].'.png') }}"
                        class="authentication-image"
                        alt="mask"
                        data-app-light-img="illustrations/auth-cover-reset-password-mask-light.png"
                        data-app-dark-img="illustrations/auth-cover-reset-password-mask-dark.png" />
                </div>
                <!-- /Left Section -->

                <!-- Reset Password -->
                <div
                    class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg position-relative py-sm-12 px-12 py-6">
                    <div
                        class="w-px-400 mx-auto pt-5 pt-lg-0">
                        <h4 class="mb-1">
                            Redefinir
                            senha
                            🔒</h4>
                        <p class="mb-5">
                            Sua
                            nova
                            senha
                            deve
                            ser
                            diferente
                            das
                            senhas
                            usadas
                            anteriormente</p>
                        <form
                            id="formAuthentication"
                            class="mb-5"
                            action="{{ route('password.update') }}"
                            method="POST">
                            @csrf
                            <input
                                type="hidden"
                                name="token"
                                value="{{ $request->route('token') }}">

                            <div
                                class="form-floating form-floating-outline mb-5">
                                <input
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="email"
                                    name="email"
                                    placeholder="john@example.com"
                                    value="{{Request()->email}}"
                                    readonly />
                                <label
                                    for="email">E-mail</label>
                                @error('email')
                                <span
                                    class="invalid-feedback"
                                    role="alert">
                <span
                    class="fw-medium">{{ $message }}</span>
              </span>
                                @enderror
                            </div>
                            <div
                                class="mb-5 form-password-toggle">
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
                                            aria-describedby="password"
                                            autofocus />
                                        <label
                                            for="password">Nova
                                            Senha</label>
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
                            <div
                                class="mb-5 form-password-toggle">
                                <div
                                    class="input-group input-group-merge">
                                    <div
                                        class="form-floating form-floating-outline">
                                        <input
                                            type="password"
                                            id="confirm-password"
                                            class="form-control"
                                            name="password_confirmation"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                        <label
                                            for="confirm-password">Confirmar
                                            Senha</label>
                                    </div>
                                    <span
                                        class="input-group-text cursor-pointer"><i
                                            class="ri-eye-off-line"></i></span>
                                </div>
                            </div>
                            <button
                                class="btn btn-primary d-grid w-100 mb-5">
                                Definir
                                nova
                                senha
                            </button>
                            <div
                                class="text-center">
                                @if (Route::has('login'))
                                    <a href="{{ route('login') }}"
                                       class="d-flex align-items-center justify-content-center">
                                        <i class="ri-arrow-left-s-line scaleX-n1-rtl ri-20px me-1_5"></i>
                                        Voltar
                                        para
                                        login
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Reset Password -->
            </div>
        </div>
    </div>
@endsection
