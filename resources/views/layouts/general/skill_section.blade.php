@if($sectiondata->skills==1)
    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <p>{{$sk_intro}}</p>
        </div>

        <div class="row skills-content d-flex flex-row">
            @foreach($skillDetails as $item)
          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">{{$item->skill_name}} <i class="val">{{$item->skill_volume}}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$item->skill_volume}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>
          @endforeach


        </div>

      </div>
    </section><!-- End Skills Section -->
@endif
