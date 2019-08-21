@extends('Member.layout.main')
@section('content')

<script src="/js/jquery.min.js"></script>

	<h1>Available Restaurant</h1>
	<hr>
	  <form id="sidebar-search">
            <div class="input-group">
              <input type="text" id="search" name="search" placeholder="Search...">
            </div><br>
  </form>
	<table border="1" class="table table-striped table-bordered">
		<thead class="text-center">
			<td><b>Name</b></td>
			<td><b>Contact</b></td>
			<td><b>Address</b></td>
			<td><b>Action</b></td>
		</thead>
		<tbody>
		</tbody>
	  <!-- @foreach($res as $value)
		<tr class="text-center">
			<td>{{$value['name']}}</td>
			<td>{{$value['contact']}}</td>
			<td>{{$value['address']}}</td>
			<td>
				<a href="/restaurant/{{$value['id']}}">Details</a> 
				
			</td>
		</tr>
		@endforeach -->
<script>
    $(document).ready(function(){
     fetch_customer_data();

     function fetch_customer_data(query = '')
     {
      $.ajax({
       url:"{{ route('member.searchProduct') }}",
       method:'GET',
       data:{query:query},
       dataType:'json',
       success:function(data)
       {
        $('tbody').html(data.table_data);
        //$('#total_records').text(data.total_data);
       }
      })
     }

     $(document).on('keyup', '#search', function(){
      var query = $(this).val();
      fetch_customer_data(query);
     });
    });
    </script>
    

@endsection