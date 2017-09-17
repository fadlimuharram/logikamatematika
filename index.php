<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugin/intro.js-2.8.0-alpha.1/minified/introjs.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="col-md-12">
        <h1 class="text-center">Logika Matematika</h1><br />
      </div>
      <div class="col-md-12">
        <form class="form-horizontal" method="post" action="request.php" id="logikamtk">
          <fieldset>
            <div class="form-group">
              <label for="inputEmail" class="col-md-1 control-label">1</label>
              <div class="col-md-3">
                <input class="form-control soalP" name="soalP[]" placeholder="P" type="text" data-intro='Masukan Soal P Di Sini, Contoh : 2 merupakan bilangan positif'>
              </div>
              <div class="col-md-1">
                <input class="form-control jawaban" name="jawabanP[]" placeholder="P" type="text" data-intro='Masukan Benar Atau Salah Dari Soal P Sebelumnya Di Sini, ex : b untuk benar, s untuk salah'>
              </div>
              <div class="col-md-3">
                <input class="form-control soalQ" name="soalQ[]" placeholder="Q" type="text" data-intro='Masukan Soal Q Di Sini, Contoh : 5 adalah faktor dari 12'>
              </div>
              <div class="col-md-1">
                <input class="form-control jawaban" name="jawabanQ[]" placeholder="Q" type="text" data-intro='Masukan Benar Atau Salah Dari Soal Q Sebelumnya Di Sini, ex : b untuk benar, s untuk salah'>
              </div>
              <div class="col-md-3 tambahsoal">
              <button class="btn btn-primary" onclick="kliktambahsoal()" type="button" name="tambah"  data-intro='Klik Button Ini Untuk Menambahkan Soal'> Tambah Soal </button>
              </div>
            </div>
            <section id="soallainnya">

            </section>

            <div class="form-group">
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary col-md-12" data-intro='klik ini jika sudah memasukan semua soal'>Submit</button><br /><br /><br />
              </div>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="col-md-12">
        <section id="ajaxtable"></section>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="plugin/intro.js-2.8.0-alpha.1/minified/intro.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        introJs().start();
        $('#logikamtk').on('submit', function(event) {
          event.preventDefault();
          $.ajax({
            url: 'request.php',
            type: 'POST',
            data: $('#logikamtk').serialize(),
            success: function(htmlnya){
              if (htmlnya) {
                $('#ajaxtable').html(htmlnya);
              }else {
                alert('kosong!');
              }
            }
          })
          .done(function() {
            console.log("success");
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
            console.log("complete");
          });

        });
      });
      no = 2;
      function kliktambahsoal(){
        $('.tambahsoal').hide();
        html = '<div class="form-group">'+
          '<label for="inputEmail" class="col-md-1 control-label">'+no+'</label>'+
          '<div class="col-md-3">'+
            '<input class="form-control" name="soalP[]" placeholder="P" type="text">'+
          '</div>'+
          '<div class="col-md-1">'+
            '<input class="form-control" name="jawabanP[]" placeholder="P" type="text">'+
          '</div>'+
          '<div class="col-md-3">'+
            '<input class="form-control" name="soalQ[]" placeholder="Q" type="text">'+
          '</div>'+
          '<div class="col-md-1">'+
            '<input class="form-control" name="jawabanQ[]" placeholder="Q" type="text">'+
          '</div>'+
          '<div class="col-md-3 tambahsoal">'+
          '<button class="btn btn-primary" onclick="kliktambahsoal()" type="button" name="tambah" > Tambah Soal </button>'+
          '</div>'+
        '</div>';
        $('#soallainnya').append(html);
        no++;
      }


    </script>
  </body>
</html>
