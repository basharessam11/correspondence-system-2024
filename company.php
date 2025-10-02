

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            

 



<!-- Product List Table -->
<div class="card">
  <div class="card-header">
    <h5 class="card-title" data-i18n="Company">Company</h5>
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

<style>
 
 

</style>


    <table  id="myTable" class="datatables-products table border-top">
      <thead>
        <tr>
          
          <th>  </th>
          <th>  </th>
          
      
          
        
          <th >#</th>
          <th data-i18n="Logo">Logo</th>
          <th data-i18n="Company Name">Company Name</th>
          <th data-i18n="Address1">Address</th>
          <th data-i18n="email">email</th>
          <th data-i18n="phone">phone</th>
          <th data-i18n="status">status</th>
           
          <th data-i18n="Action">Action</th>
        
        </tr>
      </thead>
    </table>
  </div>
  <br>
  <br>
</div>
 

          </div>
          <!-- / Content -->

 <!-- group delete -->
          <div class="modal fade" id="basicModal2" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">ﺣﺬﻑ</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
<form method="post" action="inc/fun/company/delete.php">
                    <div id="name" class=" col mb-3">
                        
                       ﻫﻞ اﻧﺖ ﻣﺘﺄﻛﺪ ﻣﻦ اﻧﻚ ﺗﺮﻳﺪ اﻟﺤﺬﻑ؟
                      
                    </div>
                    <input class="val" type="hidden" name="id">
                  </div>
                 
                 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">اﻏﻼﻕ</button>
                  <button type="submit" class="btn btn-danger">ﺣﺬﻑ</button>
</form>
                </div>
              </div>
            </div>
          </div>
  <!-- //////////////////////////////////////////////////////////////////////////// -->

 <script>
      
 
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





  <!-- Page JS -->
  <!-- <script src="js1/Issued.js"></script> -->

  
  <script type="text/javascript">
    $(document).ready(function() {
    $('#myTable').DataTable({
        "ajax": {
            "url": "inc/json/company.php", // اﺳﺘﺒﺪﻝ ﺑﻌﻨﻮاﻥ URL ﻟﻠﺤﺼﻮﻝ ﻋﻠﻰ ﺑﻴﺎﻧﺎﺕ JSON
            "dataSrc": "" // ﻳﺠﺐ ﺗﻌﻴﻴﻨﻬﺎ ﺇﻟﻰ ﻓﺎﺭﻏﺔ ﻷﻥ اﻟﺒﻴﺎﻧﺎﺕ ﺗﺄﺗﻲ ﺑﺸﻜﻞ ﻣﺒﺎﺷﺮ ﺩﻭﻥ ﺟﺬﺭ
        },


        // (`id`, `Company_number`, `tarmez`, `Company_id`, `Company_id`, `confidentiality_id`, `subject`, `recipient_entity_id`, `user_id`, `Company_date`)

        "columns": [
            {data: " "},



            /////////////////////////////
            {data: "id"},
            {data: "file"},
            {data: "name"},
            {data: "status"},
            /////////////////////////////
            



            {data: " "},
            {data: " "},
             
             
             

            
             
            // ﻳﻤﻜﻨﻚ ﺇﺿﺎﻓﺔ اﻟﻤﺰﻳﺪ ﻣﻦ اﻷﻋﻤﺪﺓ ﻫﻨﺎ ﺣﺴﺐ اﺣﺘﻴﺎﺟﺎﺗﻚ
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




  
                var n = s.file;
                 
                return ` 
      <img class="w-px-50 h-auto  " src="inc/fun/company/file/`+n+`" alt="`+s.name+`" alt="User avatar">
      
    
    
  
 `

                   
            }
        }  

        ////////////3//////////////
        ///////////4////////////
        , {
            targets: 4,
            responsivePriority: 1,
            render: function(t, e, s, a) {




  
                var n = <?php if ($_COOKIE['lang']=="ar"){echo 's.name';}else if ($_COOKIE['lang']=="en"){echo 's.name_en';}?>;
                return n;
                   
            }
        }  

        ////////////4//////////////
        ///////////5////////////
        , {
            targets: 5,
            responsivePriority: 1,
            render: function(t, e, s, a) {




  
                var n = <?php if ($_COOKIE['lang']=="ar"){echo 's.address';}else if ($_COOKIE['lang']=="en"){echo 's.address_en';}?>;
                return n;
                   
            }
        }  

        ////////////5//////////////

        ///////////6////////////
        , {
            targets: 6,
            responsivePriority: 1
            ,
            render: function(t, e, s, a) {




  
                var n = '<a href="mailto:'+s.email+'">'+s.email+'</a>';
                
                return n;

                
                   
             
                }
                
        }  

        ////////////6//////////////
         ///////////7////////////
        , {
            targets: 7,
            responsivePriority: 1
            ,
            render: function(t, e, s, a) {




  
               var n = '<a dir="ltr" href="tel:'+s.phone+'">'+s.phone+'</a>';
                
                return n;

                }
                
        }  

        ////////////7//////////////
         ///////////8////////////
        , {
            targets: 8,
            responsivePriority: 1
            ,
            render: function(t, e, s, a) {




  var n = s.status;
                if (n==1) {
<?php if ($_COOKIE['lang']=="ar"){?>

                    return "<div class='badge bg-label-success'>ﻧﺸﻂ</div>";
<?php
                     }else if ($_COOKIE['lang']=="en"){?>

                    return "<div class='badge bg-label-success'>active</div>";

                       <?php
                   }?>;
                }else{
                          <?php if ($_COOKIE['lang']=="ar"){?>

                     return "<div class='badge bg-label-danger'>ﻏﻴﺮ ﻧﺸﻂ</div>";
<?php
                     }else if ($_COOKIE['lang']=="en"){?>

                    return "<div class='badge bg-label-danger'>inactive</div>";

                       <?php
                   }?>;

                
                   
            }
                }
                
        }  

        ////////////8//////////////
         
              ///////////9////////////
        , {
            targets: 9,
            responsivePriority: 1,
            render: function(t, e, s, a) {




                var n = s.user_id;
                 
                  return `
                  <div class="d-inline-block text-nowrap">
                  <a href="?edit_company=show&id=`+s.id+`">
                    <button class="btn btn-sm btn-icon">
                      <i class="bx bx-edit"></i>
                    </button></a>
                  </div>`;
                      
            }
        }  

        ////////////9//////////////
 


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
            buttons: [





                {

            text: '<i class="bx bx-printer me-2" data-i18n="print" ></i> print ',
             
            action: function() {
                window.location.href = "inc/des/company/print.php";
            }
        }
        ,  {
                extend: "pdf",
                text: '<i class="bx bxs-file-pdf me-2"></i>Pdf',
                className: "dropdown-item",
                action: function() {
                window.location.href = "inc/des/company/pdf.php";
            }
            } ]
        },

      <?php
}

             ?>


         {
            text: '<i class="bx bx-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block" data-i18n="Add Company">Add Company</span>',
            className: "add-new btn btn-primary",
            action: function() {
                window.location.href = "?add_company=show"
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