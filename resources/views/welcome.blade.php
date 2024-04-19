<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bedah Rumah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/app.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .bg-transition {
            transition: background-color 0.3s ease;
        }
    </style>
</head>

<body>
    <div class="bg-slate-50">
        <div class="bg-slate-50 h-full max-w-lg mx-auto pb-20">
            <div class="bg-blue-200 h-[300px] w-full flex justify-center items-center">
                <img src="/images/logo-bedahrumah.jpg" alt="logo" class="w-[150px] h-[150px] rounded">
            </div>
            <div id="topbar" class="fixed top-0 left-0 right-0 w-full duration-200 transition-all p-3 bg-transparent z-[50] flex justify-center items-center">
                <input type="text" placeholder="Cari disini..." class="w-[480px] p-1 rounded-full px-3">
            </div>
            <script>
                $(document).ready(function() {
                    $(window).scroll(function() {
                        if ($(this).scrollTop() > 10) { // Change 100 to the scroll position where you want to change the background color
                            $('#topbar').removeClass('bg-transparent').addClass('bg-blue-300'); // Change to your desired background color
                        } else if ($(this).scrollTop() < 10) {
                            $('#topbar').removeClass('bg-blue-500').addClass('bg-transparent'); // Change to your desired background color
                        }
                    });
                });
            </script>
            <div class="px-3">
                <div class="bg-white shadow-lg w-full rounded p-4 h-auto -mt-10">
                    <p class="font-semibold">
                        Lebih dari 2 juta orang telah terbantu. Ingin ikut membantu?
                    </p>
                    <button class="p-2 w-auto h-auto bg-blue-700 hover:bg-blue-600 duration-200 transition text-white rounded-full mt-2 px-4 text-sm">
                        Donasi Sekarang
                    </button>
                </div>
            </div>

            <div class="bg-white shadow-lg w-full rounded py-4 h-auto mt-2">
                <h2 class="font-bold px-4">Rekomendasi Tim BedahRumah</h2>
                <div id="owl-carousel" class="owl-carousel owl-theme mt-2">
                    <div class="item rounded"><img src="https://via.placeholder.com/300x150"></div>
                    <div class="item rounded"><img src="https://via.placeholder.com/300x150"></div>
                    <div class="item rounded"><img src="https://via.placeholder.com/300x150"></div>
                    <!-- Add more items as needed -->
                </div>
                <script>
                    $(document).ready(function() {
                        $("#owl-carousel").owlCarousel({
                            items: 3,
                            loop: true,
                            margin: 10,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            dots: false,
                            responsive: {
                                0: {
                                    items: 1
                                },
                                600: {
                                    items: 1
                                },
                                1000: {
                                    items: 1
                                }
                            }
                        });
                    });
                </script>
            </div>

            <div class="bg-white shadow-lg w-full rounded py-4 h-auto mt-2">
                <h2 class="font-bold px-4">Pilihan Spesial BedahRumah</h2>
                <div id="owl-carousel2" class="owl-carousel owl-theme mt-2">
                    <div class="item rounded"><img src="https://via.placeholder.com/300x150"></div>
                    <div class="item rounded"><img src="https://via.placeholder.com/300x150"></div>
                    <div class="item rounded"><img src="https://via.placeholder.com/300x150"></div>
                    <!-- Add more items as needed -->
                </div>
                <script>
                    $(document).ready(function() {
                        $("#owl-carousel2").owlCarousel({
                            items: 3,
                            loop: true,
                            margin: 10,
                            autoplay: false,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            dots: false,
                            responsive: {
                                0: {
                                    items: 1
                                },
                                600: {
                                    items: 2
                                },
                                1000: {
                                    items: 2
                                }
                            }
                        });
                    });
                </script>
            </div>

            <!-- Bottom Bar -->
            <div class="bg-white shadow-lg max-w-lg w-full p-4 h-auto fixed bottom-0 z-[50]">
                <p>Beranda</p>
            </div>
        </div>
    </div>

</body>

</html>