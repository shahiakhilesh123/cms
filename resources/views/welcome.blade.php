@extends('layouts.app')

@section('content')
    <?php 
    $setting = App\models\Setting::where('id', '1')->first(); 
    $file = App\models\File::where('id', $setting->file)->first();
    ?>
    <div class="nmf-herosec">
            <div class="nmf-bkrng-news"><img src="{{ asset('frontend/images/bkng-news.jpg') }}" /></div>
            <div class="nmf-titlenewssec">
                <div class="nmf-titlebanner">
                    <h2>{{ $setting->slider_header }}</h2>
                    <p>{{ $setting->slider_text }}</p>
                </div>
                <div class="nmf-relatedvidos">
                    <div class="nmf-toptitle">
                        <?php 
                        $blog = App\Models\Blog::whereRaw("find_in_set('".$setting->category."',categories_ids)")->get(); 
                        
                        ?>
                        <div class="nmf-othrlist">
                            <div class="media">
                                <img class="" src="{{ url('file').'/'.$file->file_name }}">
                                <div class="media-body">
                                    <h5 class="mt-0 font-16">Muscovado sugar is unrefined cane sugar that contains natural molasses. It has a rich brown color</h5>
                                </div>
                            </div>
                        </div>
                        <div class="nmf-othrlist">
                            <div class="media">
                                <img class="" src="{{ asset('frontend/images/titleitm-img.jpg') }}">
                                <div class="media-body">
                                    <h5 class="mt-0 font-16">Muscovado sugar is unrefined cane sugar that contains natural molasses. It has a rich brown color</h5>
                                </div>
                            </div>
                        </div>
                        <div class="nmf-othrlist">
                            <div class="media">
                                <img class="" src="{{ asset('frontend/images/titleitm-img.jpg') }}">
                                <div class="media-body">
                                    <h5 class="mt-0 font-16">Muscovado sugar is unrefined cane sugar that contains natural molasses. It has a rich brown color</h5>
                                </div>
                            </div>
                        </div>
                        <div class="nmf-othrlist">
                            <div class="media">
                                <img class="" src="{{ asset('frontend/images/titleitm-img.jpg') }}">
                                <h5 class="mt-0 font-16">Muscovado sugar is unrefined cane sugar that contains natural molasses. It has a rich brown color</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container">
        <?php $file = App\models\File::where('id', $setting->secound_row_first_file)->first(); ?>
            <div class="nmfcardlistsec mt-4">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="nmf-singlecard">
                            <a href="{{ $setting->secound_row_first_link }}">
                                <h3>
                                    {{ $setting->secound_row_first_title }}
                                </h3>
                                <div class="nmf-singlecard-img"><img src="{{ url('file').'/'.$file->file_name }}" /></div>
                            </a>

                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="nmf-postcrd">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="nest-postcard">
                                        <div class="nest-postcard-img">
                                            <img src="{{ asset('frontend/images/pmf-cardimg.jpg') }}" />
                                        </div>
                                        <p class=" font-12 font-600"> Many types of physical activity can support weight loss by increasing the amount of </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="nest-postcard">
                                        <div class="nest-postcard-img">
                                            <img src="{{ asset('frontend/images/pmf-cardimg.jpg') }}" />
                                        </div>
                                        <p class=" font-12 font-600"> Many types of physical activity can support weight loss by increasing the amount of </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="nest-postcard">
                                        <div class="nest-postcard-img">
                                            <img src="{{ asset('frontend/images/pmf-cardimg.jpg') }}" />
                                        </div>
                                        <p class=" font-12 font-600"> Many types of physical activity can support weight loss by increasing the amount of </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="nest-postcard">
                                        <div class="nest-postcard-img">
                                            <img src="{{ asset('frontend/images/pmf-cardimg.jpg') }}" />
                                        </div>
                                        <p class=" font-12 font-600"> Many types of physical activity can support weight loss by increasing the amount of </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="nest-postcard">
                                        <div class="nest-postcard-img">
                                            <img src="{{ asset('frontend/images/pmf-cardimg.jpg') }}" />
                                        </div>
                                        <p class=" font-12 font-600"> Many types of physical activity can support weight loss by increasing the amount of </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="nest-postcard">
                                        <div class="nest-postcard-img">
                                            <img src="{{ asset('frontend/images/pmf-cardimg.jpg') }}" />
                                        </div>
                                        <p class=" font-12 font-600"> Many types of physical activity can support weight loss by increasing the amount of </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="nmf-ads"><img class="" src="{{ asset('frontend/images/mf-adsec.jpg') }}" /></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="nmf-fullad-sec mt-4"><a href="#"><img src="{{ asset('frontend/images/hori-ads.jpg') }}" /></a></div>
            </div>
            <div class="col-12 col-md-12">
                <div class="nmf-featurespost mt-4">
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="nmf-featurespost-item">
                                <a href="#">
                                    <div class="featurespost-img"><img src="{{ asset('frontend/images/carasoual-item.jpg') }}" /></div>
                                    <div class="featurespost-tyl"><p class="font-16 font-600"> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin </p></div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="nmf-featurespost-item">
                                <a href="#">
                                    <div class="featurespost-img"><img src="{{ asset('frontend/images/carasoual-item.jpg') }}" /></div>
                                    <div class="featurespost-tyl"><p class="font-16 font-600"> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin </p></div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="nmf-featurespost-item">
                                <a href="#">
                                    <div class="featurespost-img"><img src="{{ asset('frontend/images/carasoual-item.jpg') }}" /></div>
                                    <div class="featurespost-tyl"><p class="font-16 font-600"> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin </p></div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="nmf-featurespost-item">
                                <a href="#">
                                    <div class="featurespost-img"><img src="{{ asset('frontend/images/carasoual-item.jpg') }}" /></div>
                                    <div class="featurespost-tyl"><p class="font-16 font-600"> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin </p></div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="nmf-featurespost-item">
                                <a href="#">
                                    <div class="featurespost-img"><img src="{{ asset('frontend/images/carasoual-item.jpg') }}" /></div>
                                    <div class="featurespost-tyl"><p class="font-16 font-600"> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin </p></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nmf-mainmanoranjansec">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="nmf-horoscope-sec">
                            
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="nmf-manoranjansec bg-white">
                            <h2 class="font-600 font-16"><span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55" style="enable-background:new 0 0 55 55;" xml:space="preserve"><g><g><path style="fill:#D91F26;" d="M9.867,4h35.258c3.242,0,5.876,2.628,5.876,5.876v35.258c-0.011,2.373-1.452,4.508-3.644,5.406c-2.186,0.921-4.711,0.433-6.404-1.234L5.695,14.048c-1.67-1.687-2.158-4.218-1.234-6.404C5.359,5.446,7.494,4.012,9.867,4"></path></svg></span>Manoranjan</h2>
                            <div class="manoranjansec-item">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nmf-toomoresec">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="nmf-aurbhisec">
                            <h2 class="font-16"><a href="#">See more <span><img src="{{ asset('frontend/images/nmf-arrow.svg') }}" /></span></a></h2>
                            <div class="nmf-featurespost"><img src="{{ asset('frontend/images/sports.png') }}" /></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="nmf-vidopost"><img src="{{ asset('frontend/images/vnmf-videopost.png') }}" /></div>
                    </div>
                </div>
        </div>
@endsection