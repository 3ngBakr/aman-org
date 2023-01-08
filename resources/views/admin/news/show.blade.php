
@extends('admin.home')
@section('content')

@if(session()->has('success'))
  <div class="alert alert-success mb-2">{{ session()->get('success') }}</div>
@endif
@if(session()->has('error'))
  <div class="alert alert-danger mb-2">{{ session()->get('error') }}</div>
@endif
<div class="container" style="width:85%">
    <div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"> محتوى الاخبار</h6>
  </div>
  
     <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th>SL</th>
                      <th>العنوان</th>
                      <th>الصنف</th>
                      <th>الوصف </th>
                      <th>الصوره</th>
                      <th>الحاله</th>
                      <th>الحالة</th>
                  </tr>
              </thead>
              <tfoot>
                 
                  <tr>
                      <th>SL</th>
                      <th>العنوان</th>
                      <th>الصنف</th>
                      <th>الوصف </th>
                      <th>الصوره</th>
                      <th>الحاله</th>
                      <th>الحالة</th>
                  </tr>
              </tfoot>
              <tbody>
                  @php
                      $sl = 0 
                  @endphp
                  @foreach($news as $News)
                   @php 
                   $sl++
                   @endphp 
                  <tr>
                      <td>{{ $sl }}</td>
                      <td>{{ $News->title }}</td>
                      <td>{{ $News->categorie->name }}</td>
                      <td>{{ $News->description }}</td>
                     
                      <td><img width="100" src={{ asset('adminassets/img/news_image/'.$News->news_image) }} /></td>
                      <td>
                        @if($News->status == 1)
                            <a href="/news/status/{{ $News->id }}" class="btn btn-success btn-sm">Active</a>
                        @else
                            <a href="/news/status/{{ $News->id }}" class="btn btn-warning btn-sm">Deactive</a>
                        @endif
                    </td>
                      <td>
                        <a href="/news/{{ $News->id }}/edit" class="btn btn-info btn-sm"><i class="fa fa-pen"></i></a>
                         
                          <form action="{{ route ('news_deledt' , $News->id)}}" method="POST">  
                              @csrf
                              @method('DELETE')
                              <input type="hidden" name="id" value="{{ $News->id }}"/> 
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
</div>
    
@endsection