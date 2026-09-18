@extends('layouts.app')

@section('title', 'Home')

@section('content')

<style>
    .hero {
        min-height: 500px;
        background: linear-gradient(rgba(47, 93, 80, 0.75), rgba(47, 93, 80, 0.75)),
                    url('https://images.unsplash.com/photo-1560185008-b033106af5c3?auto=format&fit=crop&w=1400&q=80');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        text-align: center;
        color: white;
    }

    .hero-content {
        width: 80%;
        max-width: 800px;
        margin: auto;
    }

    .hero h1 {
        font-size: 48px;
        margin-bottom: 15px;
    }

    .hero p {
        font-size: 19px;
        line-height: 1.7;
    }

    .about-preview {
        padding: 60px 0;
        text-align: center;
    }

    .about-preview h2 {
        color: #2f5d50;
        margin-bottom: 15px;
    }

    .features {
        display: flex;
        gap: 20px;
        justify-content: center;
        margin-top: 35px;
        flex-wrap: wrap;
    }

    .feature {
        background: white;
        width: 250px;
        padding: 30px 20px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    }

    .feature h3 {
        color: #2f5d50;
        margin-bottom: 10px;
    }

    .feature p {
        color: #666;
        line-height: 1.6;
    }
</style>

<section class="hero">
    <div class="hero-content">
        <h1>Selamat Datang di Griya Kinasih</h1>

        <p>
            Hunian nyaman, aman, dan tenang untuk menemani
            aktivitas sehari-hari Anda.
        </p>

        <a href="/about" class="btn">
            Tentang Kami
        </a>
    </div>
</section>

<section class="about-preview">
    <div class="container">

        <h2>Kenapa Memilih Griya Kinasih?</h2>

        <p>
            Griya Kinasih hadir sebagai pilihan tempat tinggal
            yang nyaman dengan suasana tenang dan fasilitas yang
            mendukung kebutuhan penghuni.
        </p>

        <div class="features">

            <div class="feature">
                <h3>🏠 Nyaman</h3>
                <p>
                    Kamar dan lingkungan kos dirancang agar
                    penghuni dapat beristirahat dengan nyaman.
                </p>
            </div>

            <div class="feature">
                <h3>🔒 Aman</h3>
                <p>
                    Lingkungan yang aman dan nyaman untuk
                    menunjang aktivitas sehari-hari.
                </p>
            </div>

            <div class="feature">
                <h3>📍 Strategis</h3>
                <p>
                    Lokasi yang mudah dijangkau dan dekat dengan
                    berbagai kebutuhan sehari-hari.
                </p>
            </div>

        </div>

    </div>
</section>

@endsection