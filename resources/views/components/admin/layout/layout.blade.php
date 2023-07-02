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

    @livewireScripts

    <livewire:toast />

    <script>
        Livewire.on('confirmDelete', (id) => {
            if(confirm("Do you want to delete?")) {
                Livewire.emit('delete', id);
            }
        })
    </script>
</body>
</html>