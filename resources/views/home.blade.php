@extends('layouts.app')

    @section('page_title')
    {{ auth()->user()->full_name }}
    @endsection

    @section('link')
    @include('layouts.partials.profile.link')
    @endsection



    @section('content')



<div class="container bootstrap snippet">

    @include('layouts.partials.profile.topheader')

    <div class="row">


    	<div class="col-md-10 mx-auto">
            @include('layouts.partials.profile.navbar')

                <hr>
                <h4 class="text-info">Manage Sections</h4>
                @foreach ($section as $item)

                <form class="row g-3" method="POST" action="{{ url('homesection') }}">
                    @csrf
                @method('PUT')


                <div class="form-group col-md-12">
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="header" value="1" class="form-check-input" id="header" @if     ($item->header==1) checked @endif>
                        <label class="form-check-label" for="header">Header</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="about" value="1" class="form-check-input" id="about" @if     ($item->about==1) checked @endif>
                        <label class="form-check-label" for="about">About</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="facts" value="1" class="form-check-input" id="facts" @if     ($item->facts==1) checked @endif>
                        <label class="form-check-label" for="facts">Facts</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="skills" value="1" class="form-check-input" id="skills" @if     ($item->skills==1) checked @endif>
                        <label class="form-check-label" for="skills">Skills</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="resume" value="1" class="form-check-input" id="resume" @if     ($item->resume==1) checked @endif>
                        <label class="form-check-label" for="resume">Resume</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="portfolio" value="1" class="form-check-input" id="portfolio" @if     ($item->portfolio==1) checked @endif>
                        <label class="form-check-label" for="portfolio">Portfolio</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="services" value="1" class="form-check-input" id="services" @if     ($item->services==1) checked @endif>
                        <label class="form-check-label" for="services">Services</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="testimonials" value="1" class="form-check-input" id="testimonials" @if     ($item->testimonials==1) checked @endif>
                        <label class="form-check-label" for="testimonials">Testimonials</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="contact" value="1" class="form-check-input" id="contact" @if     ($item->contact==1) checked @endif>
                        <label class="form-check-label" for="contact">Contact</label>
                    </div>
                </div>

                <div class="col-12">
                    <button class="btn btn-md btn-success" type="submit">Click To Save</button>
                </div>

                </form>
                @endforeach

                @include('profile.update-profile-information-form')

                @include('profile.update-password-form')



             <br>




        </div><!--/col-9-->
    </div><!--/row-->





  @endsection
