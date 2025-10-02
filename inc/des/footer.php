
<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0" align="">
      
       <a href="https://www.facebook.com/basharessam11" target="_blank" class="footer-link fw-bolder"> © <script>
      document.write(new Date().getFullYear())
      </script>  ❤️ made with  by  bashar essam </a>
    </div>

  </div>
</footer>
<!-- / Footer -->

          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    
    
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->

  
<!-- aaaaa -->






  
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    
    
    <script src="vendor/libs/popper/popper.js"></script>
    <script src="vendor/js/bootstrap.js"></script>
    <script src="vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/libs/hammer/hammer.js"></script>
    <script src="vendor/libs/i18n/i18n.js"></script>
    <script src="vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="vendor/js/menu.js"></script>
    
    <!-- endbuild -->
  
    <!-- Vendors JS -->
    <script src="vendor/libs/apex-charts/apexcharts.js"></script>
  
   
      <!-- Vendors JS -->
  <script src="vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <script src="vendor/libs/select2/select2.js"></script>
  
  <script src="vendor/libs/cleavejs/cleave.js"></script>
  <script src="vendor/libs/cleavejs/cleave-phone.js"></script>



 
<script src="vendor/libs/bootstrap-select/bootstrap-select.js"></script> 
 
<script src="vendor/libs/bloodhound/bloodhound.js"></script>

<script src="vendor/libs/quill/katex.js"></script>
<script src="vendor/libs/quill/quill.js"></script>
 
<script src="vendor/libs/dropzone/dropzone.js"></script>
<script src="vendor/libs/jquery-repeater/jquery-repeater.js"></script>
<script src="vendor/libs/flatpickr/flatpickr.js"></script>
<script src="vendor/libs/tagify/tagify.js"></script>


<script src="vendor/libs/moment/moment.js"></script>


<script src="vendor/libs/%40form-validation/popular.js"></script>
<script src="vendor/libs/%40form-validation/bootstrap5.js"></script>
<script src="vendor/libs/%40form-validation/auto-focus.js"></script>




    <!-- Main JS -->
    <script src="js/main.js"></script>
 <script src="js/form-layouts.js"></script>
  <!-- Page JS -->
  <script src="js/forms-file-upload.js"></script>



  <!-- Page JS -->
 
    
  
   
  
  <!-- endbuild -->

 <script>
  //modul

  $('.id').click(function(){
    var a=$(this).attr('besho');

    $('.zz').val(a)
  })
    $('.id').click(function(){
    var a=$(this).attr('besho');
    var n=$(this).attr('na');
// console.log(n)
    $('.zz').val(a)
    $("#name").html('هل انت متأكد من حذف ' + n)
  })
    
  //alert
//         $("#success-alert").fadeTo(4000, 500).slideUp(500, function(){
//     $("#success-alert").slideUp(500);
// });
//           $("#success-alert1").fadeTo(4000, 500).slideUp(500, function(){
//     $("#success-alert1").slideUp(500);
// });
//             $("#success-alert2").fadeTo(4000, 500).slideUp(500, function(){
//     $("#success-alert2").slideUp(500);
// });
//             $("#success-alert3").fadeTo(4000, 500).slideUp(500, function(){
//     $("#success-alert3").slideUp(500);
// });
            
</script>
   <script type="text/javascript">
function readURL(input) {
    
    $(".last").html("")
    for (let i = input.files.length - 1; i >= 0; i--) {
        if (input.files && input.files[i]) {
            let file = input.files[i];  // الحصول على الملف الحالي
            let reader = new FileReader();

            reader.onload = function (e) {
                let fileType = file.type;   // الحصول على نوع الملف
                
                if (fileType.startsWith("image/")) {
                    // إذا كان الملف صورة، عرض معاينة الصورة
                    $(".last").append('<div class="col-12 col-md-2"><img id="blah" style="width: 100%;height: 100%;padding: 5px;" src="'+e.target.result+'" alt="صورتك" /></div>');
                } else if (fileType === "application/pdf") {
                    // إذا كان الملف PDF، عرض أيقونة PDF
                    $(".last").append('<div class="col-12 col-md-2"><img id="blah" style="width: 100%;height: 100%;padding: 5px;" src="img/icons/misc/pdf.png" alt="ملف PDF الخاص بك" /></div>');
                }
            };

            reader.readAsDataURL(file);
        }
    }
}





////////////////////////////////////////////////////////////////////////////////////////////////////
"use strict";
$(function() {
  var e = $(".selectpicker"),
    t = $(".select2"),
    n = $(".select2-icons");

  function i(e) {
    return e.id ? "<i class='" + $(e.element).data("icon") + " me-2'></i>" + e.text : e.text
  }
  e.length && e.selectpicker(), t.length && t.each(function() {
    var e = $(this);
    e.wrap('<div class="position-relative"></div>').select2({
      placeholder: "Select value",
      dropdownParent: e.parent()
    })
  }), n.length && n.wrap('<div class="position-relative"></div>').select2({
    dropdownParent: n.parent(),
    templateResult: i,
    templateSelection: i,
    escapeMarkup: function(e) {
      return e
    }
  })
});

////////////////////////////////////////////////////////////////////////////////////////////////////


        $(document).ready(function() {
  
       $(".select1").select2();
       $(".select3").select2();
       $(".tox-promotion").remove();


     });



////////////////////////////////////////////////////////////////////////////////////////////////////
     // Automatic Change of Characters to English Characters When Typing in a Latin Only Input
    $(".lang_en").keydown(function (e) {
        var letter = e.originalEvent.code.replace("Key", "");
        
        var position = this.selectionStart;
        
        if(letter.length == 1) {
    
            letter = ($(this).val().length == 0 || $(this).val().substr(-1) == " ") ? letter : letter.toLowerCase();
            
            $(this).val( $(this).val() + letter );
    
            if($(this).data("capital") == "force")
                $(this).val( $(this).val().toUpperCase() );

            // this.selectionEnd = position;
            this.selectionEnd = $(this).val().length;

            return false;
        }
    });

</script>
    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
tinymce.init({
    selector: '#textarea',
    height: 1240,
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    directionality: 'rtl', // اضف هذا السطر لتغيير الاتجاه
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    content_style: 
    `
    .mce-content-body::before {
            content: 'هذا رأس الصفحة';
             
            float: left;
            font-size: 24px;
            font-weight: bold;
            
        }
        body {
            
            padding: 25px 10px 25px 2px;; /* إزالة الهوامش */
        }
       @media print {
  @page {
    margin: 0; /* إزالة الهوامش التي قد تحتوي على الرؤوس والتذييلات */
  }
  header, footer {
    display: none; /* إخفاء عناصر الرؤوس والتذييلات */
  }
}

    ` 
     
});


  // tinymce.init({
  //   selector: '#textarea1',
  //   plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
  //   toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
  //   tinycomments_mode: 'embedded',
  //   tinycomments_author: 'Author name',
  //    directionality: 'ltr',  // اضف هذا السطر لتغيير الاتجاه
  //   mergetags_list: [
  //     { value: 'First.Name', title: 'First Name' },
  //     { value: 'Email', title: 'Email' },
  //   ],
  //   ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  // });
</script>

 </body>


<!-- Mirrored from themeselection.com/demo/sneat-bootstrap-html-admin-template/html/vertical-menu-template/dashboards-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Feb 2022 00:21:16 GMT -->
</html>
