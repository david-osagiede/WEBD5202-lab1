<h3 class="pb-3 mb-4 font-italic border-bottom">
    Blog
  </h3>

  <div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{ $post->id }}">
            {{$post->title}}
        </a>
        </h2>
    <p class="blog-post-meta">
        {{$post->created_at->toFormattedDateString()}}
    </p>

        {{$post->body}}
        <div class="comments">
            @foreach ($post->comments as $comment)
            <li cass="list-group-item">

            <strong>
                {{ $comment->created_at}}
        </strong>
        {{ $comment->body}}

            </li>
            @endforeach
        </div>
  </div><!-- /.blog-post -->
