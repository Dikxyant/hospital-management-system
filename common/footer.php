<div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    

    <!-- BEGIN: Footer-->
    <footer id="footer" class="footer fixed-bottom">
    <div class="copyright">
      © Copyright <strong><span>Victoria Hospital</span></strong>. All Rights Reserved
    </div>
  </footer>
    <!-- END: Footer-->


      <!-- Vendor JS Files -->
  <script src="<?=roothtml.'assets/vendor/bootstrap/js/bootstrap.bundle.js'?>"></script>
  <script src="<?=roothtml.'assets/vendor/php-email-form/validate.js'?>"></script>
  <script src="<?=roothtml.'assets/vendor/quill/quill.min.js'?>"></script>
  <script src="<?=roothtml.'assets/vendor/tinymce/tinymce.min.js'?>"></script>
  <script src="<?=roothtml.'assets/vendor/simple-datatables/simple-datatables.js'?>"></script>
  <script src="<?=roothtml.'assets/vendor/chart.js/chart.min.js'?>"></script>
  <script src="<?=roothtml.'assets/vendor/apexcharts/apexcharts.min.js'?>"></script>
  <script src="<?=roothtml.'assets/vendor/echarts/echarts.min.js'?>"></script>

  <!-- Template Main JS File -->
  <script src="<?=roothtml.'assets/js/main.js'?>"></script>

    <script>
    $(document).ready(function() {
        $(document).ajaxStart(function() {
            $(".loader").show();
        });

        $(document).ajaxComplete(function() {
            $(".loader").hide();
        });

        $(document).on("click", "#btnlogout", function(e) {
            e.preventDefault();
            swal({
                    title: "Answer?",
                    text: "Are you sure Exit!",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes,Sure!",
                    closeOnConfirm: false
                },
                function() {
                    $.ajax({
                        type: "post",
                        url: "<?php echo roothtml.'index_action.php' ?>",
                        data: {
                            action: 'logout'
                        },
                        success: function(data) {
                            if (data == 1) {
                                location.href = "<?=roothtml.'index.php'?>";
                            }
                        }
                    });
                });
        });
    });
    </script>

</body>
<!-- END: Body-->

</html>