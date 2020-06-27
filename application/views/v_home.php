<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
  <!-- this for nvbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin:24px 0;">
    <a class="navbar-brand" href="javascript:void(0)">DIKPORA DIY</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navb">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link disabled" href="javascript:void(0)"><?php echo $this->session->userdata('nama')?></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a href="<?php echo site_url('login/logout')?>" class="btn btn-success my-2 my-sm-0" type="button">Logout</a>
      </form>
    </div>
  </nav>
  <!-- this for nvbar -->
    <br>
    <h2><?php echo $judul ?></h2>
    <br>
    <button type="button" class="btn btn-success" data-toggle"modal" data-target="#myModal">Tambah Berita</button>     
    <br>        
<table class="table">
      <br>
      <thead>
        <tr>
                      <th scope="col">No</th>
                      <th scope="col">Judul Berita</th>
                      <th scope="col">Isi Berita</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 0;?>
                    <?php foreach ($data_berita as $data):?>
                    <?php $no++;?>
                    <tr>
                      <th scope="row"><?php echo $no?></th>
                      <td><?php echo $data->judul?></td>
                      <td><?php echo $data->isi_berita?></td>
                    </tr>
                  <?php endforeach?>
    </tbody>
  </div>
</table>

<div class="modal fade" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content border-primary">
                      <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white">Silahkan diisi</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="post" action="<?php echo base_url().'index.php/home/tambah'; ?>" >
                          <label for="input-1">Judul Berita</label>
                          <input type="text" name="judul" class="form-control"><br>
                          <label for="input-1">Isi Berita</label>
                          <textarea rows="4" name="isi" class="form-control" id="basic-textarea"></textarea>
                          <br><br>
                          <button type="reset" class="btn btn-inverse-primary" data-dismiss="modal"><i class="fa fa-times"></i> Reset</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i>Simpan</button>
                        </form>
                      </div> 
                
                    </div>
                  </div>
                </div><!--End Modal -->
 



      <!--End Dashboard Content-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
  
  <!--Start footer-->




</body>
</html>
