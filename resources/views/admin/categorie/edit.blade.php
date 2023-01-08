
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
              <h3> تعديل الاصناف</h3>
          </div>
          <div class="card-body">
              <form action="{{ route('categorie_update', $categorie->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="mt-2">
                      <label for="title">العنوان</label>
                      <input type="text" id="name" value="{{ $categorie->name }}" placeholder="اضافة عنوان" class="form-control @error('title') is-invalid @enderror" name="name">
                      @error('name')
                      <div class="alert alert-danger"> {{ $x }}</div>
                  @enderror
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