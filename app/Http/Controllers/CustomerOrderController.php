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
        $task=Task3::find($id);

        return view('updatetask')->with('taskdata',$task);
        return redirect()->back();
    }
    public function UpdateTasks(Request $request){

        //dd($request);
        $id=$request->id;
        $task=$request->task;
        $data=Task3::find($id);
        $data->task=$task;
        $data->save();
        $datas=Task3::all();
        return view('contac')->with('tasks',$datas);
    }
}
