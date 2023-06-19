<?php

namespace App\Http\Controllers;

use App\Models\PurchaseRequest;
use Illuminate\Http\Request;

class PurchaseRequestController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function getPR(Request $request)
    {
        $search = $request->search;

      if($search == ''){
         $purchaserequests = PurchaseRequest::orderby('pr_cdate','desc')->where('pr_status','=',2)->limit(5)->get();
      }else{
         $purchaserequests = PurchaseRequest::orderby('pr_cdate','desc')->where('pr_status','=',2)->where('pr_no', 'like', '%' .$search . '%')->limit(5)->get();
      }

      $response = array();
      foreach($purchaserequests as $purchaserequest){
         $response[] = array(
              "id"=>$purchaserequest->pr_id,
              "text"=>$purchaserequest->pr_no,
              "product"=>$purchaserequest->Product->p_name,
              "supplier"=>$purchaserequest->Supplier->sup_name,
              "date"=>$purchaserequest->pr_cdate->todatestring(),
              "total"=>$purchaserequest->pr_total
         );
      }

      return response()->json($response);
    }
}
