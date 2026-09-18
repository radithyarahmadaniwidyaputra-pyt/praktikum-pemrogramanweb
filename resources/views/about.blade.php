@extends('layouts.app')

@section('title', 'About')

@section('content')

<style>
    .about-header {
        background-color: #2f5d50;
        color: white;
        text-align: center;
        padding: 70px 20px;
    }

    .about-header h1 {
        font-size: 40px;
        margin-bottom: 10px;
    }

    .about-content {
        padding: 60px 0;
    }

    .about-box {
        background-color: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        line-height: 1.8;
    }

    .about-box h2 {
        color: #2f5d50;
        margin-bottom: 15px;
    }

    .info {
        display: flex;
        gap: 20px;
        margin-top: 30px;
        flex-wrap: wrap;
    }

    .info-box {
        flex: 1;
        min-width: 200px;
        background-color: #f5f7f6;
        padding: 25px;
        border-radius: 10px;
    }

    .info-box h3 {
        color: #2f5d50;
        margin-bottom: 10px;
    }
</style>

<section class="about-header">
    <h1>Tentang Griya Kinasih</h1>

    <p>
        Hunian nyaman untuk tempat tinggal yang lebih tenang.
    </p>
</section>

<section class="about-content">
    <div class="container">

        <div class="about-box">

            <h2>Griya Kinasih</h2>

            <p>
                Griya Kinasih merupakan tempat kos yang menyediakan
                hunian nyaman dan aman bagi mahasiswa, pekerja, maupun
                masyarakat yang membutuhkan tempat tinggal.
            </p>

            <p>
                Kami berusaha memberikan suasana hunian yang tenang,
                bersih, dan nyaman sehingga penghuni dapat menjalankan
                aktivitas sehari-hari dengan lebih baik.
            </p>

            <div class="info">

                <div class="info-box">
                    <h3>Visi</h3>
                    <p>
                        Menjadi pilihan hunian kos yang nyaman,
                        aman, dan terpercaya.
                    </p>
                </div>

                <div class="info-box">
                    <h3>Misi</h3>
                    <p>
                        Memberikan tempat tinggal yang nyaman,
                        menjaga keamanan, serta memberikan pelayanan
                        yang baik kepada penghuni.
                    </p>
                </div>

            </div>

        </div>

    </div>
</section>

@endsection