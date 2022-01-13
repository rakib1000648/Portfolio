<hr>
<h4 class="text-info">Edit User Information</h4>

<form class="row g-3" method="POST" action="{{ route('user-profile-information.update') }}">

    @csrf
@method('PUT')


        <div class="col-md-6">
            <label class="form-label" for="full_name">{{ __('Full Name') }}</label>
            <input type="text" class="form-control" name="full_name" id="full_name" placeholder="full name" title="enter your full name if any." value="{{ old('full_name') ?? auth()->user()->full_name }}" required autofocus autocomplete="full_name">
        </div>


        <div class="col-md-6">
            <label class="form-label" for="email">{{ __('Email') }}</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email." value="{{ old('email') ?? auth()->user()->email }}" required autofocus>
        </div>



         <div class="col-12">

                <button class="btn btn-md btn-success " type="submit">Click To Save</button>

          </div>



</form>
