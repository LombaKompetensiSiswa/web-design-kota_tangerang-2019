<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Place;

class PlaceController extends Controller
{
    public function all(){
        $placeGet = Place::select([
            'id',
            'name',
            'latitude',
            'longitude',
            'x',
            'y',
            'image_path',
            'description'
        ]);
        $place  = $placeGet->get();
        return $place;
    }
    public function search($id){
        $placeGet = Place::select([
            'id',
            'name',
            'latitude',
            'longitude',
            'x',
            'y',
            'image_path',
            'description'
        ])
        ->where(['id'=>$id]);
        $place  = $placeGet->first();
        return $place;
    }
    // TODO
    public function insert(Request $request){
        ini_set('memory_limit', '-1');
        // dd($request->image);
        // dd($request->all());
        if(
            !$request->name ||
            !$request->latitude ||
            !$request->longitude ||
            !$request->x ||
            !$request->y ||
            !$request->image
        ){
            return response()
                ->json(
                    ['messages'=> "Data cannot be processed"]
                ,422);
        }
        $allowed = [
            "image/jpg",
            "image/png",
            "image/jpeg",
        ];
        if(!in_array($request->image->getMimeType(), $allowed)){
            return response()
                ->json(
                    ["messages" => "Data cannot be processed"]
                , 422);
        }
        if($request->image->getSize() > 1024*1024*5){
            return response()
                ->json(
                    ["messages" => "Data cannot be processed"]
                , 422);
        }
        $filename = str_random(27).".jpg";
        move_uploaded_file($request->image->getRealPath(), BASEPATH.'/img//'.$filename);
        $place = new Place;
        $place->name = $request->name;
        $place->latitude = $request->latitude;
        $place->longitude = $request->longitude;
        $place->x = $request->x;
        $place->y =$request->y;
        // Update as soon possible
        $place->image_path = $filename;
        // End update
		if($request->description){
			$place->description =$request->description;
        }
        $place->save();
        return response()
            ->json([
                "messages"=>"Create success"
            ],200);

    }

    // TODO
    public function update(Request $request, $id){
        $req = $request->all();
        // Place get
        $checkGet = Place::where(['id'=>$id]);
        $check = $checkGet->first();
        if(!$check){
            return response()
                ->json([
                    "messages" => "Data cannot be updated"
                ],422);
        }
        if($request->image){
            $allowed = [
                "image/jpg",
                "image/png",
                "image/jpeg",
            ];
            if(!in_array($request->image->getMimeType(), $allowed)){
                return response()
                    ->json(
                        ["messages" => "Data cannot be processed"]
                    , 422);
            }
            if($request->image->getSize() > 1024*1024*5){
                return response()
                    ->json(
                        ["messages" => "Data cannot be processed"]
                    , 422);
            }
            $filename = str_random(27).".jpg";
            move_uploaded_file($request->image->getRealPath(), BASEPATH.'/img//'.$filename);
            unset($req['image']);
            $req['image_path'] = $filename;
        }
        $allowed = ['id',
        'name',
        'latitude',
        'longitude',
        'x',
        'y',
        'image_path',
        'description'];
        foreach($req as $key => $value){
            if(!in_array($key, $allowed)){
                unset($req[$key]);
            }
        }
        $checkGet->update($req);
        return response()
            ->json([
                'message' => 'Update success'
            ],200);
        
    }

    public function delete($id){
        $placeGet = Place::where(['id'=>$id]);
        $place = $placeGet->first();
        if(!$place){
            return response()
                ->json(
                    ["messages"=> "Data cannot be deleted"],
                    422
                );
        }
        $placeGet->delete();
        return response()
            ->json([
                "messages" => "Delete success"
            ], 200);
    }
}
    