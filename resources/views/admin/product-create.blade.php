@extends('admin.admin')

@section('content')
<div class="row">
    <div class="col-12">
      <!-- Default box -->
       <form action="{{ route('productInsert') }}" method="post" enctype="multipart/form-data">
        @csrf
      <!-- <div class="card"> -->
        <div class="card-body">
          <div class="form-group">
            <label for="name">نام محصول</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="نام محصول را وارد کنید">
            @error('name')
              <span style="color: red">نام نمیتواند خالی باشد</span>
            @enderror
          </div>        
          <div class="form-group">
            <label for="discription">توضیحات</label><br>
            <textarea style="resize: none; border-radius: 5px;" name="discription" id="discription" rows="3" cols="143" placeholder="توضیحات مربوط به کالا را وارد کنید"></textarea>
            @error('discription')
            <span style="color: red">تعداد کاراکتر های وارد شده بیشتر از حد مجاز میباشد</span>
              
            @enderror
          </div>
          <div class="form-group">
            <label for="Category">دسته بندی</label>
          <select name="Category" id="Category" class="form-control">     
            @foreach ($categories as $Category)
            <option value="{{ $Category->id }}">{{ $Category->name }}</option>
            @endforeach   
            
       
          </select>
          </div>
          <div class="form-group">
            <label for="price">قیمت محصول</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="قیمت را وارد کنید">
            @error('price')
              <span style="color: red">قمیت نمیتواند خالی باشد</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="size">سایز محصول</label>
            <input type="number" class="form-control" id="size" name="size" placeholder="سایز را وارد کنید">
            @error('size')
              <span style="color: red">بخش سایز نمیتواند خالی باشد</span>
            @enderror
          </div>
          <div class="form-group"></div>
            <label for="image">تصویر محصول</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="عکسی انتخاب کنید">
            @error('image')
              <span style="color: red" >توجه داشته باشید که فایل های انتخابی باید با فرمت های png یا jpg باشند </span>
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