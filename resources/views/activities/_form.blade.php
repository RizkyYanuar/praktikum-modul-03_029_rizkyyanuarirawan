<div>
    <label for="title">Judul</label>
    <input type="text" id="title" name="title" value="{{ old('title', $activity->title ?? '') }}">

    @error('title')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="description">Deskripsi</label>
    <textarea id="description" name="description">{{ old('description', $activity->description ?? '') }}</textarea>

    @error('description')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="activity_date">Tanggal Aktivitas</label>
    <input type="date" id="activity_date" name="activity_date"
        value="{{ old('activity_date', $activity->activity_date ?? '') }}">

    @error('activity_date')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<div>
    <label>Kategori:</label>
    <select name="category_id" required>
        <option value="">Pilih Kategori</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}"
                {{ old('category_id', $activity->category_id ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <label>Kode Aktivitas:</label>
    <input type="text" name="code" value="{{ old('code', $activity->code ?? '') }}" required>
    @error('code')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    @error('category')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

{{-- <div>
    <select name="status" id="status">
        @foreach (['Planned', 'Ongoing', 'Done'] as $status)
            <option value="{{ $status }}" @selected(old('status', $activity->status ?? 'Planned') === $status)>
                {{ $status }}
            </option>
        @endforeach
    </select>
    @error('status')
        <p class="error">{{ $message }}</p>
    @enderror

</div> --}}

<button type="submit">
    {{ $submitLabel ?? 'Simpan' }}
</button>
