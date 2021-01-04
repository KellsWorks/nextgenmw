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
    @foreach ($contents as $content)
    <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  {{$content->position}}
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>{{$content->title}}</b></h2>
                      <p class="text-muted text-sm"><b>Content: </b> Available </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span></span> Edited by: {{$content->editor}}</li>
                        <li class="small"><span></span> Last edited: {{$content->created_at->format('d/m/Y')}}</li>
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
        
    @endforeach
            
            </div>
          </div>
        </div>
        
    

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection