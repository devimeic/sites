<?php

return [
    /**
     * Default route to see the UML diagram.
     */
    'route' => '/uml',

    /**
     * You can turn on or off the indexing of specific types
     * of classes. By default, LTU processes only controllers
     * and models.
     */
    'casts'         => false,
    'channels'      => false,
    'commands'      => false,
    'components'    => false,
    'controllers'   => false,
    'events'        => false,
    'exceptions'    => false,
    'jobs'          => false,
    'listeners'     => false,
    'mails'         => false,
    'middlewares'   => false,
    'models'        => true,
    'notifications' => false,
    'observers'     => false,
    'policies'      => false,
    'providers'     => false,
    'requests'      => false,
    'resources'     => false,
    'rules'         => false,

    /**
     * You can define specific nomnoml styling.
     * For more information: https://github.com/skanaar/nomnoml
     */
    'style' => [
        'background' => '#EBEBEB',
        'stroke'     => '#071013',
        'arrowSize'  => 1,
        'bendSize'   => 0.3,
        'direction'  => 'down',
        'gutter'     => 5,
        'edgeMargin' => 0,
        'gravity'    => 1,
        'edges'      => 'rounded',
        'fill'       => '#EBEBEB',
        'fillArrows' => false,
        'font'       => 'Calibri',
        'fontSize'   => 12,
        'leading'    => 1.25,
        'lineWidth'  => 3,
        'padding'    => 8,
        'spacing'    => 40,
        'title'      => 'Filename',
        'zoom'       => 1,
        'acyclicer'  => 'greedy',
        'ranker'     => 'network-simplex'
    ],

    /**
     * Specific files can be excluded if need be.
     * By default, all default Laravel classes are ignored.
     */
    'excludeFiles' => [
        'Http/Kernel.php',
        'Console/Kernel.php',
        'Exceptions/Handler.php',
        'Http/Controllers/Controller.php',
        'Http/Middleware/Authenticate.php',
        'Http/Middleware/EncryptCookies.php',
        'Http/Middleware/PreventRequestsDuringMaintenance.php',
        'Http/Middleware/RedirectIfAuthenticated.php',
        'Http/Middleware/TrimStrings.php',
        'Http/Middleware/TrustHosts.php',
        'Http/Middleware/TrustProxies.php',
        'Http/Middleware/VerifyCsrfToken.php',
        'Providers/AppServiceProvider.php',
        'Providers/AuthServiceProvider.php',
        'Providers/BroadcastServiceProvider.php',
        'Providers/EventServiceProvider.php',
        'Providers/RouteServiceProvider.php',
        'Http/Livewire/Pemohon/AddPengajuan.php',
        'Http/Controllers/AdminController.php',
        'Http/Controllers/Auth/RegisterController.php',
        'Http/Controllers/Auth/LoginController.php',
        'Http/Controllers/BerkasController.php',
        'Http/Controllers/HomeController.php',
        'Http/Controllers/LapanganController.php',
        'Http/Controllers/PemohonController.php',
        'Http/Controllers/PrintController.php',
        'Http/Livewire/Profil.php',
        'Http/Controllers/RekomendasiController.php',
        'Http/Livewire/Admin/Laporan.php',
        'Http/Livewire/Admin/Riwayat.php',
        'Http/Livewire/Admin/ShowRiwayat.php',
        'Http/Livewire/Admin/UserManagement.php',
        'Http/Livewire/Berkas/InputBerkas.php',
        'Http/Livewire/Berkas/ListPengajuan.php',
        'Http/Livewire/Berkas/ShowList.php',
        'Http/Livewire/Lapangan/ListPengajuan.php',
        'Http/Livewire/Lapangan/ListRapat.php',
        'Http/Livewire/Lapangan/ShowBerkas.php',
        'Http/Livewire/Pemohon/AddPengajuan.php',
        'Http/Livewire/Pemohon/Laporan.php',
        'Http/Livewire/Pemohon/ShowRevisi.php',
        'Http/Livewire/Pemohon/RevisiLapangan.php',
        'Http/Livewire/Pemohon/Riwayat.php',
        'Http/Livewire/Pemohon/ShowRiwayat.php',
        'Http/Livewire/Pemohon/ShowDraft.php',
        'Http/Livewire/Pemohon/RevisiLapangan.php',
        'Http/Livewire/Pemohon/Riwayat.php',
        'Http/Livewire/Pemohon/ShowDraft.php',
        'Http/Livewire/Rekomendasi/UploadSurat.php',
        'Models/tipe.php'
    ],

    /**
     * In case you changed any of the default directories
     * for different classes, please amend below.
     */
    'directories' => [
        'casts'         => 'Casts/',
        'channels'      => 'Broadcasting/',
        'commands'      => 'Console/Commands/',
        'components'    => 'View/Components/',
        'controllers'   => 'Http/Controllers/',
        'events'        => 'Events/',
        'exceptions'    => 'Exceptions/',
        'jobs'          => 'Jobs/',
        'listeners'     => 'Listeners/',
        'mails'         => 'Mail/',
        'middlewares'   => 'Http/Middleware/',
        'models'        => 'Models/',
        'notifications' => 'Notifications/',
        'observers'     => 'Observers/',
        'policies'      => 'Policies/',
        'providers'     => 'Providers/',
        'requests'      => 'Http/Requests/',
        'resources'     => 'Http/Resources/',
        'rules'         => 'Rules/',
    ],
];
