<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_id' => ['required', 'exists:clients,id'],
            'category' => ['required', 'in:ремонт компьютера,ремонт телефона,ремонт ноутбука,ремонт телевизора,ремонт комплектующих,покупка комплектующих'],
            'status' => ['required', 'in:Новый,Принят в обработку,Ожидает запчасти для ремонта,Завершен,Готов к выдаче,Отменен (отказ клиента),Отменен (отсутствуют запчасти)'],
        ]);

        Order::create([
            'client_id' => $request->client_id,
            'category' => $request->category,
            'status' => $request->status,
        ]);

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'client_id' => ['required', 'exists:clients,id'],
            'category' => ['required', 'in:ремонт компьютера,ремонт телефона,ремонт ноутбука,ремонт телевизора,ремонт комплектующих,покупка комплектующих'],
            'status' => ['required', 'in:Новый,Принят в обработку,Ожидает запчасти для ремонта,Завершен,Готов к выдаче,Отменен (отказ клиента),Отменен (отсутствуют запчасти)'],
        ]);

        $order->update([
            'client_id' => $request->client_id,
            'category' => $request->category,
            'status' => $request->status,
        ]);

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}
