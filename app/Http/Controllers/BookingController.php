<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
class BookingController extends Controller
{
    //
    public function store(Request $request)
{
    Log::info('Booking Request Received:', $request->all());

    $validated = $request->validate([
        'trek_title'          => 'required|string|max:255',
        'start_date'          => 'required|date',
        'end_date'            => 'nullable|date|after_or_equal:start_date',
        'total_participants'  => 'required|integer|min:1',
        'base_price' => 'required|numeric|min:0',
        'total_price' => 'required|numeric|min:0',
        'total_amount'        => 'required|numeric|min:0',
        'payment_method'      => 'required|in:deposit,full',
        'include_insurance'   => 'boolean',
        'participants_data'   => 'required|array|min:1',
        'participants_data.*.fname'  => 'required|string|max:100',
        'participants_data.*.lname'  => 'required|string|max:100',
        'participants_data.*.email'  => 'required|email|max:255',
        'participants_data.*.whatsapp' => 'nullable|string|max:20',
        'participants_data.*.notes'   => 'nullable|string|max:1000',
    ]);

    try {
        return DB::transaction(function () use ($validated) {
            $booking = Booking::create([
                'trek_title'         => $validated['trek_title'],
                'start_date'         => $validated['start_date'],
                'end_date'           => $validated['end_date'] ?? null,
                'total_participants' => $validated['total_participants'],
                'base_price'         => $validated['base_price'],             // ← from frontend
                'total_price'        => $validated['total_price'],
                'total_amount'       => $validated['total_amount'],
                'payment_method'     => $validated['payment_method'],
                'include_insurance'  => $validated['include_insurance'] ?? false,
                
            ]);

            foreach ($validated['participants_data'] as $person) {
                $booking->participants()->create([
                    'first_name' => $person['fname'],
                    'last_name'  => $person['lname'],
                    'email'      => $person['email'],
                    'whatsapp'   => $person['whatsapp'] ?? null,
                    'notes'      => $person['notes'] ?? null,
                ]);
            }

            return response()->json([
                'success'    => true,
                'message'    => 'Booking saved successfully',
                'booking_id' => $booking->id
            ]);
        });
    } catch (\Exception $e) {
        Log::error('Booking Error: ' . $e->getMessage(), ['exception' => $e]);
        return response()->json([
            'success' => false,
            'message' => 'Failed to save booking: ' . $e->getMessage()
        ], 500);
    }
}
}
