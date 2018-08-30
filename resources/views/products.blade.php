@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
          <!-- A form to submit a new  Product -->
          <form id="form">
            <div class="card">
                <div class="card-header">Products </div>
                @csrf
                <div class="card-body">
                
                    <div class="form-group">
                    <label> Product Name</label>
                    <input type="text" class="form-control"name="Product_name" placeholder="Product Name" id="Product_name" required>

                    </div>
                    <div class="form-group">
                    <label> Quantity in Stock </label>
                    <input type="number" class="form-control" name="Quantity_in_Stock" placeholder="Product Name" id="Product_name" required>

                    </div>
                    <div class="form-group">
                    <label> Price Per Item </label>
                    <input type="text" class="form-control" name="Price_per_item" placeholder="Product Name" id="Product_name" required>
                    </div>
                </div>
                <div class="card-footer">
                <div align="right">
                <button id="submit" class="btn btn-primary" > Add Product  </button>
                </div>
                </div>
            </div>
         </form>
                 <!-- End of Form    -->
        </div>
    </div>
</div>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

    $("#submit").click(function(e){

        alert("submiy");
        //
        // e.preventDefault();
        //
        //
        //
        // var name = $("input[name=Product_name]").val();
        //
        // var quantity = $("input[name=Quantity_in_Stock]").val();
        //
        // var price = $("input[name=Price_per_item]").val();
        //
        //
        //
        // $.ajax({
        //
        //     type:'POST',
        //
        //     url:'/product/add',
        //
        //     data:{name:Product_name, quantity:Quantity_in_Stock, price:Price_per_item},
        //
        //     success:function(data){
        //
        //         alert(data.success);
        //
        //     }
        //
        // });



    });
</script>
@endsection