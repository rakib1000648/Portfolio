<hr>
<h4 class="text-info">Change Password</h4>
<form class="row g-3" method="POST" action="{{ route('user-password.update') }}">

    @csrf
@method('PUT')

    <div class="col-md-6">
        <label class="form-label" for="password">{{ __('Current Password') }}</label>
        <input type="password" class="form-control" name="current_password" id="password" placeholder="Enter current password" title="enter your password." required autocomplete="current-password">
    </div>


    <div class="col-md-6">
        <label class="form-label" for="password">{{ __('Password') }}</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter new password" title="enter your password." required autocomplete="new-password">
    </div>


    <div class="col-md-6">
      <label class="form-label" for="password2">{{ __('Confirm Password') }}</label>
        <input type="password" class="form-control" name="password_confirmation" id="password2" placeholder="Enter confirm password" title="enter your password2." required autocomplete="new-password">
    </div>

    <div class="col-12">

           <button class="btn btn-md btn-success" type="submit">Click To Save</button>

     </div>

</form>
