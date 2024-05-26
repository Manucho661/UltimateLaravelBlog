@extends('layouts.app')

@section('content')
<div class="home">
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">

        <div class="owl-item">
            <div
            class="home_slider_background"
            style="background-image: url(images/home_slider.jpg)"
            ></div>
            <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                <div class="col">
                    <div class="home_slider_content">
                    <div class="home_slider_item_category trans_200">
                        <a href="category.html" class="trans_200">{{$latestStories[0]->category->name}}</a>
                    </div>
                    <div class="home_slider_item_title">
                        <a href="{{ route('posts.show', $latestStories[0]->slug) }}"
                        >{{$latestStories[0]->summary }}</a
                        >
                    </div>
                    <div class="home_slider_item_link">
                        <a href="{{ route('posts.show', $latestStories[0]->slug) }}" class="trans_200"
                        >Continue Reading
                        <svg
                            version="1.1"
                            id="link_arrow_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            width="19px"
                            height="13px"
                            viewBox="0 0 19 13"
                            enable-background="new 0 0 19 13"
                            xml:space="preserve"
                        >
                            <polygon
                            fill="#FFFFFF"
                            points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "
                            />
                        </svg>
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <div class="similar_posts_container">
            <div class="container">
                <div class="row d-flex flex-row align-items-end">
                    @foreach ($featuredPosts as $post )
                    <div class="col-lg-3 col-md-6 similar_post_col">
                        <div class="similar_post trans_200">
                        <a href="{{ route('posts.show', $post->slug) }}"
                            > {{ $post->summary }} </a
                        >
                        </div>
                    </div>
                    @endforeach
                
                </div>
            </div>
            <div class="home_slider_next_container">
                <div
                class="home_slider_next"
                style="background-image: url(images/home_slider_next.jpg)"
                >
                <div class="home_slider_next_background trans_400"></div>
                <div class="home_slider_next_content trans_400">
                    <div class="home_slider_next_title">next</div>
                    <div class="home_slider_next_link">
                    How Did van Gogh’s Turbulent Mind Depict One of the Most
                    Complex Concepts in Physics?
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="custom_nav_container home_slider_nav_container">
        <div class="custom_prev custom_prev_home_slider">
            <svg
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px"
            y="0px"
            width="7px"
            height="12px"
            viewBox="0 0 7 12"
            enable-background="new 0 0 7 12"
            xml:space="preserve"
            >
            <polyline
                fill="#FFFFFF"
                points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "
            />
            </svg>
        </div>
        <ul id="custom_dots" class="custom_dots custom_dots_home_slider">
            <li class="custom_dot custom_dot_home_slider active">
            <span></span>
            </li>
            <li class="custom_dot custom_dot_home_slider"><span></span></li>
            <li class="custom_dot custom_dot_home_slider"><span></span></li>
        </ul>
        <div class="custom_next custom_next_home_slider">
            <svg
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px"
            y="0px"
            width="7px"
            height="12px"
            viewBox="0 0 7 12"
            enable-background="new 0 0 7 12"
            xml:space="preserve"
            >
            <polyline
                fill="#FFFFFF"
                points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "
            />
            </svg>
        </div>
        </div>
    </div>
    </div>

    <div class="page_content">
    <div class="container">
        <div class="row row-lg-eq-height">
        <div class="col-lg-9">
            <div class="main_content">
            <div class="blog_section">
                <div
                class="section_panel d-flex flex-row align-items-center justify-content-start"
                >
                <div class="section_title">Don't Miss</div>
                <div class="section_tags ml-auto">
                    <ul>
                        @foreach($dontMissOutCategories as $category)
                            <li><a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                    
                    </ul>
                </div>

                </div>
                <div class="section_content">
                <div class="grid clearfix">
                    <div class="card card_largest_with_image grid-item">
                    <img
                        class="card-img-top"
                        src="images/post_1.jpg"
                        alt="https://unsplash.com/@cjtagupa"
                    />
                    <div class="card-body">
                        <div class="card-title">
                        <a href="post.html"
                            >How Did van Gogh’s Turbulent Mind Depict One of
                            the Most Complex Concepts in Physics?</a
                        >
                        </div>
                        <p class="card-text">
                        Pick the yellow peach that looks like a sunset with
                        its red, orange, and pink coat skin, peel it off
                        with your teeth. Sink them into unripened...
                        </p>
                        <small class="post_meta"
                        ><a href="#">Katy Liu</a
                        ><span>Sep 29, 2017 at 9:48 am</span></small
                        >
                    </div>
                    </div>

                    <div
                    class="card card_default card_default_no_image grid-item"
                    >
                    <div class="card-body">
                        <div class="card-title card-title-small">
                        <a href="post.html"
                            >How Did van Gogh’s Turbulent Mind Depict One of
                            the Most</a
                        >
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="blog_section">
                <div
                class="section_panel d-flex flex-row align-items-center justify-content-start"
                >
                <div class="section_title">What's Trending</div>
                <div class="section_tags ml-auto">
                <ul>
                        @foreach($trendingCategories as $category)
                            <li><a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                    
                    </ul>
                </div>
               
                </div>
                <div class="section_content">
                <div class="grid clearfix">
                    <div class="card card_large_with_background grid-item">
                    <div
                        class="card_background"
                        style="background-image: url(images/post_8.jpg)"
                    ></div>
                    <div class="card-body">
                        <div class="card-title">
                        <a href="{{ route('posts.show', $trendingPosts[0]->slug) }}"
                            >{{$trendingPosts[0]->summary}}</a
                        >
                        </div>
                        <small class="post_meta"
                        ><a href="#">{{ $trendingPosts[0]->author->name}}</a
                        ><span> {{ $trendingPosts[0]->created_at->format('M d, Y \a\t h:i a') }} </span></small
                        >
                    </div>
                    </div>
                    @foreach ($trendingPosts as $post )
                    <div
                    class="card card_default card_default_with_background grid-item"
                    >
                    <div
                        class="card_background"
                        style="background-image: url(images/post_6.jpg)"
                    ></div>
                    <div class="card-body">
                        <div class="card-title card-title-small">
                        <a href="{{route('posts.show', $post->slug)}}"
                            >{{ $post->summary }}</a
                        >
                        </div>
                    </div>
                    </div>
                    @endforeach
                    
                </div>
                </div>
            </div>

            <div class="blog_section">
                <div
                class="section_panel d-flex flex-row align-items-center justify-content-start"
                >
                <div class="section_title">Latest Articles</div>
                </div>
                <div class="section_content">
                <div class="grid clearfix"> 

                @foreach ($latestStories as $post )
                <div
                    class="card card_default card_small_no_image grid-item"
                    >
                    <div class="card-body">
                        <div class="card-title card-title-small">
                        <a href="{{route('posts.show', $post->slug)}}"
                            >{{$post->summary}}</a
                        >
                        </div>
                        <small class="post_meta"
                        ><a href="#">{{$post->author->name}}</a
                        ><span>{{ $post->created_at->format('M d, Y \a\t h:i a') }}</span></small
                        >
                    </div>
                    </div>
                @endforeach
                </div>
                </div>
            </div>
            </div>
            <div class="load_more">
            <div
                id="load_more"
                class="load_more_button text-center trans_200"
            >
                Load More
            </div>
            </div>
        </div>

        <!--  top stories -->
        <div class="col-lg-3">
                <div class="sidebar">
                    <div class="sidebar_background"></div>

                    <div class="sidebar_section">
                        <div class="sidebar_title_container">
                            <div class="sidebar_title">Top Stories</div>
                            <div class="sidebar_slider_nav">
                                <div class="custom_nav_container sidebar_slider_nav_container"></div>
                            </div>
                        </div>
                        <div class="sidebar_section_content">
                            <div class="sidebar_slider_container">
                                <div class="owl-carousel owl-theme sidebar_slider_top">
                                    @foreach($dontMissOutPosts as $topPost)
                                    <div class="owl-item">
                                        <div class="side_post">
                                            <a href="{{ route('posts.show', $topPost->id) }}">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image">
                                                        <div><img src="../images/top_1.jpg" alt /></div>
                                                    </div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">{{ $topPost->title }}</div>
                                                        <small class="post_meta">{{ $topPost->author->name }}<span>{{ $topPost->created_at->format('M d') }}</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- top stories -->
        </div>
    </div>
    </div>
@endsection
