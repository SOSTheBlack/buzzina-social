@php
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Auth;
    $configData = MaterializeTemplate::appClasses();
    $customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/blankLayout')

@section('title', 'Verify Email')

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
                    src="{{asset('assets/img/illustrations/auth-verify-email-illustration-'.$configData['style'].'.png') }}"
                    class="auth-cover-illustration w-100"
                    alt="auth-illustration"
                    data-app-light-img="illustrations/auth-verify-email-illustration-light.png"
                    data-app-dark-img="illustrations/auth-verify-email-illustration-dark.png" />
                <img
                    src="{{asset('assets/img/illustrations/auth-cover-login-mask-'.$configData['style'].'.png') }}"
                    class="authentication-image"
                    alt="mask"
                    data-app-light-img="illustrations/auth-cover-login-mask-light.png"
                    data-app-dark-img="illustrations/auth-cover-login-mask-dark.png" />
            </div>
            <!-- /Left Section -->

            <!--  Verify email -->
            <div
                class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg position-relative py-sm-12 px-12 py-6">
                <div
                    class="w-px-400 mx-auto pt-5 pt-lg-0">
                    <h4 class="mb-1">
                        Verifique
                        seu
                        e-mail
                        ✉️</h4>

                    @if (session('status') == 'verification-link-sent')
                        <div
                            class="alert alert-success"
                            role="alert">
                            <div
                                class="alert-body">
                                Um
                                novo
                                link
                                de
                                verificação
                                foi
                                enviado
                                para
                                o
                                endereço
                                de
                                e-mail
                                que
                                você
                                forneceu
                                durante
                                o
                                registro.
                            </div>
                        </div>
                    @endif
                    <p class="text-start mb-0">
                        Link
                        de
                        ativação
                        da
                        conta
                        enviado
                        para
                        seu
                        endereço
                        de
                        e-mail:
                        <span
                            class="h6">{{Auth::user()->email}}</span>
                        Siga
                        o
                        link
                        interno
                        para
                        continuar.
                    </p>
                    <div
                        class="mt-5 d-flex flex-column gap-2">
                        <form
                            method="POST"
                            action="{{ route('verification.send') }}">
                            @csrf
                            <button
                                type="submit"
                                class="w-100 btn btn-label-secondary">
                                clique
                                aqui
                                para
                                solicitar
                                outro
                            </button>
                        </form>

                        <form
                            method="POST"
                            action="{{route('logout')}}">
                            @csrf
                            <button
                                type="submit"
                                class="w-100 btn btn-danger">
                                Sair
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- / Verify email -->
        </div>
    </div>
@endsection
