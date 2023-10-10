<?php
if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

    ?>
    <div class="row"><!--First Row Start-->
        <div class="col-lg-12"><!--col-lg-12 Start-->
            <h1 class="page-header">Dashboard</h1>
            <ol class="breadcrumb"><!--Breadcrumb Start-->
                <li class="active">
                    <i class="fa fa-dashboard"></i>Dashboard
                </li>
            </ol><!--Breadcrumb Ends-->
        </div><!--col-lg-12 Ends-->
    </div><!--First Row Ends-->
    <div class="row"><!--Second Row Start-->
        <div class="col-lg-3 col-md-6 "><!--col-lg-3 col-md-6 Start-->
            <div class="panel panel-primary"><!--panel panel-primary Start-->
                <div class="panel-heading"><!--panel-heading Start-->
                    <div class="row"><!--panel-heading Row Start-->
                        <div class="col-xs-3"><!--col-xs-3 Start-->
                            <i class="fa fa-tasks fa-5x"></i>
                        </div><!--col-xs-3 Ends-->
                        <div class="col-xs-9 text-right"><!--col-xs-9 text-right Start-->
                            <div class="huge"><?php echo $count_products; ?></div>
                            <div>Products</div>
                        </div><!--col-xs-9 text-right Ends-->
                    </div><!--panel-heading Row Ends-->
                </div><!--panel-heading Ends-->
                <a href="index.php?view_products">
                    <div class="panel-footer"><!--panel-footer Start-->
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div><!--panel-footer Ends-->
                </a>
            </div><!--panel panel-primary Ends-->
        </div><!--col-lg-3 col-md-6 Ends-->
        <div class="col-lg-3 col-md-6 "><!--col-lg-3 col-md-6 Start-->
            <div class="panel panel-green"><!--panel panel-green Start-->
                <div class="panel-heading"><!--panel-heading Start-->
                    <div class="row"><!--panel-heading Row Start-->
                        <div class="col-xs-3"><!--col-xs-3 Start-->
                            <i class="fa fa-user fa-5x"></i>
                        </div><!--col-xs-3 Ends-->
                        <div class="col-xs-9 text-right"><!--col-xs-9 text-right Start-->
                            <div class="huge"><?php echo $count_customers; ?></div>
                            <div>Customers</div>
                        </div><!--col-xs-9 text-right Ends-->
                    </div><!--panel-heading Row Ends-->
                </div><!--panel-heading Ends-->
                <a href="index.php?view_customers">
                    <div class="panel-footer"><!--panel-footer Start-->
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div><!--panel-footer Ends-->
                </a>
            </div><!--panel panel-green Ends-->
        </div><!--col-lg-3 col-md-6 Ends-->
        <div class="col-lg-3 col-md-6 "><!--col-lg-3 col-md-6 Start-->
            <div class="panel panel-yellow"><!--panel panel-yellow Start-->
                <div class="panel-heading"><!--panel-heading Start-->
                    <div class="row"><!--panel-heading Row Start-->
                        <div class="col-xs-3"><!--col-xs-3 Start-->
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div><!--col-xs-3 Ends-->
                        <div class="col-xs-9 text-right"><!--col-xs-9 text-right Start-->
                            <div class="huge"><?php echo $count_p_categories; ?></div>
                            <div>Products Categories</div>
                        </div><!--col-xs-9 text-right Ends-->
                    </div><!--panel-heading Row Ends-->
                </div><!--panel-heading Ends-->
                <a href="index.php?view_p_cats">
                    <div class="panel-footer"><!--panel-footer Start-->
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div><!--panel-footer Ends-->
                </a>
            </div><!--panel panel-yellow Ends-->
        </div><!--col-lg-3 col-md-6 Ends-->
        <div class="col-lg-3 col-md-6 "><!--col-lg-3 col-md-6 Start-->
            <div class="panel panel-red"><!--panel panel-primary Start-->
                <div class="panel-heading"><!--panel-heading Start-->
                    <div class="row"><!--panel-heading Row Start-->
                        <div class="col-xs-3"><!--col-xs-3 Start-->
                            <i class="fa fa-support fa-5x"></i>
                        </div><!--col-xs-3 Ends-->
                        <div class="col-xs-9 text-right"><!--col-xs-9 text-right Start-->
                            <div class="huge"><?php echo $count_pending_orders; ?></div>
                            <div>Orders</div>
                        </div><!--col-xs-9 text-right Ends-->
                    </div><!--panel-heading Row Ends-->
                </div><!--panel-heading Ends-->
                <a href="index.php?view_orders">
                    <div class="panel-footer"><!--panel-footer Start-->
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div><!--panel-footer Ends-->
                </a>
            </div><!--panel panel-red Ends-->
        </div><!--col-lg-3 col-md-6 Ends-->
    </div><!--Second Row Ends-->
    <div class="row"><!--Third Row Start-->
        <div class="col-lg-8"><!--col-md-8 start-->
            <div class="panel panel-primary"><!--panel-primary start-->
                <div class="panel-heading"><!---panel-heading start-->
                    <h3 class="panel-title"><!--panel-title start-->
                        <i class="fa fa-money fa-w"></i> New Orders
                    </h3><!--panel-title Ends-->
                </div><!--panel-heading Ends-->
                <div class="panel-body"><!--panel-body start-->
                    <div class="table-responsive"><!--table-responsive start-->
                        <table class="table table-bordered table-hover table-striped">
                            <!--table table-bordered table-hover table-striped start-->
                            <thead><!--thead start-->
                            <tr>
                                <th>OrderNo:</th>
                                <th>CustomerEmail:</th>
                                <th>InvoiceNo:</th>
                                <th>ProductID:</th>
                                <th>ProductQty:</th>
                                <th>ProductSize:</th>
                                <th>Status</th>
                            </tr>
                            </thead><!--thead ends-->
                            <tbody><!--tbody start-->
                            <?php
                            $i = 0;
                            $get_order = "select * from pending_orders order by 1 DESC LIMIT 0,5";
                            $run_order = mysqli_query($con, $get_order);
                            while ($row_order = mysqli_fetch_array($run_order)) {
                                $order_id = $row_order['order_id'];
                                $c_id = $row_order['customer_id'];
                                $invoice_no = $row_order['invoice_no'];
                                $product_id = $row_order['product_id'];
                                $qty = $row_order['qty'];
                                $size = $row_order['size'];
                                $order_status = $row_order['order_status'];
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>
                                        <?php
                                        $get_customer = "select * from customers where customer_id='$c_id '";
                                        $run_customer = mysqli_query($con, $get_customer);
                                        $row_customer = mysqli_fetch_array($run_customer);
                                        $customer_email = $row_customer['customer_email'];
                                        echo $customer_email;
                                        ?>
                                    </td>
                                    <td><?php echo $invoice_no; ?></td>
                                    <td><?php echo $product_id; ?></td>
                                    <td><?php echo $qty; ?></td>
                                    <td><?php echo $size; ?></td>
                                    <td>
                                        <?Php
                                        if ($order_status == 'pending') {
                                            echo $order_status = 'pending';
                                        } else {
                                            echo $order_status = 'complete';
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php }; ?>
                            </tbody><!--tbody ends-->
                        </table><!--table table-bordered table-hover table-striped start-->
                    </div><!--table-responsive ends-->
                    <div class="text-right"><!--Text-right start-->
                        <a href="index.php?view_orders">
                            View all Orders <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div><!--Text-right ends-->
                </div><!--panel-body ends-->
            </div><!--panel-primary Ends-->
        </div><!--col-lg-8 Ends-->
        <div class="col-md-4"><!--col-md-4 Start-->
            <div class="panel"><!--panel start-->
                <div class="panel-body"><!--panel-body start-->
                    <div class="thumb-info mb-md"><!--thumb-info mb-md start-->
                        <img src="admin-images/<?php echo $admin_image; ?>"
                             class="rounded  img-responsive img-rounded">
                        <div class="thumb-info-title"><!--thumb-info-title start-->
                            <span class="thumb-info-inner"><?php echo $admin_name; ?></span>
                            <span class="thumb-info-type"><?php echo $admin_job; ?></span>
                        </div><!--thumb-info-title ends-->
                    </div><!--thumb-info mb-md ends-->
                    <div class="mb-md"><!--mb-md start-->
                        <div class="widget-content-expanded"><!--widget-content-expanded start-->
                            <i class="fa fa-user"></i><span>Email:</span><?php echo $admin_email; ?><br>
                            <i class="fa fa-user"></i><span>Country:</span><?php echo $admin_country; ?><br>
                            <i class="fa fa-user"></i><span>Contact:</span><?php echo $admin_contact; ?><br>
                        </div><!--widget-content-expanded ends-->
                        <hr class="dotted short">
                        <h5 class="text-muted">About</h5>
                        <p><?php echo $admin_about; ?></p>
                    </div><!--mb-md start-->
                </div><!--panel-body ends-->
            </div><!--panel Ends-->
        </div><!--col-md-4 Ends-->
    </div><!--Third Row Ends-->
<?php }; ?>