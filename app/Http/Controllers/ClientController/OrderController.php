<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use App\Models\Mobile;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use HoangPhi\VietnamMap\Models\Province;
use HoangPhi\VietnamMap\Models\District;
use HoangPhi\VietnamMap\Models\Ward;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shipName = $request->get('name');
        $shipEmail = $request->get('email');
        $shipProvince = $request->get('province');
        $shipDistrict = $request->get('district');
        $shipWard = $request->get('ward');
        $shipAddressDetail = $request->get('address_detail');
        $shipPhone = $request->get('phone');
        $shipNote = $request->get('comment');
        //tao order
        $order = new Order();
        $order->userId = 1; //fix cung vi chua pha trien tinh nang dang nhap
        $order->name = $shipName;
        $order->email = $shipEmail;
        $order->phone = $shipPhone;
        $order->province = $shipProvince;
        $order->district = $shipDistrict;
        $order->ward = $shipWard;
        $order->address_detail = $shipAddressDetail;
        $order->comment = $shipNote;
        $order->checkOut = false;
        $order->created_at = Carbon::now();
        $order->updated_at = Carbon::now();
        $order->status = 2;
        //tao order detail
        $hasError = false;
        //tao danh sach orderDetail de cho them orderID
        $arrayOderDetail = [];
        $shoppingCart = \Cart::getContent();
        foreach ($shoppingCart as $cartItem) {
            $product = mobile::find($cartItem->id);
            if ($product == null) {
                $hasError = true;
                break;
            }
            $orderDetail = new Orderdetail();
            $orderDetail->mobileID = $product->id;
            $orderDetail->quantity = $cartItem->quantity;
            $orderDetail->unitPrice = $product->price;
            $orderDetail->discount = 0;
            $orderDetail->created_at = Carbon::now();
            $orderDetail->updated_at = Carbon::now();
            $order->totalPrice += $cartItem->quantity * $product->price;
            array_push($arrayOderDetail, $orderDetail);
        }
        //save ca 2 vao qua transaction
        try {
            DB::beginTransaction();
            $order->save();
            $orderID1 = $order->id;
            foreach ($arrayOderDetail as $orderDetail) {
                $orderDetail->orderID = $orderID1;
                if ($orderDetail->quantity > 0) {
                    if ($orderDetail->save()){
                        $mobile = Mobile::find($orderDetail->mobileID);
                        DB::table('mobiles')
                            ->where('id', $mobile -> id)
                            ->update(['quantity' => $mobile -> quantity - $orderDetail->quantity]);
                    }
                }
            }
            DB::commit();
            \Cart::clear();
            return response()->json(['status' => 200, 'message' => 'save order successfully', 'orderID' => $orderID1]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 500, 'message' => 'save order information false']);
        }
        if ($hasError) {
            return response()->json(['status' => 404, 'message' => 'Sorry i can not find this product']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->get('id');
        $result = DB::table('orders')->where('id', $id)->update([
            'checkOut' => true,
            'updated_at' => Carbon::now(),
            'status' => 1
        ]);
        return response()->json(['status' => 200, 'message' => 'save order successfully', 'orderID' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function show_thankyou($id)
    {
        if ($order = Order::find($id)) {
            $order_details = $order->order_detail;
            return view('client.page.thankyou')->with('order', $order)->with('order_details', $order_details);
        }
    }
    public function get_district(Request $request)
    {
        $province = Province::query()->select('*')->where('name', 'LIKE', '%' . $request->get('province') . '%')->first();
        $districts = District::query()->select('*')->where('province_id', $province->id)->get();
        return response()->json(['status' => 200, 'districts' => $districts]);
    }
    public function get_province()
    {
        $provinces = Province::all();
        return response()->json(['status' => 200, 'provinces' => $provinces]);
    }
    public function get_ward(Request $request)
    {
        $district = District::query()->select('*')->where('name', 'LIKE', '%' . $request->get('district') . '%')->first();
        $wards = Ward::query()->select('*')->where('district_id', $district->id)->get();
        return response()->json(['status' => 200, 'wards' => $wards]);
    }
}
