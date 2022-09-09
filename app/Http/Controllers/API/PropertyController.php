<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Repositories\PropertyRepository;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller
{
    /**
     * @var PropertyRepository
     */
    private PropertyRepository $propertyRepository;

    /**
     * PropertyController constructor.
     *
     * @param PropertyRepository $propertyRepository
     */
    public function __construct(PropertyRepository $propertyRepository)
    {
        $this->propertyRepository = $propertyRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try
        {
            $validator = Validator::make($request->all(), [
                'location' => 'array',
                'availability' => [
                    'required',
                    Rule::in(['Sale', 'Rent']),
                ],
                'min_price' => 'integer|min:10',
                'max_price' => 'integer|max:10000000',
                'min_square_meters' => 'integer|min:20',
                'max_square_meters' => 'integer|max:10000',
                'type' => 'array',

            ], [
                'array' => ':attribute must be an array',
                'integer' => ':attribute must be an integer',
                'min_price.min' => ':attribute must be bigger than 10',
                'max_price.max' => ':attribute must be less than 10000000',
                'min_square_meters' => ":attribute must be bigger than 20",
                'max_square_meters' => ":attribute must be smaller than 10000",
                'in' => 'The :attribute must be one of the following types: :values'

            ]);

            if ($validator->fails()){
                return response()->json($validator->errors());
            }

            $data = $request->all();
            $results = $this->propertyRepository->index($data);

            return response()->json($results);
        } catch(QueryException $e) {
            return response()->json($e->getMessage());
        }
    }

}
