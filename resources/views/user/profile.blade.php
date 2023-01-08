@include('user.layout.header')
@include('user.navbar')







    
<div class="container text-center">
    <h1 class="m-5 text-center">معرض الصور
    </h1>
    <div class="row">
        @foreach($galary as $galary)

        <div class="col-lg-4" data-aos="fade-down" data-aos-delay="150">
            <div class="portfolio-item image-zoom">
                <div class="image-zoom-wrapper">
                    <img style="width: 90%;height:300px;margin-bottom:30px" src={{ asset('adminassets/img/galaryimage/'.$galary->image) }} alt="{{ $galary->title }}">
                </div>
                <a href="{{ asset('adminassets/img/galaryimage/'.$galary->image) }}" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
            </div>

        </div>  

        @endforeach

    </div>
</div>
               



@include('user.layout.footer')