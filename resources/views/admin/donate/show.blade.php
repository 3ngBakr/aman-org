
@extends('admin.home')
@section('content')

@if(session()->has('success'))
  <div class="alert alert-success mb-2">{{ session()->get('success') }}</div>
@endif
@if(session()->has('error'))
  <div class="alert alert-danger mb-2">{{ session()->get('error') }}</div>
@endif


    <div class="container" style="width:85%">
        <div class="card shadow mb-4" style="width:80%">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> محتواء المساهمين</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>الاسم</th>
                                <th>الرقم </th>
                                <th>الايميل</th>
                                <th>الرسالة</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            @php
                                $sl = 0 
                            @endphp
                            @foreach($Donate as $donater)
                             @php 
                             $sl++
                             @endphp 
                            <tr>
                                <td>{{ $sl }}</td>
                                <td>{{ $donater->name }}</td>
                                <td>{{ $donater->phone }}</td>
                                <td>{{ $donater->email }}</td>
                                <td>{{ $donater->message }}</td>
                              
                                <td>
                                   
                                    <form action="{{ route ('donate_deledt' , $donater->id)}}" method="POST">  
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $donater->id }}"/> 
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