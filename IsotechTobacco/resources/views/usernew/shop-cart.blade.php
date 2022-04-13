@extends('layouts.usernew.base')

@section('meta-title')
    Gondrong Tobacco | Shopping Cart
@endsection

@section('main-content')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="index-4.html" rel="nofollow">Beranda</a>
            <span></span> Produk
            <span></span> Keranjang Anda
        </div>
    </div>
</div>
<section class="mt-50 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive container">
                    <div class="row">
                        <div class="col-10">
                            <table class="table shopping-summery text-center clean">
                                <thead>
                                    <tr class="main-heading">
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Kuantitas</th>
                                        <th scope="col">Subtotal</th>
                                        {{-- <th scope="col">Hapus</th> --}}
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
                                    <tr class="rowchart" style="height: 7rem;" id={{ $cart->product->id }}>
                                        <td class="image product-thumbnail"><img src="/storage/products/{{ $cart->product->product_image_path }}" alt="#"></td>
                                        <td class="product-des product-name">
                                            <h5 class="product-name"><a href="product-detail/{{ $cart->product->id }}">{{ $cart->product->title }}</a></h5>
                                            {{-- <p class="font-xs">Maboriosam in a tonto nesciung eget<br> distingy magndapibus.
                                            </p> --}}
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
                                        {{-- <td class="action" data-title="Remove">
                                            <form action="/delete-cart" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $cart->id }}">
                                                <button class="bg-transparent border-white" type="submit">
                                                    <a href="#" class="text-muted">
                                                        <i class="fi-rs-trash"></i>
                                                    </a>
                                                </button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                    @php
                                        $i = $i + 1;
                                    @endphp 
                                    @endforeach
                                </form>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-2">
                            <table class="table shopping-summery text-center clean">
                                <thead>
                                    <tr class="main-heading">
                                        <th scope="col">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carts as $cart)
                                    <tr class="rowchart" id={{ $cart->product->id }}>
                                        <td class="" style="height: 7rem;" data-title="Remove">
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
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="cart-action text-end">
                    <button type="submit" form="formCart" class="btn mr-10 mb-sm-15">
                        <a><i class="fi-rs-shuffle mr-10"></i>Update Keranjang</a>
                    </button>
                    <a class="btn " href="/"><i class="fi-rs-shopping-bag mr-10"></i>Lanjut Belanja</a>
                </div>
                <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                <div class="row mb-50">
                    {{-- <div class="col-lg-6 col-md-12">
                        <div class="heading_s1 mb-3">
                            <h4>Hitung Ongkos Kirim</h4>
                        </div>
                        <p class="mt-15 mb-30">Flat rate: <span class="font-xl text-brand fw-900">5%</span></p>
                        <form class="field_form shipping_calculator">
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="custom_select">
                                        <select class="form-control select-active">
                                            <option value="">Choose a option...</option>
                                            <option value="AX">Aland Islands</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="PW">Belau</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="VG">British Virgin Islands</option>
                                            <option value="BN">Brunei</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo (Brazzaville)</option>
                                            <option value="CD">Congo (Kinshasa)</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">CuraÇao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and McDonald Islands</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="CI">Ivory Coast</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Laos</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao S.A.R., China</option>
                                            <option value="MK">Macedonia</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia</option>
                                            <option value="MD">Moldova</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="AN">Netherlands Antilles</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="KP">North Korea</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PS">Palestinian Territory</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="QA">Qatar</option>
                                            <option value="IE">Republic of Ireland</option>
                                            <option value="RE">Reunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russia</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="ST">São Tomé and Príncipe</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="SH">Saint Helena</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="SX">Saint Martin (Dutch part)</option>
                                            <option value="MF">Saint Martin (French part)</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="SM">San Marino</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia/Sandwich Islands</option>
                                            <option value="KR">South Korea</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syria</option>
                                            <option value="TW">Taiwan</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom (UK)</option>
                                            <option value="US">USA (US)</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VA">Vatican</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Vietnam</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="WS">Western Samoa</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="form-group col-lg-6">
                                    <input required="required" placeholder="State / Country" name="name" type="text">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input required="required" placeholder="PostCode / ZIP" name="name" type="text">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <button class="btn  btn-sm"><i class="fi-rs-shuffle mr-10"></i>Perbarui</button>
                                </div>
                            </div>
                        </form>
                      
                    </div> --}}
                    {{-- <div class="col-lg-12 col-md-12">
                        <form action="/checkout" method="POST">
                            @csrf
                            <div class="border p-md-4 p-30 border-radius cart-totals">
                            <div class="heading_s1 mb-3">
                                <h4>Total Keranjang</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="cart_total_label">Subtotal Keranjang</td>
                                            <td class="cart_total_amount">
                                                <span class="font-lg fw-900 text-brand">Rp</span>
                                                <span class="font-lg fw-900 text-brand" id="sub-cart-total-1">
                                                    @php
                                                    $total = 0;
                                                    foreach ($carts as $cart) 
                                                        $total += $cart->jumlahPesan * $cart->product->regular_price
                                                @endphp
                                                {{ $total }}
                                                </span>
                                                <input type="hidden" name="totalTagihan" id="totalTagihan" value="{{ $total }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cart_total_label">Ongkos Kirim</td>
                                            <td class="cart_total_amount">
                                                <span class="font-lg fw-900 text-brand">Rp</span>
                                                <span class="font-lg fw-900 text-brand" id="ongkos-kirim">
                                                    20000
                                                </span>
                                                <input type="hidden" name="totalTagihan" id="totalTagihan" value="{{ $total }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cart_total_label">Total</td>
                                            <td class="cart_total_amount"><strong>
                                                <span class="font-lg fw-900 text-brand">Rp</span>
                                                <span class="font-xl fw-900 text-brand" id="cart-total-1">
                                                @php
                                                    $totalCart = 20000;
                                                    foreach ($carts as $cart) 
                                                        $totalCart += $cart->jumlahPesan * $cart->product->regular_price
                                                @endphp
                                                {{ $totalCart }}    
                                            </span></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button id="btn-checkout" class="btn" type="submit"> <i class="fi-rs-box-alt mr-10"></i> Proceed To CheckOut</button>
                        </div>
                        </form>
                    </div> --}}
                    <div class="col-lg-12 col-md-12">
                        {{-- <form action="/checkout" method="POST">
                            @csrf --}}
                        <div class="border p-md-4 p-30 border-radius cart-totals">
                            <div class="heading_s1 mb-3">
                                <h4>Total Keranjang</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="cart_total_label">Subtotal Keranjang</td>
                                            <td class="cart_total_amount">
                                                <span class="font-lg fw-900 text-brand">Rp</span>
                                                <span class="font-lg fw-900 text-brand" id="sub-cart-total-1">
                                                    @php
                                                    $total = 0;
                                                    foreach ($carts as $cart) 
                                                        $total += $cart->jumlahPesan * $cart->product->regular_price
                                                @endphp
                                                {{ $total }}
                                                </span>
                                                {{-- <input type="hidden" name="totalTagihan" id="totalTagihan" value="{{ $total }}"> --}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cart_total_label">Ongkos Kirim</td>
                                            <td class="cart_total_amount">
                                                <span class="font-lg fw-900 text-brand">Rp</span>
                                                <span class="font-lg fw-900 text-brand" id="ongkos-kirim">
                                                    20000
                                                </span>
                                                {{-- <input type="hidden" name="totalTagihan" id="totalTagihan" value="{{ $total }}"> --}}
                                            </td>
                                            {{-- <td class="cart_total_label">Ongkos Kirim</td>
                                            <td class="cart_total_amount" id="ongkos-kirim">20000</td> --}}
                                        </tr>
                                        <tr>
                                            <td class="cart_total_label">Total</td>
                                            <td class="cart_total_amount"><strong>
                                                <span class="font-lg fw-900 text-brand">Rp</span>
                                                <span class="font-xl fw-900 text-brand" id="cart-total-1">
                                                @php
                                                    $totalCart = 20000;
                                                    foreach ($carts as $cart) 
                                                        $totalCart += $cart->jumlahPesan * $cart->product->regular_price
                                                @endphp
                                                {{ $totalCart }}    
                                            </span></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="/checkout" id="btn-checkout" class="btn" type="submit"> <i class="fi-rs-box-alt mr-10"></i> Proceed To CheckOut</a>
                        </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection