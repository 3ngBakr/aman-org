
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
      <h6 class="m-0 font-weight-bold text-primary"> محتواء الاخبار</h6>
  </div>
  <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th>SL</th>
                      <th>الاسم</th>
                      <th>الحاله</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tfoot>
                 
                  <tr>
                      <th>SL</th>
                      <th>الاسم</th>
                      <th>الحاله</th>
                      <th>Action</th>
                  </tr>
              </tfoot>
              <tbody>
                  @php
                      $sl = 0 
                  @endphp
                  @foreach($categorie as $categorie)
                   @php 
                   $sl++
                   @endphp 
                  <tr>
                      <td>{{ $sl }}</td>
                      <td>{{ $categorie->name }}</td>
                      <td>
                        @if($categorie->status == 1)
                            <a href="/categorie/status/{{ $categorie->id }}" class="btn btn-success btn-sm">Active</a>
                        @else
                            <a href="/categorie/status/{{ $categorie->id }}" class="btn btn-warning btn-sm">Deactive</a>
                        @endif
                    </td>
                      <td>
                        <a href="/categorie/{{ $categorie->id }}/edit" class="btn btn-info btn-sm"><i class="fa fa-pen"></i></a>
                         
                          <form action="{{ route ('categorie_deledt' , $categorie->id)}}" method="POST">  
                              @csrf
                              @method('DELETE')
                              <input type="hidden" name="id" value="{{ $categorie->id }}"/> 
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