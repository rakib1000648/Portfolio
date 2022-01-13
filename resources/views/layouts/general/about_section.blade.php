@if($sectiondata->about==1)

   <!-- ======= About Section ======= -->
   @foreach($about as $item)
   <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>{{$item->introduction}}</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="{{url('storage')}}/img/user/about/{{$item->photo}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>{{$item->title}}</h3>
            <p class="font-italic">{{$item->brief_description}}</p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{$item->birthday}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Website:</strong>
                    @if (is_null($item->website))
                    {{'Not available'}}
                    @else
                    {{$item->website}}
                    @endif</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{$item->phone}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{$item->city}}</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>

                  <li><i class="icofont-rounded-right"></i> <strong>Gender:</strong>
                    @if($item->gender==1) {{"Male"}} @endif
                    @if($item->gender==2) {{"Female"}} @endif
                    @if($item->gender==3) {{"Other"}} @endif
                </li>
                  <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{$item->degree}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> {{$item->email}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong>
                    @if ($item->freelance==1)
                        {{'Available'}}
                    @else
                    {{'Not Available'}}
                    @endif</li>
                </ul>
              </div>
            </div>
            <p>{{$item->conclusion}}</p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    @endforeach
    @endif
