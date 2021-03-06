@extends('layouts.admin.base')

@section('meta-title')
    Admin Gondrong | Product Lists
@endsection

@section('admin-aside')
<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
        <a href="index.html" class="brand-wrap">
            <img src="{{ asset('images/admin/imgs/theme/logo.svg') }}" class="logo" alt="Evara Dashboard">
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            @include('components.admin.aside.dashboard')
            @include('components.admin.aside.products')
            @include('components.admin.aside-active.orders')
            @include('components.admin.aside.sellers')
            @include('components.admin.aside.addproduct')
            @include('components.admin.aside.transactions')
            @include('components.admin.aside.account')
            @include('components.admin.aside.reviews')
            @include('components.admin.aside.brands')
            @include('components.admin.aside.statistics')
        </ul>
        <hr>
        <ul class="menu-aside">
            <li class="menu-item">
                <a class="menu-link" href="#"> <i class="icon material-icons md-settings"></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="page-blank.html"> <i class="icon material-icons md-local_offer"></i>
                    <span class="text"> Starter page </span>
                </a>
            </li>
        </ul>
        <br>
        <br>
    </nav>
</aside>
@endsection

{{-- START: Title content --}}

@section('content-title')
    Order Lists
@endsection
@section('content-description')
    This is our order lists!  
@endsection
{{-- @section('button-lists') --}}
    {{-- <a href="#" class="btn btn-light rounded font-md">Export</a>
    <a href="#" class="btn btn-light rounded  font-md">Import</a> --}}
    {{-- <a href="/admin/create-product" class="btn btn-primary btn-sm rounded">Create new</a> --}}
{{-- @endsection --}}

{{-- END: Title content --}}

{{-- START: main section --}}

@section('main-section')
<section class="content-main">
    <div class="card mb-4">
        <header class="card-header">
            <div class="row gx-3">
                <div class="col-lg-2 col-6 col-md-3">
                    <form action="/">
                        <label for="status">Filter Status</label>
                        <select class="form-select">
                            <option>Status</option>
                            <option>Active</option>
                            <option>Disabled</option>
                            <option>Show all</option>
                        </select>
                        <br>
                        <input class="btn btn-md rounded font-sm" type="submit" value="submit">
                    </form>
                </div>
            </div>
        </header> <!-- card-header end// -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Total</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                            <th scope="col" class="text-end"> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0901</td>
                            <td><b>Marvin McKinney</b></td>
                            <td>marvin@example.com</td>
                            <td>$9.00</td>
                            <td><span class="badge rounded-pill alert-warning">Pending</span></td>
                            <td>03.12.2020</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">View detail</a>
                                        <a class="dropdown-item" href="#">Edit info</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div> <!-- dropdown //end -->
                            </td>
                        </tr>
                        <tr>
                            <td>2323</td>
                            <td><b>Leslie Alexander</b></td>
                            <td>leslie@example.com</td>
                            <td>$46.61</td>
                            <td><span class="badge rounded-pill alert-warning">Pending</span></td>
                            <td>21.02.2020</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">View detail</a>
                                        <a class="dropdown-item" href="#">Edit info</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div> <!-- dropdown //end -->
                            </td>
                        </tr>
                        <tr>
                            <td>1233</td>
                            <td><b>Esther Howard</b></td>
                            <td>esther@example.com</td>
                            <td>$12.00</td>
                            <td><span class="badge rounded-pill alert-danger">Canceled</span></td>
                            <td>03.07.2020</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">View detail</a>
                                        <a class="dropdown-item" href="#">Edit info</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div> <!-- dropdown //end -->
                            </td>
                        </tr>
                        <tr>
                            <td>1233</td>
                            <td><b>Esther Howard</b></td>
                            <td>esther@example.com</td>
                            <td>$12.00</td>
                            <td><span class="badge rounded-pill alert-danger">Canceled</span></td>
                            <td>03.07.2020</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">View detail</a>
                                        <a class="dropdown-item" href="#">Edit info</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div> <!-- dropdown //end -->
                            </td>
                        </tr>
                        <tr>
                            <td>2323</td>
                            <td><b>Jenny Wilson</b></td>
                            <td>jenny@example.com</td>
                            <td>$589.99</td>
                            <td><span class="badge rounded-pill alert-success">Received</span></td>
                            <td>22.05.2020</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">View detail</a>
                                        <a class="dropdown-item" href="#">Edit info</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div> <!-- dropdown //end -->
                            </td>
                        </tr>
                        <tr>
                            <td>2112</td>
                            <td><b>Marvin McKinney</b></td>
                            <td>marvin@example.com</td>
                            <td>$16.58</td>
                            <td><span class="badge rounded-pill alert-success">Received</span></td>
                            <td>23.04.2020</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">View detail</a>
                                        <a class="dropdown-item" href="#">Edit info</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div> <!-- dropdown //end -->
                            </td>
                        </tr>
                        <tr>
                            <td>7897</td>
                            <td><b>Albert Flores</b></td>
                            <td>albert@example.com</td>
                            <td>$10.00</td>
                            <td><span class="badge rounded-pill alert-success">Received</span></td>
                            <td>13.03.2020</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">View detail</a>
                                        <a class="dropdown-item" href="#">Edit info</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div> <!-- dropdown //end -->
                            </td>
                        </tr>
                        <tr>
                            <td>2323</td>
                            <td><b>Wade Warren</b></td>
                            <td>wade@example.com</td>
                            <td>$105.55</td>
                            <td><span class="badge rounded-pill alert-success">Received</span></td>
                            <td>23.09.2019</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">View detail</a>
                                        <a class="dropdown-item" href="#">Edit info</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div> <!-- dropdown //end -->
                            </td>
                        </tr>
                        <tr>
                            <td>2324</td>
                            <td><b>Jane Cooper</b></td>
                            <td>jane@example.com</td>
                            <td>$710.68</td>
                            <td><span class="badge rounded-pill alert-success">Received</span></td>
                            <td>28.04.2020</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">View detail</a>
                                        <a class="dropdown-item" href="#">Edit info</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div> <!-- dropdown //end -->
                            </td>
                        </tr>
                        <tr>
                            <td>2325</td>
                            <td><b>Savannah Nguyen</b></td>
                            <td>savannah@example.com</td>
                            <td>$710.68</td>
                            <td><span class="badge rounded-pill alert-success">Received</span></td>
                            <td>23.03.2020</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">View detail</a>
                                        <a class="dropdown-item" href="#">Edit info</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div> <!-- dropdown //end -->
                            </td>
                        </tr>
                        <tr>
                            <td>2326</td>
                            <td><b>Guy Hawkins</b></td>
                            <td>guy@example.com</td>
                            <td>$767.50</td>
                            <td><span class="badge rounded-pill alert-success">Received</span></td>
                            <td>28.04.2020</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">View detail</a>
                                        <a class="dropdown-item" href="#">Edit info</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div> <!-- dropdown //end -->
                            </td>
                        </tr>
                        <tr>
                            <td>2327</td>
                            <td><b>Darrell Steward</b></td>
                            <td>darrel@example.com</td>
                            <td>$406.27</td>
                            <td><span class="badge rounded-pill alert-success">Received</span></td>
                            <td>14.07.2020</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">View detail</a>
                                        <a class="dropdown-item" href="#">Edit info</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div> <!-- dropdown //end -->
                            </td>
                        </tr>
                        <tr>
                            <td>2328</td>
                            <td><b>Jane Cooper</b></td>
                            <td>jane@example.com</td>
                            <td>$601.13</td>
                            <td><span class="badge rounded-pill alert-success">Received</span></td>
                            <td>18.03.2020</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">View detail</a>
                                        <a class="dropdown-item" href="#">Edit info</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div> <!-- dropdown //end -->
                            </td>
                        </tr>
                        <tr>
                            <td>2329</td>
                            <td><b>Darlene Robertson</b></td>
                            <td>deriene@example.com</td>
                            <td>$948.55</td>
                            <td><span class="badge rounded-pill alert-success">Received</span></td>
                            <td>03.07.2020</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">View detail</a>
                                        <a class="dropdown-item" href="#">Edit info</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div> <!-- dropdown //end -->
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- table-responsive //end -->
        </div> <!-- card-body end// -->
    </div> <!-- card end// -->
</section>
@endsection

{{-- END: main section --}}
