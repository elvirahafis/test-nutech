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
	              <a href='<?= site_url('home') ?>'>Product</a>
	          </li>

	          <li>
              <a href='<?= site_url('profil') ?>'>Profil</a>
	          </li>
	          <li>
              <a href='<?= site_url('/') ?>'>Logout</a>
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
      <h1>Data Produk</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            
            <div class="card-body">
             <a type="button" href='<?= site_url('TambahProduct') ?>'  class="btn btn-danger">Tambah Product</a>    
             <br></br>
              <!-- Table with stripped rows -->
              <table class="table table-striped table-bordered datatable" width="100%" cellspacing="0" id="tabel-data">
                <thead>
                  <tr>

                    <th>Nama Produk</th>
                    <th>Kategori Produk</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stock</th>
                    <th>Aksi</th>

                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

         <div class="modal fade" id="orderModal" style="z-index: 9999;" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width:400px">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
      </main>

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
<script>
    // $(document).ready(function(){
    //     $('#tabel-data').DataTable();
    // });
    getDataProduct();
    function getDataProduct() {
   
        $.ajax({
            url: "<?php echo base_url(); ?>getListProduct",
            method: 'GET',
            success: function(data) {
                //  $("#tabel-data").DataTable().clear().draw();

                var t=JSON.parse(data);
                 var dataproduct=t.data;
                console.log(dataproduct)
                var i = 0;
                var no = '1'
                var datarow = '';

                while (i < dataproduct.length) {
  
                  datarow +='<tr><td style="width:10%">' + dataproduct[i].nama_product + '</td>' +
                  '<td style="width:10%">' + dataproduct[i].kategori_product + '</td>' +
                  '<td style="width:10%">' + formatMoney(dataproduct[i].harga_jual) + '</td>' +
                  '<td style="width:10%">' + formatMoney(dataproduct[i].harga_beli) + '</td>' +
                   '<td style="width:10%">' + dataproduct[i].stock + '</td>' +
                  '<td style="width:10% !important;"><div class="btn-group">' +
                  '<a type="button" href=" <?= base_url(); ?>TambahProduct/' + dataproduct[i].nama_product +'" class="btn btn-primary">Update</a>' +
                  '<button type="button" onClick="DeleteProduct(\'' + dataproduct[i].nama_product + '\')" class="btn btn-dark me-1">Delete</button></td></tr>' 
                   i++;
                }
                 
                $( "#tabel-data tbody" ).append(datarow);
                //  $( "#tabel-data" ).DataTable();
                //  
                //    $('#tabel-data').find('tbody').append(datarow); 

                //   $('#tabel-data').find('tbody').append(datarow);
               

                    
            }


        });

    }
      function formatMoney(angka) {
             var rupiah = '';
             var angkarev = angka.toString().split('').reverse().join('');
             for (var i = 0; i < angkarev.length; i++)
                 if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
             return 'Rp. ' + rupiah.split('', rupiah.length - 1).reverse().join('');
         }
     function DeleteProduct(namabarang) {
      console.log(namabarang)
             Swal.fire({
                 title: 'Hapus!!',
                 text: "Apakah Anda Yakin Ingin Menghapus Product?",
                 icon: 'warning',
                 showCancelButton: true,
                 confirmButtonColor: '#3085d6',
                 cancelButtonColor: '#d33',
                 confirmButtonText: 'Yes!'
             }).then((result) => {
                 if (result.isConfirmed) {
                     var formData = new FormData();
                     formData.append('namabarang', namabarang);
                    
                     console.log(formData)
                     $.ajax({
                      url: '<?php echo base_url();?>deleteProduck',
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                         success: function(data) {
                             var t=JSON.parse(data);
                            console.log(t)
                             if (t.status == 1) {
                                 Swal.fire(
                                     'Berhasil   !',
                                     data.pesan
                                 ).then(function() {
                                     location.reload();
                                 });
                             } else {
                                 Swal.fire({
                                     icon: 'error',
                                     title: 'Gagal',
                                     text: data.pesan
                                 }).then(function() {
                                     location.reload();
                                 });
                             }

                         }
                     });
                  } else {
                     return false
                 }
             })
             
         }
</script>