@extends('layouts.app')

@section('content')
<div class="" style="width:100%; height: 300px">
        <div
            class="home_slider_background"
            style="background-image: url(../images/post_12.jpg)"
            ></div>
    <div class="home_content">
        <div class="post_category trans_200">
            <a href="category.html" class="trans_200">sport</a>
        </div>
        <div class="post_title">
            {{ $post->title }}
        </div>
    </div>
</div>

<div class="page_content">
    <div class="container">
        <div class="row row-lg-eq-height">
            <div class="col-lg-9">
                <div class="post_content">
                    <div class="post_panel post_panel_top d-flex flex-row align-items-center justify-content-start">
                        <div class="author_image">
                            <div><img src="../images/author.jpg" alt /></div>
                        </div>
                        <div class="post_meta">
                            <a href="#">{{ $post->author->name }}</a><span>{{ $post->created_at->format('M d, Y \a\t h:i a') }}</span>
                        </div>
                        <div class="post_share ml-sm-auto">
                            <span>share</span>
                            <ul class="post_share_list">
                                <li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="post_body">
                        <p class="post_p">
                            {{ $post->content }}
                        </p>

                        <div class="post_tags">
                            <ul>
                                <li class="post_tag"><a href="#">Liberty</a></li>
                                <li class="post_tag"><a href="#">Manual</a></li>
                                <li class="post_tag"><a href="#">Interpretation</a></li>
                                <li class="post_tag"><a href="#">Recommendation</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="post_panel bottom_panel d-flex flex-row align-items-center justify-content-start">
                        <div class="author_image">
                            <div><img src="../images/author.jpg" alt /></div>
                        </div>
                        <div class="post_meta">
                            <a href="#">{{ $post->author->name }}</a><span>{{ $post->created_at->format('M d, Y \a\t h:i a') }}</span>
                        </div>
                        <div class="post_share ml-sm-auto">
                            <span>share</span>
                            <ul class="post_share_list">
                                <li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="similar_posts">
                        <div class="grid clearfix">
                            @foreach($relatedPosts as $relatedPost)
                            <div class="card card_small_with_image grid-item">
                                <img class="card-img-top" src="../images/post_25.jpg" alt="Related Post Image" />
                                <div class="card-body">
                                    <div class="card-title card-title-small">
                                        <a href="{{ route('posts.show', $relatedPost->id) }}">{{ $relatedPost->title }}</a>
                                    </div>
                                    <small class="post_meta"><a href="#">{{ $relatedPost->author->name }}</a><span>{{ $relatedPost->created_at->format('M d, Y \a\t h:i a') }}</span></small>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="post_comment">
                            <div class="post_comment_title">Post Comment</div>
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="post_comment_form_container">
                                        <form action="{{ route('comments.store') }}" method="POST">
                                            @csrf
                                            <input type="text" class="comment_input comment_input_name" placeholder="Your Name" required="required" />
                                            <input type="email" class="comment_input comment_input_email" placeholder="Your Email" required="required" />
                                            <textarea class="comment_text" placeholder="Your Comment" required="required" name="content"></textarea>
                                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                                            <button type="submit" class="comment_button">Post Comment</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comments">
                            <div class="comments_title">Comments <span>({{ $comments->count() }})</span></div>
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="comments_container">
                                        <ul class="comment_list">
                                            @foreach($comments as $comment)
                                            <li class="comment">
                                                <div class="comment_body">
                                                    <div class="comment_panel d-flex flex-row align-items-center justify-content-start">
                                                        <div class="comment_author_image">
                                                            <div><img src="../images/comment_author_1.jpg" alt /></div>
                                                        </div>
                                                        <small class="post_meta"><a href="#">{{ $comment->user->name }}</a><span>{{ $comment->created_at->format('M d, Y \a\t h:i a') }}</span></small>
                                                        <button type="button" class="reply_button ml-auto">Reply</button>
                                                    </div>
                                                    <div class="comment_content">
                                                        <p>{{ $comment->content }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="load_more">
                    <div id="load_more" class="load_more_button text-center trans_200">Load More</div>
                </div>
            </div>

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
                                    @foreach($topPosts as $topPost)
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
        </div>
    </div>
</div>
@endsection
