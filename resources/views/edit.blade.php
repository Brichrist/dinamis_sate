<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset') }}/css/editsate.css">
    <script src="https://kit.fontawesome.com/472c7ba5af.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" />



    <title>Hello, world!</title>
</head>

<body onLoad="scrollpst()">

    <div class="container">

        <div class="yAxis invisible">{{ $yAxis }}</div>

        <h1>Welcome to edit setting </h1>
        <a href="/content">view</a>

        <section id="homeslider" class="mt-5">
            <div class="slider">
                <h2><i class="fas fa-edit"></i>slider setting</h2>
                <div class="d-flex justify-content-end">
                    <button type="button" id="slideraddbutton" class="btn btn-primary slider add " data-id=""
                        data-bs-toggle="modal" data-bs-target="#slideradd">add</button>
                </div>
                <table id="sliderDataTable" class="table table-bordered mt-2">
                    <thead>
                        <tr>
                            <th scope="col" class="col-lg-1">#</th>
                            <th scope="col" class="col-lg-2">Preview</th>
                            <th scope="col" class="col-lg-2">file</th>
                            <th scope="col" class="col-lg-2">active</th>
                            <th scope="col" class="col-lg-2">control</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $slider)
                            <tr>
                                <th scope="row">{{ $slider->id }}</th>
                                {{-- {{ $index +1 }} --}}
                                <td><img class="sliderPreviewImageTable mx-auto"
                                        src="{{ url('foto/sliderfoto/' . $slider->foto) }}" alt=""></td>
                                {{-- {{$slider->foto}} --}}
                                <td>{{ $slider->foto }}</td>
                                <td>
                                    @if ($slider->active == 'active')
                                        <span class="text-succes fw-bolder status">Active</span>
                                    @else
                                        <span class="text-danger fw-bolder status">Inactive</span>
                                    @endif
                                </td>

                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-success Editslider me-3"
                                            data-bs-toggle="modal" data-bs-target="#slider">Edit</button>
                                        <a type="button" href="/deleteslider/{{ $slider->id }}"
                                            class="btn btn-danger slider delete me-3" data-id="">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </section>

        <section id="homeproduct" class="mt-5">
            <div class="product">
                <h2><i class="fas fa-edit"></i>product setting</h2>
                <div class="d-flex justify-content-end">
                    <button type="button" id="productaddbutton" class="btn btn-primary product add " data-id=""
                        data-bs-toggle="modal" data-bs-target="#productadd">add</button>
                </div>
                <table id="productDataTable" class="table table-bordered mt-2">
                    <thead>
                        <tr>
                            <th scope="col" class="col-lg-1">#</th>
                            <th scope="col" class="col-lg-2">Preview</th>
                            <th scope="col" class="col-lg-2">file</th>
                            <th scope="col" class="col-lg-1">name</th>
                            <th scope="col" class="col-lg-2">desc</th>
                            <th scope="col" class="col-lg-2">active</th>
                            <th scope="col" class="col-lg-2">control</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                {{-- {{ $index +1 }} --}}
                                <td><img class="productPreviewImageTable mx-auto"
                                        src="{{ url('foto/productfoto/' . $product->foto) }}" alt=""></td>
                                {{-- {{$product->foto}} --}}
                                <td>{{ $product->foto }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->desc }}</td>
                                <td>
                                    @if ($product->active == 'active')
                                        <span class="text-succes fw-bolder status">Active</span>
                                    @else
                                        <span class="text-danger fw-bolder status">Inactive</span>
                                    @endif
                                </td>

                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-success Editproduct me-3"
                                            data-bs-toggle="modal" data-bs-target="#product">Edit</button>
                                        <a type="button" href="/deleteproduct/{{ $product->id }}"
                                            class="btn btn-danger product delete me-3" data-id="">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </section>

        <section id="homeevent" class="mt-5">
            <div class="event">
                <h2><i class="fas fa-edit"></i>event setting</h2>
                <div class="d-flex justify-content-end">
                    <button type="button" id="eventaddbutton" class="btn btn-primary event add " data-id=""
                        data-bs-toggle="modal" data-bs-target="#eventadd">add</button>
                </div>
                <table id="eventDataTable" class="table table-bordered mt-2">
                    <thead>
                        <tr>
                            <th scope="col" class="col-lg-1">#</th>
                            <th scope="col" class="col-lg-2">Preview</th>
                            <th scope="col" class="col-lg-2">file</th>
                            <th scope="col" class="col-lg-2">event</th>
                            <th scope="col" class="col-lg-2">active</th>
                            <th scope="col" class="col-lg-2">control</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <th scope="row">{{ $event->id }}</th>
                                {{-- {{ $index +1 }} --}}
                                <td><img class="eventPreviewImageTable mx-auto"
                                        src="{{ url('foto/eventfoto/' . $event->foto) }}" alt=""></td>
                                {{-- {{$event->foto}} --}}
                                <td>{{ $event->foto }}</td>
                                <td>{{ $event->event }}</td>
                                <td>
                                    @if ($event->active == 'active')
                                        <span class="text-succes fw-bolder status">Active</span>
                                    @else
                                        <span class="text-danger fw-bolder status">Inactive</span>
                                    @endif
                                </td>

                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-success Editevent me-3"
                                            data-bs-toggle="modal" data-bs-target="#event">Edit</button>
                                        <a type="button" href="/deleteevent/{{ $event->id }}"
                                            class="btn btn-danger event delete me-3" data-id="">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </section>

        <section id="homewwd" class="mt-5">
            <div class="wwd">
                <h2><i class="fas fa-edit"></i>wwd setting</h2>
                <div class="d-flex justify-content-end">
                    <button type="button" id="wwdaddbutton" class="btn btn-primary wwd add " data-id=""
                        data-bs-toggle="modal" data-bs-target="#wwdadd">add</button>
                </div>
                <table id="wwdDataTable" class="table table-bordered mt-2">
                    <thead>
                        <tr>
                            <th scope="col" class="col-lg-1">#</th>
                            <th scope="col" class="col-lg-2">Preview</th>
                            <th scope="col" class="col-lg-2">file</th>
                            <th scope="col" class="col-lg-2">active</th>
                            <th scope="col" class="col-lg-2">control</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wwds as $wwd)
                            <tr>
                                <th scope="row">{{ $wwd->id }}</th>
                                {{-- {{ $index +1 }} --}}
                                <td>
                                    <video class="wwdPreviewImageTable mx-auto" preload="metadata" controls muted loop
                                        width="100%" height="200px">
                                        <source src="{{ url('foto/wwdfoto/' . $wwd->foto) }}" type="video/mp4">
                                    </video>
                                </td>
                                {{-- {{$wwd->foto}} --}}
                                <td>{{ $wwd->foto }}</td>
                                <td>
                                    @if ($wwd->active == 'active')
                                        <span class="text-succes fw-bolder status">Active</span>
                                    @else
                                        <span class="text-danger fw-bolder status">Inactive</span>
                                    @endif
                                </td>

                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-success Editwwd me-3"
                                            data-bs-toggle="modal" data-bs-target="#wwd">Edit</button>
                                        <a type="button" href="/deletewwd/{{ $wwd->id }}"
                                            class="btn btn-danger wwd delete me-3" data-id="">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </section>

        <section id="hometestimoni" class="mt-5">
            <div class="testimoni">
                <h2><i class="fas fa-edit"></i>testimoni setting</h2>
                <div class="d-flex justify-content-end">
                    <button type="button" id="testimoniaddbutton" class="btn btn-primary testimoni add " data-id=""
                        data-bs-toggle="modal" data-bs-target="#testimoniadd">add</button>
                </div>
                <table id="testimoniDataTable" class="table table-bordered mt-2">
                    <thead>
                        <tr>
                            <th scope="col" class="col-lg-1">#</th>
                            <th scope="col" class="col-lg-2">Preview</th>
                            <th scope="col" class="col-lg-1">file</th>
                            <th scope="col" class="col-lg-1">judul</th>
                            <th scope="col" class="col-lg-3">desc</th>
                            <th scope="col" class="col-lg-1">name</th>
                            <th scope="col" class="col-lg-1">active</th>
                            <th scope="col" class="col-lg-2">control</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonis as $testimoni)
                            <tr>
                                <th scope="row">{{ $testimoni->id }}</th>
                                {{-- {{ $index +1 }} --}}
                                <td><img class="testimoniPreviewImageTable mx-auto"
                                        src="{{ url('foto/testimonifoto/' . $testimoni->foto) }}" alt=""></td>
                                {{-- {{$testimoni->foto}} --}}
                                <td>{{ $testimoni->foto }}</td>
                                <td>{{ $testimoni->judul }}</td>
                                <td>{{ $testimoni->desc }}</td>
                                <td>{{ $testimoni->name }}</td>
                                <td>
                                    @if ($testimoni->active == 'active')
                                        <span class="text-succes fw-bolder status">Active</span>
                                    @else
                                        <span class="text-danger fw-bolder status">Inactive</span>
                                    @endif
                                </td>

                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-success Edittestimoni me-3"
                                            data-bs-toggle="modal" data-bs-target="#testimoni">Edit</button>
                                        <a type="button" href="/deletetestimoni/{{ $testimoni->id }}"
                                            class="btn btn-danger testimoni delete me-3" data-id="">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </section>





    </div>

    <section id="modal-slider">
        <div class="modal fade" id="slideradd" tabindex="-1" aria-labelledby="sliderLabel" data-bs-backdrop="static"
            data-bs-keyboard="false" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="sliderLabeladd">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/sliderstore" id="sliderFormadd" method="post" enctype="multipart/form-data">
                        {{-- /sliderstore --}}
                        @csrf
                        <div class="modal-body">


                            <h1 class="mb-0">
                                slider
                                <span class="text-primary">Setting</span>

                            </h1>

                            <div>

                                <div class="mt-3">
                                    <label class="form-label">preview image</label>
                                    <div>
                                        <img id="sliderPreviewImageadd"
                                            class="two img-profile rounded-circle mx-auto mb-2 invisible" src=""
                                            width="100px" height="100px" />
                                    </div>

                                    <input class="form-control mt-3 form-control-sm @error('foto') is-invalid @enderror"
                                        id="sliderImageFileadd" type="file" value="" name="foto">
                                    @error('foto')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="mt-3 form-check form-switch">
                                        <label class="form-label ">Active</label>
                                        <input class="form-check-input " id="sliderActiveCheckadd" type="checkbox"
                                            value="active" name="active" checked>
                                    </div>
                                </div>

                            </div>



                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="slideraddform" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="slider" tabindex="-1" aria-labelledby="sliderLabel" data-bs-backdrop="static"
            data-bs-keyboard="false" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="sliderLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/sliderupdate/{id}" id="sliderForm" method="post" enctype="multipart/form-data">

                        {{-- <form action="/change/{{$karyawan->id}}/{{$karyawan->skill}}" id="contactsForm" method="post" enctype="multipart/form-data"> --}}
                        @csrf
                        <div class="modal-body">

                            <h1 class="mb-0">
                                slider
                                <span class="text-primary">Setting</span>

                            </h1>

                            <div>

                                <div class="mt-3">
                                    <label class="form-label">preview image</label>
                                    <div>
                                        <img id="sliderPreviewImage" class="two img-profile rounded-circle mx-auto mb-2"
                                            src="" width="100px" height="100px" />
                                    </div>
                                    <label> before : <span class="sliderFileName"></span></label>
                                    <input name="foto"
                                        class="form-control mt-3 form-control-sm @error('foto') is-invalid @enderror"
                                        id="sliderImageFile" type="file" value="">
                                    @error('foto')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="mt-3">
                                        <label class="form-label ">active = </label>
                                        <input name="active" class="form-check-input " id="sliderActiveCheck"
                                            type="checkbox" value="active" checked>
                                    </div>
                                </div>

                            </div>



                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="sliderupdateform" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="modal-product">
        <div class="modal fade" id="productadd" tabindex="-1" aria-labelledby="productLabel" data-bs-backdrop="static"
            data-bs-keyboard="false" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productLabeladd">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/productstore" id="productFormadd" method="post" enctype="multipart/form-data">
                        {{-- /productstore --}}
                        @csrf
                        <div class="modal-body">


                            <h1 class="mb-0">
                                product
                                <span class="text-primary">Setting</span>

                            </h1>

                            <div>

                                <div class="mt-3">
                                    <label class="form-label">preview image</label>
                                    <div>
                                        <img id="productPreviewImageadd"
                                            class="two img-profile rounded-circle mx-auto mb-2 invisible" src=""
                                            width="100px" height="100px" />
                                    </div>

                                    <input class="form-control mt-3 form-control-sm @error('foto') is-invalid @enderror"
                                        id="productImageFileadd" type="file" value="" name="foto">
                                    @error('foto')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label class="form-label">name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label class="form-label">description</label>
                                    <textarea type="text" name="desc"
                                        class="form-control @error('desc') is-invalid @enderror"></textarea>
                                    @error('desc')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="mt-3 form-check form-switch">
                                        <label class="form-label ">Active</label>
                                        <input class="form-check-input " id="productActiveCheckadd" type="checkbox"
                                            value="active" name="active" checked>
                                    </div>
                                </div>

                            </div>



                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="productaddform" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="product" tabindex="-1" aria-labelledby="productLabel" data-bs-backdrop="static"
            data-bs-keyboard="false" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/productupdate/{id}" id="productForm" method="post" enctype="multipart/form-data">

                        {{-- <form action="/change/{{$karyawan->id}}/{{$karyawan->skill}}" id="contactsForm" method="post" enctype="multipart/form-data"> --}}
                        @csrf
                        <div class="modal-body">

                            <h1 class="mb-0">
                                product
                                <span class="text-primary">Setting</span>

                            </h1>

                            <div>

                                <div class="mt-3">
                                    <label class="form-label">preview image</label>
                                    <div>
                                        <img id="productPreviewImage"
                                            class="two img-profile rounded-circle mx-auto mb-2" src="" width="100px"
                                            height="100px" />
                                    </div>
                                    <label> before : <span class="productFileName"></span></label>
                                    <input name="foto"
                                        class="form-control mt-3 form-control-sm @error('foto') is-invalid @enderror"
                                        id="productImageFile" type="file" value="">
                                    @error('foto')
                                        <div class="alert alert-danger"></div>
                                    @enderror
                                    <label class="form-label">name</label>
                                    <input type="text" name="name" value="" id="productName"
                                        class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label class="form-label">description</label>
                                    <textarea type="text" name="desc" value="" id="productDesc"
                                        class="form-control @error('desc') is-invalid @enderror">
                                    </textarea>
                                    @error('desc')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="mt-3">
                                        <label class="form-label ">active = </label>
                                        <input name="active" class="form-check-input " id="productActiveCheck"
                                            type="checkbox" value="active" checked>
                                    </div>
                                </div>

                            </div>





                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="productupdateform" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="modal-event">
        <div class="modal fade" id="eventadd" tabindex="-1" aria-labelledby="eventLabel" data-bs-backdrop="static"
            data-bs-keyboard="false" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="eventLabeladd">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/eventstore" id="eventFormadd" method="post" enctype="multipart/form-data">
                        {{-- /eventstore --}}
                        @csrf
                        <div class="modal-body">


                            <h1 class="mb-0">
                                event
                                <span class="text-primary">Setting</span>

                            </h1>

                            <div>

                                <div class="mt-3">
                                    <label class="form-label">preview image</label>
                                    <div>
                                        <img id="eventPreviewImageadd"
                                            class="two img-profile rounded-circle mx-auto mb-2 invisible" src=""
                                            width="100px" height="100px" />
                                    </div>

                                    <input class="form-control mt-3 form-control-sm @error('foto') is-invalid @enderror"
                                        id="eventImageFileadd" type="file" value="" name="foto">
                                    @error('foto')
                                        <div class="alert alert-danger"></div>
                                    @enderror
                                    <label class="form-label">event</label>
                                    <textarea type="text" name="event"
                                        class="form-control @error('event') is-invalid @enderror"></textarea>
                                    @error('event')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="mt-3 form-check form-switch">
                                        <label class="form-label ">Active</label>
                                        <input class="form-check-input " id="eventActiveCheckadd" type="checkbox"
                                            value="active" name="active" checked>
                                    </div>
                                </div>

                            </div>



                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="eventaddform" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="event" tabindex="-1" aria-labelledby="eventLabel" data-bs-backdrop="static"
            data-bs-keyboard="false" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="eventLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/eventupdate/{id}" id="eventForm" method="post" enctype="multipart/form-data">

                        {{-- <form action="/change/{{$karyawan->id}}/{{$karyawan->skill}}" id="contactsForm" method="post" enctype="multipart/form-data"> --}}
                        @csrf
                        <div class="modal-body">

                            <h1 class="mb-0">
                                event
                                <span class="text-primary">Setting</span>

                            </h1>

                            <div>

                                <div class="mt-3">
                                    <label class="form-label">preview image</label>
                                    <div>
                                        <img id="eventPreviewImage" class="two img-profile rounded-circle mx-auto mb-2"
                                            src="" width="100px" height="100px" />
                                    </div>
                                    <label> before : <span class="eventFileName"></span></label>
                                    <input name="foto"
                                        class="form-control mt-3 form-control-sm @error('foto') is-invalid @enderror"
                                        id="eventImageFile" type="file" value="">
                                    @error('foto')
                                        <div class="alert alert-danger"></div>
                                    @enderror
                                    <label class="form-label">event</label>
                                    <textarea type="text" name="event" value="" id="eventevent"
                                        class="form-control @error('event') is-invalid @enderror">
                                    </textarea>
                                    @error('event')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="mt-3">
                                        <label class="form-label ">active = </label>
                                        <input name="active" class="form-check-input " id="eventActiveCheck"
                                            type="checkbox" value="active" checked>
                                    </div>
                                </div>

                            </div>





                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="eventupdateform" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="modal-wwd">
        <div class="modal fade" id="wwdadd" tabindex="-1" aria-labelledby="wwdLabel" data-bs-backdrop="static"
            data-bs-keyboard="false" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="wwdLabeladd">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/wwdstore" id="wwdFormadd" method="post" enctype="multipart/form-data">
                        {{-- /wwdstore --}}
                        @csrf
                        <div class="modal-body">


                            <h1 class="mb-0">
                                wwd
                                <span class="text-primary">Setting</span>

                            </h1>

                            <div>

                                <div class="mt-3">
                                    <label class="form-label">preview image</label>
                                    <div>
                                        <video preload="metadata" id="wwdPreviewImageaddvd" autoplay muted loop
                                            width="100px" height="100px">
                                            <source id="wwdPreviewImageadd" src="" type="video/mp4">
                                        </video>
                                    </div>

                                    <input class="form-control mt-3 form-control-sm @error('foto') is-invalid @enderror"
                                        id="wwdImageFileadd" type="file" value="" name="foto">
                                    @error('foto')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="mt-3 form-check form-switch">
                                        <label class="form-label ">Active</label>
                                        <input class="form-check-input " id="wwdActiveCheckadd" type="checkbox"
                                            value="active" name="active" checked>
                                    </div>
                                </div>

                            </div>



                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="wwdaddform" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="wwd" tabindex="-1" aria-labelledby="wwdLabel" data-bs-backdrop="static"
            data-bs-keyboard="false" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="wwdLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/wwdupdate/{id}" id="wwdForm" method="post" enctype="multipart/form-data">

                        {{-- <form action="/change/{{$karyawan->id}}/{{$karyawan->skill}}" id="contactsForm" method="post" enctype="multipart/form-data"> --}}
                        @csrf
                        <div class="modal-body">

                            <h1 class="mb-0">
                                wwd
                                <span class="text-primary">Setting</span>

                            </h1>

                            <div>

                                <div class="mt-3">
                                    <label class="form-label">preview image</label>
                                    <div>
                                        <video preload="metadata" id="wwdPreviewImagevd" autoplay muted loop
                                            width="100px" height="100px">
                                            <source id="wwdPreviewImage" src="" type="video/mp4">
                                        </video>
                                    </div>
                                    <label> before : <span class="wwdFileName"></span></label>
                                    <input name="foto"
                                        class="form-control mt-3 form-control-sm @error('foto') is-invalid @enderror"
                                        id="wwdImageFile" type="file" value="">
                                    @error('foto')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="mt-3">
                                        <label class="form-label ">active = </label>
                                        <input name="active" class="form-check-input " id="wwdActiveCheck"
                                            type="checkbox" value="active" checked>
                                    </div>
                                </div>

                            </div>



                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="wwdupdateform" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="modal-testimoni">
        <div class="modal fade" id="testimoniadd" tabindex="-1" aria-labelledby="testimoniLabel"
            data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="testimoniLabeladd">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/testimonistore" id="testimoniFormadd" method="post" enctype="multipart/form-data">
                        {{-- /testimonistore --}}
                        @csrf
                        <div class="modal-body">


                            <h1 class="mb-0">
                                testimoni
                                <span class="text-primary">Setting</span>

                            </h1>

                            <div>

                                <div class="mt-3">
                                    <label class="form-label">preview image</label>
                                    <div>
                                        <img id="testimoniPreviewImageadd"
                                            class="two img-profile rounded-circle mx-auto mb-2 invisible" src=""
                                            width="100px" height="100px" />
                                    </div>

                                    <input class="form-control mt-3 form-control-sm @error('foto') is-invalid @enderror"
                                        id="testimoniImageFileadd" type="file" value="" name="foto">
                                    @error('foto')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label class="form-label">judul</label>
                                    <input type="text" name="judul"
                                        class="form-control @error('judul') is-invalid @enderror">
                                    @error('judul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label class="form-label">description</label>
                                    <textarea type="text" name="desc"
                                        class="form-control @error('desc') is-invalid @enderror"></textarea>
                                    @error('desc')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label class="form-label">name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="mt-3 form-check form-switch">
                                        <label class="form-label ">Active</label>
                                        <input class="form-check-input " id="testimoniActiveCheckadd" type="checkbox"
                                            value="active" name="active" checked>
                                    </div>
                                </div>

                            </div>



                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="testimoniaddform" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="testimoni" tabindex="-1" aria-labelledby="testimoniLabel" data-bs-backdrop="static"
            data-bs-keyboard="false" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="testimoniLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/testimoniupdate/{id}" id="testimoniForm" method="post" enctype="multipart/form-data">

                        {{-- <form action="/change/{{$karyawan->id}}/{{$karyawan->skill}}" id="contactsForm" method="post" enctype="multipart/form-data"> --}}
                        @csrf
                        <div class="modal-body">

                            <h1 class="mb-0">
                                testimoni
                                <span class="text-primary">Setting</span>

                            </h1>

                            <div>

                                <div class="mt-3">
                                    <label class="form-label">preview image</label>
                                    <div>
                                        <img id="testimoniPreviewImage"
                                            class="two img-profile rounded-circle mx-auto mb-2" src="" width="100px"
                                            height="100px" />
                                    </div>
                                    <label> before : <span class="testimoniFileName"></span></label>
                                    <input name="foto"
                                        class="form-control mt-3 form-control-sm @error('foto') is-invalid @enderror"
                                        id="testimoniImageFile" type="file" value="">
                                    @error('foto')
                                        <div class="alert alert-danger"></div>
                                    @enderror
                                    <label class="form-label">judul</label>
                                    <input type="text" name="judul" value="" id="testimoniJudul"
                                        class="form-control @error('judul') is-invalid @enderror">
                                    @error('judul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label class="form-label">description</label>
                                    <textarea type="text" name="desc" value="" id="testimoniDesc"
                                        class="form-control @error('desc') is-invalid @enderror">
                                    </textarea>
                                    @error('desc')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label class="form-label">name</label>
                                    <input type="text" name="name" value="" id="testimoniName"
                                        class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="mt-3">
                                        <label class="form-label ">active = </label>
                                        <input name="active" class="form-check-input " id="testimoniActiveCheck"
                                            type="checkbox" value="active" checked>
                                    </div>
                                </div>

                            </div>





                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="testimoniupdateform" class="btn btn-primary">Save
                                changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>











    {{-- <script type="text/javascript">
        @if (count($errors) > 0)
            $('#wwd').modal('show');
        @endif

    </script> --}}







    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/CSSRulePlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>


    <script src="{{ asset('asset') }}/js/editsate.js"></script>

    @if (count($errors) > 0)
        <script type="text/javascript">
            $(document).ready(function() {
                $('#wwdadd').modal('show');
            });

        </script>
    @endif
</body>

</html>
