
@php
$x='هذا الحقل مطلوب'
@endphp
<section class="section-padding bg-light" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 text-white fw-semibold">تواصل معنا</h1>
                        <div class="line bg-white"></div>
                        <p class="text-white">للإستعلام وتقديم الخدمات كن قريباً وتواصل معنا</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
               @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
                
                        @if(session()->has('message'))

                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert">
                                    x
                                </button>
                                {{session()->get('message')}}

                            </div>

                          @endif
                          @if(session()->has('upload_error'))
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">
                    x
                </button>
                {{session()->get('upload_error')}}

            </div>
            @endif

                <div class="col-lg-8">
                    <form action="{{url('/upload')}}" class="row g-3 p-lg-5 p-4 bg-white theme-shadow" method="post" ecntype="multipart/form-data">
                        @csrf
                        <div class="form-group col-lg-6">
                            <input type="text" name="fname"class="form-control @error('fname') is-invalid @enderror" placeholder="الاسم الاول">
                            @error('fname')
                            <div class="alert alert-danger"> {{ $x }}</div>
                        @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" name="lname" class="form-control @error('lname') is-invalid @enderror" placeholder="الاسم الاخير">
                            @error('lname')
                            <div class="alert alert-danger"> {{ $x }}</div>
                        @enderror
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="رقم الهاتف (مطلوب)">
                            @error('phone')
                            <div class="alert alert-danger"> {{ $x }}</div>
                        @enderror
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="الايميل">
                            @error('email')
                            <div class="alert alert-danger"> {{ $x }}</div>
                        @enderror
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="العنوان">
                            @error('address')
                            <div class="alert alert-danger"> {{ $x }}</div>
                        @enderror
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea name="message" rows="5" class="form-control @error('message') is-invalid @enderror" placeholder="الرسالة"></textarea>
                            @error('message')
                            <div class="alert alert-danger"> {{ $x }}</div>
                        @enderror
                        </div>
                        <div class="form-group col-lg-12 d-grid">
                            <button  type="submit" class="btn btn-brand">ارسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>