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
            <span></span> Pesanan Saya
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
                    @for ($i = 0; $i < sizeof($items['order']); $i++)
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="d-flex media align-items-lg-center justify-content-between flex-sm-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">{{ $items['cart'][$i]->product->title }}</h5>
                                <p class="font-italic text-muted mb-0 small">{{ $items['cart'][$i]->jumlahPesan }} Unit </p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2">Rp {{ $items['order'][$i]->totalTagihan }}</h6>
                                    {{-- <ul class="list-inline small">
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                    </ul> --}}
                                </div>
                            <a href="/view-order/{{ $items['order'][$i]->id }}">Lihat Detail</a>
                            </div>
                            <div class="media-body order-2 order-lg-1">
                                <p class=""><strong>Status:</strong></p>
                                <p class="">{{ $items['order'][$i]->statusTransaksi }}</p>
                            </div>
                            <img src="/storage/products/{{ $items['cart'][$i]->product->product_image_path }}" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                        </div> <!-- End -->
                    </li> <!-- End -->
                    @endfor
                    {{-- @foreach ($items['order'] as $order)
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="d-flex media align-items-lg-center justify-content-between flex-sm-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Apple iPhone XR (Red, 128 GB)</h5>
                                <p class="font-italic text-muted mb-0 small">128 GB ROM | 15.49 cm (6.1 inch) Display 12MP Rear Camera | 7MP Front Camera A12 Bionic Chip Processor</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2">₹64,999</h6>
                                    <ul class="list-inline small">
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="/storage/products/carbon(2).png" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                        </div> <!-- End -->
                    </li> <!-- End -->
                    @endforeach
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="d-flex media align-items-lg-center justify-content-between flex-sm-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Apple iPhone XR (Red, 128 GB)</h5>
                                <p class="font-italic text-muted mb-0 small">128 GB ROM | 15.49 cm (6.1 inch) Display 12MP Rear Camera | 7MP Front Camera A12 Bionic Chip Processor</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2">₹64,999</h6>
                                    <ul class="list-inline small">
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="/storage/products/carbon(2).png" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                        </div> <!-- End -->
                    </li> <!-- End -->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="d-flex media align-items-lg-center justify-content-between flex-sm-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Apple iPhone XR (Red, 128 GB)</h5>
                                <p class="font-italic text-muted mb-0 small">128 GB ROM | 15.49 cm (6.1 inch) Display 12MP Rear Camera | 7MP Front Camera A12 Bionic Chip Processor</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2">₹64,999</h6>
                                    <ul class="list-inline small">
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="/storage/products/carbon(2).png" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                        </div> <!-- End -->
                    </li> <!-- End -->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="d-flex media align-items-lg-center justify-content-between flex-sm-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Apple iPhone XR (Red, 128 GB)</h5>
                                <p class="font-italic text-muted mb-0 small">128 GB ROM | 15.49 cm (6.1 inch) Display 12MP Rear Camera | 7MP Front Camera A12 Bionic Chip Processor</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2">₹64,999</h6>
                                    <ul class="list-inline small">
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="/storage/products/carbon(2).png" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                        </div> <!-- End -->
                    </li> <!-- End --> --}}
                </ul>
                <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
            </div>
        </div>
    </div>
</section>
@endsection