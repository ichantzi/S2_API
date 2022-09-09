<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $data = $request->all();

        $q = Property::query()->with('types:type')->toarray();

        if (isset($data['location']))
        {$q->where('location','=', $data['location']);
        }
        if (isset($data['availability']))
        {
            $q->where('availability','=', $data['availability']);
        }
        if (isset($data['min_price']))
        {
            $q->where('price','>=', $data['min_price']);

        }
        if (isset($data['max_price']))
        {
            $q->where('price','<=', $data['max_price']);

        }
        if (isset($data['min_square_meters']))
        {
            $q->where('square_meters','>=', $data['min_square_meters']);

        }
        if (isset($data['max_square_meters']))
        {
            $q->where('square_meters','<=', $data['max_square_meters']);

        }

//        $tempResults = $q->get();
//        if (isset($data['type']))
//        {
//            foreach ($tempResults as $temp){
//                if ($temp->types['type'])
//            }
//        }

        $results = $q->get();

        return response()->json($results);

    }

}
