<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;

class CustomerOrderController extends Controller
{



    public function store(Request $request){
        //dd($request->all());
        $order=new Order();
        $order->reg_id=$request->cus_id;
        $order->deisgn_id=$request->design_id;
        $order->color=$request->dress_color;
        $order->category=$request->Category;
        $order->comments=$request->comment;
        $order->date=$request->date;
        $order->save();
        session()->flash('notif','Successfully Submitted');
        return redirect()->back();


    }
    public function UpdatedTaskAccepted($id){
        $task=Order::find($id);
        $task->is_accepted=1;
        $task->save();
        return redirect()->back();
    }
    public function UpdatedTaskNotAccepted($id){
        $task=Order::find($id);
        $task->is_accepted=0;
        $task->save();
        return redirect()->back();
    }
    public function UpdatedTaskCompleted($id){
        $task=Order::find($id);
        $task->is_completed=1;
        $task->save();
        return redirect()->back();
    }
    public function UpdatedTaskNotCompleted($id){
        $task=Order::find($id);
        $task->is_completed=0;
        $task->save();
        return redirect()->back();
    }
    public function adminstore(Request $request){
        //dd($request->all());

        return view('adminOrders')->with('tasks',$data);

    }
    public function DeleteOrder($id){
        $task=Order::find($id);
        $task->delete();
        return redirect()->back();
    }
    public function UpdateOrder($id){
        $task=Order::find($id);

        return view('Admin/adminUpdate')->with('taskdata',$task);
        return redirect()->back();
    }
    public function UpdateOrders(Request $request){



        $id=$request->id;
        $reg_id=$request->reg_id;
        $design_id=$request->design_id;
        $dress_color=$request->dress_color;
        $category=$request->category;
        $comment=$request->comment;
        $date=$request->date;
        $data=Order::find($id);

        $data->reg_id=$reg_id;
        $data->deisgn_id=$design_id;
        $data->color=$dress_color;
        $data->category=$category;
        $data->comments=$comment;
        $data->date=$date;
        $data->save();
        $datas=Order::all();
        return view('Admin/adminOrders')->with('tasks',$datas);
    }
}
