@if($sectiondata->header==1)


  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav class="nav-menu">
      <ul>
          @if($sectiondata->header==1)
        <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
        @endif($sectiondata->about==1)
        <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
        @if($sectiondata->skills==1)
        <li><a href="#skills"><i class="bx bx-brain"></i> <span>Skills</span></a></li>
        @endif
        @if($sectiondata->resume==1)
        <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        @endif
        <li><a href="#portfolio"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="#services"><i class="bx bx-server"></i> <span>Services</span></a></li>
        @if($sectiondata->skills==1)
        <li><a href="#contact"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        @endif
      </ul>
    </nav><!-- .nav-menu -->


  </header><!-- End Header -->
  @foreach ($header as $item)
  <style>
#hero {
    width: 100%;
    height: 100vh;
    background: url("{{url('storage')}}/img/user/header/{{$item->bgimage}}") top right no-repeat;
    background-size: cover;
    position: relative;
    }
</style>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">

    <div class="container" data-aos="zoom-in" data-aos-delay="100">

        <h1>{{$item->name}}</h1>
        <p>I'm <span class="typed" data-typed-items="{{$item->designation}}"></span></p>
        <div class="social-links">

         @if($item->twitter!=null)
            @if(substr($item->twitter, 0, 8) == "https://")
            <a href="{{$item->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
            @else
            <a href="{{'https://'}}{{$item->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
            @endif
         @endif

         @if($item->facebook!=null)
            @if(substr($item->facebook, 0, 8) == "https://")
            <a href="{{$item->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
            @else
            <a href="{{'https://'}}{{$item->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
            @endif
         @endif


         @if($item->instagram!=null)
            @if(substr($item->instagram, 0, 8) == "https://")
            <a href="{{$item->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
            @else
            <a href="{{'https://'}}{{$item->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
            @endif
         @endif

         @if($item->skype!=null)
            @if(substr($item->skype, 0, 8) == "https://")
            <a href="{{$item->skype}}" class="skype"><i class="bx bxl-skype"></i></a>
            @else
            <a href="{{'https://'}}{{$item->skype}}" class="skype"><i class="bx bxl-skype"></i></a>
            @endif
         @endif


         @if($item->linkedin!=null)
            @if(substr($item->linkedin, 0, 8) == "https://")
            <a href="{{$item->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            @else
            <a href="{{'https://'}}{{$item->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            @endif
         @endif
        </div>
        @endforeach

    </div>
  </section><!-- End Hero -->

  @endif
