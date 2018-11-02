@extends('template.main')
@section('content')
          <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{$title}}</h3>
        </div>
        <div class="box-body">
          <!-- @if(!empty($link)) -->
            <a href="" type="button" class="btn btn-success" style="margin-bottom: 10px">
              <i class="fa fa-plus">Tambah</i></a>
          <!-- @endif -->

          <!-- @if(last(request()->segments())=='cuti')
          <div class="panel">
            <div class="panel-body">
                <div class="col-md-3">
                      <input type="text" class="form-control date-filter">
                  </div>
                  <div class="col-md-2">
                    <button class=" btn bg-maroon btn-filter">Filter</button>
                  </div>
            </div>
          </div>
          @endif -->
          {!! $dataTable->table() !!}
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

@endsection