<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use DB;

class OrderController extends Controller
{
	// Trang danh sách đơn hàng
    public function index()
    {
    	$orders = Order::All();

    	$data = [
    		'orders' => $orders
    	];

        return view('admin.admin-order', $data);
    }

    // Duyệt đơn
    public function approve($id)
    {
    	try {
            DB::beginTransaction();

            $order = Order::find($id);

            $order->update([
                'status' => 1,
            ]);
            
            DB::commit();
            return redirect()->back()->with('alert-success','Duyệt đơn hàng thành công!');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->with('alert-error','Duyệt đơn hàng thất bại!');
        }
    }

    // Xoá đơn
    public function delete($id)
    {
    	try {
            DB::beginTransaction();

            $order = Order::find($id)->destroy($id);
            
            DB::commit();
            return redirect()->back()->with('alert-success','Xoá đơn hàng thành công!');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->with('alert-error','Xoá đơn hàng thất bại!');
        }
    }

    // Chi tiết đơn
    public function detail($id)
    {
        $order = Order::find($id);

    	$data = [
    		'order' => $order
    	];

        return view('admin.admin-order-detail', $data);
    }
}
