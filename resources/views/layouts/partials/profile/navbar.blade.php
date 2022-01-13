<ul class="nav nav-pills alert-primary">
    <li class="nav-item"><a class="nav-link @if(request()->is('home')) active @endif" href="{{url('home')}}">Settings</a></li>
    <li class="nav-item"><a class="nav-link @if(request()->is('home/header')) active @endif" href="{{url('home/header')}}">Header</a></li>
    <li class="nav-item"><a class="nav-link @if(request()->is('home/about')) active @endif" href="{{url('home/about')}}">About</a></li>
    <li class="nav-item"><a class="nav-link @if(request()->is('home/facts')) active @endif" href="{{url('home/facts')}}">Facts</a></li>
    <li class="nav-item"><a class="nav-link @if(request()->is('home/skills')) active @endif" href="{{url('home/skills')}}">Skills</a></li>
    <li class="nav-item"><a class="nav-link @if(request()->is('home/resume')) active @endif" href="{{url('home/resume')}}">Resume</a></li>
    <li class="nav-item"><a class="nav-link @if(request()->is('home/portfolio')) active @endif" href="{{url('home/portfolio')}}">Portfolio</a></li>
    <li class="nav-item"><a class="nav-link @if(request()->is('home/services')) active @endif" href="{{url('home/services')}}">Services</a></li>
    <li class="nav-item"><a class="nav-link @if(request()->is('home/testimonials')) active @endif" href="{{url('home/testimonials')}}">Testimonials</a></li>

  </ul>
