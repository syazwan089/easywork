 <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">UI Elements</a></li>
                                    <li class="active">Cards</li>
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


               

               

                    <div class="col-md-10">
                        <aside class="profile-nav alt">
                            <section class="card">
                                <div class="card-header user-header alt bg-dark">
                                    <div class="media">
                                       
                                        <div class="media-body">
                                            <h2 class="text-light display-6"><?php echo $content['full_name'] ?></h2>
                                            <p><?php echo $content['name'] ?></p>
                                        </div>
                                    </div>
                                </div>


                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-envelope-o"></i> Employee ID <p class="pull-right"><?php echo $content['emp_id'] ?></p></a>
                                    </li>
                                   
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-bell-o"></i> City <p class="pull-right"><?php echo $content['city'] ?></p></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-comments-o"></i> Created <p class="pull-right"><?php echo $content['created_at'] ?></p></a>
                                    </li>

                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-tasks"></i> Deactivate <button class="badge badge-danger pull-right">Deactivate</button></a>
                                    </li>
                                </ul>

                            </section>
                        </aside>
                    </div>

               


                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->