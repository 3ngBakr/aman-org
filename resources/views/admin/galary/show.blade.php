
@extends('admin.home')
@section('content')

@if(session()->has('success'))
  <div class="alert alert-success mb-2">{{ session()->get('success') }}</div>
@endif
@if(session()->has('error'))
  <div class="alert alert-danger mb-2">{{ session()->get('error') }}</div>
@endif

<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">معرض الصور</h6>
  </div>
  <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th>SL</th>
                      <th>عنوان الصورة</th>
                      <th> الصورة</th>
                      <th>تاريخ النشر</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tfoot>
                 
                  <tr>
                      <th>SL</th>
                      <th>عنوان الصورة</th>
                      <th> الصورة</th>
                      <th>تاريخ النشر</th>
                      <th>Action</th>
                  </tr>
              </tfoot>
              <tbody>
                  @php
                      $sl = 0 
                  @endphp
                  @foreach($image as $galary)
                   @php 
                   $sl++
                   @endphp 
                  <tr>
                      <td>{{ $sl }}</td>
                      <td>{{ $galary->title }}</td>
                      <td><img width="100" src={{ asset('adminassets/img/galaryimage/'.$galary->image) }} /></td>
                      <td>{{ $galary->created_at }}</td>

                    
                      <td>
                         
                          <form action="{{ route ('galary_deledt',$galary->id)}}" method="POST">  
                              @csrf
                              @method('DELETE')
                              <input type="hidden" name="id" value="{{ $galary->id }}"/> 
                              <button onclick="return confirm('هل انت متأكد من الحذف?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>
                          
                      </td>

                     
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
</div>
    
@endsection