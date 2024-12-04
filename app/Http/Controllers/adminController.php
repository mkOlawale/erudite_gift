<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usaproduct;
use App\Models\ukproduct;
use App\Models\otherproduct;
use App\Models\canadaproduct;
use App\Models\europeproduct;

class adminController extends Controller
{
    //
    public function addUsaProduct(){
        return view('admin.addusaproduct');
    }
    public function addUkProduct(){
        return view('admin.addukproduct');
    }
    public function addCanadaProduct(){
        return view('admin.addcanadaproduct');
    }
    public function addEuropeProduct(){
        return view('admin.addeuropeproduct');
    }
    public function addOtherProduct(){
        return view('admin.othersproduct');
    }
    public function postusaprod(Request $request){
        $product = new usaproduct;

        $product->title = $request->title;

        $product->Description = $request->Description;

        $product->Category = $request->Category;

        $product->price = $request->price;

        $image = $request->image;

        $image_name = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product', $image_name);

        $product->image = $image_name;

        $product->save();

        return redirect()->back()->with('message', 'Product is being added succesfully, No stress! shogbo omo iya mi!!');
    }
    public function showUSaProduct(){
        $product = usaproduct::all();

        return view('admin.showusa', compact('product'));
    }
    public function editusaProducts($id){

        $product = usaproduct::find($id);
        
        return view('admin.updateusa', compact('product'));
    }
    public function updateProducts(Request $request, $id){

        $product = usaproduct::find($id);

        $product->title = $request->title;

        $product->price = $request->price;

        $product->save();

        return redirect()->back()->with('message', 'Product updated succesfully');
    }
    // uk products
    public function postukprod(Request $request){
        $product = new ukproduct;

        $product->title = $request->title;

        $product->Description = $request->Description;

        $product->Category = $request->Category;

        $product->price = $request->price;

        $image = $request->image;

        $image_name = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product', $image_name);

        $product->image = $image_name;

        $product->save();

        return redirect()->back()->with('message', 'Product is being added succesfully, No stress! shogbo omo iya mi!!');
    }
    public function showUkProduct(){
        $product = ukproduct::all();

        return view('admin.showuk', compact('product'));
    }
    public function editUkProducts($id){

        $product = ukproduct::find($id);
        
        return view('admin.updateuk', compact('product'));
    }
    public function updateUkProducts(Request $request, $id){

        $product = ukproduct::find($id);

        $product->title = $request->title;

        $product->price = $request->price;

        $product->save();

        return redirect()->back()->with('message', 'Product updated succesfully');
    }
    public function postOtherprod(Request $request){
        $product = new otherproduct;

        $product->title = $request->title;

        $product->Description = $request->Description;

        $product->Category = $request->Category;

        $product->price = $request->price;

        $image = $request->image;

        $image_name = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product', $image_name);

        $product->image = $image_name;

        $product->save();

        return redirect()->back()->with('message', 'Product is being added succesfully, No stress! shogbo omo iya mi!!');
    }
    public function postCanadaprod(Request $request){
        $product = new canadaproduct;

        $product->title = $request->title;

        $product->Description = $request->Description;

        $product->Category = $request->Category;

        $product->price = $request->price;

        $image = $request->image;

        $image_name = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product', $image_name);

        $product->image = $image_name;

        $product->save();

        return redirect()->back()->with('message', 'Product is being added succesfully, No stress! shogbo omo iya mi!!');
    }
    public function showCanadaProduct(){
        $product = canadaproduct::all();

        return view('admin.showcanada', compact('product'));
    }
    public function editCanadaProducts($id){

        $product = canadaproduct::find($id);
        
        return view('admin.updatecanada', compact('product'));
    }
    public function updateCanadaProducts(Request $request, $id){

        $product = canadaproduct::find($id);

        $product->title = $request->title;

        $product->price = $request->price;

        $product->save();

        return redirect()->back()->with('message', 'Product updated succesfully');
    }
    public function postEuropeprod(Request $request){
        $product = new europeproduct;

        $product->title = $request->title;

        $product->Description = $request->Description;

        $product->Category = $request->Category;

        $product->price = $request->price;

        $image = $request->image;

        $image_name = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product', $image_name);

        $product->image = $image_name;

        $product->save();

        return redirect()->back()->with('message', 'Product is being added succesfully, No stress! shogbo omo iya mi!!');
    }
    public function showUkProduct(){
        $product = ukproduct::all();

        return view('admin.showuk', compact('product'));
    }
    public function editUkProducts($id){

        $product = ukproduct::find($id);
        
        return view('admin.updateuk', compact('product'));
    }
    public function updateUkProducts(Request $request, $id){

        $product = ukproduct::find($id);

        $product->title = $request->title;

        $product->price = $request->price;

        $product->save();

        return redirect()->back()->with('message', 'Product updated succesfully');
    }
}
