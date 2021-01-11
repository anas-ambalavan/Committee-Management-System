<?php

    include_once ('functions/connection.php');
    session_start();
    if(!isset($_SESSION['Id'])){
        header('location:index.php');
    }
    $conn=connect();
    $qu=mysqli_query($conn,"SELECT * FROM `members`;");

    $title="VIEW/EDIT MEMBERS";
    include_once 'static/header.php';
    include_once 'static/sidebar.php'; 

?>

<div class="pcoded-inner-content">
	  <div class="main-body">
				<div class="page-wrapper">
						<div class="page-body">
								<div class="card">
                    <div class="card-header">
                        <h5>VIEW/EDIT MEMBERS </h5>
                          <div class="card-header-right">
                            <i class="icofont icofont-rounded-down"></i>
                            <i class="icofont icofont-refresh"></i>
                          </div>
                          <br>

													<div class="container">
                            <!--  alert_start -->
                                <?php 
                                    if(isset($_SESSION['alert_type'])&&(isset($_SESSION['alert_msg']))){
                                ?>
                                <div class="<?php echo $_SESSION['alert_type'];  ?>">
                                  <span onclick="this.parentElement.style.display='none'"
                                  class="<?php echo $_SESSION['alert_typeclass'] ;?>" >&times;</span>
                                  <h3><?php echo $_SESSION['alert_typei']; ?></h3>
                                  <p><?php echo $_SESSION['alert_msg']; ?></p>
                                </div>
                                <?php
                                  }
                                  unset($_SESSION['alert_type']);
                                  unset($_SESSION['alert_msg']);
                                ?>

                            <!--  alert_end -->
                          </div>
                    </div>
                    <div class="card-block table-border-style">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Course</th>
                              <th>Year</th>
                              <th>Phone No</th>
                              <th>Blood Group</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              $i=1;
                                while($qufe=mysqli_fetch_array($qu)){                                                                      
                            ?>                               
                            <tr>
                              <th scope="row"><?php echo $i;?></th>
                              <td><?php echo($qufe['name']); ?></td>
                              <td><?php echo($qufe['course']); ?></td>
                              <td><?php echo($qufe['year']); ?></td>
                              <td><?php echo($qufe['phone']); ?></td>
                              <td><?php echo($qufe['blood']); ?></td>
                              <td>
                                <span style="float:left;margin: 1px;">
                                  <form action="edit_member.php?id=<?php echo($qufe['id']); ?>&name=<?php echo($qufe['name']); ?>&course=<?php echo($qufe['course']); ?>&year=<?php echo($qufe['year']); ?>&phone=<?php echo($qufe['phone']); ?>&bl=<?php echo urlencode($qufe['blood']); ?>&campus=<?php echo($qufe['campus']); ?>" method="post"><button type="submit" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 1px;"><span class="icofont icofont-ui-edit"></span></button>
                                    <a id="delete" href="functions/delete.php?id=<?php echo($qufe['id']); ?>" OnClick="return confirm('Are you sure want to delete')" class="tabledit-delete-button btn btn-danger waves-effect waves-light"><span class="icofont icofont-ui-delete"></span></a>
                                  </form>
                                </span>
                                <span style="float:right;">
                                </span>
                              </td>
                            </tr>
                            <?php
                            $i=$i+1;
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  <div id="styleSelector">
  </div>    
</div>


<br><br>
<?php include_once 'static/footer.html'; ?>
<?php include_once 'static/footer.php'; ?>