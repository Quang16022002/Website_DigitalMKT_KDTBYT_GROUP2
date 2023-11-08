<div class="comments-wrapper">
    <h3> Bình luận: </h3>
    <ul class="commentlist">
        @foreach ($comments as $item)
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