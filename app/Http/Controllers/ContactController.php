<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Mail\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $message = ContactMessage::create($request->all());

        // Send email notification
        Mail::to('your-email@example.com')->send(new ContactNotification($message));

        return response()->json([
            'success' => true,
            'message' => 'Your message has been sent successfully!',
            'data' => $message
        ]);
    }
}