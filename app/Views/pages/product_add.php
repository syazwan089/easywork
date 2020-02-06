<div class="content">
            <div class="animated fadeIn">


                <div class="row">
                

                
               

                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">Add Product</div>
                        <div class="card-body card-block">
                            <form action="/bill/submit" method="post" class="">
                                <div class="form-group">
                                <label for="inputIsValid" class=" form-control-label">Product Name</label>
                                    <div class="input-group">
                                       
                                        <input type="text" id="pro_name" name="pro_name" placeholder="Package 1" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                <label for="inputIsValid" class=" form-control-label">Product Detail</label>
                                    <div class="input-group">
                                       
                                        <textarea rows="4" type="text" id="detail" name="detail" placeholder="Detail" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                <label for="inputIsValid" class=" form-control-label">Amount</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input type="number" id="number" name="amount" placeholder="0.00" class="form-control">
                                    </div>
                                </div>
                                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Submit</button></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div><!-- .animated -->
    </div><!-- .content -->