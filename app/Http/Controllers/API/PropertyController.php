<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Repositories\PropertyRepository;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

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
            $request->validate([
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

            ]);

            $data = $request->all();
            $results = $this->propertyRepository->index($data);

            return response()->json($results);
        } catch(QueryException $e) {
            return response()->json($e->getMessage());
        }
    }

}
