    <?php
	
	include_once('includes/header.php'); 
	
	?>

    <section>
        <?php include_once('includes/sidebar.php'); ?>
        <?php include_once('includes/rightbar.php'); ?>
    </section>

    <?php
      $sql = "SELECT * FROM `leads` ORDER BY `created_at` DESC";
      $result = mysqli_query($db,$sql);
    ?>
    
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?php echo $_SESSION['company'] ?> Leads
                            </h2>
                        </div>
                        <div id="Bfrtip" class="Bfrtip"></div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="example1">
                                <thead>
                                    <tr>
                                         <th>Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>utm_source</th>
                                        <th>utm_medium</th>
                                        <th>utm_campaign</th>
										<th>IP</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                           <td><?php echo date('d-m-Y H:i:s', strtotime( $row['created_at'])); ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['mobile']; ?></td>
                                            <td><?php echo $row['utm_source']; ?></td>
                                            <td><?php echo $row['utm_medium']; ?></td>
                                            <td><?php echo $row['utm_campaign']; ?></td>
											<td><?php echo $row['ip_address']; ?></td>
                                            
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->

        </div>
    </section>

    <?php include_once('includes/footer.php'); ?>
