<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\categories;
use Directory;
use PDO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class AdminController extends Controller
{
    public function CategoryPost(){
        return view('front.catagory-post');
    }

    public function admin(){
        return view('admin.admin');
    }

    public function productsList(){
        $Products = Products::where('is_hide' ,'=', 0)->get();
       return view('admin.products' , ['Products' => $Products]);
        
    }
     public function categoryList(){
        $Categories = categories::where('is_hide' ,'=', 0)->get();
        return view('admin.categories' , ['Categories' => $Categories]);
     }

     public function productCreate(){
        $categories = categories::all();
        return view('admin.product-create' , 
    [
        'categories' => $categories
    ]);
     }

     public function categoryCreate(){
        return view('admin.category-create');
     }

     public function productInsert(Request $request){
         $name = $request->input('name');
         $discription = $request->input('discription');
         $categories = $request->input('Category');
         $price = $request->input('price');
         $size = $request->input('size');
         $image = time().'-'.$request->file('image')->getClientOriginalName();
         $request->file('image')->move(public_path('image'), $image);
         Products::Create([
           'name' => $name,
           'discription' => $discription,
           'category_id' => $categories,
           'price' => $price,
           'size' => $size,
           'image' => $image
         ]);
         
         return redirect(route('productsList'));

     }

     public function categoryInsert(Request $request){
        $name = $request->input('name');
        $discription = $request->input('discription');
        categories::Create([
           'name' => $name,
           'discription' => $discription
        ]);
        return redirect(route('categoryList'));
     }

     public function productEdit($id){
           $product = Products::find($id);
           $categories = categories::all();
           return view('admin.product-edit' , [
              
            'products' => $product,
            'categories' => $categories
             
           ]);
     }

     public function productsUpdate(Request $request){
        $Products = Products::findOrFail($request->input('id'));           
        $image = false;
        if($request->file('image')){
           $request->validate([               
                 'image' => 'required |mimes:png,jpg'
               ]);
               $image = time().'-'.$request->file('image')->getClientOriginalName();
               $request->file('image')->move(public_path('image'), $image);
        }
        if ($Products->name != $request->input('name')){
           $request->validate([               
              'name' => 'required|unique:products,name'
            ]);
        }
        
                
        if($image){
           $Products
           ->Update([
            'name' => $request->input('name'),
            'discription' => $request->input('discription'),
            'image' => $image,
            'category_id' => $request->input('Category'),
            'price' => $request->input('price'),
            'size' => $request->input('size')
           ]);
        }
        else{
           $Products
           ->Update([
            'name' => $request->input('name'),
            'discription' => $request->input('discription'),
            // 'image' => $image,
            'category_id' => $request->input('Category'),
            'price' => $request->input('price'),
            'size' => $request->input('size')
           ]);
           
        }     
        return redirect(route('productsList'));
     }
     public function categoryEdit($id){
           $categories = categories::find($id);
           return view('admin.category-edit' , ['categories' => $categories]);
     }

     public function categoryUpdate(Request $request){
        categories::findOrFail($request->input('id'))->update([
             'name' => $request->input('name'),
             'discription' => $request->input('discription')
        ]);
        return redirect(route('categoryList'));
     }

     public function productDelete($id){
           Products::findOrFail($id)->where('id' ,'=', $id)->update([
            'is_hide' => 1    
           ]);

           return redirect(route('productsList'));
     }

     public function categoryDelete($id){
           categories::findOrFail($id)->where('id' ,'=', $id)->update([
            'is_hide' => 1
           ]);

           return redirect(route('categoryList'));
     }

     public function categories($id){
      $categories = categories::find($id);
      $Products = Products::where('category_id' ,'=', $id)->get();
      
      return view('front.categories' , ['Products' => $Products , 'categories' => $categories]);
}

 public function product(){
   
   $Products = Products::where('is_hide' ,'=', 0)->get();
   // $categories = categories::where('is_hide' ,'=', 0)->get();
   return view('front.products' , ['Products' => $Products]);
 }

           public function productSlider($id){
            // $categories = categories::where('id' ,'=', $id)->where('is_hide' ,'=', 0)->get();
            $Products = Products::where('is_hide' ,'=', 0)->where('id' ,'=', $id)->get();

            return view('front.productSlider' , ['Products' => $Products]);
           }
           public function search(Request $request){
            $q = ($request->get('q'));
          $Products = Products::where('name' , 'like' , '%'.$q.'%')->get(); 
          return view('front.search' , ['Products' => $Products]);
        }
}
