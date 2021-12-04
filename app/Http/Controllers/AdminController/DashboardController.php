<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Mobile;
use App\Models\Order;
use App\Models\OrderDetail;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $order = Order::selectRaw('COUNT(id) AS count_month')
            ->groupByRaw('MONTH(created_at)')
            ->get()
            ->pluck('count_month');
        $orderTotal = Order::selectRaw('SUM(totalPrice) AS sum_month')
            ->groupByRaw('MONTH(created_at)')
            ->get()
            ->pluck('sum_month');

        $top_sale_product = OrderDetail::selectRaw('order_details.mobileID, mobiles.name, SUM(order_details.quantity) AS sum_quantity') -> join('mobiles', 'order_details.mobileID', '=', 'mobiles.id')
            ->groupBy('mobiles.name') ->orderBy('sum_quantity', 'DESC')->take(5) -> get() ->pluck('name');
        $top_sale_quantity = OrderDetail::selectRaw('mobileID, SUM(quantity) AS sum_quantity')
            ->groupBy('mobileID') ->orderBy('sum_quantity', 'DESC')->take(5) -> get() ->pluck('sum_quantity');

        $chart = (new LarapexChart) -> areaChart()
            ->setTitle('Number of orders during 2021')
            ->addData('Order', $order -> toArray())
            ->setXAxis(['Jan', 'Feb', 'Mar', 'Apr','May', 'Jun', 'Jul', 'Aug', 'Sep','Oct', 'Nov', 'Dec'])
            ->setHeight(300);
        $chartTotal = (new LarapexChart) -> barChart()
            ->setTitle('Sales during 2021')
            ->addData('Sales', $orderTotal -> toArray())
            ->setXAxis(['Jan', 'Feb', 'Mar', 'Apr','May', 'Jun', 'Jul', 'Aug', 'Sep','Oct', 'Nov', 'Dec'])
            ->setHeight(300);
        $chartTopSale = (new LarapexChart) ->horizontalBarChart()
            ->setTitle('Top sale mobile during 2021')
            ->addData('Quantity', $top_sale_quantity -> toArray())
            ->setXAxis($top_sale_product -> toArray())
            ->setHeight(300);
        return view('admin.template.dashboard', ['chart' =>$chart, 'chartTotal' => $chartTotal, 'chartTopSale' => $chartTopSale]);
    }
}
