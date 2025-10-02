 <?php
 
$company_sender_id=filter_var($_SESSION['company_id'] , FILTER_VALIDATE_INT);
$user_id=filter_var($_SESSION['user_id'], FILTER_VALIDATE_INT);
              $year=date("Y"); 
$date =date("m"); 
 ?>

          <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            

<div class="row">
  <!-- Customer Ratings -->


<div class="container-xxl flex-grow-1 container-p-y">
  
<div class="row g-4 mb-4">

<?php
if ($permissions==1) {
  ?>




<div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span data-i18n="Public Outgoing">Public Outgoing</span>
            <div class="d-flex align-items-end mt-2">
              <h5 class="mb-0 me-2"><b><?php

    $sql->selectall("outgoing where month(outgoing_date)='$date' and year(outgoing_date)=$year");
echo $sql->res->num_rows;
              ?></b></h5>
           
            </div>
            <small data-i18n="Public Outgoing">Public Outgoing </small>
          </div>
          <span class="badge bg-label-primary rounded p-2">
            <i class='  bx bxs-paper-plane bx-sm' ></i>
            
          </span>
        </div>
      </div>
    </div>
  </div>



<div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span data-i18n="Outgoing">Outgoing</span>
            <div class="d-flex align-items-end mt-2">
              <h5 class="mb-0 me-2"><b><?php

    $sql->selectall("outgoing where month(outgoing_date)='$date' and year(outgoing_date)=$year and company_sender_id=$company_sender_id");
echo $sql->res->num_rows;
              ?></b></h5>
           
            </div>
            <small data-i18n="Outgoing">Outgoing </small>
          </div>
          <span class="badge bg-label-primary rounded p-2">
            <i class='  bx bxs-paper-plane bx-sm' ></i>
          </span>
        </div>
      </div>
    </div>
  </div>



  <div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span data-i18n="incoming">incoming</span>
            <div class="d-flex align-items-end mt-2">
              <h5 class="mb-0 me-2">
<b>
<?php

    $sql->selectall("incoming where month(incoming_date)='$date' and year(incoming_date)=$year and company_sender_id
=$company_sender_id");
echo $sql->res->num_rows;
              ?>
</b>
              </h5>
           
            </div>
            <small data-i18n="incoming">incoming</small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class='  bx bxs-envelope bx-sm'></i>
          </span>
        </div>
      </div>
    </div>
  </div>




<div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span data-i18n="Users">Users</span>
            <div class="d-flex align-items-end mt-2">
              <h5 class="mb-0 me-2">
<b>
<?php

    $sql->selectall("user ");
echo $sql->res->num_rows;
              ?>
</b>
              </h5>
           
            </div>
            <small data-i18n="Users">Users</small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class='  bx bxs-user bx-sm'></i>
          </span>
        </div>
      </div>
    </div>
  </div>





  <div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span data-i18n="Company">Company</span>
            <div class="d-flex align-items-end mt-2">
              <h5 class="mb-0 me-2">
<b>
<?php

    $sql->selectall("company ");
echo $sql->res->num_rows;
              ?>
</b>
              </h5>
           
            </div>
            <small data-i18n="Company">Company</small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class='bx bxs-buildings bx-sm'></i>
             
          </span>
        </div>
      </div>
    </div>
  </div>



    <div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span data-i18n="notifications">notifications</span>
            <div class="d-flex align-items-end mt-2">
              <h5 class="mb-0 me-2">
<b>
<?php

    $sql->selectall("notifications ");
echo $sql->res->num_rows;
              ?>
</b>
              </h5>
           
            </div>
            <small data-i18n="notifications">notifications</small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class='bx bxs-bell bx-sm'></i>
             
          </span>
        </div>
      </div>
    </div>
  </div>
 <?php
}else{
?>
<div class="col-sm-6 col-xl-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span data-i18n="Outgoing">Outgoing</span>
            <div class="d-flex align-items-end mt-2">
              <h5 class="mb-0 me-2"><b><?php

    $sql->selectall("outgoing where month(outgoing_date)='$date' and year(outgoing_date)=$year and company_sender_id=$company_sender_id");
echo $sql->res->num_rows;
              ?></b></h5>
           
            </div>
            <small data-i18n="Outgoing">Outgoing </small>
          </div>
          <span class="badge bg-label-primary rounded p-2">
            <i class='  bx bxs-paper-plane bx-sm' ></i>
          </span>
        </div>
      </div>
    </div>
  </div>



  <div class="col-sm-6 col-xl-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span data-i18n="incoming">incoming</span>
            <div class="d-flex align-items-end mt-2">
              <h5 class="mb-0 me-2">
<b>
<?php

    $sql->selectall("incoming where month(incoming_date)='$date' and year(incoming_date)=$year and company_sender_id
=$company_sender_id");
echo $sql->res->num_rows;
              ?>
</b>
              </h5>
           
            </div>
            <small data-i18n="incoming">incoming</small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class='  bx bxs-envelope bx-sm'></i>
          </span>
        </div>
      </div>
    </div>
  </div>

  <?php
}
?>

  

  <br>
  <br><br>
  <br><br>
  <br>
 
  <div class="col-sm-12 col-xl-12">
    <div class="card">
      <div class="card-body">
        
<center>
      <?php
     $sql->selectall("company where id=$company_sender_id ");
     $x=1;
     while ($row = $sql->res->fetch_assoc()) {
 

      ?>

<img style="width:20%; height: 20%;" src="inc/fun/company/file/<?=$logo=$row['file']?>">
<?php
}
?>

 </center>
       
      </div>
    </div>
  </div>
  
</div>
<div class="row">


  <!--/ Customer Table -->
</div>

            
          </div>
          <!-- / Content -->
 