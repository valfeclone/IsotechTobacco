@extends('layouts.usernew.base')

@section('meta-title')
    Gondrong Tobacco | Shopping Cart
@endsection

@section('main-content')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="index-4.html" rel="nofollow">Beranda</a>
            <span></span> Riwayat
            <span></span> Detail Pesanan Saya
        </div>
    </div>
</div>
<section class="mt-50 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{-- <div class="table-responsive">
                    <table class="table shopping-summery text-center clean">
                        <thead>
                            <tr class="main-heading">
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Kuantitas</th>
                                <th scope="col">Subtotal</th>
                                <th scope="col">Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="/update-cart" id="formCart" method="POST">
                                @csrf
                            @php
                                $i = 1
                            @endphp
                            @foreach ($carts as $cart)
                            <input type="hidden" name="cart_id-{{ $cart->id }}" id="cart_id-{{ $cart->id }}" value={{ $cart->id }}>
                            <input type="hidden" name="product_id-{{ $i }}" id="product_id-{{ $i }}" value={{ $cart->product->id }}>
                            <tr class="rowchart" id={{ $cart->product->id }}>
                                <td class="image product-thumbnail"><img src="/storage/products/{{ $cart->product->product_image_path }}" alt="#"></td>
                                <td class="product-des product-name">
                                    <h5 class="product-name"><a href="product-detail/{{ $cart->product->id }}">{{ $cart->product->title }}</a></h5>
                                </td>
                                <td class="price" data-title="Price">Rp<span id="price-{{ $i }}">{{ $cart->product->regular_price }}</span></td>
                                <td class="text-center" data-title="Stock">
                                    <div class="detail-qty border radius  m-auto">
                                        <a href="#" class="qty-down" data-index={{ $i }}><i class="fi-rs-angle-small-down"></i></a>
                                        <input type="hidden" name="qtyId-{{ $i }}" id="qtyId-{{ $i }}" value={{ $cart->jumlahPesan }}>
                                        <span id="output-{{ $i }}" class="qty-val">{{ $cart->jumlahPesan }}</span>
                                        <a href="#" class="qty-up" data-index={{ $i }}><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                </td>
                                <td class="text-right" data-title="Cart">
                                    Rp<span id="total-{{ $i }}" class="total-val">{{ $cart->jumlahPesan * $cart->product->regular_price }} </span>
                                </td>
                                <td class="action" data-title="Remove">
                                    <form action="/delete-cart" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $cart->id }}">
                                        <button class="bg-transparent border-white" type="submit">
                                            <a href="#" class="text-muted">
                                                <i class="fi-rs-trash"></i>
                                            </a>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @php
                                $i = $i + 1;
                            @endphp 
                            @endforeach
                        </tbody>
                    </table>
                </div> --}}
                <ul class="list-group shadow">
                    <!-- list group item-->
                    @for ($i = 0; $i < sizeof($items['cart']); $i++)
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="d-flex media align-items-lg-center justify-content-between flex-sm-row p-3">
                            <div class="d-flex flex-row-reverse justify-content-center align-items-center">
                                
                                <div class="media-body order-2 order-lg-1 me-3">
                                    <h5 class="mt-0 font-weight-bold mb-2">{{ $items['cart'][$i]->product->title }}</h5>
                                    <p class="font-italic text-muted mb-0 small">{{ $items['cart'][$i]->jumlahPesan }} x {{ to_rupiah($items['cart'][$i]->product->regular_price) }}</p>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        {{-- <h6 class="font-weight-bold my-2">Rp {{ $items['order'][$i]->totalTagihan }}</h6> --}}
                                        {{-- <ul class="list-inline small">
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                        </ul> --}}
                                    </div>
                                {{-- <a href="/view-order/{{ $items['order'][$i]->idTransaksiOy }}">Lihat Detail</a> --}}
                                </div>
                                <img src="/storage/products/{{ $items['cart'][$i]->product->product_image_path }}" alt="Generic placeholder image" width="100" class="ml-lg-5 order-1 order-lg-2 me-3">
                            </div>
                            {{-- <div class="media-body order-2 order-lg-1">
                                <p class=""><strong>Status:</strong></p>
                                <p class="">{{ $items['order']->statusTransaksi }}</p>
                            </div> --}}
                            <div class="media-body order-2 order-lg-1 me-3">
                                <h5 class="mt-0 font-weight-bold mb-2">Total Harga</h5>
                                <p class="fs-5 font-italic text-muted mb-0 small">
                                    @php
                                        $total = to_rupiah($items['cart'][$i]->jumlahPesan * $items['cart'][$i]->product->regular_price)
                                    @endphp
                                    {{ $total }}
                                </p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    {{-- <h6 class="font-weight-bold my-2">Rp {{ $items['order'][$i]->totalTagihan }}</h6> --}}
                                    {{-- <ul class="list-inline small">
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                    </ul> --}}
                                </div>
                            {{-- <a href="/view-order/{{ $items['order'][$i]->idTransaksiOy }}">Lihat Detail</a> --}}
                            </div>
                        </div> <!-- End -->
                    </li> <!-- End -->
                    @endfor
                    <li class="list-group-item">
                    <div class="d-flex media align-items-lg-center justify-content-between flex-sm-row p-3">
                        <div class="d-flex flex-row-reverse justify-content-center align-items-center">
                            
                            <div class="media-body order-2 order-lg-1 me-3">
                                {{-- <h5 class="mt-0 font-weight-bold mb-2">{{ $items['cart'][$i]->product->title }}</h5>
                                <p class="font-italic text-muted mb-0 small">{{ $items['cart'][$i]->jumlahPesan }} x  Rp{{ $items['cart'][$i]->product->regular_price }}</p> --}}
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    {{-- <h6 class="font-weight-bold my-2">Rp {{ $items['order'][$i]->totalTagihan }}</h6> --}}
                                    {{-- <ul class="list-inline small">
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                    </ul> --}}
                                </div>
                            {{-- <a href="/view-order/{{ $items['order'][$i]->idTransaksiOy }}">Lihat Detail</a> --}}
                            </div>
                            {{-- <img src="/storage/products/{{ $items['cart'][$i]->product->product_image_path }}" alt="Generic placeholder image" width="100" class="ml-lg-5 order-1 order-lg-2 me-3"> --}}
                        </div>
                        {{-- <div class="media-body order-2 order-lg-1">
                            <p class=""><strong>Status:</strong></p>
                            <p class="">{{ $items['order']->statusTransaksi }}</p>
                        </div> --}}
                        <div class="media-body order-2 order-lg-1 me-3">
                            <div>
                                <h5 class="mt-0 font-weight-bold mb-2">Ongkir
                                </h5>
                                <p class="fs-5 font-italic text-muted mb-3 small">
                                    @php
                                        $ongkir = to_rupiah($items['ongkir'])
                                    @endphp
                                    {{ $ongkir }}
                                </p>
                            </div>
                            <h5 class="mt-0 font-weight-bold mb-2">Total Harga</h5>
                            <h6 class="fs-5 font-italic text-muted mb-3 small">
                                @php
                                    $price = to_rupiah($items['order']->totalTagihan)
                                @endphp
                                {{ $price }}
                            </h6>
                            
                            @if ($items['order']->statusTransaksi == 'belum dibayar')
                            <form action="/payment" method="POST" target="_blank" rel="noopener noreferrer">
                                @csrf
                                <input type="hidden" name="amount" value="{{ $items['order']->totalTagihan }}">
                                <input type="hidden" name="order_id" value="{{ $items['order']->id }}">
                                <button class="btn bg-success" type="submit"> <i class="fi-rs-box-alt mr-10"></i> Pembayaran
                                </button>
                            </form>
                            <a href="#">
                                <button class="btn mt-3" type="submit" disabled> Selesaikan Pesanan
                                </button>
                            </a>
                            @else
                            <form action="/payment" method="POST" target="_blank" rel="noopener noreferrer">
                                @csrf
                                <input type="hidden" name="amount" value="{{ $items['order']->totalTagihan }}">
                                <input type="hidden" name="order_id" value="{{ $items['order']->id }}">
                                <button class="btn" type="submit" disabled> <i class="fi-rs-box-alt mr-10"></i> Sudah Dibayar
                                </button>
                            </form>
                            <form action="/selesaikan-order" method="POST">
                                @csrf
                                <input type="hidden" name="amount" value="{{ $items['order']->totalTagihan }}">
                                <input type="hidden" name="order_id" value="{{ $items['order']->id }}">
                                <button class="btn mt-3 bg-success" type="submit" > Selesaikan Pesanan
                                </button>
                            </form>
                            @endif
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                {{-- <h6 class="font-weight-bold my-2">Rp {{ $items['order'][$i]->totalTagihan }}</h6> --}}
                                {{-- <ul class="list-inline small">
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                </ul> --}}
                            </div>
                        {{-- <a href="/view-order/{{ $items['order'][$i]->id }}">Lihat Detail</a> --}}
                        </div>
                    </div> <!-- End -->
                    </li> <!-- End -->

                </ul>
                <div class="mt-4">
                    <a href="/view-order">
                        <button class="btn" type="submit" > <i class="fi-rs-box-alt mr-10"></i> Back</button>
                    </a>
                </div>
                <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
            </div>
        </div>
    </div>
</section>
@endsection