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
               <form class="row g-3" action="{{url('about-update')}}" method="POST" enctype="multipart/form-data">

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

            @foreach($data as $item)

    <div class="col-12">
        <label for="introduction" class="form-label">Introduction</label>
        <textarea class="form-control" rows="2" name="introduction" id="introduction" placeholder="Write your words like...I'am blah blah blah...">{{ old('introduction') ?? $item->introduction }}</textarea>
    </div>

    <div class="col-12">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Write title here...e.g. Software Engineer/Photographer etc." value="{{ old('title') ?? $item->title }}">
    </div>

    <div class="col-12">
        <label class="form-label" for="brief_description">Brief Description</label>
        <textarea class="form-control" rows="2" name="brief_description" id="brief_description" placeholder="Write some words about your title or profession.">{{ old('brief_description') ?? $item->brief_description }}</textarea>
    </div>

    <div class="col-md-6">
      <label class="form-label" for="birthday">Birthday</label>
        <input type="date" class="form-control" name="birthday" id="birthday" value="{{ old('birthday') ?? $item->birthday }}">
    </div>

    <div class="col-md-6">
        <label class="form-label" for="gender">Gender</label>
        <select class="form-control" id="gender" name="gender">
          <option value="1" @if($item->gender==1) selected @endif>Male</option>
          <option value="2" @if($item->gender==2) selected @endif>Female</option>
          <option value="3" @if($item->gender==3) selected @endif>Other</option>

        </select>
    </div>


    <div class="col-md-6">
       <label class="form-label" for="website">Website</label>
        <input type="text" class="form-control" name="website" id="website" placeholder="Enter your website link if you have." value="{{ old('website') ?? $item->website }}">
    </div>



    <div class="col-md-6">
       <label class="form-label" for="degree">Degree</label>
        <input type="text" class="form-control" name="degree" id="degree" placeholder="Enter your degree" value="{{ old('degree') ?? $item->degree }}">
    </div>



    <div class="col-md-6">
       <label class="form-label" for="phone">Phone Number</label>
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your phone link if you have." value="{{ old('phone') ?? $item->phone }}">
    </div>

    <div class="col-md-6">
        <label class="form-label" for="email">Email Address</label>
         <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email address." value="{{ old('email') ?? $item->email }}">
     </div>

    <div class="col-md-6">
       <label class="form-label" for="city">City</label>
        <input type="text" class="form-control" name="city" id="city" placeholder="Enter your city link if you have." value="{{ old('city') ?? $item->city }}">
    </div>

    <div class="col-md-6">
        <label class="form-label" for="freelance">Freelance</label>
        <select class="form-control" id="freelance" name="freelance">
          <option value="1" @if($item->freelance==1) selected @endif>Available</option>
          <option value="2" @if($item->freelance==null || $item->freelance==2) selected @endif>Not available</option>

        </select>
    </div>

     <div class="col-12">
         <label class="form-label" for="conclusion">Conclusion</label>
        <textarea class="form-control" rows="2" name="conclusion" id="conclusion" placeholder="Write your words.">{{ old('conclusion') ?? $item->conclusion }}</textarea>
     </div>




@endforeach


    <div class="col-12">
       <label class="form-label" for="photo">Add/Change Photo</label>
        <input type="file" class="form-control alert-info" name="photo" id="photo" value="{{ old('photo')}}">
    </div>



     <div class="d-grid">
            <button class="btn btn-success" type="submit">Click To Save</button>

    </div>
            </form>
            <br>

        </div><!--/col-9-->
    </div><!--/row-->




  @endsection
