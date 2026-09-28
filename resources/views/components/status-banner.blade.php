@props(['tipe' => 'info'])

<div class="alert alert-{{ $tipe }} alert-dismissible fade show shadow-sm" role="alert">
    <strong>Notifikasi:</strong> {{ $slot }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>