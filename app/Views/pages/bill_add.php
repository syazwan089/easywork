<div class="content">
            <div class="animated fadeIn">


                <div class="row">
                

                
               

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Create Bill</div>
                        <div class="card-body card-block">
                            <form action="/bill/submit" method="post" class="">

                            <label for="inputIsValid" class=" form-control-label">Choose type</label><br>

                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              From product list
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                              Custom bill
                            </label>
                            </div>


                            <div><small>if you choose from your product list please ignore second section</small></div>
                    <br>

                            <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Product</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="select" id="select" class="form-control">

                                            <?php foreach($content as $item): ?>

                                                <option value="<?php echo $item['id'] ?>"><?php echo $item['product_name'] ?></option>
                                        
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>


                                <div class="form-group">
                                <label for="inputIsValid" class=" form-control-label">Customer name</label>
                                    <div class="input-group">
                                       
                                        <input type="text" id="pro_name" name="cus_name" placeholder="Maria" class="form-control">
                                    </div>
                                </div>

                         



                                <div class="row form-group">
                                <div class="form-group col-6">
                                <label for="inputIsValid" class=" form-control-label">Customer Number</label>
                                    <div class="input-group">
                                       
                                        <input type="number" id="pro_name" name="cus_phone" placeholder="+6011225566" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group col-6">
                                <label for="inputIsValid" class=" form-control-label">Customer Email</label>
                                    <div class="input-group">
                                       
                                        <input type="email" id="pro_name" name="cus_email" placeholder="example@g.com" class="form-control">
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                <label for="inputIsValid" class=" form-control-label">Customer organization</label>
                                    <div class="input-group">
                                       
                                        <input type="text" id="pro_name" name="cus_orga" placeholder="Maria" class="form-control">
                                    </div>
                                </div>


                                <br>
                                <hr><br>
                                <label>Second section</label><br>

                                <div class="form-group">
                                <label for="inputIsValid" class=" form-control-label">Bill name / Product custom name</label>
                                    <div class="input-group">
                                       
                                        <input type="text" id="pro_name" name="bill_name" placeholder="Bill name / Product custom name" class="form-control">
                                    </div>
                                </div>





                                <div class="form-group">
                                <label for="inputIsValid" class=" form-control-label">Bill Detail</label>
                                    <div class="input-group">
                                       
                                        <textarea rows="4" type="text" id="detail" name="bill_detail" placeholder="Detail" class="form-control"></textarea>
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