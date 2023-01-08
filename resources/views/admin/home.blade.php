<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم | موقع الامان</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Box Icons  -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Styles  -->
    <link rel="shortcut icon" href="assets/img/kxp_fav.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="{{ asset('adminassets/css/style.css') }}">

</head>

<body>
   
    <div class="sidebar close">
        <!-- ========== Logo ============  -->
        <a href="#" class="logo-box">
            <i class='bx bxl-xing'></i>
            <div class="logo-name">TopApps</div>
        </a>

        <!-- ========== List ============  -->
        <ul class="sidebar-list">
            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-grid-alt'></i>
                        <span class="name">لوحة التحكم</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">لوحة التحكم</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-collection'></i>
                        <span class="name">رسائل المستخدمين</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Category</a>
                    <a href="{{ route('donate_index')}}" class="link">عرض المتبرعين</a>
                    <a href="{{ route('voln_index') }}" class="link">عرض المتطوعين</a>
                    <a href="{{ route('con_index') }}" class="link">تواصل معنا</a>
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-book-alt'></i>
                        <span class="name">الاخبار</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">قائمة الاخبار</a>
                    <a href="{{ route('add_news') }}" class="link">اضافة الاخبار</a>
                    <a href="{{ route('show.new') }}" class="link"> عرض الاخبار</a>
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-book-alt'></i>
                        <span class="name">ارقام الخدمات</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">قائمة ارقام الخدمات</a>
                    <a href="{{ route('add_number') }}" class="link">اضافة رقم الخدمه</a>
                    <a href="{{ route('show.number') }}" class="link"> عرض ارقام الخدمات</a>
                    <a href="#" class="link">Card Design</a>
                </div>
            </li>
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-book-alt'></i>
                        <span class="name">تصنيف الاخبار</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">قائمة الاصناف</a>
                    <a href="{{ route('add_categorie') }}" class="link">اضافة تصنيف</a>
                    <a href="{{ route('show.categorie') }}" class="link"> عرض الاصناف</a>
                </div>
            </li>


            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-book-alt'></i>
                        <span class="name">معرض الصور</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">قائمة </a>
                    <a href="{{ route('add_galary') }}" class="link">اضافة صورة</a>
                    <a href="{{ route('show.galary') }}" class="link"> عرض الصور</a>
                </div>
            </li>
            <!-- -------- Non Dropdown List Item ------- -->
      

            <!-- -------- Non Dropdown List Item ------- 
            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-pie-chart-alt-2'></i>
                        <span class="name">Chart</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Chart</a>
                     submenu links here
                </div>
            </li> -->
   
        </ul>
    </div>

    <div class="container navegi">
        <x-app-layout>
           
        </x-app-layout>
        </div>
    <!-- ============= Home Section =============== -->

    <section class="home">
     
       
        <div class="toggle-sidebar">
            <i class='bx bx-menu'></i>

            <div class="text">
                
            </div>
        </div>
        <div class="container">
            
            @yield('content')

        </div>

       
    </section>

    <!-- Link JS -->
    <script src="{{asset('adminassets/js/main.js')}}"></script>
</body>

</html>