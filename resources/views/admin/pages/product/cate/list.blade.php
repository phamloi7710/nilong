@section('title')
Quản Lý Danh Mục Sản Phẩm
@stop
@extends('admin.general.master')
@section('content')
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/dhtmlxgrid.css">
<script src="{{url('')}}/assets/dhtmlxgrid.js" type="text/javascript"></script>
<div class="content-body">
    <section id="validation-scenario">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Validation Scenario</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard ">
                    <!-- <div id="validation"></div> -->
                    <div id="grid_here" style="width: 600px; height: 400px;"></div>
    <script type="text/javascript" charset="utf-8">
        mygrid = new dhtmlXGridObject('grid_here');
        mygrid.setHeader("Start date,End date,Text");
        mygrid.init();
        mygrid.load("./grid_data");
        var dp = new dataProcessor("./grid_data");
        dp.init(mygrid);
    </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>

@stop