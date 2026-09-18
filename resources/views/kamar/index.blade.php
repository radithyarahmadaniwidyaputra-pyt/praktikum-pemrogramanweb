<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Kamar - Griya Kinasih</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7f6;
            color: #333;
        }

        .hero {
            min-height: 320px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background:
                linear-gradient(rgba(49, 82, 72, 0.75), rgba(49, 82, 72, 0.75)),
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 18px;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 50px auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 35px;
        }

        .section-title h2 {
            color: #315248;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .section-title p {
            color: #666;
        }

        .rooms {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .room-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .room-card h3 {
            color: #315248;
            font-size: 22px;
            margin-bottom: 15px;
        }

        .room-card p {
            margin-bottom: 10px;
            color: #666;
        }

        .price {
            font-size: 20px;
            font-weight: bold;
            color: #c89b4b;
            margin: 15px 0;
        }

        .status {
            display: inline-block;
            padding: 8px 14px;
            border-radius: 20px;
            background-color: #e6f3ec;
            color: #315248;
            font-size: 14px;
        }

        .footer {
            margin-top: 70px;
            padding: 25px;
            text-align: center;
            background-color: #315248;
            color: white;
        }

        @media (max-width: 768px) {
            .rooms {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>

    <section class="hero">
        <div>
            <h1>Daftar Kamar Griya Kinasih</h1>
            <p>
                Temukan kamar yang nyaman, aman, dan sesuai dengan kebutuhan Anda.
            </p>
        </div>
    </section>

    <section class="container">

        <div class="section-title">
            <h2>Pilihan Kamar</h2>
            <p>
                Tersedia berbagai pilihan kamar untuk menunjang kenyamanan Anda.
            </p>
        </div>

        <div class="rooms">

            <div class="room-card">
                <h3>Kamar 01</h3>

                <p>Kamar nyaman dengan lingkungan yang tenang.</p>

                <div class="price">
                    Rp800.000 / bulan
                </div>

                <span class="status">
                    Tersedia
                </span>
            </div>

            <div class="room-card">
                <h3>Kamar 02</h3>

                <p>Kamar nyaman dengan fasilitas yang mendukung aktivitas sehari-hari.</p>

                <div class="price">
                    Rp850.000 / bulan
                </div>

                <span class="status">
                    Tersedia
                </span>
            </div>

            <div class="room-card">
                <h3>Kamar 03</h3>

                <p>Kamar dengan suasana nyaman dan aman untuk penghuni.</p>

                <div class="price">
                    Rp900.000 / bulan
                </div>

                <span class="status">
                    Tersedia
                </span>
            </div>

        </div>

    </section>

    <footer class="footer">
        © 2026 Kos Griya Kinasih. All Rights Reserved.
    </footer>

</body>
</html>