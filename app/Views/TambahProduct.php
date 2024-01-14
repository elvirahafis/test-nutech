<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?= base_url() ?>vendor/simple-datatables/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
	        <ul class="list-unstyled components mb-5">

	          <li>
	              <a href="#">Product</a>
	          </li>

	          <li>
              <a href="#">Profil</a>
	          </li>
	          <li>
              <a href="#">Logout</a>
	          </li>
	        </ul>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-danger">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
          </div>
        </nav>      
 
    <main id="main" class="main">

    <div class="pagetitle">

      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href='<?= site_url('home') ?>'>Daftar Product</a></li>
          <li class="breadcrumb-item active">Edit Product</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">


              <!-- General Form Elements -->
             <!-- <form method="post" action="edit.php"> -->
                  <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <select  id="kategori" name="kategori" class="form-control selectpicker" style="width:100%">
                                        <option value="">Silahkan Pilih</option>
                                    </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" name="namabarang" id="namabarang"  class="form-control" placeholder='Masukkan Nama Barang'>
                            </div>
                        </div>
                 </div>
                <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Harga Jual</label>
                                <input type="number" name="hargajual" id="hargajual"  class="form-control" placeholder='Masukkan Harga Jual'>
                            </div>
                        </div>

                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Harga Beli</label>
                                <input type="number" name="hargabeli" id="hargabeli"  class="form-control" placeholder='Masukkan Harga Beli' >
                            </div>
                        </div>
                         <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Stock Barang</label>
                            
                                <input type="number" name="stock" id="stock"  class="form-control" placeholder='Masukkan Stock Barang'>
                            </div>
                        </div>
                 </div>
                
                <!-- <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Upload Image</label>
                  <div class="col-sm-10">
                  <input class="form-control" type="file" name="cover" id="formFile">
                  </div>
                </div> -->
                 <div class="row mb-3">
                 
                  <div class="col-sm-10">
                    <button type="submit" name ='btnsimpanbuku' onClick='simpandata()' class="btn btn-danger">Simpan</button>
                    <!-- <button class="btn btn-secondary" name="bkosongkan" type="reset">Batalkan</button> -->
                  </div>
                </div>

              <!-- </form>End General Form Elements -->

            </div>
          </div>

        </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

      </div>
		</div>

    <script src="<?= base_url() ?>js/jquery.min.js" ></script>
    <script src="<?= base_url() ?>js/popper.js" ></script>
    <script src="<?= base_url() ?>js/bootstrap.min.js" ></script>
    <script src="<?= base_url() ?>js/main.js" ></script>
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"/>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    
  </body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tabel-data').DataTable();
         $("#kategori").select2({
            placeholder: "Pilih Dahulu",
            allowClear: true
        });
    });
     getKategori();
    function simpandata()
    {
        
        var kategori = $('#kategori').val();
        var namabarang=$('#namabarang').val();
        var hargabeli = $('#hargabeli').val();
        var hargajual = $('#hargajual').val();
        var stock = $('#stock').val();
        if(kategori ==""){
          Swal.fire('Silahkan Masukan kategori !');
          return false;
        } else if(namabarang==""){
                Swal.fire('Silahkan Masukan Nama Barang !');
                return false;
        } else if(hargabeli==""){
                Swal.fire('Silahkan Masukan Harga Beli !');
                return false;
        } else if(hargajual==""){
                Swal.fire('Silahkan Masukan Harga Jual !');
                return false;
        } else if(stock==""){
                Swal.fire('Silahkan Masukan Stock !');
                return false;
        } else {
        var formData = new FormData();
        formData.append('kategori', kategori);
        formData.append('namabarang', namabarang);
        formData.append('hargabeli', hargabeli);
        formData.append('hargajual', hargajual);
        formData.append('stock', stock);
        console.log(formData);
        $.ajax({
                url: '<?php echo base_url();?>tambahprodukD',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    var data1= JSON.parse(data);
                    console.log(data1)
                        if (data1.status == 1) {
                        Swal.fire(
                            'Berhasil   !',
                            data1.pesan
                        ).then(function() {
                            location.href = "<?= site_url('home') ?>"    
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: data1.pesan
                        }).then(function() {
                        
                        });
                    }
                
                }

            });
        }
    }
   
    function getKategori() {
            var optMenu = '<option value="">==option==</option>';

            $.ajax({
                url: '<?php echo base_url();?>getKategori',
                method: 'GET',
                success: function(data) {
                    var t =JSON.parse(data);
                    var datakategori=t.data;
                console.log(datakategori,'34')
                $.each(datakategori, function(index, value) {
                    optMenu += '<option value="' + value.id_kategori + '" >' +value.id_kategori+ '-'+ value.nama_kategori + '</option>';
                });
                $('#kategori').html(optMenu);
                }
         

        });
                

        }
</script>