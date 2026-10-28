<!--

=========================================================
* Volt Pro - Premium Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Data Biodata - Volt Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta name="author" content="Themesberg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets-admin/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets-admin/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets-admin/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets-admin/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets-admin/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('assets-admin/css/volt.css') }}" rel="stylesheet">

    <!-- Font CV -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --cv-dark: #37383f;
            --cv-sand: #ede6e1;
            --cv-ink: #1c1d21;
            --cv-muted: #6f7178;
            --nav-h: 64px;
        }
        body { font-family: 'Open Sans', sans-serif; }

        /* Sidebar Volt tidak dipakai: konten selebar halaman */
        .content { margin-left: 0 !important; padding: 0 !important; }
        .page { max-width: 1400px; margin: 0 auto; padding: 0 1.5rem 1.5rem; }

        /* ===== Navbar atas ===== */
        .topbar { position: sticky; top: 0; z-index: 1030; background: var(--cv-dark); color: #fff; box-shadow: 0 2px 8px rgba(0,0,0,.18); }
        .topbar-inner { max-width: 1400px; margin: 0 auto; padding: 0 1.5rem; min-height: var(--nav-h);
                        display: flex; align-items: center; flex-wrap: wrap; gap: .5rem 1.5rem; }
        .brand { display: flex; align-items: center; gap: .6rem; color: #fff; font-weight: 700; font-size: 1.1rem; text-decoration: none; order: 1; }
        .brand:hover { color: #fff; }
        .brand img { height: 26px; width: 26px; }
        .topnav { order: 2; flex: 1; display: flex; align-items: center; gap: 1.5rem; }
        .topnav-links { list-style: none; margin: 0; padding: 0; display: flex; gap: .25rem; }
        .topnav-links a { display: flex; align-items: center; gap: .5rem; padding: .5rem .9rem; border-radius: .4rem;
                          color: rgba(255,255,255,.78); text-decoration: none; font-weight: 600; font-size: .95rem; }
        .topnav-links a:hover { color: #fff; background: rgba(255,255,255,.08); }
        .topnav-links a.active { color: var(--cv-dark); background: var(--cv-sand); }
        .topnav-links svg { width: 18px; height: 18px; }
        .topnav-search { margin-left: auto; position: relative; }
        .topnav-search input { width: 260px; max-width: 100%; border: 0; border-radius: .4rem; padding: .5rem .8rem .5rem 2.2rem; font-size: .9rem;
                               background: rgba(255,255,255,.12); color: #fff; }
        .topnav-search input::placeholder { color: rgba(255,255,255,.6); }
        .topnav-search input:focus { outline: 2px solid var(--cv-sand); background: rgba(255,255,255,.18); }
        .topnav-search svg { position: absolute; left: .7rem; top: 50%; transform: translateY(-50%); width: 16px; height: 16px; color: rgba(255,255,255,.7); }

        .user { order: 3; position: relative; }
        .user-btn { display: flex; align-items: center; gap: .6rem; background: none; border: 0; color: #fff; padding: .35rem .5rem; border-radius: .4rem; cursor: pointer; font: inherit; font-size: .9rem; font-weight: 600; }
        .user-btn:hover { background: rgba(255,255,255,.08); }
        .user-btn img { width: 34px; height: 34px; border-radius: 50%; object-fit: cover; }
        .user-menu { display: none; position: absolute; right: 0; top: calc(100% + .4rem); min-width: 190px; background: #fff; border-radius: .5rem;
                     box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.18); padding: .4rem 0; z-index: 1040; }
        .user-menu.open { display: block; }
        .user-menu a { display: flex; align-items: center; gap: .6rem; padding: .55rem 1rem; color: var(--cv-ink); text-decoration: none; font-size: .9rem; }
        .user-menu a:hover { background: #f3f3f5; }
        .user-menu hr { margin: .3rem 0; border: 0; border-top: 1px solid #e5e5ea; }
        .user-menu svg { width: 18px; height: 18px; }

        .menu-toggle { display: none; order: 4; background: none; border: 0; color: #fff; padding: .4rem; border-radius: .4rem; cursor: pointer; }
        .menu-toggle svg { width: 26px; height: 26px; }

        @media (max-width: 991.98px) {
            .topbar-inner { padding: .5rem 1rem; }
            .user { margin-left: auto; }
            .user-btn span { display: none; }
            .menu-toggle { display: block; }
            .topnav { display: none; order: 5; flex-basis: 100%; flex-direction: column; align-items: stretch; gap: .75rem; padding: .5rem 0 1rem; }
            .topnav.open { display: flex; }
            .topnav-links { flex-direction: column; }
            .topnav-search { margin-left: 0; }
            .topnav-search input { width: 100%; }
            .page { padding: 0 1rem 1rem; }
        }

        /* ===== Judul halaman ===== */
        .page-head { display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 1rem; padding: 1.5rem 0 1.25rem; }
        .page-head h1 { font-size: 1.6rem; font-weight: 700; margin: 0 0 .25rem; color: var(--cv-ink); }
        .page-head p { margin: 0; color: var(--cv-muted); }
        .crumbs { font-size: .85rem; color: var(--cv-muted); padding-top: 1.25rem; }
        .crumbs a { color: var(--cv-muted); text-decoration: none; }
        .crumbs a:hover { color: var(--cv-ink); }

        /* ===== Notifikasi (bisa ditutup) ===== */
        .notif { display: flex; align-items: center; justify-content: space-between; gap: 1rem; padding: .85rem 1rem .85rem 1.25rem;
                 background: #dff5ea; color: #0c5a3d; border-left: 4px solid #05a677; border-radius: .4rem; margin-bottom: 1.5rem;
                 font-weight: 600; transition: opacity .25s, transform .25s; }
        .notif.hide { opacity: 0; transform: translateY(-6px); }
        .notif-close { flex: none; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; border: 0; border-radius: 50%;
                       background: transparent; color: inherit; cursor: pointer; }
        .notif-close:hover { background: rgba(5,166,119,.18); }
        .notif-close:focus-visible { outline: 2px solid #05a677; outline-offset: 2px; }
        .notif-close svg { width: 18px; height: 18px; }

        /* ===== Kartu CV (diperbesar) ===== */
        .cv-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(min(100%, 640px), 760px)); gap: 2rem; justify-content: start; }
        .cv-card { background: #fff; border-radius: .6rem; overflow: hidden; box-shadow: 0 .35rem 1.25rem rgba(0,0,0,.13);
                   display: flex; flex-direction: column; color: var(--cv-ink); }

        .cv-head { background: var(--cv-dark); color: #fff; display: flex; align-items: center; gap: 1.75rem;
                   padding: 2.25rem 2.25rem 3.5rem; }
        .cv-photo { width: 140px; height: 140px; border-radius: 50%; object-fit: cover; flex: none;
                    border: 4px solid rgba(255,255,255,.28); background: #4a4b53; }
        .cv-photo-empty { display: flex; align-items: center; justify-content: center; font-size: 3.2rem; font-weight: 700; color: #fff; }
        .cv-name { font-size: 2.2rem; font-weight: 600; line-height: 1.15; margin: 0; color: #fff; overflow-wrap: anywhere; }
        .cv-title { margin: .4rem 0 0; font-size: 1.15rem; color: rgba(255,255,255,.8); }

        .cv-body { display: grid; grid-template-columns: 40% 1fr; flex: 1; }
        .cv-side { background: var(--cv-sand); padding: 0 1.75rem 2rem; position: relative; }
        .cv-side::before { content: ""; position: absolute; left: 0; right: 0; top: -2.5rem; height: 2.5rem;
                           background: var(--cv-dark); clip-path: polygon(0 0, 100% 0, 50% 100%); }
        .cv-side-inner { padding-top: 2rem; }
        .cv-side h3, .cv-main h3 { font-size: 1.3rem; font-weight: 600; margin: 0 0 1.1rem; }
        .cv-side h3 { color: var(--cv-dark); }
        .cv-contact { list-style: none; margin: 0; padding: 0; display: grid; gap: 1rem; }
        .cv-contact li { display: flex; align-items: flex-start; gap: .75rem; font-size: 1rem; line-height: 1.4; color: var(--cv-dark); overflow-wrap: anywhere; }
        .cv-ico { width: 34px; height: 34px; border-radius: 50%; background: var(--cv-dark); color: #fff; flex: none; display: flex; align-items: center; justify-content: center; }
        .cv-ico svg { width: 16px; height: 16px; }
        .cv-contact li > span:last-child { padding-top: .35rem; }

        .cv-main { padding: 2rem 2rem 2rem 2.25rem; display: flex; flex-direction: column; }
        .cv-main h3 { border-bottom: 2px solid var(--cv-ink); padding-bottom: .35rem; }
        .cv-row { margin-bottom: 1.1rem; }
        .cv-row b { display: block; font-size: 1.1rem; font-weight: 600; }
        .cv-row span { font-size: 1rem; color: var(--cv-muted); }
        .cv-actions { margin-top: auto; padding-top: 1.25rem; display: flex; gap: .6rem; flex-wrap: wrap; }
        .cv-actions form { display: inline; margin: 0; }

        .cv-empty { grid-column: 1 / -1; text-align: center; padding: 3rem 1rem; color: var(--cv-muted); background: #fff; border-radius: .6rem; }
        #no-result { display: none; }

        @media (max-width: 575.98px) {
            .cv-head { flex-direction: column; align-items: flex-start; padding: 1.75rem 1.5rem 3.25rem; gap: 1rem; }
            .cv-name { font-size: 1.8rem; }
            .cv-body { grid-template-columns: 1fr; }
            .cv-side::before { display: none; }
            .cv-side-inner { padding-top: 1.5rem; }
            .cv-main { padding: 1.5rem; }
        }
    </style>
</head>

<body>
    <!-- Navbar atas -->
    <header class="topbar">
        <div class="topbar-inner">
            <a class="brand" href="{{ route('dashboard') }}">
                <img src="{{ asset('assets-admin/img/brand/op.png') }}" alt="Volt logo">
                <span>HANIFxOPxBC</span>
            </a>

            <nav id="topnav" class="topnav" aria-label="Menu utama">
                <ul class="topnav-links">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pelanggan.index') }}">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
                            Pelanggan
                        </a>
                    </li>
                    <!-- Menu Biodata -->
                    <li>
                        <a href="{{ route('biodata.index') }}" class="active" aria-current="page">
                            <svg fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"></path></svg>
                            Biodata
                        </a>
                    </li>
                </ul>

                <!-- Search form -->
                <form class="topnav-search" id="navbar-search-main">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    <input type="text" id="topbarInputIconLeft" placeholder="Cari biodata" aria-label="Cari biodata">
                </form>
            </nav>

            <!-- Menu pengguna -->
            <div class="user">
                <button type="button" class="user-btn" id="user-btn" aria-haspopup="true" aria-expanded="false">
                    <img alt="Admin" src="{{ asset('assets-admin/img/team/asta.jpg') }}">
                    <span>Admin</span>
                </button>
                <div class="user-menu" id="user-menu">
                    <a href="#">
                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
                        My Profile
                    </a>
                    <hr>
                    <a href="#" class="text-danger">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        Logout
                    </a>
                </div>
            </div>

            <button type="button" class="menu-toggle" id="menu-toggle" aria-label="Buka menu" aria-controls="topnav" aria-expanded="false">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </header>

    <main class="content">
        <div class="page">

            <nav aria-label="breadcrumb" class="crumbs d-none d-md-block">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width:14px;height:14px;vertical-align:-2px">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </a>
                &nbsp;/&nbsp; Biodata
            </nav>

            <div class="page-head">
                <div>
                    <h1>Data Biodata</h1>
                    <p>List data seluruh biodata pengguna</p>
                </div>
                <div>
                    <a href="{{ route('biodata.create') }}" class="btn btn-success text-white">Tambah Biodata</a>
                </div>
            </div>

            @if (session('success'))
                <div class="notif" id="flash" role="alert">
                    <span>{{ session('success') }}</span>
                    <button type="button" class="notif-close" id="flash-close" aria-label="Tutup notifikasi">
                        <svg fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M6 6l12 12M18 6L6 18"/></svg>
                    </button>
                </div>
            @endif

            <div id="cv-list" class="cv-grid">
                @forelse($dataBiodata as $item)
                    <article class="cv-card" data-search="{{ strtolower($item->nama . ' ' . $item->email . ' ' . $item->no_telp . ' ' . $item->jenis_kelamin) }}">

                        <header class="cv-head">
                            @if($item->foto)
                                <img class="cv-photo" src="{{ asset('storage/' . $item->foto) }}" alt="Foto {{ $item->nama }}">
                            @else
                                <div class="cv-photo cv-photo-empty">{{ strtoupper(mb_substr($item->nama, 0, 1)) }}</div>
                            @endif
                            <div>
                                <h2 class="cv-name">{{ $item->nama }}</h2>
                                <p class="cv-title">Biodata</p>
                            </div>
                        </header>

                        <div class="cv-body">
                            <aside class="cv-side">
                                <div class="cv-side-inner">
                                    <h3>Kontak</h3>
                                    <ul class="cv-contact">
                                        <li>
                                            <span class="cv-ico">
                                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l9 6 9-6M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z"/></svg>
                                            </span>
                                            <span>{{ $item->email }}</span>
                                        </li>
                                        <li>
                                            <span class="cv-ico">
                                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h2.3a1 1 0 01.95.68l1.1 3.3a1 1 0 01-.5 1.2l-1.6.8a11 11 0 005.4 5.4l.8-1.6a1 1 0 011.2-.5l3.3 1.1a1 1 0 01.68.95V19a2 2 0 01-2 2h-1C9.7 21 3 14.3 3 6V5z"/></svg>
                                            </span>
                                            <span>{{ $item->no_telp }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </aside>

                            <section class="cv-main">
                                <h3>Data Diri</h3>
                                <div class="cv-row">
                                    <b>Jenis Kelamin</b>
                                    <span>{{ $item->jenis_kelamin }}</span>
                                </div>
                                <div class="cv-row">
                                    <b>Tanggal Lahir</b>
                                    <span>{{ $item->tanggal_lahir ? \Carbon\Carbon::parse($item->tanggal_lahir)->translatedFormat('d F Y') : '-' }}</span>
                                </div>

                                <div class="cv-actions">
                                    <a href="{{ route('biodata.edit', $item->id) }}" class="btn btn-info">
                                        <svg class="icon icon-xs me-2" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"></path>
                                        </svg>
                                        Edit
                                    </a>
                                    <form action="{{ route('biodata.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            <svg class="icon icon-xs me-2" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"></path>
                                            </svg>
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </section>
                        </div>
                    </article>
                @empty
                    <div class="cv-empty">Belum ada biodata. Klik “Tambah Biodata” untuk membuat yang pertama.</div>
                @endforelse
                <div id="no-result" class="cv-empty">Tidak ada biodata yang cocok dengan pencarian.</div>
            </div>

            <footer class="bg-white rounded shadow p-5 mb-4 mt-5">
                <div class="row">
                    <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
                        <p class="mb-0 text-center text-lg-start">© 2019-<span class="current-year"></span> <a
                                class="text-primary fw-normal" href="https://themesberg.com" target="_blank">Themesberg</a>
                        </p>
                    </div>
                    <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
                        <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
                            <li class="list-inline-item px-0 px-sm-2"><a href="https://themesberg.com/about">About</a></li>
                            <li class="list-inline-item px-0 px-sm-2"><a href="https://themesberg.com/themes">Themes</a></li>
                            <li class="list-inline-item px-0 px-sm-2"><a href="https://themesberg.com/blog">Blog</a></li>
                            <li class="list-inline-item px-0 px-sm-2"><a href="https://themesberg.com/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </main>

    <!-- Core -->
    <script src="{{ asset('vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>

    <script>
        (function () {
            // Notifikasi: tombol X menutup, dan hilang otomatis setelah 6 detik
            var flash = document.getElementById('flash');
            if (flash) {
                var closeFlash = function () {
                    flash.classList.add('hide');
                    setTimeout(function () { flash.remove(); }, 260);
                };
                document.getElementById('flash-close').addEventListener('click', closeFlash);
                setTimeout(function () { if (document.body.contains(flash)) closeFlash(); }, 6000);
            }

            // Menu mobile
            var toggle = document.getElementById('menu-toggle'), nav = document.getElementById('topnav');
            toggle.addEventListener('click', function () {
                var open = nav.classList.toggle('open');
                toggle.setAttribute('aria-expanded', open);
            });

            // Menu pengguna
            var ubtn = document.getElementById('user-btn'), umenu = document.getElementById('user-menu');
            ubtn.addEventListener('click', function (e) {
                e.stopPropagation();
                var open = umenu.classList.toggle('open');
                ubtn.setAttribute('aria-expanded', open);
            });
            document.addEventListener('click', function () { umenu.classList.remove('open'); ubtn.setAttribute('aria-expanded', 'false'); });

            // Pencarian memfilter kartu
            var input = document.getElementById('topbarInputIconLeft'), none = document.getElementById('no-result');
            document.getElementById('navbar-search-main').addEventListener('submit', function (e) { e.preventDefault(); });
            input.addEventListener('input', function () {
                var q = this.value.trim().toLowerCase(), shown = 0;
                document.querySelectorAll('#cv-list .cv-card').forEach(function (card) {
                    var hit = card.dataset.search.indexOf(q) !== -1;
                    card.style.display = hit ? '' : 'none';
                    if (hit) shown++;
                });
                none.style.display = (shown === 0 && document.querySelector('#cv-list .cv-card')) ? 'block' : 'none';
            });
        })();
    </script>
</body>

</html>