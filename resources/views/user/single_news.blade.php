@include('user.layout.header')
@include('user.navbar',['categories'=>$categories])



<div class="container news_style">

    <div class="row">
        <div class="specification ">
            <h2>
              {{ $singleNews->title}}
            </h2>
            <a class="btninfo" href="#">{{  $singleNews->categorie->name  }}</a>
        </div>

        <div class="news_image text-center">
            <img class="news_single_image" src="{{ asset('adminassets/img/news_image/'.$singleNews->news_image) }}" alt="">
        </div>


        <div class="news_body" style="width:100%;">
            <div class="card">
            <p class="news_body">
            {{$singleNews->description  }} 
            </p>
            </div>
        </div>


   

        </div>
   

    
</div>

@include('user.layout.footer')
