@extends('layouts.app')

@section('content')
    <?php 
    $setting = App\Models\Setting::where('id', '1')->first(); 
    $pageDetail = App\Models\Pages::where('id', '1')->first();
    $pageSequence = App\Models\PageSequence::where('page_id', $pageDetail->id)->orderBy('sequence', 'ASC')->get()->toArray();
    $slide = App\Models\Blog::where('id', $pageSequence[0]['blog_id'])->first(); 
    $blog_file = App\Models\File::whereRaw( "find_in_set('".$slide->image_ids."', id)")->first();
    $ff = isset($blog_file->file_name) ? $blog_file->file_name : ''; 
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .media:hover, .link:hover {
            background-color: #48483d;
        }
        .blog_container {
        position: relative;
        width: 100%;
        max-width: 400px;
        }

        .blog_image {
        display: block;
        width: 100%;
        height: auto;
        }

        .blog_overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .3s ease;
        }

        .blog_container:hover .blog_overlay {
        opacity: 1;
        }

        .blog_icon {
        color: white;
        font-size: 30px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
        }

        .fa-video-camera:hover {
        color: #eee;
        }
    </style>
    <div class="nmf-herosec">
            <div class="nmf-bkrng-news"><img src="{{ asset('frontend/images/bkng-news.jpg') }}" /></div>
            <div class="nmf-titlenewssec">
                <div class="nmf-titlebanner" style="background:url({{ asset('file').'/'.$ff }}) !important;">
                    <h2 class="link">{{ isset($slide->name) ? $slide->name : '' }}</h2>
                    <p class="link">{{ isset($slide->sort_description) ? $slide->sort_description : '' }}</p>
                </div>
                <div class="nmf-relatedvidos">
                    <div class="nmf-toptitle">
                        @for($i = 1; $i < count($pageSequence)-1; $i++)
                        <?php
                        $blog = App\Models\Blog::where('id', $pageSequence[$i]['blog_id'])->first(); 
                        preg_match('#^([^.!?\s]*[\.!?\s]+){0,18}#',$blog->sort_description,$matches);
                        if(isset($blog->link)) {
                            echo "this is test";
                            $blog_file = App\Models\File::where("id",$blog->thumb_images)->first();
                        } else {
                            $blog_file = App\Models\File::whereRaw( "find_in_set(id, '".$blog->image_ids."')")->first();
                        }
                        $ff = isset($blog_file->file_name) ? $blog_file->file_name : '';
                        ?>
                        <div class="nmf-othrlist">
                            <div class="media <?php if(isset($blog->link)) { echo "blog_container"; } ?>">
                                <img class="<?php if(isset($blog->link)) { echo "blog_image"; } ?>" src="{{ asset('file').'/'.$ff }}" style="height:90px;">
                                <?php if(isset($blog->link)) { ?>
                                <div class="blog_overlay">
                                <a href="#" class="blog_icon">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                </div>
                                <?php } ?>
                                <div class="media-body">
                                    <h5 class="mt-0 font-16">{{ $matches[0]}} ...</h5>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <?php //die(); ?>
        <div class="clearfix"></div>
        <div class="container">
        <?php $file = App\Models\File::where('id', $setting->secound_row_first_file)->first(); ?>
            <div class="nmfcardlistsec mt-4">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="nmf-singlecard link">
                            <a href="{{ asset($setting->secound_row_first_link) }}">
                                <h3>
                                    {{ $setting->secound_row_first_title }}
                                </h3>
                                <div class="nmf-singlecard-img"><img src="{{ asset('file').'/'.$file->file_name }}" style="height: 229px;" /></div>
                            </a>

                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="nmf-postcrd">
                            <div class="row">
                    <?php
                            $blogs = App\Models\Blog::whereRaw("find_in_set('".$setting->secound_row_secound_col_category."',categories_ids)")->whereNull('link')->get(); 
                    
                    ?>
                    @foreach($blogs as $blog)
                    <?php preg_match('#^([^.!?\s]*[\.!?\s]+){0,11}#',$blog->sort_description,$matches);
                    $blog_file = App\Models\File::whereRaw( "find_in_set(id, '".$blog->image_ids."')")->first();
                    $ff = isset($blog_file->file_name) ? $blog_file->file_name : '';  
                    ?>
                                <div class="col-12 col-md-4">
                                    <div class="nest-postcard">
                                        <div class="nest-postcard-img link">
                                            <img src="{{ asset('file').'/'.$ff }}" style="height:82px;" />
                                        </div>
                                        <p class=" font-12 font-600 link"> {{ $matches[0] }} ... </p>
                                    </div>
                                </div>
                    @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                    <?php $file = App\Models\File::where('id', $setting->secound_row_third_file)->first(); ?>
                        <div class="nmf-ads link"><img class="" src="{{ asset('file').'/'.$file->file_name }}" style="height: 339px;" /></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="nmf-fullad-sec mt-4 link"><a href="#"><img src="{{ asset('frontend/images/hori-ads.jpg') }}" /></a></div>
            </div>
            <div class="col-12 col-md-12">
                <div class="nmf-featurespost mt-4">
                    <div class="owl-carousel">
                    <?php
                            $blogs = App\Models\Blog::whereRaw("find_in_set('".$setting->third_row_category."',categories_ids)")->get(); 
                    
                    ?>
                    @foreach($blogs as $blog)
                    <?php preg_match('#^([^.!?\s]*[\.!?\s]+){0,18}#',$blog->sort_description,$matches);
                    $blog_file = App\Models\File::whereRaw( "find_in_set(id, '".$blog->image_ids."')")->first(); ?>
                        <div class="item">
                            <div class="nmf-featurespost-item">
                                <a href="#">
                                    <div class="featurespost-img"><img src="{{ asset('file').'/'.$file->file_name }}"  /></div>
                                    <div class="featurespost-tyl link"><p class="font-16 font-600"> {{ $matches[0] }} ... </p></div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
            <div class="nmf-mainmanoranjansec">
                <div class="row">
                    <div class="col-12 col-md-4">
                    <?php $file = App\Models\File::where('id', $setting->fourth_row_first_image)->first(); 
                    $ff = isset($file->file_name) ? $file->file_name : '';
                    ?>
                        <div class="nmf-horoscope-sec" style="background:url({{ asset('file').'/'.$ff }}); background-repeat: no-repeat;background-size: cover;background-position: center;">
                            
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="nmf-manoranjansec bg-white">
                            <?php $cat = App\Models\Category::where('id', $setting->fourth_row_secound_cat)->first(); ?>
                            <h2 class="font-600 font-16"><span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55" style="enable-background:new 0 0 55 55;" xml:space="preserve"><g><g><path style="fill:#D91F26;" d="M9.867,4h35.258c3.242,0,5.876,2.628,5.876,5.876v35.258c-0.011,2.373-1.452,4.508-3.644,5.406c-2.186,0.921-4.711,0.433-6.404-1.234L5.695,14.048c-1.67-1.687-2.158-4.218-1.234-6.404C5.359,5.446,7.494,4.012,9.867,4"></path></svg></span>{{$cat->name}}</h2>
                            <?php
                            $blogs = App\Models\Blog::whereRaw("find_in_set('".$setting->fourth_row_secound_cat."',categories_ids)")->first(); 
                            $blog_file = App\Models\File::whereRaw( "find_in_set(id, '".$blogs->image_ids."')")->first(); 
                            $ff = isset($blog_file->file_name) ? $blog_file->file_name : '';
                            ?>
                            <div class="manoranjansec-item" style="background:url({{ asset('file').'/'.$ff }}); background-repeat: no-repeat;background-size: cover;background-position: center;">

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
                            <?php
                            $blogs = App\Models\Blog::whereRaw("find_in_set('".$setting->fifth_row_first_cat."',categories_ids)")->first(); 
                            $blog_file = App\Models\File::whereRaw( "find_in_set(id, '".$blogs->image_ids."')")->first(); 
                            $ff = isset($blog_file->file_name) ? $blog_file->file_name : '';
                            ?>
                            <div class="nmf-featurespost"><img src="{{ asset('file').'/'.$ff }}" style="height: 282px;" /></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <?php
                    $blogs = App\Models\Blog::whereRaw("find_in_set('".$setting->fifth_row_second_cat."',categories_ids)")->whereNotNull('link')->orderBy('id', 'DESC')->first(); 
                    $link = isset($blogs->link) ? $blogs->link : '';
                    ?>
                        <div class="nmf-vidopost"><iframe style="width: 100%;" height="320" src="{{ $link}}"></iframe></div>
                    </div>
                </div>
        </div>
@endsection