<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Form Example</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
  <form action="/ajukan-pengaduan" method="post">
    <div class="container mt-5">
      <h2>Pelaporan Kekerasan Seksual di Politala</h2>
      <div class="mb-3" id="formGroup1">
        <div class="mb-3" id="formGroup0">
          <label for="input0" class="form-label">Laporkan Keluhan Anda</label>
          <input type="text" name="keluhan" class="form-control mt-2" id="input0" placeholder="Masukkan Jawaban Anda">
        </div>
        <label for="select1" class="form-label">Siapakah Anda?</label>
        <select name="siapa" class="form-select" id="select1" onchange="handleSelectChange('select1', 'input1', 'formmanualInput1')">
          <option selected>--Pilih--</option>
          <option value="1">Saya pernah mengalami kekerasan seksual</option>
          <option value="2">Saya membantu orang lain yang mengalami kekerasan seksual</option>
          <option value="3">Saya melihat terjadinya kekerasan seksual</option>
          <option value="other">Lainnya</option>
        </select>
        <input type="text" class="form-control mt-2" id="input1" placeholder="Enter value for Label 1" style="display: none;">
      </div>

      <div class="mb-3" id="formGroup2">
        <label for="select2" class="form-label">Korban yang mengalami kekerasan seksual adalah?</label>
        <select name="korban" class="form-select" id="select2" onchange="handleSelectChange('select2', 'input2', 'formmanualInput2')">
          <option selected>--Pilih--</option>
          <option value="a">Pegawai Politala yang aktif</option>
          <option value="b">Pegawai Politala yang purnatugas</option>
          <option value="c">Mahasiswa Aktif</option>
          <option value="d">Alumni Politala</option>
          <option value="other">Lainnya</option>
        </select>
        <input type="text" class="form-control mt-2" id="input2" placeholder="Enter value for Label 2" style="display: none;">
      </div>

      <div class="mb-3" id="formGroup3">
        <label for="input3" class="form-label">Dimana kejadian terjadi?</label>
        <input type="text" name="kejadian" class="form-control mt-2" id="input3" placeholder="Enter value for Label 3">
      </div>

      <div class="mb-3" id="formGroup4">
        <label for="input4" class="form-label">Anda dapat menambahkan detail lokasi (Boleh Kosong)</label>
        <input type="text" name="lokasi" class="form-control mt-2" id="input4" placeholder="Enter value for Label 4">
      </div>

      <div class="mb-3" id="formGroup5">
        <label for="select5" class="form-label">Kapan kejadian tersebut terjadi?</label>
        <select name="kapan" class="form-select" id="select5" onchange="handleSelectChange('select5', 'input5', 'formmanualInput5')">
          <option selected>--Pilih--</option>
          <option value="a">Dalam seminggu terakhir</option>
          <option value="b">Dalam semester ini</option>
          <option value="c">Dalam 1 tahun terakhir</option>
          <option value="d">Antara 1 - 3 tahun yang lalu</option>
          <option value="e">Antara 3 - 5 tahun yang lalu</option>
          <option value="f">Lebih dari 5 tahun yang lalu</option>
          <option value="other">Lainnya</option>
        </select>
        <input type="text" class="form-control mt-2" id="input5" placeholder="Enter value for Label 2" style="display: none;">
      </div>

      <div class="mb-3" id="formGroup6">
        <label for="select6" class="form-label">Apakah terjadi lebih dari satu kali?</label>
        <select name="apa" class="form-select" id="select6" onchange="handleSelectChange('select6', 'input6', 'formmanualInput6')">
          <option selected>--Pilih--</option>
          <option value="a">Ya</option>
          <option value="b">Tidak</option>
          <option value="c">Mungkin</option>
          <option value="other">Lainnya</option>
        </select>
        <input type="text" class="form-control mt-2" id="input6" placeholder="Enter value for Label 2" style="display: none;">
      </div>

      <div class="mb-3" id="formGroup7">
        <label for="select7" class="form-label">Apakah sekarang tindakan kekerasan tersebut masih terjadi?</label>
        <select name="masih" class="form-select" id="select7" onchange="handleSelectChange('select7', 'input7', 'formmanualInput7')">
          <option selected>--Pilih--</option>
          <option value="a">Ya</option>
          <option value="b">Tidak</option>
          <option value="c">Mungkin</option>
          <option value="other">Lainnya</option>
        </select>
        <input type="text" class="form-control mt-2" id="input7" placeholder="Enter value for Label 2" style="display: none;">
      </div>

      <div class="mb-3" id="formGroup8">
        <label for="input8" class="form-label">Anda dapat menceritakan detail kejadiannya</label>
        <textarea type="text" name="detail" class="form-control mt-2" id="input8" placeholder="Enter value for Label 3"></textarea>
      </div>

      <div class="mb-3" id="formGroup9">
        <label for="select9" class="form-label">Yang bertanggung jawab atas kekerasan seksual tersebut adalah?</label>
        <select name="tanggung" class="form-select" id="select9" onchange="handleSelectChange('select9', 'input9', 'formmanualInput9')">
          <option selected>--Pilih--</option>
          <option value="a">Pegawai Politala aktif</option>
          <option value="b">Pegawai Politala purnatugas</option>
          <option value="c">Mahasiswa aktif</option>
          <option value="d">Alumni Politala</option>
          <option value="e">Masyarakat umum</option>
          <option value="other">Lainnya</option>
        </select>
        <input type="text" class="form-control mt-2" id="input9" placeholder="Enter value for Label 2" style="display: none;">
      </div>

      <div class="mb-3" id="formGroup10">
        <label for="input10" class="form-label">Nama Pelaku (Boleh Kosong)</label>
        <input type="text" name="pelaku" class="form-control mt-2" id="input10" placeholder="Enter value for Label 3">
      </div>

      <div class="mb-3" id="formGroup11">
        <label for="input11" class="form-label">Nomor Kontak Pelaku (Boleh Kosong)</label>
        <input type="text" name="kontak" class="form-control mt-2" id="input11" placeholder="Enter value for Label 3">
      </div>

      <div class="mb-3" id="formGroup12">
        <label for="input12" class="form-label">E-mail Pelaku (Boleh Kosong)</label>
        <input type="text" name="email" class="form-control mt-2" id="input12" placeholder="Enter value for Label 3">
      </div>

      <div class="mb-3" id="formGroup13">
        <label for="input13" class="form-label">Informasi Identitas Pelaku lainnya (Boleh Kosong)</label>
        <input type="text" name="info" class="form-control mt-2" id="input13" placeholder="Enter value for Label 3">
      </div>

      <div class="mb-3" id="formGroup14">
        <label for="select14" class="form-label">Silahkan pilih pilihan berikut</label>
        <select name="pilih" class="form-select" id="select14" onchange="handleSelectChange('select14', 'input14', 'formmanualInput14')">
          <option selected>--Pilih--</option>
          <option value="a">Saya tidak mengetahui identitas pelaku</option>
          <option value="b">Saya mengetahui pelaku tetapi tidak ingin mengungkapnya</option>
          <option value="c">Saya mengetahui pelaku, tetapi akan mengungkapnya setelah mendapat informasi lebih lanjut</option>
          <option value="other">Lainnya</option>
        </select>
        <input type="text" class="form-control mt-2" id="input14" placeholder="Enter value for Label 2" style="display: none;">
      </div>

      <div class="mb-3" id="formGroup15">
        <label for="input15" class="form-label">NomorHP (Boleh Kosong)</label>
        <input type="number" name="nomorhp" class="form-control mt-2" id="input15" placeholder="Enter value for Label 3">
      </div>
      <div class="mb-3" id="formGroup17">
        <label for="input15" class="form-label">E-mail/HP/Kontak Lain (Boleh Kosong)</label>
        <input type="text" name="kontaklain" class="form-control mt-2" id="input15" placeholder="Enter value for Label 3">
      </div>

      <div class="mb-3" id="formGroup16">
        <label for="select16" class="form-label">Silahkan pilih pilihan berikut</label>
        <select name="sila" class="form-select" id="select16" onchange="handleSelectChange('select16', 'input16', 'formmanualInput16')">
          <option selected>--Pilih--</option>
          <option value="a">Saya telah memberikan kontak yang dapat dihubungi</option>
          <option value="b">Saya belum siap memberikan kontak, namun akan menghubungi lagi suatu saat</option>
          <option value="other">Lainnya</option>
        </select>
        <input type="text" class="form-control mt-2" id="input16" placeholder="Enter value for Label 2" style="display: none;">
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eMEn1RzCGZL8Qv8U6DWhWEy4pUOp/+lJSq1l5FUClWwBd+XUUn+h63vcl2E+75e" crossorigin="anonymous"></script>

  <script>
    function handleSelectChange(selectId, inputId, manualInputId) {
      var selectElement = document.getElementById(selectId);
      var inputElement = document.getElementById(inputId);
      var manualInputElement = document.getElementById(manualInputId);

      if (selectElement.value === 'other') {
        inputElement.style.display = 'block';
        manualInputElement.style.display = 'block';
      } else {
        inputElement.style.display = 'none';
        manualInputElement.style.display = 'none';
      }
    }
  </script>
</body>

</html>