<?php

namespace App\Repositories;

use App\Classes\ResponseClass;
use App\Models\Property;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class PropertyRepository
{
    public function __construct()
    {

    }

    /**
     * @return ResponseClass
     */
    public function index($data): ResponseClass
    {
        $response = new ResponseClass();
        try {
            $q = Property::query()->with('types:type');
            if (isset($data['location'])) {
                $q->whereIn('location', $data['location']);
            }
            if (isset($data['availability'])) {
                $q->where('availability', '=', $data['availability']);
            }
            if (isset($data['min_price'])) {
                $q->where('price', '>=', $data['min_price']);

            }
            if (isset($data['max_price'])) {
                $q->where('price', '<=', $data['max_price']);

            }
            if (isset($data['min_square_meters'])) {
                $q->where('square_meters', '>=', $data['min_square_meters']);

            }
            if (isset($data['max_square_meters'])) {
                $q->where('square_meters', '<=', $data['max_square_meters']);

            }
            if (isset($data['type'])) {
                $q->whereRelation('types', 'type', '=', $data['type']);
            }

            $response->object = $q->get();
            $response->message = 'Success';
            Log::channel('stats')->info('The following data were successfully searched', $data);
        } catch (QueryException $e) {
            $response->error = true;
            $response->message = $e->getMessage();
        }

        return $response;
    }
}
