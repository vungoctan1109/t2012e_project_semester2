<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Order;
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
        $chart = (new LarapexChart) -> areaChart()
            ->setTitle('Orders')
            ->addData('Order', $order -> toArray())
            ->setXAxis(['Jan', 'Feb', 'Mar', 'Apr','May', 'Jun', 'Jul', 'Aug', 'Sep','Oct', 'Nov', 'Dec'])
            ->setHeight(300);
        $chartTotal = (new LarapexChart) -> barChart()
            ->setTitle('Sale')
            ->addData('Sale', $orderTotal -> toArray())
            ->setXAxis(['Jan', 'Feb', 'Mar', 'Apr','May', 'Jun', 'Jul', 'Aug', 'Sep','Oct', 'Nov', 'Dec'])
            ->setHeight(300);
        return view('admin.template.dashboard', ['chart' =>$chart, 'chartTotal' => $chartTotal]);
    }
}
