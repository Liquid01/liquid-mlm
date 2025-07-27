@extends('layouts.shop')



@section('content')



    <div class="row" style="">

        <div class="content-wrapper-before white"></div>



        <div class="col s12 mt-10 pd-10">

            <div class="container">

                <div class="section">

                    <div class="row" id="ecommerce-products">

                        {{--?here we dispay shop items; here the items are those used for the members login--}}

                        {{--if they are not loged in, display emplty--}}

                        @include('shop.shop_items')

                    </div>

                </div><!-- START RIGHT SIDEBAR NAV -->

            </div>

        </div>

    </div>



    <meta name="_token" content="{{@csrf_token()}}">



@endsection
