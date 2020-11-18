@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <input type="text" name="search" id="search" class="form-control" placeholder="Nach Profilen suchen"/>
        <h1><span id="gesamtprofile"></span> Ergebnisse</h1>
       <div class="col-md-5">
           <li></li>
       </div>
    </div>
</div>
@endsection
<script>
    //search function

$(document).ready(function(){
    fetch_customer_data();
    function fetch_customer_data(query = ''){
        $.ajax({
            url:"{{ route('search.action') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data){
                $('li').html(data.table_data);
                $('#gesamtprofile').text(data.total_data);
            }
        })
    }

    $(document).on('keyup', '#search', function(){
        var query = $(this).val();
        getch_customer_data(query);
    })
})

</script>