 
        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            

 



<!-- Product List Table -->
<div class="card">
  <div class="card-header">
    <h5 class="card-title" data-i18n="backup">backup</h5>
    <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
      <div class="col-md-4 product_status"></div>
      <div class="col-md-4 product_category"></div>
      <div class="col-md-4 product_stock"></div>
    </div>
       <?php
include"inc/des/alert.php";



          ?>
  </div>

  <div class="card-datatable table-responsive">

 

    <table  id="myTable" class="datatables-products table border-top">
      <thead>
        <tr>
     
         
          
          <th>
            <a href="export.php"> <button class="btn btn-secondary add-new btn-success" tabindex="0" aria-controls="myTable" type="button"><span> <span class="d-none d-sm-inline-block " data-i18n="backup"> </span></span></button></a>
        </th>
        <!--   <th>
            <a href="import.php"> <button class="btn btn-secondary add-new btn-danger" tabindex="0" aria-controls="myTable" type="button"><span> <span class="d-none d-sm-inline-block " data-i18n="import"> </span></span></button></a>

           </th> -->
          
        
        </tr>
      </thead>
      
    </table>
  </div>
  <br>
  <br>
</div>
 


  <!-- //////////////////////////////////add dialect/////////////////////////////// -->


  <!-- Offcanvas to add new customer -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList" aria-labelledby="offcanvasEcommerceCategoryListLabel">
    <!-- Offcanvas Header -->
    <div class="offcanvas-header py-4">
      <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title"data-i18n="Add dialect">Add dialect</h5>
      <button type="button" class="btn-close bg-label-secondary text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- Offcanvas Body -->
    <div class="offcanvas-body border-top">
      <form class="pt-0" id="eCommerceCategoryListForm" action="inc/fun/dialect/insert.php" method="POST">
        <!-- Title -->
        <div class="mb-3">
          <label class="form-label" for="ecommerce-category-title" data-i18n="Name">Name</label>
          <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter dialect" required name="name" aria-label="category title">
        </div>



        <!-- Title -->
        <div class="mb-3">
          <label class="form-label" for="ecommerce-category-title" data-i18n="name_en">name en</label>
          <input type="text" class="form-control lang_en" id="ecommerce-category-title" placeholder="Enter dialect" required name="name_en" aria-label="category title">
        </div>
         
    
        <!-- Submit and reset -->
        <div class="mb-3">
          <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit" data-i18n="Add">Add</button>
          <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas" data-i18n="Close">Close</button>
        </div>
      </form>
    </div>
  </div>


  <!-- //////////////////////////////////////////////////////////////////////////// -->




 