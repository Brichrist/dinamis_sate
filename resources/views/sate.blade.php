<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset') }}/css/sate.css">
    <script src="https://kit.fontawesome.com/472c7ba5af.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


    <title>sate blora</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg nav-no-shadow">
        <div class="container">
            <a class="navbar-brand" href="#"><img id=logo class="logo" src="asset/(FIX)LOGO 4 (1).png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-lg-12 d-flex justify-content-end ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#event">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#what-we-do">What We Do</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimoni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="footer">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="splash-screen" class="fixed-top">
        <img class="logo-splash-screen" src="asset/(FIX)LOGO 4 (1).png" alt="">
    </section>

    <section id="home">
        <img id=sobek src="asset/Untitled-1.png" alt="">
        <div class="toon-bg">
            <img class="toon-bg-anmt-1 toon-bg-1" src="./asset/png-toon/garpu.png" alt="">
            <img class="toon-bg-anmt-2 toon-bg-2" src="./asset/png-toon/daging.png" alt="">
            <img class="toon-bg-anmt-1 toon-bg-3" src="./asset/png-toon/pisau.png" alt="">
            <img class="toon-bg-anmt-2 toon-bg-4" src="./asset/png-toon/sate.png" alt="">
            <img class="toon-bg-anmt-1 toon-bg-5" src="./asset/png-toon/panggangan.png" alt="">
            <img class="toon-bg-anmt-2 toon-bg-6" src="./asset/png-toon/ayam.png" alt="">
            <img class="toon-bg-anmt-1 toon-bg-7" src="./asset/png-toon/garpu.png" alt="">
            <img class="toon-bg-anmt-2 toon-bg-8" src="./asset/png-toon/daging.png" alt="">
            <img class="toon-bg-anmt-1 toon-bg-9" src="./asset/png-toon/ayam.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6" id="CP">
                    <div class="title-tag">
                        <h2>Restaurant</h2>
                        <h1>Sate Khas Blora</h1>
                        <hr>
                        <p class="lead">A simple restaurant in malang bring you a very delicious satay</p>
                        <a class="btn btn-red btn-lg text-white" href="#" role="button">Learn more</a>
                    </div>
                    <div class="CP-child">
                        <h5>Sate Khas Blora</h5>
                        <h6><i class="fas fa-map-marked-alt"></i> &nbsp;&nbsp;Jl. Danau Toba E5/15</h6>
                        <h6><i class="fas fa-phone-alt phone-absolute"></i> &nbsp;&nbsp;0813-3332-2748 (Brian Christian
                            Hanjaya)</h6>
                        <h6><i class="fas fa-phone-alt phone-hide"></i> &nbsp;&nbsp;0812-3005-4009 (William Alexander
                            Hanjaya)</h6>
                        <h6><i class="fab fa-instagram"></i> &nbsp;&nbsp;@satekhsblora</h6>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="circle3"></div>
                    <div class="circle2"></div>
                    <div class="circle1"></div>

                    <div class="swiper-container d-flex justify-content-start">
                        <div class="swiper-wrapper">
                            @foreach ($sliders as $slider)
                                <div class="swiper-slide"
                                    style="background-image:url('./foto/sliderfoto/{{ $slider->foto }}')"></div>
                                {{-- <div class="swiper-slide" style="background-image:url('./asset/S.\ KAMBING\ LEMAK\ \ JUMBO\ \(10\)\,\ MAIN\ FOOD.jpeg')"></div>
                      <div class="swiper-slide" style="background-image:url('./asset/IMG_20180801_121116_HDR.jpg')"></div>
                      <div class="swiper-slide" style="background-image:url('./asset/IMG_20180801_121521_HDR.jpg'); "></div> --}}
                            @endforeach
                        </div>

                        <!-- <div class="swiper-pagination swiper-pagination-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div> -->
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="product">
        <h3 class="text-center main-title">PRODUCT | <span style="color: rgb(82, 82, 82);">ALL MENU</span></h3>
        <hr class="title">
        <h5 class="text-center fw-light fst-italic">We did many experiments, to give you a satisfying taste.So come and
            enjoy your food</h5>
        <div class="container pt-lg-5">
            @foreach ($products as $index => $product)
                @if (($index + 1) % 3 == 1)
                    <div class="row row-{{ ($index + 3) / 3 }}">
                @endif

                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="card">
                        <img src="./foto/productfoto/{{ $product->foto }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6>{{ $product->name }}</h6>
                            <hr>
                            <p class="card-text">{{ $product->desc }}</p>
                        </div>
                    </div>
                </div>
                @if (($index + 1) % 3 == 0)
        </div>
        @endif
        @endforeach
        {{-- <div class="row row-1">
              <div class="col-lg-4 d-flex justify-content-center">
                <div class="card">
                  <img src="./asset/S. KAMBING LEMAK  JUMBO (10), MAIN FOOD.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 >Sate Kambing Tanpa Lemak</h6>
                    <hr>
                    <p class="card-text">Olahan daging kambing segar yang diolah agar tidak mengeluarkan bau dan memiliki keempukan daging sempurna</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 d-flex justify-content-center">
                <div class="card">
                  <img src="./asset/banner baru.JPEG" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 >Sate Kambing Lemak</h6>
                    <hr>
                    <p class="card-text">Olahan daging kambing segar yang diolah agar tidak mengeluarkan bau dan memiliki keempukan daging sempurna, dengan tambahan kenikmatan dari lemak kambing</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 d-flex justify-content-center">
                <div class="card">
                  <img src="./asset/IMG_20190302_172832.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 >Gule Kambing</h6>
                    <hr>
                    <p class="card-text">Olahan daging kambing segar yang diolah dengan banyak rempah rempah dan teknik masak yang berbeda membuat daging tetap stabil ketika dihidangkan</p>
                  </div>
                </div>
              </div>
          </div>
          <div class="row row-2">
              <div class="col-lg-4 d-flex justify-content-center">
                <div class="card">
                  <img src="./asset/IMG_20180705_113003.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 >Sate Ayam Kampung</h6>
                    <hr>
                    <p class="card-text">Daging ayam kampung diolah dengan teknik yang sempurna menciptakan rasa yang berbeda dari daging unggas lainnya</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 d-flex justify-content-center">
                <div class="card">
                  <img src="./asset/WhatsApp Image 2019-01-05 at 16.34.20.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 >Sate Ayam</h6>
                    <hr>
                    <p class="card-text">Olahan daging ayam sempurna dengan baceman rempah-rempah dengan teknik memasak yang berbeda</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 d-flex justify-content-center">
                <div class="card">
                  <img src="./asset/IMG_20180801_125429.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 >Kuah Opor</h6>
                    <hr>
                    <p class="card-text">Diolah dan dipadukan oleh kaldu ayam kampung dengan campuran santan gurih</p>
                  </div>
                </div>
              </div>
          </div>
          <div class="row row-3">
              <div class="col-lg-4 d-flex justify-content-center">
                <div class="card ">
                  <img src="./asset/fav-jadi/lontong, food.jpg" class="card-img-top" alt="...">
                  <div class="card-body test">
                    <h6 >Lontong</h6>
                    <hr>
                    <p class="card-text">Pembutan lontong dengan menggunakan teknik-teknik masa lalu dengan peralatan masa kini</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 d-flex justify-content-center">
                <div class="card">
                  <img src="./asset/fav-jadi/nasi putih, food.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 >Nasi</h6>
                    <hr>
                    <p class="card-text">Pemilihan beras berkualita tinggi dan dimasak dengan hati-hati, menjaga tekstur dari nasi</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 d-flex justify-content-center">
                <div class="card">
                  <img src="./asset/fav-jadi/kerupuk, additional .jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 >Kerupuk</h6>
                    <hr>
                    <p class="card-text">Pemilihan suplier kerupuk dengan memperhatikan tanggal kadaluarsa dan kehigenisan produk</p>
                  </div>
                </div>
              </div>
          </div> --}}
        </div>
    </section>

    <section id="event">
        <div class="container">>
            <div class="row">

                <div class="col-6 text-content">
                    @foreach ($events as $index => $event)
                        <h1 class=" eventcontent-{{ $index + 1 }} eventcontent">{!! $event->event !!}
                        </h1>
                    @endforeach
                </div>

                <div class="col-6 ">
                    <div class="img-content d-flex justify-content-center">
                        @foreach ($events as $index => $event)
                            <img class="img eventcontentimg eventcontentimg-{{ $index + 1 }}"
                                src="./foto/eventfoto/{{ $event->foto }}" alt="">
                        @endforeach
                    </div>
                </div>

            </div>
    </section>

    <section id="what-we-do">
        <div class="background"></div>
        <video autoplay muted loop width="100%" height="600px" id="myVideo">
            <source src="./asset/2 01 09 19-1.mp4" type="video/mp4">
        </video>
        <div class="block"></div>
        <div class="shadow-button-play"></div>
        <button type="button" class="btn button-play" data-bs-toggle="modal" data-bs-target="#video-play-modal"><i
                class="fas fa-play fa-3x"></i></button>
        <h1>What We Do ?</h1>
        <p>This is what we do! <em>(click play button)</em></p>
        <button type="button" class="btn button-share">SHARE</button>
        <a href="#" class="button-join-us text-center"><i class="fas fa-user-friends fa-2x"></i><br>JOIN US</a>
        <a href="#" class="button-list-video text-center" data-bs-toggle="modal" data-bs-target="#list-video"><i
                class="fas fa-list fa-2x"></i><br>LIST</a>
        <div class="mask mask2" style="width: 0px;">
            <div class="text"></div>
        </div>
    </section>

    {{-- <section id="testimoni">
        <div class="container-fluid">
            <div class="row relative">
                <div class="col-lg-7 ">
                    <div class="text-stay cnt-1text ">
                        <h1 class="text-center display-4">1Pasti Repeat Order</h1>
                        <p class="text-center">1kemarin saya tiba tiba di chat sama pemilik,
                            saya kenal tetapi sudah lama juga nda ketemu.
                            saya nda tau kenapa nih jadi saya bales aja eh
                            ternyata dia cuman nawari sate jualan dia. ya udah aku pesen kan namanya juga temen,
                            waktu dateng anteri kami bocara basa basi dikit dah trus waktu
                            aku bayar aku kaget ternyta nda perlu ongkir katanya untu promosi juga.
                            ya udah setelah aku bayar, dia pulang trus aku coba tuh makan di dalem aku kaget kok
                            beda dari sate yang pernah aku makan aku juga kaget klo satenya khas nda pake brambang.
                            tekstur bumbu juara sih ini namanya dagingnya juga udah baceman yang aku rasakan. REPEAT
                            ORDER SIH INI</p>
                    </div>
                    <div class="text-stay cnt-2text deactivate">
                        <h1 class="text-center display-4">2Pasti Repeat Order</h1>
                        <p class="text-center">2kemarin saya tiba tiba di chat sama pemilik,
                            saya kenal tetapi sudah lama juga nda ketemu.
                            saya nda tau kenapa nih jadi saya bales aja eh
                            ternyata dia cuman nawari sate jualan dia. ya udah aku pesen kan namanya juga temen,
                            waktu dateng anteri kami bocara basa basi dikit dah trus waktu
                            aku bayar aku kaget ternyta nda perlu ongkir katanya untu promosi juga.
                            ya udah setelah aku bayar, dia pulang trus aku coba tuh makan di dalem aku kaget kok
                            beda dari sate yang pernah aku makan aku juga kaget klo satenya khas nda pake brambang.
                            tekstur bumbu juara sih ini namanya dagingnya juga udah baceman yang aku rasakan. REPEAT
                            ORDER SIH INI</p>
                    </div>
                    <div class="text-stay cnt-3text deactivate">
                        <h1 class="text-center display-4">3Pasti Repeat Order</h1>
                        <p class="text-center">3kemarin saya tiba tiba di chat sama pemilik,
                            saya kenal tetapi sudah lama juga nda ketemu.
                            saya nda tau kenapa nih jadi saya bales aja eh
                            ternyata dia cuman nawari sate jualan dia. ya udah aku pesen kan namanya juga temen,
                            waktu dateng anteri kami bocara basa basi dikit dah trus waktu
                            aku bayar aku kaget ternyta nda perlu ongkir katanya untu promosi juga.
                            ya udah setelah aku bayar, dia pulang trus aku coba tuh makan di dalem aku kaget kok
                            beda dari sate yang pernah aku makan aku juga kaget klo satenya khas nda pake brambang.
                            tekstur bumbu juara sih ini namanya dagingnya juga udah baceman yang aku rasakan. REPEAT
                            ORDER SIH INI</p>
                    </div>
                    <div class="text-stay cnt-4text deactivate">
                        <h1 class="text-center display-4">4Pasti Repeat Order</h1>
                        <p class="text-center">4kemarin saya tiba tiba di chat sama pemilik,
                            saya kenal tetapi sudah lama juga nda ketemu.
                            saya nda tau kenapa nih jadi saya bales aja eh
                            ternyata dia cuman nawari sate jualan dia. ya udah aku pesen kan namanya juga temen,
                            waktu dateng anteri kami bocara basa basi dikit dah trus waktu
                            aku bayar aku kaget ternyta nda perlu ongkir katanya untu promosi juga.
                            ya udah setelah aku bayar, dia pulang trus aku coba tuh makan di dalem aku kaget kok
                            beda dari sate yang pernah aku makan aku juga kaget klo satenya khas nda pake brambang.
                            tekstur bumbu juara sih ini namanya dagingnya juga udah baceman yang aku rasakan. REPEAT
                            ORDER SIH INI</p>
                    </div>
                    <div class="text-stay cnt-5text deactivate">
                        <h1 class="text-center display-4">5Pasti Repeat Order</h1>
                        <p class="text-center">5kemarin saya tiba tiba di chat sama pemilik,
                            saya kenal tetapi sudah lama juga nda ketemu.
                            saya nda tau kenapa nih jadi saya bales aja eh
                            ternyata dia cuman nawari sate jualan dia. ya udah aku pesen kan namanya juga temen,
                            waktu dateng anteri kami bocara basa basi dikit dah trus waktu
                            aku bayar aku kaget ternyta nda perlu ongkir katanya untu promosi juga.
                            ya udah setelah aku bayar, dia pulang trus aku coba tuh makan di dalem aku kaget kok
                            beda dari sate yang pernah aku makan aku juga kaget klo satenya khas nda pake brambang.
                            tekstur bumbu juara sih ini namanya dagingnya juga udah baceman yang aku rasakan. REPEAT
                            ORDER SIH INI</p>
                    </div>
                    <div class="text-stay cnt-6text deactivate">
                        <h1 class="text-center display-4">6Pasti Repeat Order</h1>
                        <p class="text-center">6kemarin saya tiba tiba di chat sama pemilik,
                            saya kenal tetapi sudah lama juga nda ketemu.
                            saya nda tau kenapa nih jadi saya bales aja eh
                            ternyata dia cuman nawari sate jualan dia. ya udah aku pesen kan namanya juga temen,
                            waktu dateng anteri kami bocara basa basi dikit dah trus waktu
                            aku bayar aku kaget ternyta nda perlu ongkir katanya untu promosi juga.
                            ya udah setelah aku bayar, dia pulang trus aku coba tuh makan di dalem aku kaget kok
                            beda dari sate yang pernah aku makan aku juga kaget klo satenya khas nda pake brambang.
                            tekstur bumbu juara sih ini namanya dagingnya juga udah baceman yang aku rasakan. REPEAT
                            ORDER SIH INI</p>
                    </div>
                    <div class="text-stay cnt-7text deactivate">
                        <h1 class="text-center display-4">7Pasti Repeat Order</h1>
                        <p class="text-center">7kemarin saya tiba tiba di chat sama pemilik,
                            saya kenal tetapi sudah lama juga nda ketemu.
                            saya nda tau kenapa nih jadi saya bales aja eh
                            ternyata dia cuman nawari sate jualan dia. ya udah aku pesen kan namanya juga temen,
                            waktu dateng anteri kami bocara basa basi dikit dah trus waktu
                            aku bayar aku kaget ternyta nda perlu ongkir katanya untu promosi juga.
                            ya udah setelah aku bayar, dia pulang trus aku coba tuh makan di dalem aku kaget kok
                            beda dari sate yang pernah aku makan aku juga kaget klo satenya khas nda pake brambang.
                            tekstur bumbu juara sih ini namanya dagingnya juga udah baceman yang aku rasakan. REPEAT
                            ORDER SIH INI</p>
                    </div>
                    <div class="text-stay cnt-8text deactivate">
                        <h1 class="text-center display-4">8Pasti Repeat Order</h1>
                        <p class="text-center">8kemarin saya tiba tiba di chat sama pemilik,
                            saya kenal tetapi sudah lama juga nda ketemu.
                            saya nda tau kenapa nih jadi saya bales aja eh
                            ternyata dia cuman nawari sate jualan dia. ya udah aku pesen kan namanya juga temen,
                            waktu dateng anteri kami bocara basa basi dikit dah trus waktu
                            aku bayar aku kaget ternyta nda perlu ongkir katanya untu promosi juga.
                            ya udah setelah aku bayar, dia pulang trus aku coba tuh makan di dalem aku kaget kok
                            beda dari sate yang pernah aku makan aku juga kaget klo satenya khas nda pake brambang.
                            tekstur bumbu juara sih ini namanya dagingnya juga udah baceman yang aku rasakan. REPEAT
                            ORDER SIH INI</p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="box-img-testi cnt-transition ">
                        <a class="middle cnt-1 active "></a>
                        <img src="./asset/png-toon/png-testi/1.jpg" class="photo-testi-1-child" alt="">
                    </div>
                    <div class="box-img-testi cnt-transition">
                        <a class="middle cnt-2"></a>
                        <img src="./asset/png-toon/png-testi/2.jpg" class="photo-testi-1-child" alt="">
                    </div>
                    <div class="box-img-testi cnt-transition">
                        <a class="middle cnt-3"></a>
                        <img src="./asset/png-toon/png-testi/3.jpg" class="photo-testi-1-child" alt="">
                    </div>
                    <div class="box-img-testi cnt-transition">
                        <a class="middle cnt-4"></a>
                        <img src="./asset/png-toon/png-testi/4.jpg" class="photo-testi-1-child" alt="">
                    </div>




                </div>
                <div class="col-lg-1">
                    <div class="box-img-testi2 cnt-transition">
                        <a class="middle cnt-5"></a>
                        <img src="./asset/png-toon/png-testi/5.jpg" class="photo-testi-1-child"
                            style="object-position: 50% 0%;" alt="">
                    </div>
                    <div class="box-img-testi2 cnt-transition">
                        <a class="middle cnt-6"></a>
                        <img src="./asset/png-toon/png-testi/6.jpg" class="photo-testi-1-child" alt="">
                    </div>
                    <div class="box-img-testi2 cnt-transition">
                        <a class="middle cnt-7"></a>
                        <img src="./asset/png-toon/png-testi/7.jpg" class="photo-testi-1-child" alt="">
                    </div>
                    <div class="box-img-testi2 cnt-transition ">
                        <a class="middle cnt-8"></a>
                        <img src="./asset/png-toon/png-testi/8.jpg" class="photo-testi-1-child" alt="">
                    </div>

                </div>

            </div>
        </div>
    </section> --}}

    <section id="testimoni">
        <div class="container-fluid">
            <div class="row relative">
                <div class="col-lg-7 ">
                    @foreach ($testimonis as $index => $testimoni)
                        @if ($index == 0)
                            <div class="text-stay cnt-{{ $index + 1 }}text ">
                                <h1 class="text-center display-4">{{ $testimoni->judul }}</h1>
                                <p class="text-center">{{ $testimoni->desc }}</p>
                                <div class="display-6 text-end"> {{ $testimoni->name }} </div>

                            </div>

                        @else
                            <div class="text-stay cnt-{{ $index + 1 }}text deactivate ">
                                <h1 class="text-center display-4">{{ $testimoni->judul }}</h1>
                                <p class="text-center">{{ $testimoni->desc }}</p>
                                <div class="display-6 text-end"> {{ $testimoni->name }} </div>

                            </div>

                        @endif

                    @endforeach

                </div>

                <div class="col-lg-3">
                    @foreach ($testimonis as $index => $testimoni)
                        @if (($index + 1) % 2 != 0)
                            @if ($index == 0)
                                <div class="box-img-testi cnt-transition ">
                                    <a class="middle cnt-{{ $index + 1 }} active "></a>
                                    <img src="./asset/png-toon/png-testi/{{ $testimoni->foto }}"
                                        class="photo-testi-1-child" alt="">
                                </div>
                            @else
                                <div class="box-img-testi cnt-transition ">
                                    <a class="middle cnt-{{ $index + 1 }}  "></a>
                                    <img src="./asset/png-toon/png-testi/{{ $testimoni->foto }}"
                                        class="photo-testi-1-child" alt="">
                                </div>
                            @endif
                        @endif
                    @endforeach


                </div>
                <div class="col-lg-1">
                    @foreach ($testimonis as $index => $testimoni)
                        @if (($index + 1) % 2 == 0)
                            <div class="box-img-testi2 cnt-transition">
                                <a class="middle cnt-{{ $index + 1 }}  "></a>
                                <img src="./asset/png-toon/png-testi/{{ $testimoni->foto }}"
                                    class="photo-testi-1-child" alt="">
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>
        </div>
    </section>


    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row pr-5 pl-5 pt-3">
                <div class="col-md-3">
                    <h5>
                        layanan pelanggan
                    </h5>
                    <ul>
                        <li>Pusat Bantuan</li>
                        <li>Cara Pembelian</li>
                        <li>Pengiriman</li>
                        <li>Cara Pengembalian</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 style="margin-left: 5px;">Tentang Kami</h5>
                    <p class="text-justify">Lorem ipsum, dolor sit amet consectetur bfsd adipisicing elit. Maiores, ea
                        voluptatum.</p>
                </div>
                <div class="col-md-3">
                    <h5>Mitra Kerjasama</h5>
                    <ul>
                        <li>Go-Jek</li>
                        <li>Grab</li>
                        <li>JNE</li>
                        <li>Pt. Pos Indonesia</li>
                        <li>TIKI</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>
                        Hubungi Kami
                    </h5>
                    <ul>
                        <li>793028022</li>
                        <li>produku@gmul.com</li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>

    <div class="copyright bg-light text-center  pt-1">
        <p class="">Developed by bootstrapku Copyright <i class="fas fa-copyright"></i></p>
        <a href="/edit">admin</a>
    </div>

    <div class="modal fade" id="list-video" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="list-video-Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="list-video-Label">Video List</h5>
                </div>
                <div class="modal-body">
                    <div class="list-group group-video">
                        @foreach ($wwds as $index => $wwd)
                            @if ($index == 0)
                                <a
                                    class="list-group-item list-group-item-action switch-active active">{{ $wwd->foto }}</a>

                            @else
                                <a class="list-group-item list-group-item-action switch-active">{{ $wwd->foto }}</a>
                            @endif
                        @endforeach

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary button-switch-video" data-bs-dismiss="modal">Choose
                        This One</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="video-play-modal" tabindex="-1" aria-labelledby="video-play-modal-label"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="video-play-modal-label">enjoy</h5>
                    <button type="button" class="btn-close btn-close-video" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <video width="1105" height="450" id="tmplt-play-it" controls>
                        <source id="play-it" src="" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>




    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/CSSRulePlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="{{ asset('asset') }}/js/sate.js"></script>
    <script src="{{ asset('asset') }}/js/sateanimate.js"></script>
</body>

</html>
