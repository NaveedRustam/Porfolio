<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
        ]);

        Mail::to(config('mail.contact_to.address'))
            ->send(new ContactFormSubmitted($validated['name'], $validated['email'], $validated['message']));

        $responseMessage = 'Message sent successfully. I will get back to you soon.';

        if ($request->expectsJson()) {
            return response()->json([
                'ok' => true,
                'message' => $responseMessage,
            ]);
        }

        return back()->with('contact_status', $responseMessage);
    }
}
