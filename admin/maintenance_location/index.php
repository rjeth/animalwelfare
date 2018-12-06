<?php include("../layout/head.php"); ?>
<?php include("../layout/side.php"); ?>
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Location</div>
            <div class="card-body">
                <button type="button" class="btn btn-success" id="add" style="margin-bottom:20px" data-toggle="modal"
                    data-target="#exampleModal">Add Location</button>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <th>Location</th>
                            <th>Date Added</th>
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
    <form method="POST" id="vform" onsubmit="return Validate()">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Location</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="loc" id="loc" class='form-control' placeholder="Location" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <input type="hidden" name="action" id="action">
                        <input type="hidden" name="id" id="id">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php include("../layout/foot.php"); ?>
    <script>
        var table = $('#dataTable').DataTable({
            'order': [],
            'ajax': {
                url: 'fetch.php',
                method: 'POST'
            },
            'columnDefs': [{
                'targets': 2,
                'orderable': false
            }]
        })
        function Validate(){
            $.ajax({
                url:'function.php',
                method:'POST',
                data:$('#vform').serialize(),
                success:function(data){
                    swal(data,'','success',{
                        closeOnClickOutside:false
                    })
                    .then((value) => {
                        $('#exampleModal').modal('hide');
                        table.ajax.reload();
                    })
                }
            })
            return false;
        }
        $('#add').click(function(){
            $('#action').val('Add');
            $('#loc').val('');
        });
        $(document).on('click','button[name="edit"]',function(){
            $('#action').val('Edit');
            var id = $(this).attr('id');
            $.ajax({
                url:'fetch_single.php',
                method:'POST',
                data:{
                    id:id
                },
                dataType:'json',
                success:function(data){
                    $('#id').val(id);
                    $('label').addClass("active");
                    $('#exampleModal').modal('show');
                    $('#loc').val(data.loc_name);
                }
            })
        });
        $(document).on('click','button[name="delete"]',function(){
            $('#action').val('Delete');
            var id = $(this).attr('id');
            swal('Are you sure you want to delete this?','','warning',{
                buttons:true,
                dangerMode:true
            })
            .then((value) => {
                if(value){
                    $.ajax({
                        url:'function.php',
                        method:'POST',
                        data:{
                            id:id,
                            action:'Delete'
                        },
                        success:function(data){
                            table.ajax.reload();
                        }
                    })
                }
            })
        });
    </script>
