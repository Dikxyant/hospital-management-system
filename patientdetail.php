<?php 
    include('config.php');
    include(root.'common/header.php');
?>

<!-- BEGIN: Content-->
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Patient Detail</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="patient.php">Patient</a></li>
          <li class="breadcrumb-item active">Detail</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">
                <div id="show_detail">
                </div>
            </div>

            </div>
        </div>

    </section>
</main>

<?php include(root.'common/footer.php'); ?>

<script>
$(document).ready(function() {
    function load_pag() {
        var search = $("[name='ser']").val();
        $.ajax({
            type: "post",
            url: "<?php echo roothtml.'patient_action.php' ?>",
            data: {
                action: 'showdetail',
            },
            success: function(data) {
                $("#show_detail").html(data);
            }
        });
    }

    load_pag();
});
</script>