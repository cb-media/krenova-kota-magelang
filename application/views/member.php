<head>
    <title>Halaman Member</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>/assets/css/style2.css" rel="stylesheet">

    <script src="<?php echo base_url();?>/assets/jquery/user.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Inspiration from: https://dribbble.com/shots/1428271-iOS7-Challenge-App-->
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-sm-3 sidebar2">
                <div class="logo text-center">
                    <img src="http://lorempixel.com/output/people-q-g-64-64-6.jpg" class="img-responsive center-block" alt="Logo">
                  <h4><?php echo $this->session->userdata("username"); ?></h4>
                </div>
                <br>

                <div class="left-navigation">

                    <ul class="list">
                        <li><i class="fa fa-user" aria-hidden="true"></i><a style="text-decoration:none" href="<?php echo site_url('member/member_detail');?>">Profil</a></li>
                        <li><i class="fa fa-file" aria-hidden="true"></i><a style="text-decoration:none" href="<?php echo site_url('panduan');?>">Panduan</a></li>
                        <li><i class="fa fa-edit" aria-hidden="true"></i><a style="text-decoration:none" href="<?php echo site_url('baru');?>">Isi Proposal</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 col-sm-2 main-content">
                <!--Central content goes here-->
                <h1>FEEDBACK APPRECIATED! :)</h1>
            </div>
        </div>
    </div>
</body>