    <?php
 
  include"../sql.php";
 
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");


 $date1=$_POST['date1'];
 $date2=$_POST['date2'];

 $sql->selectjoin("  
 
notifications.id,
notifications.date,
notifications.page,
    notifications.page_en,
    notifications.des,
    notifications.des_en,
    user.name,
    user.permissions AS permissions,
    user.name_en 
  "
  ,"notifications","
 
    user ON notifications.user_id = user.id;

 

    ");

$rows = array();

// Loop through each row in the result set
while ($row = $sql->res11->fetch_assoc()) {
    // Add the row to the $rows array
    $rows[] = $row;
}

 
// print_r($rows);
// Encode the array of rows into a JSON string
 $jsonString =  json_encode($rows) ;

 
?>   


    <table  id="myTable" class="datatables-products table border-top">
      <thead>
        <tr>
          
          <th>  </th>
        
          
      
          
        
          <th >#</th>
          <th data-i18n="User Name">User</th>
          <th data-i18n="page">page</th>
          <th data-i18n="notifications">notifications</th>
 
          <th data-i18n="date">Date</th>
           
         
        
        </tr>
      </thead>
    </table>
   
   <script type="text/javascript">
    $(document).ready(function() {
    $('#myTable').DataTable({
        "ajax": {
            // "url": "inc/json/notifications.php?date1=<?=$date1?>&date2=<?=$date2?>", // اﺳﺘﺒﺪﻝ ﺑﻌﻨﻮاﻥ URL ﻟﻠﺤﺼﻮﻝ ﻋﻠﻰ ﺑﻴﺎﻧﺎﺕ JSON
            "data": '<?=$jsonString?>' // ﻳﺠﺐ ﺗﻌﻴﻴﻨﻬﺎ ﺇﻟﻰ ﻓﺎﺭﻏﺔ ﻷﻥ اﻟﺒﻴﺎﻧﺎﺕ ﺗﺄﺗﻲ ﺑﺸﻜﻞ ﻣﺒﺎﺷﺮ ﺩﻭﻥ ﺟﺬﺭ
        },


        // (`id`, `notifications_number`, `tarmez`, `notifications_id`, `notifications_id`, `confidentiality_id`, `subject`, `recipient_entity_id`, `user_id`, `notifications_date`)

        "columns": [
 


            /////////////////////////////
            {data: "id"},
            {data: "page"},
            {data: "des"},
            {data: "status"},
            /////////////////////////////
            



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
        } 
         ///////////1////////////
        , {
            targets: 1,
            responsivePriority: 1,
            render: function(t, e, s, a) {

  // console.log(s)


  
                var n = s.id;
                return n;
                   
            }
        }  

        ////////////1//////////////
         
        ///////////2////////////
        , {
            targets: 2,
            responsivePriority: 1,
            render: function(t, e, s, a) {

// console.log(s)


  var n = <?php if ($_COOKIE['lang']=="ar"){echo 's.name ';}else if ($_COOKIE['lang']=="en"){echo 's.name_en ';}?>;
 if (s.permissions ==1) {
      <?php if ($_COOKIE['lang']=="ar"){?>

                      var n1= "ﻣﺪﻳﺮ";
<?php
                     }else if ($_COOKIE['lang']=="en"){?>

                     var n1= "admin";
                       <?php
                   }?>;
                }else{
                          <?php if ($_COOKIE['lang']=="ar"){?>

                      var n1= "ﻣﻮﻇﻒ";
<?php
                     }else if ($_COOKIE['lang']=="en"){?>

                    var n1= "employee";
                       <?php
                   }?>;
                     
                }

 
   
                return n1+" / "+n;
                   
            }
        }  

        ////////////2//////////////
         ///////////3////////////
        , {
            targets: 3,
            responsivePriority: 1,
            render: function(t, e, s, a) {




  
              var n = <?php if ($_COOKIE['lang']=="ar"){echo 's.page';}else if ($_COOKIE['lang']=="en"){echo 's.page_en';}?>;
                return n;

                   
            }
        }  

        ////////////3//////////////
        ///////////4////////////
        , {
            targets: 4,
            responsivePriority: 1,
            render: function(t, e, s, a) {




  
               var n = <?php if ($_COOKIE['lang']=="ar"){echo 's.des';}else if ($_COOKIE['lang']=="en"){echo 's.des_en';}?>;
                return n;
                   
            }
        }  

        ////////////4//////////////
        ///////////5////////////
        , {
            targets: 5,
            responsivePriority: 1,
            render: function(t, e, s, a) {




  var n = s.date;
                return n;
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
            text: '<i class="bx bx-trash"></i><span class="d-none d-sm-inline-block">Delete </span>',
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
            text: '<i class="bx bx-export me-1" data-i18n="Export"></i>',
            buttons: [





                {

            text: '<i class="bx bx-printer me-2" data-i18n="print" ></i> print ',
             
            action: function() {
                window.location.href = "inc/des/notifications/print.php";
            }
        }
        ,  {
                extend: "pdf",
                text: '<i class="bx bxs-file-pdf me-2"></i>Pdf',
                className: "dropdown-item",
                action: function() {
                window.location.href = "inc/des/notifications/pdf.php";
            }
            } ]
        },

      <?php
}

             ?>


         {
            text: '<i class="bx bx-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block" data-i18n="Add notifications">Add notifications</span>',
            className: "add-new btn btn-primary",
            action: function() {
                window.location.href = "?add_notifications=show"
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