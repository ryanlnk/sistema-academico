<div>
    <script>
        Livewire.on('toast', (message) => {
            Toastify({
            text: message,
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
        });
    </script>

    @if (session()->has('toast'))
        <script>
            Livewire.emit('toast', "{{ session('toast') }}")
        </script>
    @endif
</div>
