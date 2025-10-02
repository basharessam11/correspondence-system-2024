 
        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            

 



<!-- Product List Table -->
<div class="card">
  <div class="card-header">
    <h5 class="card-title" data-i18n="Transaction Type">Transaction Type</h5>
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
          
          <th>  </th>
          <th>  </th>
          
      
          
        
          <th>#</th>
          <th data-i18n="Name">Name</th>
          <th data-i18n="name_en">name en</th>
           
          <th data-i18n="Action">Action</th>
        
        </tr>
      </thead>
    </table>
  </div>
  <br>
  <br>
</div>
 


  <!-- //////////////////////////////////add Transaction Type/////////////////////////////// -->


  <!-- Offcanvas to add new customer -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList" aria-labelledby="offcanvasEcommerceCategoryListLabel">
    <!-- Offcanvas Header -->
    <div class="offcanvas-header py-4">
      <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title"data-i18n="Add Transaction Type">Add Transaction Type</h5>
      <button type="button" class="btn-close bg-label-secondary text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- Offcanvas Body -->
    <div class="offcanvas-body border-top">
      <form class="pt-0" id="eCommerceCategoryListForm" action="inc/fun/transaction_type/insert.php" method="POST">
        <!-- Title -->
        <div class="mb-3">
          <label class="form-label" for="ecommerce-category-title" data-i18n="Name">Name</label>
          <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter Transaction Type" required name="name" aria-label="category title">
        </div>



        <!-- Title -->
        <div class="mb-3">
          <label class="form-label" for="ecommerce-category-title" data-i18n="name_en">name en</label>
          <input type="text" class="form-control lang_en" id="ecommerce-category-title" placeholder="Enter Transaction Type" required name="name_en" aria-label="category title">
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





  <!-- //////////////////////////////////add Transaction Type/////////////////////////////// -->


  <!-- Offcanvas to add new customer -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList1" aria-labelledby="offcanvasEcommerceCategoryListLabel">
    <!-- Offcanvas Header -->
    <div class="offcanvas-header py-4">
      <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title" data-i18n="Edit Transaction Type">Edit Transaction Type</h5>
      <button type="button" class="btn-close bg-label-secondary text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- Offcanvas Body -->
    <div class="offcanvas-body border-top">
      <form class="pt-0" id="eCommerceCategoryListForm" action="inc/fun/transaction_type/update.php" method="POST">
        <!-- Title -->
        <div class="mb-3">
          <label class="form-label" for="ecommerce-category-title" data-i18n="Name">Name</label>
          <input type="text" class="form-control name" id="ecommerce-category-title" placeholder="Enter category title"  required name="name" aria-label="category title">
        </div>



        <!-- Title -->
        <div class="mb-3">
          <label class="form-label" for="ecommerce-category-title" data-i18n="name_en">name en</label>
          <input type="text" class="form-control name_en lang_en" id="ecommerce-category-title" placeholder="Enter Transaction Type" required name="name_en" aria-label="category title">
        </div>
         
    <input type="hidden" value="0" class="id" name="id">
        <!-- Submit and reset -->
        <div class="mb-3">
          <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit" data-i18n="Edit">Edit</button>
          <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas" data-i18n="Close">Close</button>
        </div>
      </form>
    </div>
  </div>


  <!-- //////////////////////////////////////////////////////////////////////////// -->












 <!-- group delete -->
 <div class="modal fade" id="basicModal2" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1 " data-i18n="Delete">Delete</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
<form method="post" action="inc/fun/transaction_type/delete.php">
                <div id="name" class=" col mb-3" data-i18n="Alert Delete">
                        
                        ؟ﻑﺬﺤﻟا ﺪﻳﺮﺗ ﻚﻧا ﻦﻣ ﺪﻛﺄﺘﻣ ﺖﻧا ﻞﻫ
                       
                     </div>
                     <input class="val" type="hidden" name="id">
                   </div>
                  
                  
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal" data-i18n="Close">Close</button>
                   <button type="submit" class="btn btn-danger" data-i18n="Delete">Delete</button>
</form>
                </div>
              </div>
            </div>
          </div>
  <!-- //////////////////////////////////////////////////////////////////////////// -->

                                       <script>
      
//   function data(){
//   var arc= get_filter('dt-checkboxes');
//   var check=get_filter('dt-checkboxes')


//   function get_filter(class_name){
//     var filter=[];

//     $('.'+class_name+':checked').each(function(){
//       filter.push($(this).val())

//     })
// console.log(filter)

//     $(".val").val(filter)
//   if (filter.length==0) {
//        $(".de").hide()
//     }else{
//         $(".de").show()
//     }



//   }
// }
  
 function data1(class_name){
  var a=$('.'+class_name+':checked').length;

 

    if (a==1) {

                $(".dt-checkboxes").prop("checked", true);
        var filter=[];

    $('.dt-checkboxes:checked').each(function(){
      filter.push($(this).val())
    })

    $(".val").val(filter)
// console.log(filter,a)



$(".de").show();

    }else{
                 
    $(".val").val('');
    $(".de").hide();
        

    }
    



  }





  function data(class_name){
    var filter=[];

    $('.'+class_name+':checked').each(function(){
      filter.push($(this).val())
    })
    $(".val").val(filter)
// console.log(filter)




  if (filter.length==0) {
       $(".de").hide()
    }else{
        $(".de").show()
    }



  }

 
                 </script>
<script type="text/javascript">
    function edit(id,name,name_en) {
        $(".id").val(id);
        $(".name").val(name);
        $(".name_en").val(name_en);
    }
</script>






          </div>
          <!-- / Content -->
  <!-- Page JS -->
  <!-- <script src="js1/Issued.js"></script> -->

  <script type="text/javascript">
    $(document).ready(function() {
    $('#myTable').DataTable({
        "ajax": {
            "url": "inc/json/transaction_type.php", // ﻥاﻮﻨﻌﺑ ﻝﺪﺒﺘﺳا URL ﺕﺎﻧﺎﻴﺑ ﻰﻠﻋ ﻝﻮﺼﺤﻠﻟ JSON
            "dataSrc": "" // ﺭﺬﺟ ﻥﻭﺩ ﺮﺷﺎﺒﻣ ﻞﻜﺸﺑ ﻲﺗﺄﺗ ﺕﺎﻧﺎﻴﺒﻟا ﻥﻷ ﺔﻏﺭﺎﻓ ﻰﻟﺇ ﺎﻬﻨﻴﻴﻌﺗ ﺐﺠﻳ
        },


        // (`id`, `Transaction Type_number`, `tarmez`, `Transaction Type_id`, `Transaction Type_id`, `Transaction Type_id`, `subject`, `recipient_entity_id`, `user_id`, `Transaction Type_date`)

        "columns": [
            {data: " "},
            {data: "id"},
            {data: "name"},
            {data: "name_en"},
            {data: " "},
            {data: " "},
             
             
             

            
             
            // ﻚﺗﺎﺟﺎﻴﺘﺣا ﺐﺴﺣ ﺎﻨﻫ ﺓﺪﻤﻋﻷا ﻦﻣ ﺪﻳﺰﻤﻟا ﺔﻓﺎﺿﺇ ﻚﻨﻜﻤﻳ
        ]
    , 
        columnDefs: [{
            className: "control",
            searchable: !1,
            orderable: !1,
            responsivePriority: 2,
            targets: 0,
            render: function(t, e, s, a) {

                return ""
            }
        }, {
            targets: 1,
            orderable: !1,
            checkboxes: {
                selectAllRender: '<input type="checkbox" onclick="data1(`all`)" class="all form-check-input">'
            },
            render: function(t, e, s, a) {
                return '<input type="checkbox" value="'+s.id+'" onclick="data(`dt-checkboxes`)" class="dt-checkboxes form-check-input" >'
            },
            searchable: !1
        }
         
        ///////////2////////////
        , {
            targets: 2,
            responsivePriority: 1,
            render: function(t, e, s, a) {

// console.log(s)


  
                var n = s.id;
                return n;
                   
            }
        }  

        ////////////2//////////////
         ///////////3////////////
        , {
            targets: 3,
            responsivePriority: 1,
            render: function(t, e, s, a) {




  
                var n = s.name;
                return n;
                   
            }
        }  

        ////////////3//////////////

        ///////////4////////////
        , {
            targets: 4,
            responsivePriority: 1,
            render: function(t, e, s, a) {




  
                var n = s.name_en;
                return n;
                   
            }
        }  

        ////////////4//////////////
         
              ///////////5////////////
        , {
            targets: 5,
            responsivePriority: 1,
            render: function(t, e, s, a) {




                var n = s.user_id;
                 
                  return `
                  <div class="d-inline-block text-nowrap">
                  <a onclick="edit(`+s.id+`,'`+s.name+`','`+s.name_en+`')" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEcommerceCategoryList1"  >
                    <button class="btn btn-sm btn-icon">
                      <i class="bx bx-edit"></i>
                    </button></a>
                  </div>`
                      
            }
        }  

        ////////////5//////////////
 


, {
            targets: -1,
            
            searchable: !1,
            orderable: !1,
            
        }

 ],

        order: [2, "desc"],
        dom: '<"card-header d-flex border-top rounded-0 flex-wrap py-md-0"<"me-5 ms-n2 pe-5"f><"d-flex justify-content-start justify-content-md-end align-items-baseline"<"dt-action-buttons d-flex align-items-start align-items-md-center justify-content-sm-center mb-3 mb-sm-0"lB>>>t<"row mx-2"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        lengthMenu: [ 10, 20, 50, 70, 100],
        language: {
            sLengthMenu: "_MENU_",
            search: "",
            searchPlaceholder: "Search ",
            info: "Displaying _START_ to _END_ of _TOTAL_ entries"
        },
        buttons: [ 


                  <?php 
if ($delete1 ==1) {
?>
{
            text: '<i class="bx bx-trash"></i><span class="d-none d-sm-inline-block"><?php if ($_COOKIE['lang']=="ar"){echo 'حذف';}else if ($_COOKIE['lang']=="en"){echo 'Delete';}?> </span>',
            className: "add-new btn btn-danger de me-3",
            attr: {
          "data-bs-toggle": "modal",
          "data-bs-target": "#basicModal2",
          "style": "display:none"
        }
        },
        <?php
}

             ?>



<?php 
if ($print ==1) {
?>
     

        {
            extend: "collection",
            className: "btn btn-label-secondary dropdown-toggle me-3",
            text: '<i class="bx bx-export me-1"  ><span class="d-none d-sm-inline-block"  ><?php if ($_COOKIE['lang']=="ar"){echo 'إستخراج';}else if ($_COOKIE['lang']=="en"){echo 'Export';}?><span></i>',
            buttons: [{
                extend: "print",
                text: '<i class="bx bx-printer me-2" ></i>Print',
                className: "dropdown-item",
                exportOptions: {
                    columns: [ 2, 3,4 ],
                    format: {
                        body: function(t, e, s) {
                            var a;
                            return t.length <= 0 ? t : (t = $.parseHTML(t), a = "", $.each(t, function(t, e) {
                                void 0 !== e.classList && e.classList.contains("product-name") ? a += e.lastChild.firstChild.textContent : void 0 === e.innerText ? a += e.textContent : a += e.innerText
                            }), a)
                        }
                    }
                },
                customize: function(t, e, s,a) {
                    $(t.document.body).css("color", a).css("border-color", e).css("background-color", s), $(t.document.body).find("table").addClass("compact").css("color", "inherit").css("border-color", "inherit").css("background-color", "inherit")
                }
            },  {
                extend: "pdf",
                text: '<i class="bx bxs-file-pdf me-2"></i>Pdf',
                className: "dropdown-item",
                exportOptions: {
                    columns: [ 2, 3 ],
                    format: {
                        body: function(t, e, s) {
                            var a;
                            return t.length <= 0 ? t : (t = $.parseHTML(t), a = "", $.each(t, function(t, e) {
                                void 0 !== e.classList && e.classList.contains("product-name") ? a += e.lastChild.firstChild.textContent : void 0 === e.innerText ? a += e.textContent : a += e.innerText
                            }), a)
                        }
                    }
                }
            } ]
        }, 

      <?php
}

             ?>





        {
            text: '<i class="bx bx-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block" data-i18n="Add Transaction Type">Add Transaction Type</span>',
            className: "add-new btn btn-primary",
            attr: {
          "data-bs-toggle": "offcanvas",
          "data-bs-target": "#offcanvasEcommerceCategoryList"
        }
        }],
///////////////////////////////////////////////////////////////////


    responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function(t) {
                        return "Details of " + t.data().name
                    }
                }),
                type: "column",
                renderer: function(t, e, s) {
                    s = $.map(s, function(t, e) {
                        return "" !== t.title ? '<tr data-dt-row="' + t.rowIndex + '" data-dt-column="' + t.columnIndex + '"><td>' + t.title + ":</td> <td>" + t.data + "</td></tr>" : ""
                    }).join("");
                    return !!s && $('<table class="table"/><tbody />').append(s)
                }
            }
        },






















    });



});

  </script>