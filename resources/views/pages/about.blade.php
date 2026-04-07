@extends('layouts.app')

@section('konten')
<style>
    body {
        background: #0b0f19;
        font-family: 'Poppins', sans-serif;
        color: #eaeaea;
    }

    .hero {
        text-align: center;
        padding: 60px 20px;
    }

    .hero-title {
        font-size: 2.8rem;
        font-weight: 700;
        background: linear-gradient(90deg, #00f5ff, #4facfe);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-sub {
        color: #aaa;
        max-width: 600px;
        margin: 10px auto 0;
    }

    .glass {
        background: rgba(255,255,255,0.05);
        border-radius: 20px;
        padding: 25px;
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255,255,255,0.1);
        transition: 0.3s;
        height: 100%;
    }

    .glass:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.4);
    }

    .section-title {
        font-weight: 600;
        margin-bottom: 15px;
        color: #00f5ff;
    }

    .about-img {
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    }

    .icon {
        font-size: 30px;
        margin-bottom: 10px;
        color: #00f5ff;
    }
</style>

<div class="container py-5">

    <!-- HERO -->
    <div class="hero">
        <h1 class="hero-title">{{ $data->profile }}</h1>
        <p class="hero-sub">{{ $data->description }}</p>
    </div>

    <!-- IMAGE -->
    @if($data->image)
    <div class="text-center mb-5">
        <img src="{{ asset('storage/' . $data->image) }}" class="img-fluid about-img" style="max-height:400px;">
    </div>
    @endif

    <!-- GRID SECTION -->
    <div class="row g-4">

        @if($data->vision)
        <div class="col-md-4">
            <div class="glass text-center">
                <h5 class="section-title">Vision</h5>
                <p>{{ $data->vision }}</p>
            </div>
        </div>
        @endif

        @if($data->mission)
        <div class="col-md-4">
            <div class="glass text-center">
                <h5 class="section-title">Mission</h5>
                <p>{{ $data->mission }}</p>
            </div>
        </div>
        @endif

        @if($data->values)
        <div class="col-md-4">
            <div class="glass text-center">
                <h5 class="section-title">Values</h5>
                <p>{{ $data->values }}</p>
            </div>
        </div>
        @endif

    </div>

</div>
@endsection