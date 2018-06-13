<?php

namespace App\Http\Controllers;

use App\saracasam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;


class saracasamcontroller extends Controller
{

    public function index()
    {
        return view("layout.one");
    }


    public function store(Request $request)
    {
        $sar = new saracasam($request->input());
        if ($file = $request->hasFile('imagepath')) {

            $file = $request->file('imagepath');

            $fileName = $file->getClientOriginalName();

            $file->move("images/", $fileName);

            $sar->imagepath = "http://localhost:8000/images/" . $fileName;
            $sar->imagename = $request->imagename;
//            $sar->move(public_path(), '/images', $sar->getClientOriginalName());
//            Input::file('photo')->move(public_path(),'/images', $sar->getClientOriginalName());
//            $sar->imagepath = $sar;
            $sar->description = $request->description;
            $sar->tag = $request->tag;
        }
        if ($sar->save()) {
//            echo "done";
            return view("layout.view")->with("sar", $sar);
        } else {
        }

    }
}
