<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?= $title; ?></title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets') ?>/css/style404.css" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets') ?>/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>4<span>0</span>4</h1>
            </div>
            <h2>Sorry, <?= $user['name'] ?> Halaman kamu tidak ada</h2>
            <div class="row">
                <center>
                    <div class="col-4">
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <a href="<?= base_url('admin/auth') ?>" class="btn btn-lg btn-info btn-rounded">Back User</a>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>