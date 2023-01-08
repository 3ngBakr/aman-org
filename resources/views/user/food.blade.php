@include('user.layout.header')
@include('user.navbar')


<section id="food" class="d-flex align-items-center text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white mt-3 mb-4" data-aos="fade-right">نؤمن لهم الغذاء لنكون شمعة أمل في حياتهم</h3>
                <div data-aos="fade-up" data-aos-delay="50">
                    <a href="{{url('/donate')}}" class="btn btn-light ms-2">ساهم</a>
                </div>
            </div>
        </div>
    </div>



   
</section>



<div class="container-fluid">
    <div class="row text-center justify-content-center">
        <div class="col-lg-4 food2 ">
            <img src="{{ asset('assets/images/food.jpg') }}" alt="">
            <h5 style="font-weight: 700;">برنامج الأمن الغذائي</h5>
            <p class="text-light" style="text-align:justify; padding:10px;">
                برنامج الأمن الغذائي
يهدف البرنامج إلى تحسين المستوى المعيشي لأسر المكفوفين باعتماد معونات غذائية شهرية وموسمية، نقد مقابل الغذاء، مشاريع صغيرة لفتح سبل للمعيشة لدى الأسر المعدمة. حيث أسهمت الجمعية بتغطية أغلب محافظات الجمهورية في تقديم خدمة البرنامج الغذائي للمستفيدين.
            </p>

        </div>

        <div class="col-lg-8 food3">
            <h4 style="padding-top: 5%;">تقوم الجمعية بتقديم العديد من المشاريع الغذائيةالتي تهدف الى تقديم الأكتفاء الذاتي لأسر الكفيفات في إطار الجمعية </h4>



            <div class="row">
                <div class="col-lg-3 mt-4">
                    <i class="food-page-icon fa-sharp fa-solid fa-person-dress"></i>
                    <h5>بنات</h5>
                    <h3>150</h3>
                </div>
                <div class="col-lg-3 mt-4">
                    <i class="food-page-icon fa-sharp fa-solid fa-person-dress"></i>
                    <h5>نساء</h5>
                    <h3>150</h3>
                </div>

                <div class="col-lg-3 mt-4">
                    
                    <i class="food-page-icon fa-solid fa-person"></i>
                    <h5>اولاد</h5>
                    <h3>100</h3>
                </div>

                <div class="col-lg-3 mt-4">
                    <i class="food-page-icon fa-solid fa-person"></i>
                    <h5>رجال</h5>
                    <h3>50</h3>
                </div>
            </div>
        </div>
    </div>
</div>



@include('user.layout.footer')