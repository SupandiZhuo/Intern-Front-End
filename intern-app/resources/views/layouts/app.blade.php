<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css" rel="stylesheet">
    @stack('styles')
</head>

<body class="d-flex flex-column min-vh-100 bg-light">
    <header class="py-3 border-bottom bg-white">
        <div class="container">
            <h5 class="mb-0">Inventory</h5>
        </div>
    </header>

    <main class="container flex-grow-1 d-flex flex-column justify-content-start justify-content-md-center py-4">
        <div class="mx-auto w-100" style="max-width:1100px;">
            @yield('content')
        </div>
    </main>

    <footer class="border-top bg-white mt-auto py-3">
        <div class="container small text-muted">© {{ date('Y') }} Insyst Media</div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    @vite('resources/js/app.js')

    @stack('scripts')
</body>

</html>
