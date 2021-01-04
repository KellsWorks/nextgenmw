@extends('admin.app')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Homepage</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/v1/admin">Home</a></li>
            <li class="breadcrumb-item active">Homepage</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body pb-0">
        <div class="row d-flex align-items-stretch">
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                Upper home banner
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>Software & hardware technology company</b></h2>
                    <p class="text-muted text-sm"><b>Content: </b> Available </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span></span> Edited by: Adminstrator</li>
                      <li class="small"><span></span> Last edited: 2/01/2021</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <i class="fas fa-file" style="display: inline-block;
                    border-radius: 60px;
                    box-shadow: 0px 0px 2px #888;
                    padding: 0.5em 0.6em;"></i>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="#" class="btn btn-sm bg-teal">
                    <i class="fas fa-pencil-alt">
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          </div>
        </div>
      </div>
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Second top banner
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>We are here to help - Banner with content</b></h2>
                      <p class="text-muted text-sm"><b>Content: </b> Available </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span></span> Edited by: Adminstrator</li>
                        <li class="small"><span></span> Last edited: 2/01/2021</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <i class="fas fa-file" style="display: inline-block;
                      border-radius: 60px;
                      box-shadow: 0px 0px 2px #888;
                      padding: 0.5em 0.6em;"></i>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-pencil-alt">
                      </i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            
            </div>
          </div>
        </div>
        
    

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection