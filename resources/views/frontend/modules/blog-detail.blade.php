@extends('frontend.layouts.master')

@section('Content')
<div class="main-container col2-right-layout">
    <div class="main container">
        <div class="row" id="listCart">
            <div class="col-main col-sm-9 wow">
                <div class="page-title">
                    <h2>Chi tiết bài viết</h2>
                </div>
                <div class="blog-wrapper" id="main">
                    <div class="site-content" id="primary">
                        <div role="main" id="content">
                            <article class="blog_entry clearfix" id="post-29">
                                <header class="blog_entry-header clearfix">
                                    <div class="blog_entry-header-inner">
                                        <h2 class="blog_entry-title">{{$data->name}}</h2>
                                    </div>
                                </header>
                                <div class="entry-content">
                                    <div class="featured-thumb"><a href="#"><img alt="blog-img4" src="{{url('upload')}}/{{$data->img}}" width="845px"></a></div>
                                    <div class="entry-content">
                                        <blockquote>{!!$data->preview_text!!}</blockquote>
                                        <p>{!!$data->content!!}</p>
                                    </div>
                                </div>
                                <footer class="entry-meta">Bài viết được đăng vào:
                                    <time datetime="2014-07-10T06:53:43+00:00" class="entry-date">{{$data->created_at}}</time></footer>
                            </article>
                            <div class="comment-content wow">
                                <div id="comment">
                                    <div class="comments-wrapper">
                                        <h3> Bình luận: </h3>
                                        <ul class="commentlist">
                                            @foreach ($data_cmt as $item)
                                            <li class="comment">
                                                <div class="comment-wrapper" id="post-29">
                                                    <div class="comment-author vcard">
                                                        <p class="gravatar"><a href="#"></a></p>
                                                        <span class="author">{{$item->name}}</span>
                                                    </div>
                                                    <div class="comment-meta">
                                                        <time datetime="2014-07-10T07:26:28+00:00" class="entry-date">{{$item->created_at}}</time>
                                                        . </div>
                                                    <div class="comment-body">{{$item->comment}}.</div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="comments-form-wrapper clearfix pull-left">
                                    <div class="login">
                                        @if (Auth::check())
                                        <h3 style="color: rebeccapurple">Xin chào: {{Auth::user()->name}}</h3>
                                        @endif
                                    </div>                                  
                                    @if (Auth::check())
                                    <h5>Để lại bình luận của bạn</h5>
                                    <form class="comment-form" method="POST" action="">
                                        <input id="name" name="name" type="hidden" value="{{Auth::user()->name}}">
                                        <div class="field aw-blog-comment-area">
                                            <label for="comment">Bình luận<em class="required">*</em></label>
                                            <textarea title="Nhập bình luận" name="comment" id="cmt"></textarea>
                                        </div>
                                        <span id="comment-error"  style="color:red"></span>
                                        <input type="hidden" name="id_blog" id="id_blog" value="{{$data->id}}">
                                        <div style="width:96%" class="button-set"><button type="submit" class="bnt-comment" id="send_cmt">Gửi</button></div>
                                    </form>
                                    @else
                                    <span style="color: red">Đăng nhập tài khoản để bình luận</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-right sidebar col-sm-3">
                <div role="complementary" class="widget_wrapper13" id="secondary">
                    <div class="popular-posts widget widget__sidebar wow" id="recent-posts-4">
                        <h3 class="widget-title"><span>Bài viết gần đây</span></h3>
                        <div class="widget-content">
                            <ul class="posts-list unstyled clearfix">
                                @foreach ($blog_new as $item)
                                <li>
                                    <figure class="featured-thumb"> <a href="{{route('blog_detail', $item->id)}}"> <img width="80" height="53" alt="blog image" src="{{url('upload')}}/{{$item->img}}"> </a> </figure>
                                    <h4><a title="Pellentesque posuere" href="{{route('blog_detail', $item->id)}}">{{$item->name}}</a></h4>
                                    <p class="post-meta"><i class="icon-calendar"></i>
                                        <time datetime="2014-07-10T07:09:31+00:00" class="entry-date">{{$item->created_at}}</time>
                                    </p>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('my_js')
<script>
    var _csrf = '{{csrf_token()}}';
    $('#send_cmt').click(function(event) {
        event.preventDefault();
        let comment = $('#cmt').val();
        let commentUrl = '{{Route('blog_detail.store')}}';
        let id_blog = $('#id_blog').val();
        let name = $('#name').val();
        $.ajax({
            url: commentUrl
            , type: 'POST'
            , data: {
                comment: comment
                , name: name
                , id_blog: id_blog
                , _token: _csrf
            }
            , success: function(res) {
                if (res.error) {
                    $('#comment-error').html(res.error)
                } else {
                    $('#comment-error').html('Gửi bình luận thành công.');
                    $('#comment').html(res);
                }
            }
        });
    });
</script>
@endpush