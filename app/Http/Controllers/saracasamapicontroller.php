<?php

namespace App\Http\Controllers;

use App\saracasam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class saracasamapicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $saracasamapi =saracasam::all();
        $users = DB::table('saracasams')->count();
        $response["wallpapers"] = $saracasamapi;
        $response["success"] = 1;
        $response["count"]= $users;
      //  return response()->json(array($response), 200);
        $sorted = collect($response)->sortBy('created_at');

        $sorted->values()->all();

        return $json_str = json_encode($sorted);

//        $testingItem = saracasam::orderByRaw('DATE(created_at)')->orderBy('imagepath', 'asc');
//        echo $testingItem;
   // return $response->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new saracasam();
//        $data=$request->all();
        if ($request->imagepath) {
            //$filename = substr( md5( $student->id . '-' . time() ), 0, 15) . '.' . $request->file('image')->getClientOriginalExtension();
//            $file = $request->imagepath;
//            $filename = $file->getClientOriginalName();;
//            $filename = $request->file('imagepath')->getClientOriginalName();
//            $request->file('imagepath')->move(public_path('/images/api/'));
//            $request->file('imagepath')->move('publicPages\images');
//            $filename = $request->file('idea_image')->getClientOriginalName();
            $filename = $request->file('imagepath')->getClientOriginalName();
            $moveImage = $request->file('imagepath')->move('/images/api/', $filename);
//            $filename = $request->file('imagepath')->move(public_path('/images/api/'))->getFilename();

//            $file->move(public_path('images/api/' . $filename));
            $data->imagepath =  $filename;
            $data->imagename = $request->imagename;
            $data->description = $request->description;
            $data->tag = $request->tag;
//            $data->photo = $filename;
            $data->save();
            $data['success']='1';
            return response()->json(['data' => $data], 201);
        }
//        return response()->json(['data' => $sarapi], 200);
//        return response()->json(['data' => $data], 201);

//        $sarapi = saracasam::create($request->all());
//
//        // do we have an image to process?
//        if ($request->imagepath) {
//            //$filename = substr( md5( $student->id . '-' . time() ), 0, 15) . '.' . $request->file('image')->getClientOriginalExtension();
//            $file = $request->imagepath;
//            $filename = $file->getClientOriginalName();;
//            $path = move(public_path('images/api/' . $filename));
//            $sarapi->imagepath = $path;
//            $sarapi->imagename = $request->imagename;
//            $sarapi->description = $request->description;
//            $sarapi->tag = $request->tag;
//            $sarapi->photo = $filename;
//            $sarapi->save();
//            return response()->json(['data' => "success"], 200);
//        }
//        return response()->json(['data' => $sarapi], 200);
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
