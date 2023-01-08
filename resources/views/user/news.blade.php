@include('user.layout.header')
@include('user.navbar',['categories'=>$categories])




<section id="blog" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center " data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">صفحة الاخبار</h1>
                    <div class="line"></div>
                    <p></p>
                </div>
            </div>
        </div>
      

      

    <div class="row">
        @foreach ($news_all as $news)
            <div class="col-md-4 col-sm-12 main-news-card news_full_page" data-aos="fade-down" data-aos-delay="50">
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <img class="news-image" src="{{ asset('adminassets/img/news_image/' . $news->news_image) }}" alt="">
                    </div>
                    <p class="mt-4 btn btninfo">{{ $news->categorie->name }}</p>
                    <h6 class="mt-4">{{ $news->title }}</h6>

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

  
    </div>
</section>




























@include('user.layout.footer')
