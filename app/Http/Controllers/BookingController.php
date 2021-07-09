<?php

namespace App\Http\Controllers;

use App\AdditionalInfo;
use App\Booking;
use App\ContactInfo;
use App\Guest;
use App\Payment;
use App\Remarks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    public function bookings()
    {
        $data['page_title'] = "Booking";
        $data['results'] = Booking::get();
        return view('booking.index', compact('data'));

    }
    public function deletebookings($id)
    {
        $affected_rows = Booking::find($id)->delete();
        Session::put('message', set_message($affected_rows, 'booking', 'deleted'));
        return redirect()->back();

    }
    public function detail($id)
    {
        $data['page_title'] = "Booking Details";
        $data['results'] = Booking::where('id', $id)->first();
        $data['contact_info'] = ContactInfo::where('booking_id', $id)->first();
        $data['remarks'] = Remarks::where('booking_id', $id)->first();
        $data['payment'] = Payment::where('booking_id', $id)->first();
        $data['additional_info'] = AdditionalInfo::where('booking_id', $id)->first();
        $data['guest'] = Guest::where('booking_id', $id)->get();
        return view('booking.details', compact('data'));

    }
    public function storeinfo(Request $request)
    {

        $booking = $request->booking;
        $contact = $request->contact;
        $remarks = $request->remarks;
        $payment = $request->payment;
        $guest = $request->guest;
        $additional = $request->additional;
        $check_in = db_format_date_slash($booking['check_in']);
        $booking['check_in'] = $check_in;

        $affected_rows = Booking::create($booking);
        $booking_id = $affected_rows->id;
        $contact['booking_id'] = $booking_id;
        $contact['phone'] = $contact['phone'];
        $contact['phone'] = $request->country_code . $contact['phone'];
        ContactInfo::create($contact);
        $remarks['booking_id'] = $booking_id;
        $remarks['arrival_date'] = db_format_date_slash($remarks['arrival_date']);
        Remarks::create($remarks);
        $payment['booking_id'] = $booking_id;
        $payment['expiry_date'] = $request->payment_month . "/" . $request->card_year;
        Payment::create($payment);

        $additional['booking_id'] = $booking_id;

        AdditionalInfo::create($additional);

        foreach ($guest as $value) {
            $value['booking_id'] = $booking_id;
            Guest::create($value);
        }

        return redirect('/success')->with('');

    }

}
