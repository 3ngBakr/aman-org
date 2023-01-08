@include('user.layout.header')
@include('user.navbar',['categories'=>$categories])


<section id="health" class="d-flex align-items-center text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white mt-3 mb-4" data-aos="fade-right">كن مرهماً يخفف الآلام</h1>
                <div data-aos="fade-up" data-aos-delay="50">
                    <a href="{{url('/donate')}}" class="btn btn-light ms-2">ساهم</a>
                </div>
            </div>
        </div>
    </div>



   
</section>
<div class="container-fluid py-2">
@foreach ($news as $news)
    



    <div class="row text-center justify-content-center mb-2">
        <div class="col-lg-4 health2 ">
          
                <img class="news-image" src="{{ asset('adminassets/img/news_image/' . $news->news_image) }}" alt="">
        
            <h5 style="font-weight: 700;">{{ $news->categorie->name}}</h5>
            <p class="text-light" style="text-align:justify; padding:10px;">

                السعي الى ------------------------------------------------
                ------------------------------------------------fa-border-----------
                --------------------------------

            </p>

        </div>

        <div class="col-lg-8 ">
            <h4 style="padding-top: 5%;"> {{ $news->description }}</h4>



       
        </div>
    </div>

@endforeach
</div>

@include('user.layout.footer')