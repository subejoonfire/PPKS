<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gagal Tracking</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/css/css-public.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="/css/galeri.css" />
    <link rel="stylesheet" href="/css/profil.css" />
  </head>

  <body>
    <div class="contaner-fluid">
      <div class="navbar">
        <nav
          class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 mb-5 bg-body-tertiary rounded"
        >
          <div class="container-fluid">
            <a class="navbar-brand" href="">PPKS</a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    id="navBeranda"
                    aria-current="page"
                    href="/"
                    >Beranda</a
                  >
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="profil"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Profil
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="/pengantar">Pengantar</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="/struktur"
                        >Struktur Organisasi</a
                      >
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="/sop">SOP</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="artikel">Artikel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="program">Program</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="laporkan">Laporkan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="tracking laporan">Tracking</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="galeri photo">Galeri</a>
                </li>
              </ul>
              <form class="d-flex">
                <a class="nav-link" href="login">Login</a>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <section
      id=""
      class="d-flex flex-column justify-content-center align-items-center"
      style="height: 15vh !important"
    >
      <div class="container text-center text-md-left" data-aos="fade-up">
        <h1><span>Tracking Status Aduan</span></h1>
      </div>
    </section>

    <main id="main">
      <section class="">
        <div class="container">
          <div class="text-center">
            <img src="/img/question.png" alt="" width="15%" />
            <h3>Data tidak ditemukan</h3>
            <a href="<?= base_url() ?>" class="btn btn-secondary">Kembali</a>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
