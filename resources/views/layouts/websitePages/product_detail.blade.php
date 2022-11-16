@extends('layouts.website')
@section('home')

@include('layouts.websiteBody.header')
<!------ Include the above in your HEAD tag ---------->
    <body>
    <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Product Details</h3>
                  </div>
               </div>
            </div>
         </div>
    </section>
        <div class="container">
        	<div class="row">
               <div class="col-sm-8 item-photo">
                    <a href="{{$product->product_video}}" target="_blank"><img style="max-width:60%; padding: 35px; margin-top: 20px;" height="325px" width="650px" src="{{asset("$product->product_logo")}}" style="border-radius: 5px;"/></a>
                </div>
                <div class="col-sm-4" style="border:0px solid gray; max-width:40%; padding: 35px;">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3>{{$product->product_name}}</h3>
                    @if($product->product_video)
                        <div class="section" style="padding-bottom:20px;">
                            <a class="btn btn-danger" style="color: white;" href="{{$product->product_video}}" target="_blank"><span style="margin-right:20px;" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><i class="fa fa-play-circle"></i> Watch Video</a>
                        </div>
                    @endif
                    <!-- <h5 style="color:#337ab7">vendido por <a href="#">Samsung</a> -->

                    <!-- Precios -->
                    <h6 class="title-price"><small>Special Offer</small></h6>
                    <h3 style="margin-top:0px;">Rs. {{$product->product_price}} /-</h3>

                    <!-- Detalles especificos del producto -->
                    <!-- <div class="section">
                        <h6 class="title-attr" style="margin-top:15px;" ><small>COLOR</small></h6>
                        <div>
                            <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                            <div class="attr" style="width:25px;background:white;"></div>
                        </div>
                    </div>
                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>CAPACIDAD</small></h6>
                        <div>
                            <div class="attr2">16 GB</div>
                            <div class="attr2">32 GB</div>
                        </div>
                    </div>
                    <div class="section" style="padding-bottom:20px;">
                        <h6 class="title-attr"><small>CANTIDAD</small></h6>
                        <div>
                            <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                            <input value="1" />
                            <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                        </div>
                    </div> -->

                    <!-- Botones de compra -->
                    <!-- <h6 class="title-price"><small>Quantity</small></h6>
                    <input value="1" /> -->
                    <div class="row">
                        <!-- <div class="col-lg-4">
                            <div class="section" style="padding-bottom:20px; margin-top: 20px;">
                                <a class="btn btn-success" style="color: white;"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><i class="fa fa-shopping-basket"></i> Order</a>
                            </div>
                        </div> -->
                        <div class="col-lg-12">
                            <div class="section" style="padding-bottom:20px; margin-top: 20px;">
                                <a class="btn btn-success" style="color: white;" href="https://wa.me/{{$socials->social_whatsapp}}?text=Hi,%20I%20want%20to%20buy%20this%20product,%20so%20please%20guide%20me:%20{{urlencode(url()->current()) }}" target="_blank"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><i class="fa fa-whatsapp"></i> Whatsapp Order</a>
                                <!-- <a class="btn btn-success" style="color: white;" href="https://wa.me/{{$socials->social_whatsapp}}?text=Hi,%20I%20want%20to%20buy%20this%20product,%20so%20please%20guide%20me:%20www.google.com" target="_blank"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><i class="fa fa-whatsapp"></i> Whatsapp Order</a> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-9">
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px;">
                                {{$product->product_description}}
                        </p>
                        <!-- <small>
                            <ul>
                                <li>Super AMOLED capacitive touchscreen display with 16M colors</li>
                                <li>Available on GSM, AT T, T-Mobile and other carriers</li>
                                <li>Compatible with GSM 850 / 900 / 1800; HSDPA 850 / 1900 / 2100 LTE; 700 MHz Class 17 / 1700 / 2100 networks</li>
                                <li>MicroUSB and USB connectivity</li>
                                <li>Interfaces with Wi-Fi 802.11 a/b/g/n/ac, dual band and Bluetooth</li>
                                <li>Wi-Fi hotspot to keep other devices online when a connection is not available</li>
                                <li>SMS, MMS, email, Push Mail, IM and RSS messaging</li>
                                <li>Front-facing camera features autofocus, an LED flash, dual video call capability and a sharp 4128 x 3096 pixel picture</li>
                                <li>Features 16 GB memory and 2 GB RAM</li>
                                <li>Upgradeable Jelly Bean v4.2.2 to Jelly Bean v4.3 Android OS</li>
                                <li>17 hours of talk time, 350 hours standby time on one charge</li>
                                <li>Available in white or black</li>
                                <li>Model I337</li>
                                <li>Package includes phone, charger, battery and user manual</li>
                                <li>Phone is 5.38 inches high x 2.75 inches wide x 0.13 inches deep and weighs a mere 4.59 oz </li>
                            </ul>
                        </small> -->
                    </div>
                </div>
            </div>
        </div>
    </body>

@endsection('home')
