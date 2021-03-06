<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ;?>assets/img/icon1.png" type="image/gif" >
    <title>Testimoni</title>

    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
     <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
     <link href="http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .containerAbu{
      background-color: #AFC6C6;
    }
    h6{
      font-size: 16px;
    }
    </style>

</head>

<body>

<!-- Navbar -->

<?php
include ("navbar.php");

?>

<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header">
        <div class="container-news">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <big>Testimoni</big>
                        <hr class="small">
                        <span class="subheading">Segala perkembangan berita mengenai SMP Muhammadiyah 10 Surakarta</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

<!-- Isi Konten -->

    <?php $num=1; foreach ($testimoni as $key) {

      if ($num % 2) { ?>
        <div class="containerAbu">
            <div class="row">
                <div class="container">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                         <h6>
                            Pesan dari : <?=$key->nama ?><br>
                            <!-- no tlp     : <?=$key->no_tlp ?><br>
                            email      : <?=$key->email ?><br> -->
                            Tgl kirim  : <?=$key->tgl_kirim ?><br>
                        </h6>
                        <hr>
                        <h6><?=$key->pesan ?></h6><br>
                    </div>
                </div>
            </div>
          </div>
        <?php }else{ ?>
            <div class="row">
                <div class="container">
                  <div class="col-sm-2">
                  </div>
                    <div class="col-md-10">
                        <h6>
                            Pesan dari : <?=$key->nama ?><br>
                            <!-- no tlp     : <?=$key->no_tlp ?><br>
                            email      : <?=$key->email ?><br> -->
                            Tgl kirim  : <?=$key->tgl_kirim ?><br>
                        </h6>
                        <hr>
                        <h4><?=$key->pesan ?></h4><br>
                    </div>


                </div>
            </div>
    <?php } $num++; } ?>


    <!-- Footer -->
    <?php
    include ("footer.php");
    ?>

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assets/js/clean-blog.min.js"></script>

</body>

</html>
