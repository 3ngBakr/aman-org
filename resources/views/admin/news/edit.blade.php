
@extends('admin.home')
@php
    $x='هذا الحقل مطلوب'
@endphp
@section('content')


<div class="row">
  <div class="col-lg-6 col-sm-12 col-md-12">
      @if($errors->any())
          @foreach ($errors->all() as $error)
              <div class="alert alert-danger mb-2">{{ $error }}</div>
          @endforeach
      @endif

      @if(session()->has('success'))
          <div class="alert alert-success mb-2">{{ session()->get('success') }}</div>
      @endif
      @if(session()->has('upload_error'))
          <div class="alert alert-danger mb-2">{{ session()->get('upload_error') }}</div>
      @endif
      <div class="card shadow">
          <div class="card-header">
              <h3> تعديل الاخبار</h3>
          </div>
          <div class="card-body">
              <form action="{{ route('news_update', $news->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="mt-2">
                      <label for="title">العنوان</label>
                      <input type="text" id="title" value="{{ $news->title }}" placeholder="اضافة عنوان" class="form-control @error('title') is-invalid @enderror" name="title">
                      @error('title')
                      <div class="alert alert-danger"> {{ $x }}</div>
                  @enderror
                    </div>
                  
                    <div class="mt-2">
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label ">categorie</label>
                   
                            <div class="col-md-12 ">
                                <select class="form-control @error('title') is-invalid @enderror  " name="categorie_id"  style="text-align: center">
                                    <option value="" selected>Choose categorie</option>
                                    @foreach($categorie as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                    @endforeach
                                </select>
                                @error('categorie_id')
                          <div class="alert alert-danger"> {{ $x }}</div>
                      @enderror
                            </div>
                        </div>
                      </div>
                  <div class="mt-2">
                      <label for="desc">الوصف</label>
                      <textarea name="description"  class="form-control @error('description') is-invalid @enderror" id="desc" cols="30" rows="6" placeholder="اكتب الوصف">{{ $news->description }}</textarea>
                      @error('description')
                      <div class="alert alert-danger"> {{ $x }}</div>
                      @enderror
                  </div>
                  <div class="mt-2">
                      <label for="bi">اضافة الصوره</label>
                      <input type="file" id="bi" oninput="pic.src=window.URL.createObjectURL(this.files[0])" class="form-control" name="news_image">
                      <img id="pic" height="100" width="100" src="{{ asset('adminassets/img/news_image/'.$news->news_image) }}" alt="">
                     
                  </div>
                  <div class="mt-2">
                      <button type="submit" class="btn btn-success">تحميل</button>
                  </div>
  
              </form>
          </div>
  
      </div>
  </div>
</div>
@endsection