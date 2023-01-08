@include('user.layout.header')

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- NAVBAR -->
  
        @include('user.navbar',['categories'=>$categories])

    <!-- HERO -->
@include('user.hero')
   

      <!-- BLOG news -->
@include('user.hero_news',['lastNews'=>$lastNews])
     

  
         
    <!-- ABOUT -->
  @include('user.about')

    <!-- SERVICES -->
  @include('user.services')

    <!-- COUNTER -->
    @include('user.counter',['number'=>$number])
  



    <section>
        <img src="./assets/images/INFO.png" alt="">
    </section>




  <!--donate us form-->

  @include('user.donate')



    <!-- PORTFOLIO -->
 @include('user.portfolio')
    
   



    <!-- CONTACT  -->
  @include('user.contactform')

  

    <!-- FOOTER -->
   @include('user.layout.footer')