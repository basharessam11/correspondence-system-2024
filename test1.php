
<div class="modal fade" id="employeeDocumentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="employeeDocumentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <form  dir="<?php echo $SITE_DIR; ?>" method="post" id="insert_form">
            <input type="hidden" name="old_id">
            <input type="hidden" name="insert" value=1>
            <div class="modal-header">
                <h5 class="modal-title" id="employeeDocumentModalLabel"><?php echo lang('add').": ".lang('manage_documents'); ?></h5>
                <button type="button" class="btn-close ms-0 me-dir-auto" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-lg-6 mb-3">
                        <div class="form-group">
                            <label><?php echo lang('entry_date'); ?></label>
                            <input type="date" class="form-control mb-2" name="entry_date" value="<?php echo date("Y-m-d"); ?>" required>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="form-group">
                            <label><?php echo lang('document_type'); ?></label>
                            <div class="w-100">
                                <select name="document_type_id" class="selectpicker form-control" data-live-search="true" title="<?php echo lang('document_type'); ?>" required>
                                <?php
                                    $latin = ($SITE_LANG == "en") ? "_latin" : "";
                                    $docs = $connect->query("SELECT * FROM employee_documents_types")->fetchAll();
                                    foreach($docs as $row) 
                                        echo '<option value="'.$row['ID'].'">'.$row['name'.$latin].'</option>';
                                ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 mb-3">
                        <div class="form-group">
                            <label><?php echo lang('start_date'); ?></label>
                            <input type="date" class="form-control mb-2" name="start_date" value="<?php echo date("Y-m-d"); ?>" required>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="form-group">
                            <label><?php echo lang('expiry_date'); ?></label>
                            <input type="date" class="form-control mb-2" name="expiry_date" value="<?php echo date("Y-m-d"); ?>" required>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3">
                        <div class="form-group">
                            <label><?php echo lang('details'); ?></label>
                            <textarea type="text" class="form-control tinymce mb-2" name="details" rows=10></textarea>
                        </div>
                    </div>
                    
                </div>
                <div class="w-100 error"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo lang('close'); ?></button>
            <div class="mx-auto">
                  <button type="submit" name="print_detailed" formtarget="_blank" formmethod="post" formaction="?print_single=1" class="btn btn-warning mx-auto print"><?php echo lang('print'); ?></button>
            </div>
                <button type="submit" name="submit" class="btn btn-info ms-auto submit_button"><?php echo lang('save'); ?></button>
            </div>
        </form>
        </div>
    </div>
</div>

<script src="https://cdn.tiny.cloud/1/sre10ewrt23b98iw5f2vjruqeziwnhzasjwnim0j3phecotx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
const tinymce_settings = {
    selector: '.tinymce',
    plugins: 'fullscreen preview importcss anchor autolink charmap codesample emoticons image link lists media searchreplace table directionality',
    toolbar: 'undo redo | code fullscreen | blocks fontsize| align lineheight | bold italic underline strikethrough | link image media table | ltr rtl | numlist bullist indent outdent | emoticons charmap | removeformat',
    relative_urls: true,
    convert_urls: false,
   setup: function(editor) {
      editor.on('init', function(e) {
         setTimeout(() => {
            tinymce.activeEditor.execCommand('mceDirectionRTL');
         }, 1000);
      });
   },
    height:500
};
tinymce.init(tinymce_settings);
</script>

<script>

$(document).ready(function(){

   $("#employeeDocumentModal [name=time_from], #employeeDocumentModal [name=time_to]").on("change input", function() {
      const from = $("#employeeDocumentModal [name=time_from]").val();
      const to = $("#employeeDocumentModal [name=time_to]").val();
      if(from != '' && to != '') {
         if(to <= from) {
            $("#employeeDocumentModal [name=time_to]").addClass('border-danger');
            $("#employeeDocumentModal [type=submit]").prop("disabled", true);
         } else {
            var duration = Math.abs(new Date('2011/10/09 '+to) - new Date('2011/10/09 '+from)) / 60000;
            $("#employeeDocumentModal [name=duration]").val(duration);
            $("#employeeDocumentModal [name=time_to]").removeClass('border-danger');
            $("#employeeDocumentModal [type=submit]").prop("disabled", false);
         }
      } else {
         $("#employeeDocumentModal [name=duration]").val('');
      }
   });

   
   $("#employeeDocumentModal [name=employee_id]").on("change", function() {
      $("#employeeDocumentModal [name=job]").val($("#employeeDocumentModal [name=employee_id] option[value='"+$(this).val()+"']").data('job'));
   });

   $(".add-employee-document").on("click", function () {
        if(!isNaN($(this).data("employee-id")) && $(this).data("employee-id") > 0) {
            setTimeout(() => {
                $('#employeeDocumentModal [name=employee_id]').val($(this).data("employee-id"));
                var job = $('#employeeDocumentModal [name=employee_id] option[value='+$(this).data("employee-id")+']').data('job');
                $('#employeeDocumentModal [name=job]').val(job);
              $('#employeeDocumentModal [name=employee_id]').prop('disabled', true);
                $('#employeeDocumentModal .selectpicker').selectpicker('refresh');
            }, 100);
        } else {
          $('#employeeDocumentModal [name=employee_id]').prop('disabled', false);
        }
      $("#employeeDocumentModalLabel").text("<?php echo lang('add').": ".lang('manage_documents'); ?>");
      $("#employeeDocumentModal button.submit_button").text("<?php echo lang('add'); ?>").removeAttr("disabled");
      $("#employeeDocumentModal form").trigger("reset");
      $("#employeeDocumentModal form").attr("id", "insert_form");
      $('[name=update]').attr("name", "insert");
      $('.error').html('');
      $('.submit_button').removeAttr('disabled');
      $('#employeeDocumentModal .selectpicker').selectpicker('refresh');
        $("#employeeDocumentModal").modal("show");
   })

   $('#employeeDocumentModal #insert_form, #employeeDocumentModal #update_form').on('submit', function(event){

      if($(event.originalEvent.submitter).hasClass("print"))
         return true;

      event.preventDefault();

        var employee_id_disabled = $('#employeeDocumentModal [name=employee_id]').prop('disabled');
        $('#employeeDocumentModal [name=employee_id]').prop('disabled', false);

      var form_id = $(this).attr("id");
      var form_data = "table=<?php echo 'documents'; ?>&"+$(this).serialize();

        $('#employeeDocumentModal [name=employee_id]').prop('disabled', employee_id_disabled);

      $('.error').html('');
      if(form_id == 'insert_form')
      $.ajax({

         url:"<?php echo $url_prefix; ?>api/employees-documents",

         method:"POST",

         data:form_data,

         dataType:"json",

         beforeSend:function()
         {

            $('.submit_button').attr('disabled', 'disabled');

            $("#employeeDocumentModal .error").html("");
         },

         success:function(data)
         {
            
            if(data.error != undefined) {
               $("#employeeDocumentModal .error").html("<div class='alert alert-danger'>"+data.error+"</div>");
               $('.submit_button').attr('disabled', false);

            } else if(data.success) {
               $("#employeeDocumentModal [name=id]").val(data.id);
               $('.error').html('<div class="alert alert-success"><?php echo lang('data_added'); ?></div>');
               $("#employeeDocumentModal").modal("hide");
                    $("#loadRows").click();
            }
         }
      })
      else if (form_id == 'update_form')
      $.ajax({

         url:"<?php echo $url_prefix; ?>api/employees-documents",

         method:"POST",

         data:form_data,

         dataType:"json",

         beforeSend:function()
         {

            $('.submit_button').attr('disabled', 'disabled');

            $("#employeeDocumentModal .error").html("");
         },

         success:function(data)
         {

            $('.submit_button').attr('disabled', false);
            
            if(data.error != undefined) {
               $("#employeeDocumentModal .error").html("<div class='alert alert-danger'>"+data.error+"</div>");

            } else if(data.success) {
               $("#employeeDocumentModal [name=id]").val(data.id);
               $('.error').html('<div class="alert alert-success"><?php echo lang('data_updated'); ?></div>');
               $("#employeeDocumentModal").modal("hide");

                    $("#loadRows").click();
            }

         }
      })
   });
});
</script>