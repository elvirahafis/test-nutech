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
                                <label class="form-label">Nama </label>
                                <input type="text" name="nama" id="nama" value='<?= session()->get('nama'); ?>' Readonly class="form-control" >
                            </div>
                </div>
                 </div>
                <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Posisi </label>
                                <input type="text" name="posisi" id="posisi" value='<?= session()->get('posisi'); ?>' Readonly class="form-control" >
                            </div>
                        </div>

                      
                 </div>
                
                <!-- <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Upload Image</label>
                  <div class="col-sm-10">
                  <input class="form-control" type="file" name="cover" id="formFile">
                  </div>
                </div> -->
                 

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
    });

</script>