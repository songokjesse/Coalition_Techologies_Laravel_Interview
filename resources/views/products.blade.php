@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Products </div>

                <div class="card-body">
                <!-- A form to submit a new  Product -->
                <form id="productForm">
                <div class="form-group">
                <label> Product Name</label>
                </div>
                <div class="form-group">
                <label> Quantity in Stock </label>
                </div>
                <div class="form-group">
                <label> Price Per Item </label>

                </div>
                <div class="form-group">
                </div>

                </form>
                 <!-- End of Form    -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection