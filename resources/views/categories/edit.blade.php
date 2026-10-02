<!DOCTYPE html>
<html>

<head>
    <title>Edit Kategori</title>
</head>

<body>
    <h1>Edit Kategori</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Kategori:</label>
        <input type="text" name="name" value="{{ old('name', $category->name) }}" required>
        @error('name')
            <span style="color: red;">{{ $message }}</span>
        @enderror

        <br><br>
        <button type="submit">Update</button>
        <a href="{{ route('categories.index') }}">Batal</a>
    </form>
</body>

</html>
