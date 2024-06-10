<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
class AdminController extends Controller
{
    public function view_category()
    {
        $data = category::all(); // This help display all the product on the db
        return view('admin.category', compact('data'));
    }

    //This is to add Product to category section
    public function add_category(Request $request)
    {

        $category = new category;

        $category->category_name = $request->category;

        $category->save();

        toastr()->timeOut(1000)->addsuccess('Category added successful!');

        return redirect()->back();

    }


    public function delete_category($id)
    {

        $data = category::find($id); // This function finds the $data and pass it on to be deleted

        $data->delete(); // This Delete the data completely

        toastr()->timeOut(1000)->addsuccess('Category deleted successful!'); // This toast message shows data is deleted

        return redirect()->back();


    }

    public function edit_category($id)
    {
        $data = category::find($id);
        return view('admin.edit_category', compact('data'));
    }

    public function update_category(Request $request, $id)
    {
        $data = category::find($id); //This is finds all the data and pass it on
        $data->category_name = $request->category; // This function request data from the category table and pass it to be updated
        $data->save();// This Delete the data completely
        toastr()->timeOut(1000)->addsuccess('Category Updated successful!'); // This toast message shows data is change
        return redirect('/view_category'); // Redirect back to the view_category page
    }

    public function add_product()
    {
        $category = category::all();
        return view('admin.add_product', compact('category'));
    }

    public function upload_product(Request $request)
    {

        $data = new product;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->category = $request->category;
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('products', $imagename);
            $data->image = $imagename;
        }
        toastr()->timeOut(1000)->addsuccess('Product Added, check your db!'); // This toast message shows data is add product
        $data->save();
        return redirect()->back();

    }

    public function view_product()
    {
        $product = Product::paginate(3);// This is display the number of product you will like to view on the admin dashboard
        return view('admin.view_product', compact('product'));
    }

    public function update_product($id)
    {
        $data = Product::find($id);
        $category = category::all();
        return view('admin.update_product', compact('data', 'category'));
    }

    public function edit_product(Request $request,$id){

        $data = Product::find($id);

        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->category = $request->category;
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('products', $imagename);
            $data->image = $imagename;
        }
        toastr()->timeOut(1000)->addsuccess('Product Updated,!'); // This toast message shows data is add product
        $data->save();
        return redirect()->back();
    }


    public function delete_product($id)
    {
        $data = Product::find($id);

        $image_path = public_path('products/'.$data->image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }


        $data->delete();
        toastr()->timeOut(1000)->addsuccess('Product deleted successful!'); // This toast message shows data is deleted

        return redirect()->back();
    }

    public function product_search(Request $request){

        $search = $request->search;
            $product = product::where('title', 'LIKE','%'.$search.'%')->
            orWhere('category', 'LIKE','%'.$search.'%')->paginate(3);

        return view('admin.view_product', compact('product'));
    }
}
