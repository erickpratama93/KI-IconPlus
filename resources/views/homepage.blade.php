@extends('layouts.index')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">News</h1>
    </div>

    <div class="card p-3 scroll" style="height: max-content">
        <div class="page-wrapper">
            <div class="blog-top clearfix">
                <h4 class="pull-left">Recent News <a href="#"><i class="fa fa-rss"></i></a></h4>
            </div><!-- end blog-top -->
            @foreach ($news as $data)
                <div class="blog-list clearfix">
                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="tech-single.html" title="">
                                    <img src="upload/tech_blog_01.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="tech-single.html" title="">{{ $data->news_title }}</a></h4>
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor.
                                Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec,
                                maximus
                                tempor odio.</p>
                            <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                                    title="">Gadgets</a></small>
                            <small><a href="tech-single.html" title="">21 July, 2017</a></small>
                            <small><a href="tech-author.html" title="">by Matilda</a></small>
                            <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 1114</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

        <div class="blog-list clearfix">

            @foreach ($news as $data)
                
            <div class="blog-box row">
                <div class="col-md-4">
                    <div class="post-media">
                        <a href="tech-single.html" title="">
                            <img src={{ url('storage/' . $data->news_image) }} alt="" class="img-fluid">
                            <div class="hovereffect"></div>
                        </a>
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">{{$data->news_title}}</a></h4>
                    <p style="display:block;
                        white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        max-width: 100ch;">
                        {{$data->news_description}}</p>
                    {{-- <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Gadgets</a></small> --}}
                    <small><a href="tech-single.html" title="">{{$data->created_at}}</a></small>
                    {{-- <small><a href="tech-author.html" title="">by Matilda</a></small> --}}
                    {{-- <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 1114</a></small> --}}
                </div><!-- end meta -->
            </div><!-- end blog-box -->

            <hr class="invis">
            @endforeach


           
        </div><!-- end blog-list -->
    </div><!-- end page-wrapper -->
</div>
@endsection
