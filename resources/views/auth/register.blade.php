@extends('layouts.web.app')
@php
    $company = getCompanySetting();
    $title = 'Register';
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
                                <p class="mb-4">Daftar BPJSTK</p>
                            </h3>
                            <div class="row g-3">
                                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group my-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="name"
                                                name="name" value="{{ old('name') }}" placeholder="Nama Lengkap"
                                                required>
                                            <label for="name">Nama Lengkap</label>
                                        </div>
                                        @error('name')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group my-3">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" id="email"
                                                name="email" value="{{ old('email') }}" placeholder="Email" required>
                                            <label for="email">Email</label>
                                        </div>
                                        @error('email')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group my-3">
                                        <div class="form-floating">
                                            <input type="password" class="form-control border-0" id="password"
                                                name="password" value="{{ old('password') }}" placeholder="Password"
                                                required>
                                            <label for="password">Password</label>
                                        </div>
                                        @error('password')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group my-3">
                                        <div class="form-floating">
                                            <input required type="date" class="form-control border-0" id="ttl"
                                                name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                                                placeholder="Tanggal">
                                            <label for="ttl">Tanggal Lahir</label>
                                        </div>
                                        @error('tanggal_lahir')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group my-3">
                                        <div class="form-floating">
                                            <input required type="text" class="form-control border-0" id="nik"
                                                name="nik" value="{{ old('nik') }}" placeholder="NIK">
                                            <label for="nik">NIK</label>
                                        </div>
                                        @error('nik')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group my-3">
                                        <div class="form-floating">
                                            <input required type="text" class="form-control border-0" id="jenis"
                                                name="jenis_usaha" value="{{ old('jenis_usaha') }}"
                                                placeholder="Jenis Usaha">
                                            <label for="jenis">Jenis Usaha</label>
                                        </div>
                                        @error('jenis_usaha')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group my-3">
                                        <div class="form-floating">
                                            <select required class="form-select form-select-sm" name="program"
                                                value="{{ old('program') }}" aria-label=".form-select-lg example">
                                                <option value="1">JKK JKM</option>
                                                <option value="2">JKK JKM JHT</option>
                                            </select>
                                            <label for="program">Program</label>
                                        </div>
                                        @error('program')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group my-3">
                                        <div class="form-floating">
                                            <select required class="form-select form-select-sm" name="periode"
                                                value="{{ old('periode') }}" aria-label=".form-select-lg example"
                                                id="periode">
                                                <option value="1">2 (bulan)</option>
                                                <option value="2">3 (bulan)</option>
                                                <option value="3">6 (bulan)</option>
                                                <option value="4">12 (bulan)</option>
                                            </select>
                                            <label for="periode">Periode Bulan</label>
                                        </div>
                                        @error('periode')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="d-flex mt-5">
                                        <input class="btn btn-primary w-100 py-3" value="Register" type="submit"></input>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="position-relative rounded w-100 h-100">
                            <img class="img-fluid" alt="" src="{{ url('assets/landing/img/bayar.jpg') }}"
                                style="min-height: 400px; border:0;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
