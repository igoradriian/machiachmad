<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lawyer_name' => 'required',
            'description' => 'required',
            'photo' => 'required|image|max:2048',
        ]);

        $path = $request->file('photo')->store('gallery', 'public');

        Gallery::create([
            'lawyer_name' => $request->lawyer_name,
            'description' => $request->description,
            'photo' => $path,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Galeri ditambahkan.');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'lawyer_name' => 'required',
            'description' => 'required',
            'photo' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['lawyer_name', 'description']);

        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($gallery->photo);
            $data['photo'] = $request->file('photo')->store('gallery', 'public');
        }

        $gallery->update($data);

        return redirect()->route('admin.gallery.index')->with('success', 'Galeri diperbarui.');
    }

    public function destroy(Gallery $gallery)
    {
        Storage::disk('public')->delete($gallery->photo);
        $gallery->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Galeri dihapus.');
    }
}
