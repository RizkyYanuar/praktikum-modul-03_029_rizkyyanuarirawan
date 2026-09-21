<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Sistem Manajemen Kegiatan' }}</title>
    
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: system-ui, -apple-system, sans-serif;
            background-color: #f3f4f6;
            color: #1f2937;
            margin: 0;
            padding: 0;
            line-height: 1.5;
        }
        header {
            background-color: #2563eb;
            color: #ffffff;
            padding: 1rem 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        header .nav-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.25rem;
        }
        main {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        h1 {
            font-size: 1.875rem;
            margin-bottom: 1.5rem;
            color: #111827;
        }
        .card {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid #e5e7eb;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        .card h2 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            font-size: 1.25rem;
        }
        .card h2 a {
            color: #2563eb;
            text-decoration: none;
        }
        .card h2 a:hover {
            text-decoration: underline;
        }
        .card p {
            margin: 0.25rem 0;
            color: #4b5563;
            font-size: 0.95rem;
        }
    </style>
</head>
<body>

    <header>
        <div class="nav-container">
            <a href="{{ route('activities.index') }}">Daftar Kegiatan</a>
        </div>
    </header>

    <main>
        @section('content')
        @yield('content')
    </main>

</body>
</html>