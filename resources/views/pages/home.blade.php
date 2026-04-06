@extends('layouts.app')

@section('konten')
@php
  use App\Models\CompanyProfile;
  $config = CompanyProfile::first();
@endphp

<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="row g-0">
            <!-- Gambar Profil -->
            <div class="col-md-5 text-center p-4">
                <img 
                    loading="lazy" 
                    decoding="async"
                    src="{{ asset('storage/' . $config->image) }}" 
                    class="img-fluid rounded-4 shadow-lg mb-3" 
                    style="max-height: 300px; object-fit: cover;"
                    alt="Company Image"
                >
                <h5 class="text-primary">{{ $data->name }}</h5>
            </div>

            <!-- Konten Info -->
            <div class="col-md-7">
                <div class="card-body p-4">
                    <h3 class="card-title mb-3 text-primary fw-bold">{{ $data->name }}</h3>
                    <p class="text-muted mb-4">{{ $data->description }}</p>
                    
                    <hr>

                    <div class="row mb-3">
                        <div class="col-sm-6 mb-2">
                            <h6 class="fw-bold"><i class="bi bi-geo-alt-fill me-2"></i>Alamat</h6>
                            <p class="mb-0">{{ $data->address }}</p>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <h6 class="fw-bold"><i class="bi bi-telephone-fill me-2"></i>Telepon</h6>
                            <p class="mb-0">{{ $data->phone }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-6 mb-2">
                            <h6 class="fw-bold"><i class="bi bi-envelope-fill me-2"></i>Email</h6>
                            <p class="mb-0">{{ $data->email }}</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection