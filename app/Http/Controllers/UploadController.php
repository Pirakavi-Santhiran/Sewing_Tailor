<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

class UploadController extends Controller{

    public function upload(){

        if(Input::hasFile('file')){

            echo 'successfully uploaded <br>';
            $file=Input::file('file');
            $file->move('photo',$file->getClientOriginalName());
            echo '<img src="photo/'.$file->getClientOriginalName().'"/>';

        }


    }


}
