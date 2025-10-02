

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            

 



<!-- Product List Table -->
<div class="card">
  <div class="card-header">
    <h5 class="card-title" data-i18n="Public Outgoing">Public Outgoing</h5>
      <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
      <div class="col-md-5 ">
        <label class="form-label" data-i18n="from">from</label>

        <input type="date" id="date1" class="form-control date_1" value="<?=date("Y-m")."-01"?>">
    </div>

      <div class="col-md-5 ">
        <label class="form-label" data-i18n="to">to</label>

        <input type="date" id="date2" class="form-control date_2" value="<?=date("Y-m-d")?>">
    </div>
      <div class="col-md-2 ">
 
        <input type="button" value="<?php if ($_COOKIE['lang']=="ar"){echo 'بحث';}else if ($_COOKIE['lang']=="en"){echo 'search';}?>"  onclick="search()" class="form-control btn btn-primary mt-4" >
    </div>
    </div>

<?php
include"inc/des/alert.php";
          ?>
  </div>
  <div class="card-datatable table-responsive">

<style>
 


</style>


    <table  id="myTable" class="datatables-products table border-top">
      <thead >
        <tr>
          
          <th>  </th>
          <th>  </th>
          
      
          
        
          <th data-i18n="Outgoing number">Outgoing number</th>
          <th style="width:80px" data-i18n="outgoing date">outgoing date</th>
          <th data-i18n="Transaction Type">Transaction Type</th>
          <th data-i18n="Importance">Importance</th>
          <th data-i18n="Confidentiality">Confidentiality</th>
          <th data-i18n="subject1">subject</th>
          <th data-i18n="dialect">dialect</th>
          <th data-i18n="Sender">Sender</th>
          <th data-i18n="Action">action</th>
        
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
                <h5 class="modal-title" id="exampleModalLabel1 " data-i18n="Delete">Delete</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
<form method="post" action="inc/fun/outgoing/status.php">
                <div id="name" class=" col mb-3" data-i18n="Alert Delete">
                        
                        ﻫﻞ اﻧﺖ ﻣﺘﺄﻛﺪ ﻣﻦ اﻧﻚ ﺗﺮﻳﺪ اﻟﺤﺬﻑ؟
                       
                     </div>
                     <input class="val" type="hidden" name="id">
                     <input   type="hidden" name="status" value="1">
                     <input   type="hidden" name="page" value="outgoing">

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




<?php
 
if (!isset($_SESSION['login'])) {
header("location:index.php");
}
      $company_id=$_SESSION['company_id'];
     $sql->selectall("company where id=$company_id ");
     $x=1;
     while ($row = $sql->res->fetch_assoc()) {
      $logo=$row['file']; 
      $name=$row['name']; 
      $email=$row['email']; 
      $address=$row['address']; 
 

      }

?>
        
  <!-- Page JS -->
  <!-- <script src="js1/Issued.js"></script> -->

  <script type="text/javascript">
     $(document).ready(function () {
        search()

    })
function search() {
   
     $('#myTable').DataTable({
        "destroy": true,
              "ajax": {
            "url": "inc/json/outgoing.php",
            "data": function(d) {
                // ﺇﺿﺎﻓﺔ اﻟﺘﺎﺭﻳﺦ ﺇﻟﻰ ﻃﻠﺐ AJAX
                d.date1 = $('#date1').val();
                d.date2 = $('#date2').val();
            },
            "dataSrc": ""
        },

 

        "columns": [
            {data: " "},
            {data: "id"},
            {data: "outgoing_number"},
            {data: "outgoing_date"},
            {data: "transaction_type_name"},
            {data: "importance_name"},
            {data: "confidentiality_name"},
            {data: "recipient_entityname"},
            {data: "subject"},
            {data: "user_name"},
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




  
                var n = s.tarmez+s.num_id;
                return n;
                   
            }
        }  

        ////////////2//////////////
         ///////////3////////////
        , {
            targets: 3,
            responsivePriority: 1,
            render: function(t, e, s, a) {




  
                var n = s.outgoing_date;
                return n;
                   
            }
        }  

        ////////////3//////////////
        ///////////4////////////
        , {
            targets: 4,
            responsivePriority: 1,
            render: function(t, e, s, a) {




   var n = <?php if ($_COOKIE['lang']=="ar"){echo 's.transaction_type_name';}else if ($_COOKIE['lang']=="en"){echo 's.transaction_type_name_en';}?>;
                
                return n;
                   
            }
        }  

        ////////////4//////////////
        ///////////5////////////
        , {
            targets: 5,
            responsivePriority: 1,
            render: function(t, e, s, a) {




   var n = <?php if ($_COOKIE['lang']=="ar"){echo 's.importance_name';}else if ($_COOKIE['lang']=="en"){echo 's.importance_name_en';}?>;
      
                return n;
                   
            }
        }  

        ////////////5//////////////
        ///////////6////////////
        , {
            targets: 6,
            responsivePriority: 1,
            render: function(t, e, s, a) {




   
                 var n = <?php if ($_COOKIE['lang']=="ar"){echo 's.confidentiality_name';}else if ($_COOKIE['lang']=="en"){echo 's.confidentiality_name_en';}?>;
                return n;
                   
            }
        }  

        ////////////6//////////////
         ///////////7////////////
        , {
            targets: 7,
            responsivePriority: 1,
            render: function(t, e, s, a) {




  
                
                  var n = <?php if ($_COOKIE['lang']=="ar"){echo 's.subject';}else if ($_COOKIE['lang']=="en"){echo 's.subject_en';}?>;
                return n;
                   
            }
        }  

        ////////////7//////////////
         ///////////8////////////
        , {
            targets: 8,
            responsivePriority: 1,
            render: function(t, e, s, a) {



                var n = <?php if ($_COOKIE['lang']=="ar"){echo 's.dialect_name';}else if ($_COOKIE['lang']=="en"){echo 's.dialect_name_en';}?>;
                 
                
                return n;
                   
            }
        }  

        ////////////8//////////////
        ///////////9////////////
        , {
            targets: 9,
            responsivePriority: 1,
            render: function(t, e, s, a) {



var n = <?php if ($_COOKIE['lang']=="ar"){echo 's.user_name';}else if ($_COOKIE['lang']=="en"){echo 's.user_name_en';}?>;
                 
                 
                return n;
                   
            }
        }  

        ////////////9//////////////
              ///////////10////////////
        , {
            targets: 10,
            responsivePriority: 1,
            render: function(t, e, s, a) {




                var n = s.user_id;
                 
                  return `
                  <div class="d-inline-block text-nowrap">
                  <a href="?edit_outgoing=show&id=`+s.id+`">
                    <button class="btn btn-sm btn-icon">
                      <i class="bx bx-edit"></i>
                    </button></a>

                    <a href="inc/des/outgoing/print2.php?id=`+s.id+`&page=outgoing">
                                <button class="btn btn-sm btn-icon">
                                <i class='bx bx-show'></i>
                                </button></a>
                  </div>`;
                   
            }
        }  

        ////////////10//////////////
 


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
            searchPlaceholder: "Search",
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
                window.location.href = "inc/des/outgoing/print.php?status=0&page=outgoing&date1="+$('#date1').val()+"&date2="+$('#date2').val();
            }
        }


 
 , {
                extend: "pdf",
                text: '<i class="bx bxs-file-pdf me-2"></i>Pdf',
                className: "dropdown-item",
                    action: function() {
                window.location.href = "inc/des/outgoing/pdf.php?status=0&page=outgoing&date1="+$('#date1').val()+"&date2="+$('#date2').val();
            }
            } ]
        },

      <?php
}

             ?>



         {
            text: '<i class="bx bx-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block"  ><?php if ($_COOKIE['lang']=="ar"){echo 'إضافة صادر';}else if ($_COOKIE['lang']=="en"){echo 'Add Outgoing';}?></span>',
            className: "add-new btn btn-primary",
            action: function() {
                window.location.href = "?add_outgoing=show"
            }
        }],
///////////////////////////////////////////////////////////////////
    responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function(t) {
                        return "Details of " + t.data().outgoing_date
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



} ;

  </script>