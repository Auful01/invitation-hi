<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Undangan Halfah Syafaat</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<style>
    body {
            font-family: 'Poppins', sans-serif;
            /* background: linear-gradient(180deg, #003f0c 35%, #fff 100%); */
            /* background: radial-gradient(circle, #c4c4c4 0%, #003f0c 100%); */
            /* background: radial-gradient(circle, #c4c4c4 35%, #0A4766 100%); */
            background-color: #0A4766;
            color: #333;
            /* display: flex;
            justify-content: center;
            align-items: center; */
            /* height: 100vh; */
            margin: 0;
            /* background-color: #f4f4f4; */
        }

        .container {
            text-align: center;
        }

    @font-face {
        font-family: 'Symphony';
        src: url('/fonts/symphony.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    .symphony {
        font-family: 'Symphony', sans-serif; /* Fallback to sans-serif */
    }

    h1 {
        font-size: 2.5rem;
        font-weight: 700;
        text-align: center;
        margin-top: 2rem;
    }

    .timer {
        margin-top: 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: nowrap; /* Prevent wrapping */
        gap: 10px; /* Add space between columns */
    }

    .timer-item {
        font-size: 2rem;
        font-weight: 700;
        background-color: #fff;
        border-radius: 10px;
        flex: 1;
        min-width: 80px; /* Ensure a minimum width */
        max-width: 300px; /* Set a maximum width */
        text-align: center;
    }

    p {
        text-align: center;
        margin-top: 1rem;
    }

    .line-split {
        width: 100%;
        height: 3px;
        background-color: #333;
        margin-top: 1rem;
        margin-bottom: 1rem;
    }

    li {
        /* add space paragraph */
        margin-bottom: 1rem;
    }

    section{
        height: 100vh;
    }

    /* .w-30 {
        width: 45% !important;
    } */



    @media(min-width: 768px) {
            .header-1{
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    text-align: center;
                    background-repeat: no-repeat;
                    background-image: url('{{asset('images/header-1.png')}}');
                    background-position: center;
                    background-size: contain;
                    padding: 20px;
                    min-height: 500px;
                    width: 100%;
                    min-width: 300px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    text-align: center;
                }

                .header-1 .card {
                    width: 400px;
                }

                .symphony-1 {
                    font-size: 70pt !important;
                }

                .container-undangan{
                    width: 70%;
                }

                h1 {
            font-size: 2vw;
        }

        .col-left{
            height: 100vh; background: linear-gradient(180deg, #fff 35%, #0A4766 100%); display: flex; flex-direction: column; justify-content: center; align-items: center;border-right: #0A4766 2px
        }

    }

    @media (max-width: 768px) {
        h1 {
            font-size: 4vw;
        }
        p {
            font-size: 1.2rem;
        }

        .header-1{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-repeat: no-repeat;
            background-image: url('{{asset('images/header-1.png')}}');
            background-position: center;
            background-size: contain;
            padding: 20px;
            height: 400px;
            width: 100%;
            min-width: 300px;
        }

        .container-undangan{
                    width: 80%;
                }

        h1.symphony-1 {
            font-size: 40pt !important;
        }

        .col-left{
            height: 100vh; background: linear-gradient(180deg, #fff 35%, #8ea2ad 100%); display: flex; flex-direction: column; justify-content: center; align-items: center;
        }

    }

    @media (max-width: 480px) {
        h1 {
            font-size: 1vw;
        }
        p {
            font-size: 1rem;
        }

        .header-1{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-repeat: no-repeat;
            background-image: url('{{asset('images/header-1.png')}}');
            background-position: center;
            background-size: contain;
            padding: 20px;
            height: 400px;
            width: 50%;
            min-width: 300px;
        }

        .container-undangan{
                    width: 100%;
                }

        .header-1 .card {
            width: 400px;
        }

        h1.symphony-1 {
            font-size: 50pt !important;
        }
    }

    .table td{
        border: none
    }
    .table th{
        border: none
    }

</style>
<body>

    <div class="row d-flex">
        <div class="col p-0">
            <div
                class="col-left">
            <!-- Logo -->

            <!-- Header Content -->
                <div
                    class="header-1 "
                    style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                    <h1 class="m-0" style="font-size: 2rem;">UNDANGAN</h1>
                    <p style="margin: 0; font-size: 1.5rem;">----------</p>
                    <h1 class="symphony symphony-1 m-0">Wisuda <br> Santri</h1>

                </div>


                <p class="text-uppercase text-white mt-5">
                    <b>
                        Madrasah Diniyyah Salafiyah <br> Matholi'ul Huda
                    </b>
                </p>

                <p class="text-uppercase text-white">
                    <b>
                        Pondok Pesantren Miftahul Huda
                    </b>
                </p>
            </div>

        </div>

        <div class="col"  style="background: linear-gradient(to top, rgba(10, 71, 102), rgba(0, 0, 0, 0) 60%), url('{{asset('images/bgmasjid.jpg')}}'); background-size: cover; background-position: center;">
            <div
            style="height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                <img
                src="https://scontent.fmlg9-1.fna.fbcdn.net/v/t39.30808-6/277326574_4705323562910538_695077024932705016_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=QHNtTKSCkgUQ7kNvgFIWwRD&_nc_zt=23&_nc_ht=scontent.fmlg9-1.fna&_nc_gid=AFE2pvu4fpryge_5c9WLTGH&oh=00_AYDGbPIDSad3diebsNVLMWQ4hwB836-64IbE-hSVSbm7mA&oe=6795BC5D"
                alt="Logo"
                style="max-height: 150px; padding-bottom: 50px;">

                <div class="text-white text-center">
                    <p>
                        Kepada Yth:
                    </p>

                    <div class="rounded-5" style="background: #fff; min-height: 200px; max-height:200px; min-width:400px; max-width:400px;">

                    </div>


                </div>
                <p class="text-white">
                    <b>
                        Mohon maaf jika ada kesalahan penulisan nama atau gelar
                    </b>
                </p>
            </div>
        </div>
    </div>



    <div class="container" style="margin-top:150px;">
        <section>
            <div class="card border-0 shadow rounded-5">
                <div class="card-body text-center">
                    <div class="my-5">
                        <b>
                            Assalamu'alaikum Warahmatullahi Wabarakatuh
                        </b>
                    </div>

                    <p>
                        Dengan penuh rasa hormat, kami mengharap kehadiran Kyai/ Ustadz/ wali santri dalam acara
                    </p>

                    <b>
                        Wisuda Santri Madrasah Diniyyah Salafiyah Matholi'ul Huda Pondok Pesantren Miftahul Huda
                    </b>
                    <br>
                    <b>
                        Tahun Ajaran 1445-1446 H
                    </b>

                    <p style="font-size: 12pt;">
                        Yang insya Allah akan diselenggarakan pada :
                    </p>

                    <div class="w-75 mx-auto">

                        <table class="table text-start">
                            <tr>
                                <td>
                                    Hari/Tanggal
                                </td>
                                <td>
                                    : Ahad/ 09 Februari 2025
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Waktu
                                </td>
                                <td>
                                    : 07.00 WIB - Selesai
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tempat
                                </td>
                                <td>
                                    : Pondok Pesantren Miftahul Huda
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Pembicara
                                </td>
                                <td>
                                    : KH. M. Anwar Manshur
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Waktu
                                </td>
                                <td>
                                    : 08.00 WIB - Selesai
                                </td>
                            </tr>
                        </table>
                    </div>

                    <p>
                        Demikian, atas perhatiannya kami haturkan terima kasih, teriring Do'a <i>Jazakumullah Ahsanal Jaza'.</i>
                    </p>

                    <div class="my-5">
                        <b>
                            Wassalamu'alaikum Warahmatullahi Wabarakatuh
                        </b>
                    </div>

                </div>
            </div>
        </section>


        <section>
            <div class="card border-0 shadow rounded-5">
                <div class="card-body text-center">

                    <h1 class="symphony">Susunan Acara</h1>
                    <br>
                    @php
                        $acara = [
                            0 => [
                                'waktu' => '05.15 - 06.45',
                                'acara' => 'Khotmil Quran dan Sholawat'
                            ],
                            1 => [
                                'waktu' => '06.45 - 07.15',
                                'acara' => 'Persiapan'
                            ],
                            2 => [
                                'waktu' => '07.15 - 07.45',
                                'acara' => 'Pra-Acara Sholawat'
                            ],
                            3 => [
                                'waktu' => '07.45 - 08.00',
                                'acara' => 'Pembukaan Acara'
                            ],
                            4 => [
                                'waktu' => '08.00 - 08.10',
                                'acara' => 'Pembacaan Ayat Suci Al-Qur\'an'
                            ],
                            5 => [
                                'waktu' => '08.10 - 08.20',
                                'acara' => 'Sambutan Atas Nama Wali Kelas 3 Ulya'
                            ],
                            6 => [
                                'waktu' => '08.20 - 08.30',
                                'acara' => 'Sambutan Wali Wisudawan'
                            ],
                            7 => [
                                'waktu' => '08.30 - 10.15',
                                'acara' => 'Prosesi Wisuda Santri'
                            ],
                            8 => [
                                'waktu' => '10.15 - 10.25',
                                'acara' => 'Pengumuman Bintang Kelas'
                            ],
                            9 => [
                                'waktu' => '10.25 - 11.25',
                                'acara' => 'Mauidzoh Hasanah'
                            ],
                            10 => [
                                'waktu' => '11.25 - 11.30',
                                'acara' => 'Doa Penutup'
                            ],
                        ]
                    @endphp

                        <table class="table text-start mx-auto" style="width: 90%">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Waktu
                                    </th>
                                    <th>
                                        Acara
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($acara as $item)
                                    <tr>
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td>
                                            {{$item['waktu']}}
                                        </td>
                                        <td>
                                            {{$item['acara']}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                </div>
            </div>
        </section>

        <div class="text-center" style="margin-bottom: 200px;">
            <div>
                <img src="{{asset('images/mifda.png')}}" alt="" class="img-fluid" style="max-height: 200px;">
            </div>
            <div class="text-white">
                {{-- <h3 class="symphony" style="font-size: 80pt;">
                    Haflah Akhirussanah
                </h3> --}}
                {{-- <h1>
                    PONDOK PESANTREN
                </h1>
                <h1>MIFTAHUL HUDA</h1> --}}
            </div>
            <div class="timer  d-flex justify-content-between text-center mb-4" style="color: #003f0c;">
                {{-- <div class="col-md-3 mb-3 text-center"> --}}
                    <div class="timer-item py-3 ">
                        <p class="m-0">Hari</p>
                        <span id="days">-</span>
                    </div>
                {{-- </div> --}}
                {{-- <div class="col-md-3 mb-3 text-center"> --}}
                    <div class="timer-item py-3">
                        <p class="m-0">Jam</p>
                        <span id="hours">-</span>
                    </div>
                {{-- </div> --}}
                {{-- <div class="col-md-3 mb-3 text-center"> --}}
                    <div class="timer-item py-3">
                        <p class="m-0">Menit</p>
                        <span id="minutes">-</span>
                    </div>
                {{-- </div> --}}
                {{-- <div class="col-md-3 mb-3 text-center"> --}}
                    <div class="timer-item py-3">
                        <p class="m-0">Detik</p>
                        <span id="seconds">-</span>
                    </div>
                {{-- </div> --}}
            </div>

            <div class="card border-0 shadow rounded-4">
                <div class="card-body">
                    <p class="symphony " style="font-size: 40pt;">
                        Quotes
                    </p>
                    <h1>
                        "Nomer siji ngaji, Nomer loro sekolah, Insyaallah hasil karone"
                    </h1>
                    <p class="symphony" style="font-size: 30pt">
                        - KH. Muhammad Yahya
                    </p>
                </div>
            </div>


            {{-- <div class="w-25 mx-auto mt-5 fw-bold">
                <h3>
                    09 Februari 2025
                </h3>
                <div class="line-split">

                </div>
                <h3>
                    10 Sya'ban 1446H
                </h3>
            </div> --}}
        </div>

        {{-- <section id="susunan-acara" >
            <div class="mb-5" style="margin-top: 100px;margin-bottom: 200px;">


                <div class="row d-flex text-start  my-5">
                    <div class="col-md-6 mb-5">
                        <div class="card shadow border-0  h-100 rounded-4">
                            <div class="card-body rounded-4" style="font-size: 16pt;">
                                <p class=" symphony" style="font-size: 50pt">
                                    Susunan Acara
                                </p>
                                <ul>
                                    <li>Pembukaan</li>
                                    <li>Pembacaan Ayat Suci Al-Qur'an</li>
                                    <li>Sambutan Pimpinan Pondok Pesantren</li>
                                    <li>Sambutan Tamu Undangan</li>
                                    <li>Sambutan Santri</li>
                                    <li>Mauidzoh Hasanah</li>
                                    <li>Doa</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-white text-center">
                        <p class="symphony" style="font-size: 50pt">Mauidhoh Hasanah</p>

                        <img src="{{asset('images/mauidhoh.png')}}" alt="" style="max-height: 300px;">
                        <p class="symphony" style="font-size: 30pt">
                            KH. M. Bahauddin Nursalim
                        </p>
                    </div>
                </div>
            </div>
        </section> --}}


        {{-- <section style="padding-top: 200px;">

            <div class="card">
                <div class="card-body">
                    <p class="symphony " style="font-size: 40pt;">
                        Quotes
                    </p>
                    <h1>
                        "Nomer siji ngaji, Nomer loro sekolah, Insyaallah hasil karone"
                    </h1>
                    <p class="symphony" style="font-size: 30pt">
                        - KH. Muhammad Yahya
                    </p>
                </div>
            </div>
        </section> --}}
    </div>
</body>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Feb 9, 2025 00:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        console.log(distance);
        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            // document.getElementById("demo").innerHTML = "EXPIRED";

            document.getElementById("days").innerHTML = "-";
            document.getElementById("hours").innerHTML = "-";
            document.getElementById("minutes").innerHTML = "-";
            document.getElementById("seconds").innerHTML = "-";

        }
    }, 1000);
</script>
</html>
