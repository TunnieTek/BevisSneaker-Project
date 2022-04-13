@include('header')
@section('title',  'News')
@yield('news')
     <!-- STAN SMITH -->
     <section>
         <style type="text/css">
            .news-img{
                width: 100%;
                height: auto;
                max-width: 100%;
                max-height: 100%;
                object-fit: cover;
                padding: 0 !important;
            }
            .news-img:hover{
                padding: 0 !important;
            }
         </style>
        <div class="recommend">
            <h1 style="text-align: center; font-family: 'URW Geometric'; padding: 50px;">- NEWS -</h1>
            @foreach ($news as $value )
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2"></div>
                    <div class="col-xl-8">
                        <img src="BevisSneaker/images/News/{{$value->images}}" class="news-img">
                    </div>
                    <div class="col-xl-2"></div>
                </div>
                <div class="row">
                    <div class="col-xl-3"></div>
                    <div class="col-xl-6">
                        <!-- slideshow -->
                        <div class="container-fluid" style="padding: 0;">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h2 style="text-align: center; font-family: 'URW Geometric';font-size:70px; padding: 50px;">{{$value->heading}}</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <p style="text-align:justify; font-size:120%">
                                        {{$value->paraphase}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3"></div>
                </div>
                <div class="row">
                    <div class="col-xl-3"></div>
                    <div class="col-xl-6">
                        <b><i>{{$value->author}}</i></b>
                    </div>
                    <div class="col-xl-3"></div>
                </div>
            </div>
            @endforeach
        </div>
   </section>
@include('footer')

