
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
      <h6 class="m-0 font-weight-bold text-primary"> محتواء ارقام الخدمات</h6>
  </div>
  <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th>SL</th>
                      <th>الاسم</th>
                      <th>الرقم</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tfoot>
                 
                  <tr>
                      <th>SL</th>
                      <th>الاسم</th>
                      <th>الرقم</th>
                      <th>Action</th>
                  </tr>
              </tfoot>
              <tbody>
                  @php
                      $sl = 0 
                  @endphp
                  @foreach($number as $number)
                   @php 
                   $sl++
                   @endphp 
                  <tr>
                      <td>{{ $sl }}</td>
                      <td>{{ $number->name }}</td>
                      <td>
                       {{ $number->number }}
                    </td>
                      <td>
                        <a href="/serviesNumber/{{ $number->id }}/edit" class="btn btn-info btn-sm"><i class="fa fa-pen"></i></a>
                         
                          <form action="{{ route ('number_deledt' , $number->id)}}" method="POST">  
                              @csrf
                              @method('DELETE')
                              <input type="hidden" name="id" value="{{ $number->id }}"/> 
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