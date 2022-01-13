<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name') }}</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  @include('layouts.partials.general.link')
  @livewireStyles


</head>

<body>
@foreach ($section as $sectiondata)


    @include('layouts.general.header_section')

  <main id="main">

    @include('layouts.general.about_section')

    @include('layouts.general.fact_section')

    @include('layouts.general.skill_section')

    @include('layouts.general.resume_section')

    @include('layouts.general.portfolio_section')

    @include('layouts.general.service_section')

    @include('layouts.general.testimonial_section')

    @include('layouts.general.contact_section')




  </main><!-- End #main -->

  @include('layouts.partials.general.footer')

  @endforeach

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>


  @livewireScripts

  @include('layouts.partials.general.script')

</body>

</html>
