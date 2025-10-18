{{-- resources/views/connect.blade.php --}}
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bog'lanish</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>
<!-- Header -->
@include('partials.header') {{-- Agar header alohida qilingan bo‘lsa --}}

<!-- Image Header -->
<div class="mainContent withImage">
    <div class="imageHeader" style="padding-bottom: 0px;">
        <div class="container">
            <h1 class="pageTitle text-dark">Bog'lanish</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Asosiy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bog'lanish</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Main section -->
<main>
    <section>
        <div class="connect">
            <div class="container">

                <!-- Google Map -->
                <div class="mapArea">
                    <div class="row">
                        <div class="col-12 mt-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6131044.44664104!2d64.608575!3d41.381166..."
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>

                <hr class="sections__line mt-5">

                <!-- Contact Form -->
                <div class="contact">
                    <h1 class="text-center text-uppercase mb-5">Biz bilan bog'laning</h1>
                    <div class="row">
                        <div class="col-md-7">
                            <form action="{{ route('contact.send') }}" method="post">
                                @csrf
                                <div class="row contact_row1">
                                    <div class="col-6">
                                        <input type="text" placeholder="I.F.Sh" name="name" required>
                                    </div>
                                    <div class="col-6">
                                        <input type="email" placeholder="E.pochta" name="email" required>
                                    </div>
                                </div>
                                <div class="row contact_row2">
                                    <div class="col-6">
                                        <input type="tel" value="+998" name="phone" required>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" placeholder="Mavzu" name="mavzu">
                                    </div>
                                </div>
                                <div class="row contact_row3">
                                    <div class="col-12">
                                        <textarea placeholder="Xabarlar" name="message" rows="4" required></textarea>
                                        <button type="submit" class="contact_btn mt-3">Yuborish</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5">
                            <h2 class="mb-3">329-sonli umumta’lim maktabi</h2>
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <th>Mudir:</th>
                                    <td>Aripova Umida Djangirovna</td>
                                </tr>
                                <tr>
                                    <th>Telefon:</th>
                                    <td>+99891-191-84-48</td>
                                </tr>
                                <tr>
                                    <th>Faks:</th>
                                    <td>+99891-191-84-48</td>
                                </tr>
                                <tr>
                                    <th>Instagram:</th>
                                    <td>@329_maktab</td>
                                </tr>
                                <tr>
                                    <th>Telegram:</th>
                                    <td>@329maktab</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Contact Section End -->
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
@include('partials.footer') {{-- Agar footer alohida qilingan bo‘lsa --}}

<!-- Scripts -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/tilt.jquery.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>

<script>
    $(document).ready(function () {
        $(".searchBtn").click(function (e) {
            e.preventDefault();
            $(".mainSearchForm").toggleClass("active");
        });

        $(".closeBtn").click(function (e) {
            e.preventDefault();
            $(".mainSearchForm").removeClass("active");
        });
    });
</script>
</body>
</html>
