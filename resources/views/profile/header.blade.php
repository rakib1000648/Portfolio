@extends('layouts.app')

    @section('page_title')
    {{ auth()->user()->full_name }}
    @endsection

    @section('link')
    @include('layouts.partials.profile.link')
    @endsection


    @section('content')


<div class="container">

    @include('layouts.partials.profile.topheader')

    <div class="row">


    	<div class="col-md-10 mx-auto">
            @include('layouts.partials.profile.navbar')

               <hr>
               <form class="row g-3" action="{{url('header-update')}}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @foreach ($data as $value)

    <div class="col-md-6">
        <label class="form-label" for="name">Full name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Your full name" value="{{ $value->name }}">
    </div>



    <div class="col-md-6">
      <label class="form-label" for="designation">Designation</label>
        <input type="text" class="form-control" name="designation" id="designation" placeholder="Example: Freelancer, Photographer, ..." value="{{ $value->designation }}">
    </div>




    <div class="col-md-6">
        <label class="form-label" for="twitter">Twitter Link</label>
        <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Enter your twitter link if you have." value="{{ $value->twitter }}">
    </div>



    <div class="col-md-6">
       <label class="form-label" for="facebook">Facebook Link</label>
        <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Enter your facebook link if you have." value="{{ $value->facebook }}">
    </div>



    <div class="col-md-6">
       <label class="form-label" for="instagram">Instagram Link</label>
        <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Enter your instagram link if you have." value="{{ $value->instagram }}">
    </div>



    <div class="col-md-6">
       <label class="form-label" for="skype">Skype Link</label>
        <input type="text" class="form-control" name="skype" id="skype" placeholder="Enter your skype link if you have." value="{{ $value->skype }}">
    </div>



    <div class="col-md-6">
       <label class="form-label" for="linkedin">Linkedin Link</label>
        <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="Enter your linkedin link if you have." value="{{ $value->linkedin }}">
    </div>





@endforeach


    <div class="col-md-6">
       <label class="form-label" for="bgimage">Add/Change Background Image</label>
        <input type="file" class="form-control alert-info" name="bgimage" id="bgimage">
    </div>

     <div class="d-grid">

            <button class="btn btn-success" type="submit">Click To Save</button>

      </div>



            </form>

        </div><!--/col-9-->
    </div><!--/row-->




  @endsection
