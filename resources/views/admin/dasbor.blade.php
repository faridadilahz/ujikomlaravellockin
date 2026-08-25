<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin - Seruli</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="{{ asset('css/admin/dasbor.css') }}" />
</head>

<body>

    <div class="admin-layout">

        @include('partials.admin.sidebar')

        <main class="main-content">

            @include('partials.admin.topbar')

            <div class="dashboard-body">

                @include('partials.admin.dasborstat')
                <div class="content-card">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title-content">Terakhir Diposting</h3>
                        </div>
                    </div>

                    <div class="news-grid">
                        @include('partials.admin.cardlastpost')
                    </div>
                </div>

            </div>

        </main>

    </div>

</body>

</html>