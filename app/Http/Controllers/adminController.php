<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usaproduct;
use App\Models\ukproduct;
use App\Models\asianproducts;
use App\Models\canadaproduct;
use App\Models\europeproduct;
use App\Models\orders;
use App\Notifications\sendUserEmail;
use Notification;
use App\Models\payments;


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
    public function addAsianProduct(){
        return view('admin.addAsianproduct');
    }
    public function deleteAsian($id){
        $product = asianproducts::find($id);
        $product->delete();
        return redirect()->back()->with('message'. 'This product is being deleted successfully');
    }
    public function deleteCanada($id){
        $product = canadaproduct::find($id);
        $product->delete();
        return redirect()->back()->with('message'. 'This product is being deleted successfully');
    }
    public function deleteEurope($id){
        $product = europeproduct::find($id);
        $product->delete();
        return redirect()->back()->with('message'. 'This product is being deleted successfully');
    }
    public function deleteUk($id){
        $product = ukproduct::find($id);
        $product->delete();
        return redirect()->back()->with('message'. 'This product is being deleted successfully');
    }
    public function deleteUsa($id){
        $product = usaproduct::find($id);
        $product->delete();
        return redirect()->back()->with('message'. 'This product is being deleted successfully');
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
    public function delivered($id){
        $delivers = orders::find($id);

        $delivers->delivery_status = "delivered";

        $delivers->save();

        return redirect()->back();
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
    public function showEuropeProduct(){
        $product = europeproduct::all();

        return view('admin.showeurope', compact('product'));
    }
    public function Viewpayment(){
        $payments = payments::all();
        return view('admin.payment', compact('payments'));
    }
    public function editEuropeProducts($id){

        $product = europeproduct::find($id);
        
        return view('admin.updateeurope', compact('product'));
    }
    public function updateEuropeProducts(Request $request, $id){

        $product = europeproduct::find($id);

        $product->title = $request->title;

        $product->price = $request->price;

        $product->save();

        return redirect()->back()->with('message', 'Product updated succesfully');
    }
    // asian products
    public function postAsianprod(Request $request){
        $product = new asianproducts;

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
    public function showAsianProduct(){
        $product = asianproducts::all();

        return view('admin.showasian', compact('product'));
    }
    public function editAsianProduct($id){

        $product = asianproducts::find($id);
        
        return view('admin.updateasian', compact('product'));
    }
    public function updateAsianProduct(Request $request, $id){

        $product = asianproducts::find($id);

        $product->title = $request->title;

        $product->price = $request->price;

        $product->save();

        return redirect()->back()->with('message', 'Product updated succesfully');
    }
    public function order(){

        $orders = orders::all();

        return view('admin.order', compact('orders'));
    }
    public function sendEmail($id){

        $order = order::find($id);

        return view('admin.send_email', compact('order'));
    }
    public function sendEmailNotification(Request $request, $id){

        $order = order::find($id);
// there is a little confusion
// just gerring started here
        $details = [
            'greeting' => $request->greeting,

            'firstline' => $request->firstline,

            'body' => $request->body,

            'button' => $request->button,

            'url' => $request->url,

            'lastline' => $request->lastline,
        ];

        Notification::Send($order, new sendUserEmail($details));

        return redirect()->back()->with('message', "Email has been succesfully sent to the user");
}
}
