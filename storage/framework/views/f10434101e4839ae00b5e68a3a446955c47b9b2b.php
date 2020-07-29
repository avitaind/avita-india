<!DOCTYPE html>
<head>
<title>AVITA Support</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
<main>
<section class="top-nav-padding support-search-section">
            <div class="support-search-wrap pb-sm-5">
                <div class="container h-100">
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                      <h3> Shop info</h3>
                                </div>
                            <div class="panel-body">
                            <div class="form-group">
                        <input type="text" class="form-control" id="search" name="search"></input> 
                   </div>
                    <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Shop ID</th>            
                                        <th>Shop Name</th>
                                        <th>Shop Address</th>
                                        <th>Priority</th>
                                   </tr>
                                 </thead>
                                 <tbody>

                                 </tbody>     
                    </table>
            </div>
        </div>
    </section>
</main>

<script type="text/javascript">
    $('#search').on('keyup', function(){
        $value=$(this).val();
        $.ajax({
            type: 'get',
            url: '<?php echo e(URL::to('search')); ?>',
            data: { 'search': $value},
            success:function(data){

                $('tbody').html(data);
            }

        })


    })

</script>
</body>
</html>
