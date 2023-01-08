@include('user.layout.header')
@include('user.navbar')


<section id="education" class="d-flex align-items-center text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white mt-3 mb-4" data-aos="fade-right">لتفعيل طاقات وإبداعات بناتنا الكفيفات</h1>
                <div data-aos="fade-up" data-aos-delay="50">
                    <a href="{{url('/donate')}}" class="btn btn-light ms-2">ساهم</a>
                </div>
            </div>
        </div>
    </div>



   
</section>



<div class="container-fluid">
    <div class="row text-center justify-content-center">
        <div class="col-lg-4 eduprogram ">
            <i class="fa-solid fa-graduation-cap"></i>
            <h5 style="font-weight: 700;">برنامج التعليم</h5>
            <p class="text-light" style="text-align:justify; padding:10px;">

                    برنامج تعليم يسعى لتأهيل كوادر من فئة الكفيفات قادرة على الانتاج والبناء 
            </p>

        </div>

        <div class="col-lg-8 food3">
            <h4 style="padding-top: 5%;">تقوم الجمعية بتقديم العديد من المشاريع الغذائيةالتي تهدف الى تقديم الأكتفاء الذاتي لأسر الكفيفات في إطار الجمعية </h4>



       
        </div>
    </div>
</div>



@include('user.layout.footer')