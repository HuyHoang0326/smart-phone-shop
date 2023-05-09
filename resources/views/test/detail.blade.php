@extends('templates.layout')
@section('title', $_title)
@section('content')
    <!-- Main content -->
    <section class="content appTuyenSinh">
        <link rel="stylesheet" href="{{ asset('default/bower_components/select2/dist/css/select2.min.css')}} ">
        <style>
            .select2-container--default .select2-selection--single, .select2-selection .select2-selection--single {
                padding: 3px 0px;
                height: 30px;
            }
            .select2-container {
                margin-top: -5px;
            }

            option {
                white-space: nowrap;
            }

            .select2-container--default .select2-selection--single {
                background-color: #fff;
                border: 1px solid #aaa;
                border-radius: 0px;
            }

            .select2-container--default .select2-selection--multiple .select2-selection__choice {
                color: #216992;
            }
            .select2-container--default .select2-selection--multiple{
                margin-top:10px;
                border-radius: 0;
            }
            .select2-container--default .select2-results__group{
                background-color: #eeeeee;
            }
        </style>

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

    <!-- Phần nội dung riêng của action  -->
        <form class="form-horizontal " action="{{ route('route_Backend_'.$page.'_Update',['id'=>request()->route('id')]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        @foreach ($fields as $item)
                            <div class="form-group">
                                <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label"> {{ $item }} <span class="text-danger">(*)</span></label>
                                <div class="col-md-9 col-sm-8">
                                    {{-- only field category product show name category --}}
                                    @if($page == 'Product' && $item == 'category')
                                        <select name="category" id="category">
                                            @foreach ($category as $categoryItem){
                                                <option 
                                                value="{{ $categoryItem->id }}" 
                                                @if($categoryItem->id == $objItem->category)
                                                    {{ 'selected' }}
                                                @endif
                                                >
                                                    {{ $categoryItem->name }}
                                                </option>
                                            }
                                            @endforeach
                                        </select>
                                    @elseif($page == 'Product' && $item == 'image')
                                        <input type="file" name="image" id="image" value='C:\\fakepath\\{{ $objItem->image }}'>
                                        <br>
                                        <img src="{{ asset('img/product/'.$objItem->image) }}" alt="" width="120px">
                                    {{-- Order_Origin page -----------------------------------------------}}
                                    {{-- @elseif($page == 'Order_Origin' && $item != 'status')
                                        <input type="text" value="{{ $objItem->$item }}" disabled>  --}}
                                    @else
                                        {{-- all field of all page out if --}}
                                        <input type= @if($item == 'email' )
                                                        {{ 'email' }}
                                                @elseif($item == 'password')
                                                    {{ 'password' }}
                                                @else
                                                    {{ 'text' }}
                                                @endif
                                            name="{{ $item }}" 
                                            id="{{ $item }}" 
                                            class="form-control" 
                                            value="{{ $objItem->$item }}"
                                            @if($page == 'Category' && $item == 'quantity' || $item == 'id'||$page == 'Order_Origin' && $item != 'status') 
                                                {{ 'disabled' }}
                                            @endif
                                        >
                                    
                                    @endif
                                    <span id="mes_sdt"></span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary"> Save</button>
                <a href="{{ route('route_BackEnd_productList') }}" class="btn btn-default">Cancel</a>
            </div>
            <!-- /.box-footer -->
        </form>

    </section>
@endsection
@section('script')
    <script src="{{ asset('default/plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('default/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
@endsection

