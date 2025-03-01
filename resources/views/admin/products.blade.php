
@extends('admin.admin')

@section('content')

<div class="row">

          <div class="col-12">
            
            <!-- /.card -->
            
            <div class="card">
              <div class="card-header">
                <h1 class="m-0 mt-1">محصولات</h1>
                <h3 class="card-title mt-4">برای اضافه کردن محصول جدید کلیک کنید</h3>
                <br>
                <td>           
                  {{-- <a href="{{ route('RestaurantCreate') }}" id="border12" type="button" class="btn btn-block btn-success col-2 mt-4">Add+</a>                                                  --}}
                <a href="{{ route('productCreate') }}" id="border12" type="button" class="btn btn-block btn-success col-2 mt-4">افزودن محصول جدید</a>                                     
                </td>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th>نام</th>
                    <th>توضیحات</th>
                    <th>دسته بندی محصول</th>  
                    <th>تصویر محصول</th>                                              
                    <th>قیمت</th>          
                    <th>سایز</th>
                    <th>حذف</th>
                    <th>ویرایش</th>
                  </tr>         
                  </thead>
                  <tbody>
                      @foreach ($Products as $Product)
                      <tr>       

                        <td>{{ $Product->name }}</td>
                        <td>{{ $Product->discription }}</td>
                        <td>{{ $Product->Categories()->name }}</td>
                        <td><img src="{{ asset('image/'.$Product->image)  }}" style="border-radius: 5px;  border: 1px solid rgb(134, 116, 116)" width="80" height="50" alt=""></td>
                        {{-- <td><img src="{{ asset('image/'.$restaurant->image)  }}" style="border-radius: 5px;  border: 1px solid rgb(134, 116, 116)" width="80" height="50" alt=""></td> --}}
                        <td>{{ $Product->price }}</td>
                        <td>{{ $Product->size }}</td>
                        {{-- <th><a href="{{ route('RestaurantDelete' , ['id' => $restaurant->id]) }}">حذف</a></th>
                        <th><a href="{{ route('RestaurantEdit' , ['id' => $restaurant->id]) }}">ویرایش</a></th> --}}
                        <th><a href="{{ route('productDelete' , ['id' => $Product->id]) }}">حذف</a></th>
                        <th><a href="{{ route('productEdit' , ['id' => $Product->id])  }}">ویرایش</a></th>
  
                      </tr> 
                      @endforeach                              
                      
                                     
                  </tbody>
                   
                              
                  <tfoot>
                  <tr>
                    <th>نام</th>
                    <th>توضیحات</th>
                    <th>دسته بندی محصول</th>
                    <th>تصویر محصول</th> 
                    <th>قیمت</th>
                    <th>سایز</th>
                    <th>حذف</th>
                    <th>ویرایش</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
  
  @endsection