<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Akun - Admin Seruli</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="{{ asset('css/admin/editakun.css') }}" />
</head>

<body>

    @include('partials.admin.sidebar')

    <div class="main-wrapper">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="{{ route('admin.akun') }}">Akun</a>
            <ion-icon name="chevron-forward-outline"></ion-icon>
            <span class="active">Edit</span>
        </div>

        <form action="{{ route('admin.akun.update') }}" method="POST" enctype="multipart/form-data" class="edit-form">
    @csrf
    @method('PUT')

    <input type="hidden" name="redirect_to" value="{{ $previousUrl }}">

    <!-- Avatar Circle + Input File -->
    <div class="avatar-edit-wrapper">
        <label for="avatar-input" class="avatar-edit-box" style="cursor: pointer;">
            <img id="avatar-preview" src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('assets/img/logosss.png') }}" alt="Avatar Admin" class="avatar-img" />
            <div class="badge-edit-icon">
                <ion-icon name="pencil-sharp"></ion-icon>
            </div>
        </label>
        <input type="file" id="avatar-input" name="avatar" accept="image/*" style="display: none;" onchange="previewImage(event)" />
        @error('avatar')
            <span class="error-text" style="text-align: center; display: block; margin-top: 8px;">{{ $message }}</span>
        @enderror
    </div>

    <!-- Form Group Nama -->
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required autocomplete="off" />
    </div>

    <!-- Form Group Email -->
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="off" />
    </div>

    <div class="form-actions">
        <button type="submit" class="btn-submit">
            <span>Simpan perubahan</span>
        </button>
        <a href="{{ $previousUrl }}" class="btn-cancel">
            <span>Batal</span>
        </a>
    </div>
</form>
    </div>

</body>

<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('avatar-preview');
            output.src = reader.result;
        };
        if(event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        }
    }
</script>

</html>