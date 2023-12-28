  <section
      id=""
      class="d-flex flex-column justify-content-center align-items-center"
      style="height: 15vh !important"
    >
      <div class="container text-center text-md-left" data-aos="fade-up">
        <h1><span>Tracking Status Aduan</span></h1>
      </div>
    </section>

    <main id="">
      <section class="">
        <div class="container mb-4">
          <form action="/trackingid" method="POST">
            <input type="hidden" name="_token" value="" />
            <div class="form-group">
              <label for=""
                >Silakan masukkan kode aduan yang anda dapatkan saat melakukan
                pelaporan. Kode ini dapat pula ada dapatkan pada email yang kami
                kirim saat selesai mengajukan aduan.</label
              >
              <input
                type="text"
                class="form-control mt-2"
                placeholder="Masukan kode aduan anda"
                name="kode_aduan"
              />
            </div>
            <br />
            <div class="float-end">
              <a class="btn btn-secondary"> Kembali</a>
              <button class="btn btn-danger" type="submit">Cari aduan</button>
            </div>
          </form>
        </div>
      </section>
    </main>
  </body>
</html>
