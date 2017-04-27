<?php
session_start();
if (isset($_SESSION['id'])>0)
{
    $id = $_SESSION['id'];
}
if (isset($_SESSION['name'])>0)
{
    $name = $_SESSION['name'];
}
if (isset($_SESSION['phone'])>0)
{
    $phone = $_SESSION['phone'];
}
if (isset($_SESSION['size'])>0)
{
    $size = $_SESSION['size'];
}

if( isset($_SESSION['tshirt'])>0)
{
    $tshirt = 'ايوة';
}
if( isset($_SESSION['color'])>0)
{
    $color = 'ايوة';
}
if( isset($_SESSION['palon'])>0)
{
    $palon = 'ايوة';
}
if( isset($_SESSION['kalket'])>0)
{
  $kalket = 'ايوة';
}


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Funday | Ticket</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="Design/front/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Design/front/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
    <!-- Theme style
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body onload="window.print();">
<div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header ">
                    <img src="Design/front/image/aRCHERY.3.jpg" width="180" alt="">
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <address>
                <?php

                if (isset($_SESSION['name'])>0)
                {
                    $name = $_SESSION['name'];

                ?>
                    <strong><?php echo $name;?></strong><br>

                    <?php } ?>
                    <?php

                    if (isset($_SESSION['phone'])>0)
                    {
                        $phone = $_SESSION['phone'];

                    ?>
                  <br>
                 رقم التلفون :    <?php echo $phone; } ?>
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">

                <b>رقم الطلب:</b> <?php

                if (isset($_SESSION['id'])>0)
                {
                  echo  $id = $_SESSION['id'];
                }

                ?><br>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped arabic2">
                    <thead>
                    <tr>
                        <th>المنتج</th>
                        <th>الطلب</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>تي شيرت</td>
                        <td>
                        <?php
                            if( isset($_SESSION['tshirt'])>0)
                            {

                            echo 'نعم' ;

                            }else
                            {
                                echo 'لا';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>بالونات</td>
                        <td>

                        <?php
                            if( isset($_SESSION['palon'])>0)
                            {

                            echo 'نعم' ;

                            }else
                            {
                            echo 'لا';
                            }
                            ?>

                        </td>

                    </tr>
                    <tr>
                        <td>كلاكيت اخيرا اتخرجت</td>
                        <td>

                            <?php
                            if( isset($_SESSION['kalket'])>0)
                            {

                                echo 'نعم' ;

                            }else
                            {
                                echo 'لا';
                            }
                            ?>

                        </td>
                    </tr>
                    <tr>
                        <td>الوان</td>
                        <td>

                            <?php
                            if( isset($_SESSION['color'])>0)
                            {

                                echo 'نعم' ;

                            }else
                            {
                                echo 'لا';
                            }
                            ?>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
                <p class="lead arabic1">الشركاء:</p>
                <img src="Design/front/image/aRCHERY.3.jpg" width="100" alt="">
                <img src="Design/front/image/cs.png" width="100" alt="">
                <img src="Design/front/image/sh.png" width="100" alt="">

                <p class="text-muted well well-sm no-shadow arabic2" style="margin-top: 10px;">
لو عاوز تعرف ميعاد الدفع و ميعاد تسليم الطلب تواصل مع  المنظمين  :)                </p>
            </div>
            <!-- /.col -->
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>

