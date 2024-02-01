<x-layout>
  @foreach ($blogs as $blog)
        <article class="media content-section">
          <img class="rounded-circle article-img" src="{{$blog->user->pic ? asset('storage/' . $blog->user->pic) : asset('/images/default.jpg')}}" alt="" />
          <div class="media-body">
            <div class="article-metadata">
              <a class="mr-2" href="/blogs/user/{{$blog->user->id}}">{{$blog->user->username}}</a>
              <small class="text-muted">{{$blog->created_at}}</small>
            </div>
            <h2><a class="article-title" href="/blogs/{{$blog->id}}">{{$blog->title}}</a></h2>
            <p class="article-content">
              {{$blog->body}}
            </p>
          </div>
        </article>
    @endforeach

        
    {{$blogs->links()}}    

        </div>
      </x-layout>