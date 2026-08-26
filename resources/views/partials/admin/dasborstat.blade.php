<link rel="stylesheet" href="{{ asset('css/partials/admin/dasborstat.css') }}" />

<div class="grid-2col">

    <!-- STATISTIK BERITA -->
    <div class="content-card">
        <div class="card-header">
            <div>
                <div class="stat-icon bg-blue">
                    <ion-icon name="newspaper-outline"></ion-icon>
                </div>
                <h3 class="card-title">Total posting berita</h3>
                <h4 class="card-data">{{ $totalBerita }}</h4>
                <span class="badge-tag">
                    @if($lastBerita)
                        @php
                            $date = $lastBerita->created_at;
                            if ($date->isToday()) {
                                $label = 'hari ini';
                            } elseif ($date->isYesterday()) {
                                $label = 'kemarin';
                            } else {
                                $label = $date->diffForHumans(['syntax' => \Carbon\CarbonInterface::DIFF_RELATIVE_TO_NOW]);
                            }
                        @endphp
                        Terakhir posting {{ $label }}
                    @else
                        Belum ada postingan
                    @endif
                </span>
            </div>
        </div>
    </div>

    <!-- STATISTIK GALERI -->
    <div class="content-card">
        <div class="card-header">
            <div>
                <div class="stat-icon bg-blue">
                    <ion-icon name="image-outline"></ion-icon>
                </div>
                <h3 class="card-title">Total posting galeri</h3>
                <h4 class="card-data">{{ $totalGaleri }}</h4>
                <span class="badge-tag">
                    @if($lastGaleri)
                        @php
                            $date = $lastGaleri->created_at;
                            if ($date->isToday()) {
                                $label = 'hari ini';
                            } elseif ($date->isYesterday()) {
                                $label = 'kemarin';
                            } else {
                                $label = $date->diffForHumans(['syntax' => \Carbon\CarbonInterface::DIFF_RELATIVE_TO_NOW]);
                            }
                        @endphp
                        Terakhir posting {{ $label }}
                    @else
                        Belum ada postingan
                    @endif
                </span>
            </div>
        </div>
    </div>

</div>