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
               @livewire('profile.skill')
            <br>
               @livewire('profile.skill-add')

            <br>

        </div><!--/col-9-->
    </div><!--/row-->


  @endsection
