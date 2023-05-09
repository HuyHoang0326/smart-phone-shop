@php
    $objUser = Auth::user();
@endphp
@extends('templates.layout')
@section('title', '123456')
@section('css')

    <style>
        body {
            /*-webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;*/
            user-select: none;
        }

        .toolbar-box form .btn {
            /*margin-top: -3px!important;*/
        }

        .select2-container {
            margin-top: 0;
        }

        .select2-container--default .select2-selection--multiple {
            border-radius: 0;
        }

        .select2-container .select2-selection--multiple {
            min-height: 30px;
        }

        .select2-container .select2-search--inline .select2-search__field {
            margin-top: 3px;
        }

        .table > tbody > tr.success > td {
            background-color: #009688;
            color: white !important;
        }

        .table > tbody > tr.success > td span {
            color: white !important;
        }

        .table > tbody > tr.success > td span.button__csentity {
            color: #333 !important;
        }

        /*.table>tbody>tr.success>td i{*/
        /*    color: white !important;*/
        /*}*/
        .text-silver {
            color: #f4f4f4;
        }

        .btn-silver {
            background-color: #f4f4f4;
            color: #333;
        }

        .select2-container--default .select2-results__group {
            background-color: #eeeeee;
        }
    </style>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        {{--        @include('templates.header-action')--}}
        <div class="clearfix"></div>
        <div style="border: 1px solid #ccc;margin-top: 10px;padding: 5px;">
            <form action="" method="get">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="search_ten_nguoi_dung" class="form-control" placeholder="Tên người dùng"
                                   value="">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-xs-12" style="text-align:center;">
                        <div class="form-group">
                            <button type="submit" name="btnSearch" class="btn btn-primary btn-sm "><i
                                    class="fa fa-search" style="color:white;"></i> Search
                            </button>
                            <a href="{{ url('/user') }}" class="btn btn-default btn-sm "><i class="fa fa-remove"></i>
                                Clear </a>
                            <a href="{{ route('route_Backend_'.$page.'_Add') }}" class="btn btn-info btn-sm"><i class="fa fa-user-plus" style="color:white;"></i>
                                Add New {{ $page }}</a>
                        </div>
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content appTuyenSinh">
        <div id="msg-box">
            <?php //Hiển thị thông báo thành công?>
            @if ( Session::has('success') )
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong>{{ Session::get('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            @endif
            <?php //Hiển thị thông báo lỗi?>
            @if ( Session::has('error') )
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <strong>{{ Session::get('error') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            @endif
        </div>
        {{-- @if(count($list[0]))
            <p class="alert alert-warning">
                Không có dữ liệu phù hợp
            </p>
        @endif --}}
        <div class="box-body table-responsive no-padding">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <span class="pull-right">Tổng số bản ghi tìm thấy: <span
                        style="font-size: 15px;font-weight: bold;">8</span></span>
                <div class="clearfix"></div>
                <div class="double-scroll">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 50px" class="text-center">#ID</th>
                            @foreach ($list['fields'] as $item)
                                @if($item != 'id')
                                    <th class="text-center">{{ $item }}</th>
                                @endif
                            @endforeach 
                        </tr>
                        @foreach ($list['item'] as $item )
                            <tr>
                                @foreach ($list['fields'] as $fields)
                                    {{-- all page -------------------------------------------------------------------------}}
                                    {{-- only field name all page setup route --}}
                                    @if($fields == 'name')
                                        <td class="text-center"><a style="color:#333333;font-weight: bold;" href="{{ route('route_Backend_'.$page.'_Detail',['id'=>$item->id]) }}" style="white-space:unset;text-align: justify;"> {{ $item->name }} <i class="fa fa-edit"></i></a></td>
                                    @endif
                                    {{-- category page -------------------------------------------------------------------------}}
                                    {{-- not change quantity in category and id all page --}}
                                    @if($page == 'Category' && $fields == 'quantity' && $item->quantity != 0)
                                        <td class="text-center"><a style="color:#333333;font-weight: bold;" href="{{ route('route_Backend_Category_Product_Category_List',['id'=>$item->id]) }}" style="white-space:unset;text-align: justify;"> {{ $item->quantity }} <i class="fa fa-edit"></i></a></td>
                                    {{-- product page -------------------------------------------------------------------------}}
                                    {{-- only category in product page show category name --}}
                                    @elseif($fields == 'category' && $page == 'Product')
                                        @foreach($category as $categoryItem)
                                            @if( $item->category == $categoryItem->id)
                                                <td class="text-center">{{ $categoryItem->name }}</td>
                                            @endif
                                        @endforeach
                                    {{-- order page -------------------------------------------------------------------------}}
                                    {{-- setup order at time --}}
                                    @elseif($page == 'Order_Origin' && $fields == 'id')
                                        <td class="text-center"><a style="color:#333333;font-weight: bold;" href="{{ route('route_Backend_Order_Origin_Order_At_Time',['id'=>$item->id]) }}" style="white-space:unset;text-align: justify;"> {{ $item->id }} <i class="fa fa-edit"></i></a></td>
                                    @elseif($page == 'Order_Origin' && $fields == 'status')
                                        <td class="text-center"><a style="color:#333333;font-weight: bold;" href="{{ route('route_Backend_Order_Origin_Detail',['id'=>$item->id]) }}" style="white-space:unset;text-align: justify;"> {{ $item->status }} <i class="fa fa-edit"></i></a></td>
                                    {{-- sale page -------------------------------------------------------------------------}}
                                     @elseif($page == 'Sale' && $fields == 'id')
                                        <td class="text-center"><a style="color:#333333;font-weight: bold;" href={{ route('route_Backend_'.$page.'_Detail',['id'=>$item->id]) }} style="white-space:unset;text-align: justify;"> {{ $item->id }} <i class="fa fa-edit"></i></a></td>
                                    {{-- all page out if -------------------------------------------------------------------------}}
                                    {{-- all field not name of all page not setup route --}}
                                   @elseif($fields == 'image')
                                        <td><img src="{{ asset('/storage/product/'.$item->image) }}" width="50px" alt=""></td>
                                    @elseif($fields != 'name')
                                        <td class="text-center">{{ $item->$fields }}</td>
                                    @endif
                                @endforeach 
                            </tr>
                        @endforeach
                    </table>
                </div>
            </form>
        </div>
        <br>
        <div class="text-center">
            //phân trang
        </div>
        <index-cs ref="index_cs"></index-cs>
    </section>

@endsection
