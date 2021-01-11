@extends('admin.app')


@section('content')


<div class="content-wrapper">
        <div class="row">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">Services</h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Mobile apps</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_1" data-toggle="tab">Backend development</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_1" data-toggle="tab">Web development</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_1" data-toggle="tab">IT Support</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Icon</label>
                        <input type="text" class="form-control">
                      </div>
                    <section class="content">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card card-outline card-info">
                              <div class="card-header">
                                <h3 class="card-title">
                                  Service description
                                </h3>
                                <!-- tools box -->
                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                          title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                                  <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                          title="Remove">
                                    <i class="fas fa-times"></i></button>
                                </div>
                                <!-- /. tools -->
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body pad">
                                <div class="mb-3">
                                  <textarea class="textarea" placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.col-->
                        </div>
                        <!-- ./row -->
                      </section>
                      <button class="btn btn-primary"> Save </button>
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
          </div>
          <!-- /.col -->
        </div>
    
@endsection