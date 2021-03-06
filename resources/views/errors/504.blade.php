@extends('layouts.layout')

@section('content')
   <div class="clearfix"></div>
    <div class="__bg">
        <div class="container container-sm">
            <div class="row">
                <div class="col-md-12">
                    <div class="paddingtb_50">
                        <div class="tabs_z_content __current">
                            <div class="__form_wrapper">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="__congrats">
                                            <h1>Oops!</h1>
                                            <h2>504 Gateway Timeout</h2>
											<p>A 504 error status implies there is a slow IP communication problem between back-end servers attempting to fulfill this request.</p>
                                            <div class="paddingtb_20">
                                                <a href="{{URL::to('/')}}" class="__btn __btn_link">HOMEPAGE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- row end -->
                            </div><!-- Form wrapper -->
                        </div><!-- Tab Content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layouts.middle_footer')     
@stop