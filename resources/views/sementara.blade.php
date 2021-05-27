<section id="testimoni">
    <div class="container-fluid">
        <div class="row relative">
            <div class="col-lg-7 ">
                @foreach ($testimonis as $index => $testimoni)
                    @if ($index == 0)
                        <div class="text-stay cnt-{{ $index + 1 }}text ">
                            <h1 class="text-center display-4">{{ $testimoni->judul }}</h1>
                            <p class="text-center">{{ $testimoni->desc }}</p>
                        </div>

                    @else
                        <div class="text-stay cnt-{{ $index + 1 }}text deactivate ">
                            <h1 class="text-center display-4">{{ $testimoni->judul }}</h1>
                            <p class="text-center">{{ $testimoni->desc }}</p>
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
                            <img src="./asset/png-toon/png-testi/{{ $testimoni->foto }}" class="photo-testi-1-child"
                                alt="">
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </div>
</section>
