<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('assets\bootstrap-5.3.3-dist\css\bootstrap.min.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Crud Livros</title>
</head>
<body>

@yield('content')

@if(session('success'))
  
<script>
    document.addEventListener('DOMContentLoaded', () => {
        Swal.fire('Pronto!', " {{ session('success') }}", 'success');
    });
</script>

@endif

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
