
<nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img   src="./assets/images/logo.png" alt="">
            </a>
            <button class="navbar-toggler"
             type="button"
                 data-bs-toggle="collapse" 
                data-bs-target="#navbarNav"
                aria-controls="navbarNav" 
                aria-expanded="false" 
                aria-label="Toggle navigation"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

          
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/about')}}">نبذة عنا</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#porject" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            البرامج
                        </a>
                        <ul class="dropdown-menu  text-center" aria-labelledby="navbarDropdownMenuLink">
                            @foreach ( $categories as $category)
                            <li><a class="dropdown-item" href="{{ route('categories.news',  $category->id) }}">{{ $category->name }} </a></li>  
                            @endforeach
                          {{--  <li><a class="dropdown-item" href="{{ url('/food') }}">الأمن الغذائي</a></li>
                          <li><a class="dropdown-item" href="{{ url('/health') }}">الصحة</a></li>
                          <li><a class="dropdown-item" href="{{ url('/education') }}">التعليم</a></li>
                          <li><a class="dropdown-item" href="#">المياة</a></li>
                          <li><a class="dropdown-item" href="#">الايواء</a></li>
                          <li><a class="dropdown-item" href="#">الحماية</a></li>  --}}
                        </ul>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/get_news') }}">إعلام</a>
                        <ul class="dropdown-menu  text-center" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">اخبارنا</a></li>
                            <li><a class="dropdown-item" href="#">فيديوهات</a></li>
                            <li><a class="dropdown-item" href="#">التقرير السنوي</a></li>
                          </ul>
                    </li>
             
                  
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">تواصل</a>
                    </li>
                 
                </ul>
                <a href="{{url('/volenteer')}}" class="btn btn-brand ms-lg-3">تطوع معنا</a>
                
                <a href="{{url('/donate')}}" class="btn btn-brand ms-lg-3">ساهم</a>
            </div>
        </div>
    </nav>