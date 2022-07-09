<div class="form-group mb-3">
    <label class="label" for="name">Username</label>
    <input type="text" name="username" class="form-control" placeholder="Username" value="{{old('username')}}">
    <span class="text-danger">@error('username') {{$message}} @enderror</span>
</div>
<div class="form-group mb-3">
    <label class="label" for="email">Email Address</label>
    <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{old('email')}}">
    <span class="text-danger">@error('email') {{$message}} @enderror</span>
</div>
<div class="form-group mb-3">
    <label class="label" for="password">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" >
    <span class="text-danger">@error('password') {{$message}} @enderror</span>
</div>
<div class="form-group mb-3">
    <label class="label" for="confirmPassword">Confirm Password</label>
    <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password" >
    <span class="text-danger">@error('confirmPassword') {{$message}} @enderror</span>
</div>
<div class="form-group">
    <button type="submit" name="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up
    </button>
</div>
