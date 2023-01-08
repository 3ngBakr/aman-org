@include('user.layout.header')
@include('user.navbar',['categories'=>$categories])


@php
    $x='هذا الحقل مطلوب'
@endphp


<div class="container-fluid first-title">
    <h4>كن شريكا لنا في صناعة الابتسامة </h4>
    



</div>

<div class="container-fluid" style="">
    <div class="row">

        <div class="col-lg-8 col-md-12 right-form ">

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


             <h2 class="m-auto text-center donate_h2">ضع بصمتك</h2>


                <form action="{{route('store_vo')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                        <!-- Name input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example1">الاسم ( مطلوب)</label>
                            <input type="text" name="name" id="form4Example1" class="form-control @error('name') is-invalid @enderror" />
                            @error('name')
                            <div class="alert alert-danger"> {{ $x }}</div>
                        @enderror

                        </div>

                        <!-- phone number input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example1">رقم الهاتف ( مطلوب)</label>
                            <input type="text" name="phone" id="form4Example1" class="form-control @error('phone') is-invalid @enderror" />
                            @error('phone')
                            <div class="alert alert-danger"> {{ $x }}</div>
                        @enderror
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example2"> (مطلوب)الايميل</label>
                            <input type="email" name="email" id="form4Example2" class="form-control @error('email') is-invalid @enderror" />
                            @error('email')
                            <div class="alert alert-danger"> {{ $x }}</div>
                        @enderror
                        </div>

                          <!-- address input -->
                          <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example2"> مكان السكن (مطلوب)</label>
                            <input type="text" name="address" id="form4Example2" class="form-control @error('address') is-invalid @enderror" />
                            @error('address')
                            <div class="alert alert-danger"> {{ $x }}</div>
                        @enderror
                        </div>

                        <!-- Message input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example3">الرسالة</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="form4Example3" rows="4"></textarea>
                            @error('message')
                            <div class="alert alert-danger"> {{ $x }}</div>
                        @enderror
                        </div>

                     

                        <!-- Submit button -->
                        <button type="submit" style="width:100%;" class="btn btn-info btn-block mb-4">ارسل</button>
                        </form>

                      
                </div>


                <div class="col-lg-4 photo_next-form_volenteer"></div>


        </div>




        

    </div>

</div>





@include('user.layout.footer')