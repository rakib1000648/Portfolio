<div class="row">

    <div class="col-md-10 mx-auto">
        <br>
        <nav class="navbar border-top border-bottom border-5">


        <span class="alert-primary text-primary rounded-pill px-2 fs-5" >{{ auth()->user()->full_name }}</span>

        <div class="d-flex">

            @livewire('profile.contact-message')

             <form  method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="btn alert-primary btn-sm rounded-pill" type="submit"><i class="fas fa-sign-out-alt"></i></button>
            </form>
        </div>






          </nav>

        <div class="mt-2 ">
            <p class="d-block bg-light rounded">My Portfolio Link : <a href="{{url('')}}/{{ old('user_id') ?? auth()->user()->user_id }}">{{url('')}}/{{ old('user_id') ?? auth()->user()->user_id }}</a></p>

        </div>

    </div>
</div>
