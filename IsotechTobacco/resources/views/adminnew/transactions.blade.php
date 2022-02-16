@extends('layouts.adminnew.base')

@section('meta-title')
    Admin Gondrong | Banner
@endsection

@section('menu-aside')
<ul class="menu-aside">
    @include('components.admin.asidenew.dashboard')
    @include('components.admin.asidenew.setting')
    @include('components.admin.asidenew.banner')
    @include('components.admin.asidenew.product')
    @include('components.admin.asidenew.order')
    @include('components.admin.asidenew.addproduct')
    @include('components.admin.asidenew-active.transaction')
    @include('components.admin.asidenew.shipping')
</ul>
<hr>
<br>
<br>
@endsection

@section('main-section')
<div class="content-header">
    <h2 class="content-title">Transaksi</h2>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-9">
                <header class="border-bottom mb-4 pb-4">
                    <div class="row">
                        <div class="col-lg-5 col-6 me-auto">
                            <input type="text" placeholder="Cari..." class="form-control">
                        </div>
                        <div class="col-lg-2 col-6">
                            <select class="form-select">
                                <option>Metode</option>
                                <option>Master card</option>
                                <option>Visa card</option>
                                <option>Paypal</option>
                            </select>
                        </div>
                    </div>
                </header> <!-- card-header end// -->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID Transaksi</th>
                                <th>Jumlah</th>
                                <th>Metode</th>
                                <th>Tanggal</th>
                                <th class="text-end"> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>#456667</b></td>
                                <td>$294.00</td>
                                <td>
                                    <div class="icontext">
                                        <img class="icon border" src="{{ asset('images/admin/imgs/card-brands/1.png') }}" alt="Payment">
                                        <span class="text text-muted">Amex</span>
                                    </div>
                                </td>
                                <td>16.12.2020, 14:21</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light font-sm rounded">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td><b>#134768</b></td>
                                <td>$294.00</td>
                                <td>
                                    <div class="icontext">
                                        <img class="icon border" src="{{ asset('images/admin/imgs/card-brands/2.png') }}" alt="Payment">
                                        <span class="text text-muted">Master card</span>
                                    </div>
                                </td>
                                <td>16.12.2020, 14:21</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light font-sm rounded">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td><b>#134768</b></td>
                                <td>$294.00</td>
                                <td>
                                    <div class="icontext">
                                        <img class="icon border" src="{{ asset('images/admin/imgs/card-brands/3.png') }}" alt="Payment">
                                        <span class="text text-muted">Paypal</span>
                                    </div>
                                </td>
                                <td>16.12.2020, 14:21</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light font-sm rounded">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td><b>#134768</b></td>
                                <td>$294.00</td>
                                <td>
                                    <div class="icontext">
                                        <img class="icon border" src="{{ asset('images/admin/imgs/card-brands/4.png') }}" alt="Payment">
                                        <span class="text text-muted">Visa</span>
                                    </div>
                                </td>
                                <td>16.12.2020, 14:21</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light font-sm rounded">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td><b>#887780</b></td>
                                <td>$294.00</td>
                                <td>
                                    <div class="icontext">
                                        <img class="icon border" src="{{ asset('images/admin/imgs/card-brands/4.png') }}" alt="Payment">
                                        <span class="text text-muted">Visa</span>
                                    </div>
                                </td>
                                <td>16.12.2020, 14:21</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light font-sm rounded">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td><b>#344556</b></td>
                                <td>$294.00</td>
                                <td>
                                    <div class="icontext">
                                        <img class="icon border" src="{{ asset('images/admin/imgs/card-brands/4.png') }}" alt="Payment">
                                        <span class="text text-muted">Visa</span>
                                    </div>
                                </td>
                                <td>16.12.2020, 14:21</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light font-sm rounded">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td><b>#134768</b></td>
                                <td>$294.00</td>
                                <td>
                                    <div class="icontext">
                                        <img class="icon border" src="{{ asset('images/admin/imgs/card-brands/2.png') }}" alt="Payment">
                                        <span class="text text-muted">Master card</span>
                                    </div>
                                </td>
                                <td>16.12.2020, 14:21</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light font-sm rounded">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td><b>#134768</b></td>
                                <td>$294.00</td>
                                <td>
                                    <div class="icontext">
                                        <img class="icon border" src="{{ asset('images/admin/imgs/card-brands/2.png') }}" alt="Payment">
                                        <span class="text text-muted">Master card</span>
                                    </div>
                                </td>
                                <td>16.12.2020, 14:21</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light font-sm rounded">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td><b>#998784</b></td>
                                <td>$294.00</td>
                                <td>
                                    <div class="icontext">
                                        <img class="icon border" src="{{ asset('images/admin/imgs/card-brands/3.png') }}" alt="Payment">
                                        <span class="text text-muted">Paypal</span>
                                    </div>
                                </td>
                                <td>16.12.2020, 14:21</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light font-sm rounded">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td><b>#556667</b></td>
                                <td>$294.00</td>
                                <td>
                                    <div class="icontext">
                                        <img class="icon border" src="{{ asset('images/admin/imgs/card-brands/3.png') }}" alt="Payment">
                                        <span class="text text-muted">Paypal</span>
                                    </div>
                                </td>
                                <td>16.12.2020, 14:21</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light font-sm rounded">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td><b>#098989</b></td>
                                <td>$294.00</td>
                                <td>
                                    <div class="icontext">
                                        <img class="icon border" src="{{ asset('images/admin/imgs/card-brands/3.png') }}" alt="Payment">
                                        <span class="text text-muted">Paypal</span>
                                    </div>
                                </td>
                                <td>16.12.2020, 14:21</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light font-sm rounded">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td><b>#134768</b></td>
                                <td>$294.00</td>
                                <td>
                                    <div class="icontext">
                                        <img class="icon border" src="{{ asset('images/admin/imgs/card-brands/4.png') }}" alt="Payment">
                                        <span class="text text-muted">Visa</span>
                                    </div>
                                </td>
                                <td>16.12.2020, 14:21</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light font-sm rounded">Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- table-responsive.// -->
            </div> <!-- col end// -->
            <aside class="col-lg-3">
                <div class="box bg-light" style="min-height:80%">
                    <h6 class="mt-15">Detail Transaksi</h6>
                    <hr>
                    <h6 class="mb-0">Tanggal:</h6>
                    <p>December 19th, 2020</p><br>
                    <h6 class="mb-0">Alamat Billing</h6>
                    <p>1901 Thornridge Cir. Shiloh, Hawaii 81063</p><br>
                    <h6 class="mb-0">VAT ID:</h6>
                    <p>54741654160</p><br>
                    <h6 class="mb-0">Email:</h6>
                    <p>support@example.com</p><br>
                    <h6 class="mb-0">Item pembelian:</h6><br>
                    <p>
                        <a href="#"> Adidas Air Jordan <i class="icons material-icons md-launch"></i> </a>
                        <br>
                        <a href="#"> Great product <i class="icons material-icons md-launch"></i> </a>
                    </p>
                    <br>
                    <p>Pembayaran: PayPal</p>
                    <p class="h4">$457.14</p>
                    <hr>
                    <a class="btn btn-light" href="#">Unduh struk </a>
                </div>
            </aside> <!-- col end// -->
        </div> <!-- row end// -->
    </div> <!-- card-body // -->
</div> <!-- card end// -->
<div class="pagination-area mt-30 mb-50">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-start">
            <li class="page-item active"><a class="page-link" href="#">01</a></li>
            <li class="page-item"><a class="page-link" href="#">02</a></li>
            <li class="page-item"><a class="page-link" href="#">03</a></li>
            <li class="page-item"><a class="page-link dot" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">16</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li>
        </ul>
    </nav>
</div>
@endsection