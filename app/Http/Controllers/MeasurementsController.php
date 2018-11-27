<?php

namespace App\Http\Controllers;
use App\measurement;
use Illuminate\Http\Request;

class MeasurementsController extends Controller
{
    public function store(Request $request){
        //dd($request->all());
        $m=new measurement();
        $m->id=$request->id;
        $m->height=$request->height;
        $m->weight=$request->weight;
        $m->chest=$request->chest;
        $m->waist=$request->waist;
        $m->hip=$request->hip;
        $m->save();
        session()->flash('notif','Successfully Submitted');
        return redirect()->back();
    }

    public function DeleteMeasure($id){
        $task=measurement::find($id);
        $task->delete();
        return redirect()->back();
    }
    public function UpdateMeasure($id){
        $task=measurement::find($id);

        return view('Admin/adminUpdateMeasure')->with('taskdata',$task);
        return redirect()->back();
    }
    public function UpdateMeasures(Request $request){



        $id=$request->id;
        $height=$request->height;
        $weight=$request->weight;
        $chest=$request->chest;
        $waist=$request->waist;
        $hip=$request->hip;
        $data=measurement::find($id);

        $data->id=$id;
        $data->height=$height;
        $data->weight=$weight;
        $data->chest=$chest;
        $data->waist=$waist;
        $data->hip=$hip;
        $data->save();
        $datas=measurement::all();
        return view('Admin/adminMeasurements')->with('tasks',$datas);
    }
}
