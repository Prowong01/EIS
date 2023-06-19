<?php

namespace App\Http\Controllers;

use App\Models\PurchaseOrder;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $purchaseorders = PurchaseOrder::with('PurchaseRequest', 'PurchaseRequest.Product', 'PurchaseRequest.Supplier')->orderBy('po_id', 'DESC') ->get();
        return view('purchase_order.index', compact('purchaseorders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('purchase_order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'po_prID' => 'required',
            'po_paymentTerm' => 'required',
            'po_deliveryTo' => 'required'
        ]);
        $purchaseOrder = new PurchaseOrder();
        $purchaseOrder->po_no = 'PO'.date('ym').strtoupper(substr(sha1(rand()), 0, 6));
        $purchaseOrder->po_prID = $request->input('po_prID');
        $purchaseOrder->po_paymentTerm = $request->input('po_paymentTerm');
        $purchaseOrder->po_deliveryTo = $request->input('po_deliveryTo');
        $purchaseOrder->save();
        return redirect()->route('purchase_order.index')->with('success', 'Purchase order created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function show($id): View
    {
        $purchaseorder = PurchaseOrder::findOrFail($id);
        $purchaserequest = $purchaseorder->PurchaseRequest;
        $product = $purchaseorder->PurchaseRequest->Product;
        return view('purchase_order.show',compact('purchaseorder','purchaserequest','product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(PurchaseOrder $purchaseOrder): View
    {
        return view('purchase_order.edit',compact('purchaseOrder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'po_prID' => 'required',
            'po_paymentTerm' => 'required',
            'po_deliveryTo' => 'required'
        ]);
        $purchaseOrder = PurchaseOrder::find($id);
        $purchaseOrder->po_prID = $request->input('po_prID');
        $purchaseOrder->po_paymentTerm = $request->input('po_paymentTerm');
        $purchaseOrder->po_deliveryTo = $request->input('po_deliveryTo');
        $purchaseOrder->save();
        return redirect()->route('purchase_order.index')->with('success', 'Purchase order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request): RedirectResponse
    {
        $id= $request->input('poid');

        $purchaseOrder = PurchaseOrder::find($id);

        $purchaseOrder->delete();

        return redirect()->route ('purchase_order.index')->with('success', 'Purchase order deleted successfully');
    }
}
