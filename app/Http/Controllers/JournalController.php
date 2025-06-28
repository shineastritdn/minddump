<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journals = Journal::where('user_id', auth()->id())
            ->latest()
            ->paginate(9);

        return view('journals.index', compact('journals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('journals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|regex:/^[^<>]*$/',
            'content' => 'required|string|max:10000',
            'mood' => 'nullable|string|max:50|in:Senang,Sedih,Marah,Kecewa,Bingung,Tenang,Semangat,Lelah',
            'tags' => 'nullable|string|max:255|regex:/^[^<>]*$/',
        ], [
            'title.regex' => 'Judul tidak boleh mengandung karakter HTML.',
            'content.max' => 'Konten jurnal terlalu panjang.',
            'mood.in' => 'Pilihan mood tidak valid.',
            'tags.regex' => 'Tag tidak boleh mengandung karakter HTML.',
        ]);

        $journal = new Journal();
        $journal->user_id = auth()->id();
        $journal->title = strip_tags($request->title);
        $journal->content = strip_tags($request->content);
        $journal->mood = $request->mood;
        $journal->tags = $request->tags ? array_map('strip_tags', explode(',', $request->tags)) : null;
        $journal->is_public = $request->has('is_public');
        $journal->show_name = $request->has('show_name');
        $journal->save();

        return redirect()
            ->route('journals.show', $journal->id)
            ->with('success', 'Jurnal berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Journal $journal)
    {
        $this->authorize('view', $journal);
        return view('journals.show', compact('journal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Journal $journal)
    {
        $this->authorize('update', $journal);
        return view('journals.edit', compact('journal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Journal $journal)
    {
        $this->authorize('update', $journal);

        $request->validate([
            'title' => 'required|string|max:255|regex:/^[^<>]*$/',
            'content' => 'required|string|max:10000',
            'mood' => 'nullable|string|max:50|in:Senang,Sedih,Marah,Kecewa,Bingung,Tenang,Semangat,Lelah',
            'tags' => 'nullable|string|max:255|regex:/^[^<>]*$/',
        ], [
            'title.regex' => 'Judul tidak boleh mengandung karakter HTML.',
            'content.max' => 'Konten jurnal terlalu panjang.',
            'mood.in' => 'Pilihan mood tidak valid.',
            'tags.regex' => 'Tag tidak boleh mengandung karakter HTML.',
        ]);

        $journal->title = strip_tags($request->title);
        $journal->content = strip_tags($request->content);
        $journal->mood = $request->mood;
        $journal->tags = $request->tags ? array_map('strip_tags', explode(',', $request->tags)) : null;
        $journal->is_public = $request->has('is_public');
        $journal->show_name = $request->has('show_name');
        $journal->save();

        return redirect()
            ->route('journals.show', $journal->id)
            ->with('success', 'Jurnal berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Journal $journal)
    {
        $this->authorize('delete', $journal);
        $journal->delete();

        return redirect()
            ->route('journals.index')
            ->with('success', 'Jurnal berhasil dihapus!');
    }
}
