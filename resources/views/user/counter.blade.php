<section id="counter" class="section-padding">
    <div class="container text-center">
        <h4 class="display-4 fw-semibold text-light">الارقام تتحدث</h4>

        <div class="row g-4">
            @foreach ($number as $number )
            <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                <h1 class="text-white display-4">{{$number->number  }}+</h1>
                <h6 class="text-uppercase mb-0 text-white mt-3">{{ $number->name }}</h6>
            </div>  
            @endforeach
            
            
        </div>
    </div>
</section>
