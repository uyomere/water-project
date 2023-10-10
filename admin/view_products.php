<?php
    if (!isset($_SESSION['admin_email'])) {
        echo "<script>window.open('login.php','_self')</script>";
    } else {
        
        ?>
        <div class="row"><!--first row start-->
            <div class="col-lg-12"><!--col-lg-12 start-->
                <ol class="breadcrumb"><!--breadcrumb start-->
                    <li class="active">
                        <i class="fa fa-dashboard"></i>Dashboard/view Products.
                    </li>
                </ol><!--breadcrumb ends-->
            </div><!--col-lg-12 ends-->
        </div><!--first row ends-->
        <div class="row"><!--second row start-->
            <div class="col-lg-12"><!--col-lg-12 start-->
                <div class="panel panel-default"><!--panel panel-default start-->
                    <div class="panel-heading"><!--panel-heading start-->
                        <h3 class="panel-title"><!--panel-title start-->
                            <i class="fa fa-money fa-fw"></i>View Products.
                        </h3><!--panel-title ends-->
                    </div><!--panel-heading ends-->
                    <div class="panel-body"><!--panel-body start-->
                        <div class="table-responsive"><!--table-responsive start-->
                            <table class="table table-bordered table-hover table-striped table-condensed">
                                <!--table table-bordered table-hover table-striped start-->
                                <thead>
                                <tr>
                                    <th>ProductID</th>
                                    <th>ProductTitle</th>
                                    <th>ProductImage</th>
                                    <th>ProductPrice</th>
                                    <th>ProductSold</th>
                                    <th>ProductKeywords</th>
                                    <th>ProductDate</th>
                                    <th>ProductDelete</th>
                                    <th>ProductEdit</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i = 0;
                                    $get_products = "select * from products";
                                    $run_pro = mysqli_query($con, $get_products);
                                    while ($row_pro = mysqli_fetch_array($run_pro)) {
                                        $pro_id = $row_pro['product_id'];
                                        $pro_title = $row_pro['product_title'];
                                        $pro_image = $row_pro['product_img1'];
                                        $pro_price = $row_pro['product_price'];
                                        $pro_keywords = $row_pro['product_keywords'];
                                        $pro_date = $row_pro['date'];
                                        $i++;
                                        ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $pro_title; ?></td>
                                            <td><img src="product_images/<?php echo $pro_image; ?>" width="40"
                                                     height="40"></td>
                                            <td><span>&#8358;</span> <?php echo $pro_price; ?>.00</td>
                                            <td>
                                                <?php
                                                    $get_sold = "select * from pending_orders where product_id='$pro_id'";
                                                    $run_sold = mysqli_query($con, $get_sold);
                                                    $count = mysqli_num_rows($run_sold);
                                                    echo $count;
                                                ?>
                                            </td>
                                            <td><?php echo $pro_keywords; ?></td>
                                            <td><?php echo $pro_date; ?></td>
                                            <td>
                                                <a href="index.php?delete_product=<?php echo $pro_id; ?>">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                            <td>
                                                <a href="index.php?edit_product=<?php echo $pro_id; ?>">
                                                    <i class="fa fa-pencil"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                    <?php }; ?>
                                </tbody>
                            </table><!--table table-bordered table-hover table-striped ends-->
                        </div><!--table-responsive ends-->
                    </div><!--panel-body ends-->
                </div><!--panel panel-default ends-->
            </div><!--col-lg-12 ends-->
        </div><!--second row ends-->
    <?php }; ?>
