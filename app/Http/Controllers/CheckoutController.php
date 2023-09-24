<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Shipping;
use App\Models\Payment;
use App\Models\Order;
use App\Models\OrderDetails;
use Cart;
use Session;
use DB;

Session_start();

class CheckoutController extends Controller
{
    public function index(){
        $categories = Category::all();
        $customer_id = Customer::where('id',Session::get('id'))->first();
        $customer_name = Customer::where('id',Session::get('name'))->first();
        
        return view('frondend.product_pages.cart_checkout',compact('categories','customer_id','customer_name'));
    }

  

    public function cart_delete($id){
         Cart::remove($id);
         return redirect()->back();
        
    }

    public function shipping(){
        $categories = Category::all();
        return view('frondend.customer.shipping',compact('categories'));
    }

    public function save_shipping(Request $request){
        
        $data = array();
        $dat['id'] = $request->id;
        $data['district']=$request->district;
        $data['name']=$request->c_name;
        $data['address']=$request->c_address;
        $data['city']=$request->c_state_country;
        $data['postcode']=$request->c_postal_zip;
        
        $data['email']=$request->c_email_address;
        $data['phone']=$request->c_phone;

        $s_id = Shipping::insertGetId($data);
        Session::put('sid',$s_id);
        
        
        
       
        return redirect('/payment');
         
        
        
    }

    public function payment_index(){
        $categories = Category::all();
        
        $cartCollection =  Cart::getContent();
        $cart_array = $cartCollection->toArray();
        return view('frondend.payment.order_payment',compact('categories','cart_array'));
    }

    public function payment_way(Request $request){
        

        // For Payment Table................

        $payment_method = $request->payment;

        $pdata = array();
        $pdata['payment_method'] = $payment_method;
        $pdata['status']='Pending';
        $payment_id = Payment::insertGetId($pdata);
        
       // dd($payment_id);

         //For Order Table.............

        $odata = array();
        $odata['customer_id']= Session::get('id');
        $odata['shipping_id']= Session::get('sid');
        $odata['payment_id']=$payment_id;
        $odata['total']= Cart::getTotal();
        $odata['status']='Pending';
        $order = Order::create($odata);
        
         //dd( $order);
         // dd($o_id);

        
        

        //For Order Details Table........

        
        $cart_collection = Cart::getContent();
        
        
        $o_details = array();
        foreach($cart_collection as $cart_detail){

            //dd($cart_detail);
        
        $o_details['order_id'] = $order->id;
        
        $o_details['product_id'] = $cart_detail->id; 
        $o_details['product_name'] = $cart_detail->name;
        $o_details['product_price'] = $cart_detail->price;
        $o_details['product_sales_qty'] = $cart_detail->quantity;
        
        // dd($o_details);

        
        
        OrderDetails::create($o_details);
        //$order_data = OrderDetails::InsertGetId($o_details);
        
        }
        
        if($payment_method=='bikash'){
            $categories = Category::all();
            Cart::clear();
            return view('frondend.payment.thanks',compact('categories'));
        }
        elseif($payment_method=='nogot'){
            $categories = Category::all();
            Cart::clear();
            return view('frondend.payment.thanks',compact('categories'));
            
        }
        elseif($payment_method=='cash'){
            $categories = Category::all();
            Cart::clear();
            return view('frondend.payment.thanks',compact('categories'));
            
        }
        
        
        
        
    }


    
    
}