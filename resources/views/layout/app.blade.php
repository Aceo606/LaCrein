<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    @yield('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


    <footer class="footer">

        <div class="footer-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">

                        <div class="footer-widget footer-about">

                            <div class="footer-about-content">
                                <h2>La Crein</h2>
                                <p>La Crein: The latest news in the world of IT! You'll find it very interesting here.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">

                    </div>

                    <div class="col-lg-3 col-md-6">


                    </div>

                    <div class="col-lg-3 col-md-6">

                        <div class="footer-widget footer-contact">
                            <h2 class="footer-title">Contact Us</h2>
                            <div class="footer-contact-info">

                                <p>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Nur-Sultan
                                </p>
                                <p>
                                    <i class="fas fa-phone-alt"></i>
                                    +7 (707) 458 67 37
                                </p>
                                <p class="mb-0">
                                    <i class="fas fa-envelope"></i>
                                    info@LaCrein.kz
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container-fluid">

                <div class="copyright">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="copyright-text">
                                <p class="mb-0">&copy; LaCrein: All about the world of IT!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </footer>
<script src="/js/app.js"></script>
</body>
</html>
