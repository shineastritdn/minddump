<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jurnal - MindDump</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Header -->
        <header class="bg-indigo-600 text-white">
            <div class="container mx-auto px-4 py-4">
                <a href="{{ route('journals.show', $journal->access_code) }}" class="text-white hover:text-gray-200">← Kembali</a>
                <h1 class="text-3xl font-bold text-center mt-4">Edit Jurnal</h1>
            </div>
        </header>

        <!-- Main Content -->
        <main class="container mx-auto px-4 py-8">
            <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-6">
                <form action="{{ route('journals.update', $journal->access_code) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 font-medium mb-2">Judul</label>
                        <input type="text" name="title" id="title" required
                            value="{{ old('title', $journal->title) }}"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500">
                    </div>

                    <div class="mb-4">
                        <label for="content" class="block text-gray-700 font-medium mb-2">Isi Jurnal</label>
                        <textarea name="content" id="content" rows="10" required
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500">{{ old('content', $journal->content) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="mood" class="block text-gray-700 font-medium mb-2">Mood Saat Ini</label>
                        <select name="mood" id="mood"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500">
                            <option value="">Pilih mood...</option>
                            <option value="bahagia" {{ old('mood', $journal->mood) == 'bahagia' ? 'selected' : '' }}>Bahagia</option>
                            <option value="sedih" {{ old('mood', $journal->mood) == 'sedih' ? 'selected' : '' }}>Sedih</option>
                            <option value="cemas" {{ old('mood', $journal->mood) == 'cemas' ? 'selected' : '' }}>Cemas</option>
                            <option value="marah" {{ old('mood', $journal->mood) == 'marah' ? 'selected' : '' }}>Marah</option>
                            <option value="netral" {{ old('mood', $journal->mood) == 'netral' ? 'selected' : '' }}>Netral</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2">Tags</label>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['sedih', 'bahagia', 'cemas', 'marah', 'tenang', 'bingung', 'semangat', 'lelah'] as $tag)
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="tags[]" value="{{ $tag }}" 
                                    {{ in_array($tag, old('tags', $journal->tags ?? [])) ? 'checked' : '' }}
                                    class="form-checkbox h-4 w-4 text-indigo-600">
                                <span class="ml-2">{{ ucfirst($tag) }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="is_public" value="1" 
                                {{ old('is_public', $journal->is_public) ? 'checked' : '' }}
                                class="form-checkbox h-4 w-4 text-indigo-600">
                            <span class="ml-2">Buat jurnal ini publik</span>
                        </label>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white mt-12">
            <div class="container mx-auto px-4 py-6 text-center">
                <p>&copy; {{ date('Y') }} MindDump. Dibuat dengan ❤️ untuk kesehatan mentalmu.</p>
            </div>
        </footer>
    </div>
</body>
</html> 