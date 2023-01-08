
@extends('admin.home')
@section('content')


@if(session()->has('success'))
  <div class="alert alert-success mb-2">{{ session()->get('success') }}</div>
@endif
@if(session()->has('error'))
  <div class="alert alert-danger mb-2">{{ session()->get('error') }}</div>
@endif

<div class="container">
    <div class="card shadow mb-4" style="width: 80%">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> رسائل الجمهور</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>الاسم</th>
                            <th>القبيله</th>
                            <th>الرقم </th>
                            <th>الايميل</th>
                            <th>العنوان</th>
                            <th>الرسالة</th>
                            
                            <th>الحالة</th>
                        </tr>
                    </thead>
              
                    <tbody>
                        @php
                            $sl = 0 
                        @endphp
                        @foreach($contact as $contact)
                         @php 
                         $sl++
                         @endphp 
                        <tr>
                            <td>{{ $sl }}</td>
                            <td>{{ $contact->fname }}</td>
                            <td>{{ $contact->lname }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->address }}</td>
                            <td>{{ $contact->message }}</td>
                          
                            <td>
                               
                                <form action="{{ route ('con_deledt' , $contact->id)}}" method="POST">  
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $contact->id }}"/> 
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