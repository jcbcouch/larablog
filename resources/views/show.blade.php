<x-layout>
          <article class="media content-section">
            <img class="rounded-circle article-img" src="{{asset('/images/default.jpg')}}">
            <div class="media-body">
              <div class="article-metadata">
                <a class="mr-2" href="/blogs/user/{{$blog->user->id}}">{{$blog->user->username}}</a>
                <small class="text-muted">{{$blog->created_at}}</small>
              </div>
              <h2>{{$blog->title}}</h2>
              <p class="article-content">
                {{$blog->body}}
              </p>
            </div>
          </article>
  
          </div>
        </x-layout>