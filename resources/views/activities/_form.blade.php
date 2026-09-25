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
    <label for="category">Kategori</label>
    <input type="text" id="category" name="category" value="{{ old('category', $activity->category ?? '') }}">

    @error('category')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<div>
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

</div>

<button type="submit">
    {{ $submitLabel ?? 'Simpan' }}
</button>
