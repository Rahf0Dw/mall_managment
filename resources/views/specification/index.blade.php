@extends('layouts.app')
@section('title', 'Specification')
@section('content')


    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Specification</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Specifications
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Data list view starts -->
        <section id="data-thumb-view" class="data-thumb-view-header">
            <div class="action-btns d-none">
                <div class="btn-dropdown mr-1 mb-1">

                </div>
            </div>
            <!-- dataTable starts -->
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="top">
                        <div class="actions action-btns">
                            <div class="btn-group dropdown actions-dropodown">

                            </div>
                            <div class="dt-buttons btn-group">
                                <a class="btn btn-outline-primary" href="{{route('specification.create')}}">
                                    <span><i class="feather icon-plus"></i> Add New</span></a>
                            </div>
                        </div>
                        <div class="action-filters">
                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>
                                    <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="4">4</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                    </select>
                                </label>
                            </div>
                            <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                <label><input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label>
                            </div></div></div><div class="clear"></div>
                    <table class="table data-thumb-view dataTable no-footer dt-checkboxes-select" id="DataTables_Table_0" role="grid">
                        <thead>
                        <tr>
                            <th>product</th>
                            <th>key</th>
                            <th>value</th>
                        </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($models as $one){ ?>
                                <tr>
                                    <td>{{$one->product->ar_name}}</td>
                                    <td>{{$one->key}}</td>
                                    <td>{{$one->value}}</td>

                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                    {{$models->links()}}

                       </div>
            <!-- dataTable ends -->
        </section>
        <!-- Data list view end -->

    </div>


@endsection
