@extends('layouts.web.app')
@php
    $company = getCompanySetting();
    $title = 'Login';
@endphp
@section('content')
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <h3>
                                <p class="mb-4">Login</p>
                            </h3>
                            <form action="{{ url('login') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    @error('email')
                                        <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                    @error('password')
                                        <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="col-sm-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" id="email"
                                                placeholder="email" name="email">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control border-0" id="password"
                                                placeholder="Password" name="password">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Log in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <form action="regis.html">
                                    <div class="row g-3">
                                        <div class="col-sm-12">
                                            <p>Belum Mempunyai Akun? Silahkan mendaftar dan jadilah peserta program BPJSTK
                                                Preneur
                                            </p>
                                        </div>
                                        <div class="col-12">
                                            <a class="btn btn-primary w-100 py-3" href="{{ url('register') }}">Daftar</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
