<x-layout>
      
    <div class='content-section'>
        <form method='Post' action='/users'>
            @csrf
            <fieldset class='form-group'>
                <legend class='border-bottom mb-4'>Join Today</legend>
                
                
                <div class='form-group'>
                    <label class="form-control-label" for="username">Username</label>

                    
                        <input class="form-control form-control-lg" id="username" name="username" required type="text" value="{{old('username')}}">
                        
                        @error('username')
                            <span style="color:red">{{$message}}</span>
                        @enderror
                </div>



                <div class='form-group'>
                    <label class="form-control-label" for="email">Email</label>
                    
                        <input class="form-control form-control-lg" id="email" name="email" required type="text" value="{{old('email')}}">
                          @error('email')
                            <span style="color:red">{{$message}}</span>
                        @enderror  
                </div>
                <div class='form-group'>
                    <label class="form-control-label" for="password">Password</label>
                    
                        <input class="form-control form-control-lg" id="password" name="password" required type="password" value="{{old('password')}}">
                         @error('password')
                            <span style="color:red">{{$message}}</span>
                        @enderror
                </div>
                <div class='form-group'>
                    <label class="form-control-label" for="confirm_password">Confirm Password</label>
                    
                        <input class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" required type="password" value="{{old('password_confirmation')}}">
                        @error('password_confirmation')
                            <span style="color:red">{{$message}}</span>
                        @enderror
                </div>
            </fieldset>
            <div class='form-group'>
                <input class="btn btn-outline-info" id="submit" name="submit" type="submit" value="Sign Up">
            </div>
        </form>
    </div>
    <div class='border-top pt-3'>
        <small class='text-muted'>
            Already Have An Account? <a class='ml-2' href='/login'>Sign in </a>
        </small>
    </div>

        </div>
    </x-layout>