
@extends('admin.general.master')
@section('content')
<div class="admin-dashone-data-table-area mg-b-40">
    <div class="container">
        <div class="row">
        	<div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="breadcome-heading">
                        <h2>Quản Lý Hình Ảnh</h2>
                    </div>
                    <ul class="breadcome-menu">
                        <li><a href="{{route('getIndexAdmin')}}">Trang Chủ</a> <span class="bread-slash">/</span>
                        </li>
                        <li><span class="bread-blod">Quản Lý Hình Ảnh</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="admin-dashone-data-table-area mg-b-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            	<iframe width="100%" height="800px;" frameborder="0" src="{{url('')}}/admin/uploads?type=image"></iframe>
            </div>
        </div>
    </div>
</div>
@stop