<section id="blog" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">آخر الأخبار</h1>
                    <div class="line"></div>
                    <p></p>
                </div>
            </div>
        </div>
      
        <div class="row">
          @foreach ($lastNews as $news)
              <div class="col-md-4"  data-aos="fade-down" data-aos-delay="150">
                  <div class="team-member image-zoom">
                      <div class="image-zoom-wrapper">
                          <img style="width: 100%; height:18rem;" src="{{ asset('adminassets/img/news_image/' . $news->news_image) }}" alt="">
                      </div>
                      <h5 class="mt-4">{{ $news->categorie->name }}</h5>
                      <div class="time">
                          <i class="far fa-calendar-alt"></i><span> {{ $news->created_at }}</span>
                      </div>
                      {{--  <p>{{ $news->description }}  --}}
                      </p>
                      <a href="{{ route('get_singleNews',$news->id) }}">اقراء المزيد</a>
                  </div>
              </div>
          @endforeach
      </div>
        <div class="row mt-2">
           
            <button type="button" data-aos="fade-down" data-aos-delay="150" class="btn btn-info">
                <a class="text-light" href="{{route('get_news')}}">انقر هنا لمشاهدة بقية الاخبار</a>
            </button>

        
        </div>

    </div>
</section>