<x-layout>
    <div class="content-section">
      <div class="media">
        <img class="rounded-circle account-img" src="{{auth()->user()->pic ? asset('storage/' . auth()->user()->pic) : asset('/images/default.jpg')}}">
        <div class="media-body">
          <h2 class="account-heading">{{auth()->user()->username}}</h2>
          <p class="text-secondary">{{auth()->user()->email}}</p>
        </div>
      </div>
        <form method='Post' action="/update" enctype="multipart/form-data">
            @csrf
             <fieldset class='form-group'>
                <legend class='border-bottom mb-4'>Account Info</legend>
                <div class='form-group'>
                    <label class="form-control-label" for="username">Username</label>

                    
                        <input class="form-control form-control-lg" id="username" name="username" required type="text" value="{{auth()->user()->username}}">
                        @error('username')
                        <span style="color:red">{{$message}}</span>
                        @enderror

                </div>
                <div class='form-group'>
                    <label class="form-control-label" for="email">Email</label>
                    
                        <input class="form-control form-control-lg" id="email" name="email" required type="text" value="{{auth()->user()->email}}">
                        @error('email')
                        <span style="color:red">{{$message}}</span>
                        @enderror   
                </div>
                <div class='form-group'>
                    <label for="picture">Update Profile Picture</label>
                    <input class="form-control-file" id="pic" name="pic" type="file">
                    @error('pic')
                            <span style="color:red">{{$message}}</span>
                        @enderror
                               
                </div>
            </fieldset>
            <div class='form-group'>
                <input class="btn btn-outline-info" id="submit" name="submit" type="submit" value="Update">
            </div>
        </form>
    </div>

        </div>
    </x-layout>