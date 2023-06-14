<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <title>Sistema Academico</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    @livewireStyles
</head>
<body>

    <x-admin.menu />

    <main class="ml-auto mb-6 w-[85%]">
        <div class="px-6 pt-6">
            {{ $slot }}
        </div>
    </main>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    @if (session()->has('toast'))
    <script>
        Toastify({
            text: "{{ session('toast') }}",
            duration: 2000, //ms
            gravity: "top", // `top` or `bottom`
            position: "right", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "#ccfbf1",
                borderTop: '2px solid #14b8a6',
                color: "#134e4a"
            },
            onClick: function() {} // Callback after click
        }).showToast();
    </script>
    @endif

    @livewireScripts
</body>
</html>