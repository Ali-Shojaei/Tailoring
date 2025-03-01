@extends('admin.admin')

@section('content')
<div class="row">
    <div class="col-12">
      <!-- Default box -->
       <form action="{{ route('categoryInsert') }}" method="post" enctype="multipart/form-data">
        @csrf
      <!-- <div class="card"> -->
        <div class="card-body">
          <div class="form-group">
            <label for="name">نام دسته بندی</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="نام دسته بندی را وارد کنید">
            @error('name')
              <span style="color: red">نام نمیتواند خالی باشد</span>
            @enderror
          </div>        
          <div class="form-group">
            <label for="discription">توضیحات</label><br>
            <textarea style="resize: none; border-radius: 5px;" name="discription" id="discription" rows="3" cols="143" placeholder="توضیحات مربوط به دسته بندی را وارد کنید"></textarea>
            @error('discription')
            <span style="color: red">تعداد کاراکتر های وارد شده بیشتر از حد مجاز میباشد</span>
              
        @enderror
          </div>                           
          <div class="form-group">                 
            <input type="hidden" class="form-control" id="id" name="id">
          </div>
          <div class="form-group">
            <button style="margin-left: 20px" type="submit" class="btn btn-primary ">ثبت اطلاعات</button>
        </div>
      </form>
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection