@php
    use Illuminate\Support\Facades\Route;
    $configData = MaterializeTemplate::appClasses();
    $customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/blankLayout')

@section('title', 'Register Pages')

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

            <!-- /Left Text -->
            <div
                class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center justify-content-center p-12 pb-2">
                <img
                    src="{{asset('assets/img/illustrations/auth-register-illustration-'.$configData['style'].'.png') }}"
                    class="auth-cover-illustration w-100"
                    alt="auth-illustration"
                    data-app-light-img="illustrations/auth-register-illustration-light.png"
                    data-app-dark-img="illustrations/auth-register-illustration-dark.png" />
                <img
                    src="{{asset('assets/img/illustrations/auth-cover-register-mask-'.$configData['style'].'.png') }}"
                    class="authentication-image"
                    alt="mask"
                    data-app-light-img="illustrations/auth-cover-register-mask-light.png"
                    data-app-dark-img="illustrations/auth-cover-register-mask-dark.png" />
            </div>
            <!-- /Left Text -->

            <!-- Register -->
            <div
                class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg position-relative py-sm-12 px-12 py-6">
                <div
                    class="w-px-400 mx-auto pt-5 pt-lg-0">
                    <h4 class="mb-1">
                        A
                        aventura
                        começa
                        aqui
                        🚀</h4>
                    <p class="mb-5">
                        Torne
                        o
                        engajamento
                        fácil
                        e
                        divertido!</p>

                    <form
                        id="formAuthentication"
                        class="mb-5"
                        action="{{ route('register') }}"
                        method="POST">
                        @csrf
                        <div
                            class="form-floating form-floating-outline mb-5">
                            <input
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                id="username"
                                name="name"
                                placeholder="johndoe"
                                autofocus
                                value="{{ old('name') }}">
                            <label
                                for="username">Nome
                                completo</label>
                            @error('name')
                            <span
                                class="invalid-feedback"
                                role="alert">
                <span
                    class="fw-medium">{{ $message }}</span>
              </span>
                            @enderror
                        </div>
                        <div
                            class="form-floating form-floating-outline mb-5">
                            <input
                                type="text"
                                class="form-control @error('email') is-invalid @enderror"
                                id="email"
                                name="email"
                                placeholder="john@example.com"
                                value="{{ old('email') }}">
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
                        <div
                            class="mb-5 form-password-toggle">
                            <div
                                class="input-group input-group-merge">
                                <div
                                    class="form-floating form-floating-outline">
                                    <input
                                        type="password"
                                        id="password-confirm"
                                        class="form-control"
                                        name="password_confirmation"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <label
                                        for="password-confirm">Confirmar
                                        Senha</label>
                                </div>
                                <span
                                    class="input-group-text cursor-pointer"><i
                                        class="ri-eye-off-line"></i></span>
                            </div>
                        </div>
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div
                                class="mb-5">
                                <div
                                    class="form-check mt-2 @error('terms') is-invalid @enderror">
                                    <input
                                        class="form-check-input @error('terms') is-invalid @enderror"
                                        type="checkbox"
                                        id="terms"
                                        name="terms" />
                                    <label
                                        class="form-check-label"
                                        for="terms">
                                        Eu
                                        concordo
                                        com
                                        <a href="{{ route('policy.show') }}"
                                           target="_blank">política
                                            de
                                            privacidade</a>
                                        &
                                        <a href="{{ route('terms.show') }}"
                                           target="_blank">termos
                                            e
                                            condições</a>
                                    </label>
                                </div>
                                @error('terms')
                                <div
                                    class="invalid-feedback"
                                    role="alert">
                                    <span
                                        class="fw-medium">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        @endif
                        <button
                            type="submit"
                            class="btn btn-primary d-grid w-100">
                            Cadastrar-se
                        </button>
                    </form>

                    <p class="text-center">
                        <span>Já tem uma conta?</span>
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}">
                                <span>Entre aqui</span>
                            </a>
                        @endif
                    </p>

                    <div
                        class="divider my-5">
                        <div
                            class="divider-text">
                            ou
                        </div>
                    </div>

                    <div
                        class="d-flex justify-content-center gap-2">
                        <a href="javascript:;"
                           class="btn btn-icon rounded-circle btn-text-facebook">
                            <i class="tf-icons ri-facebook-fill"></i>
                        </a>

                        <a href="javascript:;"
                           class="btn btn-icon rounded-circle btn-text-twitter">
                            <i class="tf-icons ri-twitter-fill"></i>
                        </a>

                        <a href="javascript:;"
                           class="btn btn-icon rounded-circle btn-text-github">
                            <i class="tf-icons ri-github-fill"></i>
                        </a>

                        <a href="javascript:;"
                           class="btn btn-icon rounded-circle btn-text-google-plus">
                            <i class="tf-icons ri-google-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
@endsection
