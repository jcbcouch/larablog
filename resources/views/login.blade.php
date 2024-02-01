<x-layout>       
    <div class="content-section">
        <form method="POST" action="/users/authenticate">
            @csrf
            <fieldset class="form-group">
                <legend class="border-bottom mb-4">Log In</legend>
                <div class="form-group">
                    <label class="form-control-label" for="email">Email</label>
                    
                        <input class="form-control form-control-lg" id="email" name="email" required type="text" value="{{old('email')}}">
                        @error('email')
                            <span style="color:red">{{$message}}</span>
                        @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="password">Password</label>
                    
                        <input class="form-control form-control-lg" id="password" name="password" required type="password" value="{{old('password')}}">
                        @error('password')
                            <span style="color:red">{{$message}}</span>
                        @enderror
                </div>
            </fieldset>
            <div class="form-group">
                <input class="btn btn-outline-info" id="submit" name="submit" type="submit" value="Login">
                <small class="text-muted ml-2">
                    <a href="/reset_password">Forgot Password?</a>
                </small>
            </div>
        </form>
    </div>
    <div class="border-top pt-3">
        <small class="text-muted">
            Need An Account? <a class="ml-2" href="/register">Sign Up Now</a>
        </small>
    </div>

        </div>
    </x-layout>    