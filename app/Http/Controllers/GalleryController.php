<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    public function indexID()
    {
        $galleries = Gallery::latest()->get();
        return view('id.pages.gallery', compact('galleries'));
    }

    public function indexEN()
    {
        $galleries = Gallery::latest()->get();
        return view('en.pages.gallery', compact('galleries'));
    }

    public function showID($id)
    {
        $gallery = Gallery::findOrFail($id);
        $reviews = $gallery->reviews()->latest()->get();
        return view('id.pages.gallery-detail', compact('gallery', 'reviews'));
    }

    public function showEN($id)
    {
        $gallery = Gallery::findOrFail($id);
        $reviews = $gallery->reviews()->latest()->get();
        return view('en.pages.gallery-detail', compact('gallery', 'reviews'));
    }

    public function storeReview(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'rating' => 'required|numeric|min:1|max:5',
            'comment' => 'required|string|max:1000',
        ]);

        // Cek apakah email yang mengirim review sudah diverifikasi oleh admin
        $user = \App\Models\User::where('email', $validated['email'])->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email Anda belum terdaftar di sistem.');
        }

        if (!$user->is_verified) {
            return redirect()->back()->with('error', 'Akun Anda belum diverifikasi untuk memberikan ulasan.');
        }

        // Cegah admin memberikan review
        if ($user->is_admin) {
            return redirect()->back()->with('error', 'Akun admin tidak diizinkan memberikan ulasan.');
        }

        // Simpan ulasan
        $gallery->reviews()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'rating' => $validated['rating'],
            'comment' => $validated['comment'],
        ]);

        return redirect()->back()->with('success', 'Ulasan berhasil dikirim.');
    }
}
