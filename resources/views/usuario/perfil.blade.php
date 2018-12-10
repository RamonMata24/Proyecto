 @extends('Layout.index')

@section('content')
<!-- Client Map Start -->
 <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-block user-detail-card">
                <div class="row">

                    <div class="col-sm-4">
                        <img src="{{ asset('assets/images/faq_man.png')}}"  alt="" class="img-fluid p-b-10">

                        <div class="contact-icon">
                            <button class ="btn btn-info"><strong>Welcome to Team of JO-WO.net</strong></button>
                        </div>

                    </div>

                    <div class="col-sm-8 user-detail">
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-user"></i>Name :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">{{ auth()->user()->name }}</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-email"></i>Email Id :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30"><a href="mailto:dummy@example.com">{{ auth()->user()->email }}</a></h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-home"></i>Address :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">23/Encrypt square, Melbourn, Australia</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-touch-phone"></i>Phone :</h6>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="m-b-30">+(345)234-5287</h6>
                            </div>
                        </div>


                        
                    </div>
                </div>
            </div>
        </div>
@endsection