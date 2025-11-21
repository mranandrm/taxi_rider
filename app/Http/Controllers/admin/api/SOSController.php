<?php

namespace App\Http\Controllers\admin\api;

use App\Http\Controllers\Controller;
use App\Models\SOS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Region;

class SOSController extends Controller
{
    /**
     * List SOS Records (with search + pagination)
     */
    public function index(Request $request)
    {
        $query = SOS::with(['region', 'user']);

        if ($request->has('search') && !empty($request->search)) {
            $query->where('title', 'LIKE', "%{$request->search}%")
                  ->orWhere('contact_number', 'LIKE', "%{$request->search}%");
        }

        $items = $query->orderBy('id', 'desc')->paginate(10);

        return response()->json([
            'status' => true,
            'message' => 'SOS list fetched successfully',
            'data' => $items
        ], 200);
    }

    /**
     * Create a new SOS Record
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'region_id' => 'required|exists:regions,id',
            'title' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'status' => 'required|in:active,inactive',
            'added_by' => 'required|exists:users,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation Failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $sos = SOS::create($validator->validated());

        return response()->json([
            'status' => true,
            'message' => 'SOS created successfully',
            'data' => $sos
        ], 201);
    }

    /**
     * Get single SOS record
     */
    public function show($id)
    {
        $sos = SOS::with(['region', 'user'])->find($id);

        if (!$sos) {
            return response()->json([
                'status' => false,
                'message' => 'SOS Record not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'SOS fetched successfully',
            'data' => $sos
        ], 200);
    }

    /**
     * Update SOS
     */
    public function update(Request $request, $id)
    {
        $sos = SOS::find($id);

        if (!$sos) {
            return response()->json([
                'status' => false,
                'message' => 'SOS record not found'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'region_id' => 'nullable|exists:regions,id',
            'title' => 'nullable|string|max:255',
            'contact_number' => 'nullable|string|max:20',
            'status' => 'nullable|in:active,inactive',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation Failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $sos->update($validator->validated());

        return response()->json([
            'status' => true,
            'message' => 'SOS updated successfully',
            'data' => $sos
        ], 200);
    }

    /**
     * Delete SOS Record
     */
    public function destroy($id)
    {
        $sos = SOS::find($id);

        if (!$sos) {
            return response()->json([
                'status' => false,
                'message' => 'SOS record not found'
            ], 404);
        }

        $sos->delete();

        return response()->json([
            'status' => true,
            'message' => 'SOS deleted successfully'
        ], 200);
    }

    public function regionData()
    {
        $regions = Region::orderBy('name', 'asc')->get();

        return response()->json([
            'status'  => true,
            'message' => 'Region list fetched successfully',
            'data'    => $regions
        ], 200);
    }
}
