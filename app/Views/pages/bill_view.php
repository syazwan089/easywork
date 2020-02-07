<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Product</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">product</a></li>
                                    <li class="active"><a href="#">View product</a></li>
                                    
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Product List</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Bill id</th>
                                            <th>Product name</th>
                                            <th>Bill description</th>
                                            <th>Bill amount</th>
                                            <th>Payer name</th>
                                            <th>Payer number</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach($content as $item): ?>
                
                                        <tr>
                                            <td><?php echo $item['bill_no'] ?></td>
                                            <td><?php echo $item['product_name'] ?></td>
                                            <td><?php echo $item['bill_description'] ?></td>
                                            <td><?php echo $item['bill_amount'] ?></td>
                                            <td><?php echo $item['payer_name'] ?></td>
                                            <td><?php echo $item['payer_phone'] ?></td>
                                            <td><?php echo $item['payment_status'] ?></td>
                             
                                            <td><a class="btn btn-primary btn-sm" href="/employee/view/<?php echo $item['id'] ?>">View</a></td>
                                            
                                        </tr>

                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
