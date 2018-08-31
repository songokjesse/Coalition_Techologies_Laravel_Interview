<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))

                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
            </div> <!-- end .flash-message -->
          <!-- A form to submit a new  Product -->
          <form id="form" method="POST" action="/product/add">
          {{--<form>--}}

            <div class="card">
                <div class="card-header">Products </div>
                {!! csrf_field() !!}
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
                <button type="submit"  class="btn btn-primary" > Add Product  </button>
                </div>
                </div>
            </div>
         </form>
                 <!-- End of Form    -->
            <br>
            <div id="table"></div>
        </div>
        <div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript">

    $(document).ready(function(){

        $.ajax({
            type: "Get",
            url: "/ajaxproduct",
            headers: {
                "accept": "application/json; odata=verbose"
            },
            dataType: "json",
            success: function(data) {
                // var result = $.parseJSON(JSON.stringify(data));


                var string = '<table class="table table-striped table-bordered"><tr><th>Product Name</th><th>Quantity in Stock</th><th>Price Per Item</th><th>Total Amount </th><tr>';

                /* from result create a string of data and append to the div */

                $.each( data, function( key, value ) {
                        string +=  "<td> " +value['Product_name']+'</td><td> '+value['Quantity_in_Stock']+
                            '</td><td> '+ value['Price_per_item']+ "</td><td>" + (value['Quantity_in_Stock'] * value['Price_per_item'])+"</td></tr>"; });
                        string += '</table>';

                        $("#table").html(string);
                    },
            error: function(){
                alert("json not found");
            }
        });


    });

</script>
</body>
</html>