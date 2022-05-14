<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Admin Gondrong | Invoice
    </title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/user/imgs/theme/favicon.svg') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css-new/user/css/main.css') }}">
</head>

<body>
    <main class="main mx-5 my-5">
        <div class="card mx-5 my-5">
            <div class="bg-dark py-3">
                <h1 class="text-light text-center">INVOICE</h1>
            </div>
            <div class="card-body">
                <div class="row mb-50 mt-20 order-info-wrap">
                    <div class="col-md-4">
                        <article class="icontext align-items-start">
                            <img src="{{ asset('images/user/imgs/logo/Logo-Gondrong.png') }}" width="100" height="100" class="img-xs" alt="Item">
                            <div class="text">
                                <h4 class="mb-1">Gondrong Tobacco</h4>
                            </div>
                        </article>
                    </div> <!-- col// -->
                    <div class="col-md-4">
                        <article class="icontext align-items-start">
                            <span class="icon icon-sm rounded-circle bg-primary-light">
                                <i class="text-primary material-icons md-person"></i>
                            </span>
                            <div class="text">
                                <h4 class="mb-1">Pelanggan</h4>
                                <p class="mb-1">
                                    {{ $items['buyer'][0]->name }} <br> {{ $items['buyer'][0]->email }} <br> {{ $items['buyer'][0]->nomor_telpon }}
                                </p>
                              
                            </div>
                        </article>
                    </div> <!-- col// -->
                    {{-- <div class="col-md-4">
                        <article class="icontext align-items-start">
                            <span class="icon icon-sm rounded-circle bg-primary-light">
                                <i class="text-primary material-icons md-local_shipping"></i>
                            </span>
                            <div class="text">
                                <h4 class="mb-1">Info Pesanan</h4>
                                <p class="mb-1">
                                    Shipping: Fargo express <br> Pay method: card <br> Status: new
                                </p>
                            </div>
                        </article>
                    </div> --}}
                    <div class="col-md-4">
                        <article class="icontext align-items-start">
                            <span class="icon icon-sm rounded-circle bg-primary-light">
                                <i class="text-primary material-icons md-place"></i>
                            </span>
                            <div class="text">
                                <h4 class="mb-1">Dikirim ke</h4>
                                <p class="mb-1">
                                    City: {{ $items['buyer'][0]->kota }} <br>{{ $items['buyer'][0]->alamat }} <br> 
                                </p>
                                
                            </div>
                        </article>
                    </div> <!-- col// -->
                </div> <!-- row // -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="bg-dark text-light">
                                        <th width="40%">Produk</th>
                                        <th width="20%">Harga Unit</th>
                                        <th width="20%">Kuantitas</th>
                                        <th width="20%" class="text-end">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- {{ dd($items['carts']) }} --}}
                                    @foreach ($items['carts'] as $cart)
                                    <tr>
                                        <td>
                                            {{-- <div class="left">
                                                <img src="/storage/products/{{ $cart->product->product_image_path }}" width="40" height="40" class="img-xs" alt="Item">
                                            </div> --}}
                                            <div class="info"> {{ $cart->product->title }}</div>
                                        </td>
                                        <td>Rp {{ $cart->product->regular_price }} </td>
                                        <td> {{ $cart->jumlahPesan }} </td>
                                        @php
                                            $total = $cart->product->regular_price * $cart->jumlahPesan;
                                        @endphp
                                        <td class="text-end">Rp {{ $total }}  </td>
                                    </tr>
                                    @endforeach
                                    
                                    <tr>
                                        <td colspan="4">
                                            <article class="">
                                                <dl class="dlist">
                                                    <dt class="fw-bold">Catatan:</dt>
                                                    <dd>{{ $items['order'][0]->catatan }}</dd>
                                                </dl>
                                            </article>
                                            <article class="float-end">
                                                <dl class="dlist">
                                                    <dt class="fw-bold">Subtotal:</dt>
                                                    @php
                                                        $subtotal = $items['order'][0]->totalTagihan - $items['order'][0]->ongkir;
                                                    @endphp
                                                    <dd>Rp {{ $subtotal }}</dd>
                                                </dl>
                                                <dl class="dlist fw-bold">
                                                    <dt>Ongkos Kirim:</dt>
                                                    <dd>Rp {{ $items['order'][0]->ongkir }}</dd>
                                                </dl>
                                                <dl class="dlist fw-bold">
                                                    <dt>Total:</dt>
                                                    @php
                                                        $total = $items['order'][0]->totalTagihan;
                                                    @endphp
                                                    <dd> <b class="h5">Rp {{ $total }}</b> </dd>
                                                </dl>
                                                <dl class="dlist">
                                                    <dt class="text-muted">Status:</dt>
                                                    <dd>
                                                        
                                                        <span class="badge rounded-pill alert-success text-success">{{ $items['order'][0]->statusTransaksi }}</span>
                                                    </dd>
                                                </dl>
                                            </article>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- table-responsive// -->
                    </div> <!-- col// -->
                    <div class="col-lg-1"></div>
                </div>
            </div> <!-- card-body end// -->
        </div> <!-- card end// -->
    </main>
    
    <!-- Vendor JS-->
    <script src="{{ asset('js-new/user/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js-new/user/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js-new/user/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('js-new/user/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/slick.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/wow.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/counterup.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/isotope.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/jquery.elevatezoom.js') }}"></script>
    <!-- Template  JS -->
    <script src="{{ asset('js-new/user/main.js') }}"></script>
    <script src="{{ asset('js-new/user/shop.js') }}"></script>
</body>

</html>