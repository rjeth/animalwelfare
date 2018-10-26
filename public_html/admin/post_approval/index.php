<?php include("../layout/head.php"); ?>
<?php include("../layout/side.php"); ?>
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Legitimacy</a>
            </li>
            <li class="breadcrumb-item active">Post Approval</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Validation</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <th>User</th>
                            <th>Pet Name</th>
                            <th>Pet Type</th>
                            <th>Pet Details</th>
                            <th>location</th>
                            <th>Date Time</th>
                            <th></th>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        <p class="small text-center text-muted my-5">
            <em>More table examples coming soon...</em>
        </p> -->
    </div>
    <!-- /.container-fluid -->
    <!-- Sticky Footer -->
    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2018</span>
            </div>
        </div>
    </footer>
</div>
<?php include("../layout/foot.php"); ?>
<script>
    var table = $('#dataTable').DataTable({
        'order' : [],
        'ajax' : {
            url:'fetch.php',
            method:'POST'
        },
        "columnDefs":[
            {
                "targets": [6],
                "orderable": false,
            }
        ]
    });
    $(document).on('click','button[name="deact"]',function(){
        var id = $(this).attr('id');
        $.ajax({
            url:'function.php',
            method:'POST',
            data:{
                id:id
            },
            success:function(data){
                swal('Success','','success',{
                    closeOnClickOutside:false
                })
                .then((value) => {
                    table.ajax.reload();
                })
            }
        })
    });
</script>
