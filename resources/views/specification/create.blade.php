@extends('layouts.app')
<!-- END: Head-->
@section('title', 'Create Specification')

@section('content')


    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Create Specification</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('product.index')}}">Specifications</a>
                            </li>
                            <li class="breadcrumb-item active"><a href="#">Form</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-body">

        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" method="post" action="{{route('specification.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <label>Product</label>
                                                <div class="form-label-group">

                                                    <select class="form-control" name="product_id">
                                                        <option value="">Select...</option>
                                                        <?php foreach ($products as $one){ ?>
                                                            <option value="<?= $one->id ?>"><?= $one->ar_name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <label for="first-name-column">Product</label>
                                                    <div class="danger">@error('product_id'){{$message}}@enderror</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label>Key</label>
                                                <div class="form-label-group">
                                                    <input type="text" id="key-column" class="form-control" placeholder="Key" name="key">
                                                    <label for="first-name-column">Key</label>
                                                    <div class="danger">@error('key'){{$message}}@enderror</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label>Value</label>
                                                <div class="form-label-group">
                                                    <input type="text" id="value-column" class="form-control" placeholder="Value" name="value">
                                                    <label for="first-name-column">Value</label>
                                                    <div class="danger">@error('value'){{$message}}@enderror</div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic Floating Label Form section end -->

    </div>

    @endsection
