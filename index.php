<?php

$produk = [
    [
        "nama" => "Laptop ASUS VivoBook",
        "kategori" => "Laptop",
        "harga" => 7500000,
        "stok" => 5
    ],
    [
        "nama" => "Mouse Logitech M331",
        "kategori" => "Mouse",
        "harga" => 250000,
        "stok" => 10
    ],
    [
        "nama" => "Keyboard Mechanical",
        "kategori" => "Keyboard",
        "harga" => 450000,
        "stok" => 0
    ],
    [
        "nama" => "Headset Gaming",
        "kategori" => "Audio",
        "harga" => 350000,
        "stok" => 7
    ],
    [
        "nama" => "Webcam HD",
        "kategori" => "Kamera",
        "harga" => 500000,
        "stok" => 3
    ],
    [
        "nama" => "USB Flashdisk 64GB",
        "kategori" => "Storage",
        "harga" => 120000,
        "stok" => 0
    ]
];

$totalProduk = count($produk);

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cia Store</title>

    <style>

        /* =========================
           DASAR
        ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f6f7fb;
            color: #222;
        }

        a {
            text-decoration: none;
        }


        /* =========================
           NAVBAR
        ========================= */

        header {
            background-color: #ffffff;
            border-bottom: 1px solid #eeeeee;
        }

        .navbar {
            width: 90%;
            max-width: 1150px;
            margin: auto;

            height: 70px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #111827;
        }

        .logo span {
            color: #2563eb;
        }

        .menu {
            display: flex;
            gap: 30px;
        }

        .menu a {
            color: #555;
            font-size: 15px;
        }

        .menu a:hover {
            color: #2563eb;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            width: 90%;
            max-width: 1150px;
            margin: 35px auto;

            background-color: #2563eb;
            border-radius: 18px;

            padding: 70px 60px;

            color: white;
        }

        .hero-content {
            max-width: 650px;
        }

        .hero h1 {
            font-size: 42px;
            line-height: 1.2;
            margin-bottom: 18px;
        }

        .hero p {
            font-size: 17px;
            line-height: 1.7;
            color: #e5edff;
            margin-bottom: 28px;
        }

        .hero-button {
            display: inline-block;

            background-color: white;
            color: #2563eb;

            padding: 12px 22px;

            border-radius: 7px;

            font-weight: bold;
            font-size: 14px;
        }

        .hero-button:hover {
            background-color: #f1f5f9;
        }


        /* =========================
           INFORMASI
        ========================= */

        .info {
            width: 90%;
            max-width: 1150px;
            margin: 50px auto 25px;
        }

        .info h2 {
            font-size: 28px;
            margin-bottom: 8px;
            color: #111827;
        }

        .info p {
            color: #6b7280;
        }

        .info strong {
            color: #2563eb;
        }


        /* =========================
           PRODUK
        ========================= */

        .katalog {
            width: 90%;
            max-width: 1150px;
            margin: auto;
            padding-bottom: 70px;
        }

        .produk-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }


        /* =========================
           CARD
        ========================= */

        .card {
            background-color: white;

            border: 1px solid #e5e7eb;
            border-radius: 12px;

            padding: 24px;

            transition: 0.2s;
        }

        .card:hover {
            border-color: #2563eb;
            transform: translateY(-3px);
        }


        /* =========================
           KATEGORI
        ========================= */

        .kategori {
            display: inline-block;

            background-color: #eff6ff;
            color: #2563eb;

            padding: 6px 10px;

            border-radius: 5px;

            font-size: 12px;
            font-weight: bold;

            margin-bottom: 17px;
        }


        /* =========================
           NAMA PRODUK
        ========================= */

        .card h3 {
            font-size: 19px;
            color: #111827;

            margin-bottom: 15px;

            min-height: 23px;
        }


        /* =========================
           HARGA
        ========================= */

        .harga {
            font-size: 19px;
            font-weight: bold;

            color: #2563eb;

            margin-bottom: 10px;
        }


        /* =========================
           STOK
        ========================= */

        .stok {
            font-size: 14px;
            color: #6b7280;

            margin-bottom: 15px;
        }


        /* =========================
           STATUS
        ========================= */

        .tersedia,
        .habis {
            font-size: 13px;
            font-weight: bold;

            margin-bottom: 15px;
        }

        .tersedia {
            color: #16a34a;
        }

        .habis {
            color: #dc2626;
        }


        /* =========================
           TOMBOL
        ========================= */

        .btn-beli {
            width: 100%;

            padding: 11px;

            border: none;
            border-radius: 6px;

            background-color: #2563eb;
            color: white;

            font-size: 14px;
            font-weight: bold;

            cursor: pointer;
        }

        .btn-beli:hover {
            background-color: #1d4ed8;
        }

        .btn-beli.disabled {
            background-color: #e5e7eb;
            color: #9ca3af;

            cursor: not-allowed;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            background-color: #111827;
            color: white;

            text-align: center;

            padding: 35px 20px;
        }

        footer h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        footer p {
            color: #9ca3af;
            font-size: 13px;
            margin-bottom: 6px;
        }


        /* =========================
           TABLET
        ========================= */

        @media (max-width: 900px) {

            .produk-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero {
                padding: 55px 40px;
            }

            .hero h1 {
                font-size: 35px;
            }

        }


        /* =========================
           HP
        ========================= */

        @media (max-width: 600px) {

            .navbar {
                width: 90%;
                height: auto;

                padding: 18px 0;

                flex-direction: column;
                gap: 15px;
            }

            .menu {
                gap: 20px;
            }

            .hero {
                width: 90%;

                padding: 45px 25px;

                margin-top: 25px;
            }

            .hero h1 {
                font-size: 29px;
            }

            .hero p {
                font-size: 15px;
            }

            .produk-container {
                grid-template-columns: 1fr;
            }

            .info h2 {
                font-size: 24px;
            }

        }

    </style>

</head>


<body>


    <!-- =========================
         NAVBAR
    ========================= -->

    <header>

        <nav class="navbar">

            <div class="logo">
                Cia<span>Store</span>
            </div>

            <div class="menu">

                <a href="#home">
                    Home
                </a>

                <a href="#produk">
                    Produk
                </a>

                <a href="#kontak">
                    Kontak
                </a>

            </div>

        </nav>

    </header>


    <!-- =========================
         HERO
    ========================= -->

    <section class="hero" id="home">

        <div class="hero-content">

            <h1>
                Temukan Teknologi
                yang Kamu Butuhkan
            </h1>

            <p>
                Cia Store menyediakan berbagai perangkat
                dan aksesoris teknologi dengan pilihan
                produk yang beragam.
            </p>

            <a href="#produk" class="hero-button">
                Lihat Produk
            </a>

        </div>

    </section>


    <!-- =========================
         INFORMASI PRODUK
    ========================= -->

    <section class="info">

        <h2>
            Produk Cia Store
        </h2>

        <p>
            Tersedia
            <strong><?= $totalProduk ?></strong>
            produk yang dapat kamu lihat.
        </p>

    </section>


    <!-- =========================
         KATALOG
    ========================= -->

    <section class="katalog" id="produk">

        <div class="produk-container">


            <?php foreach ($produk as $item): ?>


                <!-- CARD -->

                <div class="card">


                    <!-- KATEGORI -->

                    <span class="kategori">
                        <?= $item["kategori"] ?>
                    </span>


                    <!-- NAMA -->

                    <h3>
                        <?= $item["nama"] ?>
                    </h3>


                    <!-- HARGA -->

                    <p class="harga">
                        Rp <?= number_format($item["harga"], 0, ',', '.') ?>
                    </p>


                    <!-- STOK -->

                    <p class="stok">
                        Stok tersedia: <?= $item["stok"] ?>
                    </p>


                    <!-- CEK STOK -->

                    <?php if ($item["stok"] > 0): ?>

                        <p class="tersedia">
                            ● Produk tersedia
                        </p>

                        <button class="btn-beli">
                            Beli Sekarang
                        </button>

                    <?php else: ?>

                        <p class="habis">
                            ● Stok produk habis
                        </p>

                        <button
                            class="btn-beli disabled"
                            disabled>
                            Stok Habis
                        </button>

                    <?php endif; ?>


                </div>


            <?php endforeach; ?>


        </div>

    </section>


    <!-- =========================
         FOOTER
    ========================= -->

    <footer id="kontak">

        <h3>
            Cia Store
        </h3>

        <p>
            Perangkat dan aksesoris teknologi
            untuk kebutuhanmu.
        </p>

        <p>
            &copy; 2026 Cia Store
        </p>

    </footer>


</body>

</html>