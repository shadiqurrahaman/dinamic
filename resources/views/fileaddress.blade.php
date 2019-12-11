@extends('layouts.app')

@section('content')

<section>
	<div class="containner">

		<div style="margin:50px">
		<h2>File Name: {{$filename->file_name}}</h2> 
		<table class="table table-striped">
    										<thead>
											      <tr>
											      	  <th>Mark</th>
                                                      <th>Address</th>
                                                      <th>BD</th>
                                                      <th>BA</th>
                                                      <th>Zestimate</th>
                                                      <th>Rent</th>
                                                      <th>VR</th>
                                                      <th>R/Z</th>
                                                      <th>VR/Z</th>
											      </tr>
											    </thead>
											    <tbody>
                                                @foreach($fileaddress as $address)
                                                    <tr>
                                                    	@if($address->favorite==0)
													  <td><a href="javascript:makeFavorite({{$address->id}})"><i id="colorIcon_{{$address->id}}" class="colorIcon_{{$address->id}} far fa-heart" aria-hidden="true" style="color:red"></i></a></td>
											        @else
														  <td><a href="javascript:makeFavorite({{$address->id}})"><i id="colorIcon_{{$address->id}}" class="colorIcon_{{$address->id}} fas fa-heart" aria-hidden="true" style="color:red"></i></a></td>
													@endif
                                                        <td><a style="text-decoration: none; color: #060606" href="{{route('propertyResult',['propertyId' => $address['addressInfo']['id']])}}">{{$address->address}}</a></td>
                                                        <td>{{$address['addressInfo']['bedroom']}}</td>
                                                        <td>{{$address['addressInfo']['bathroom']}}</td>
                                                        <td>${{$address['addressInfo']['zestimate']}}</td>
                                                        <td>${{$address['addressInfo']['rent_zestimate']}}</td>
                                                        <td>{{$address['addressInfo']['finishedSqFt']}}</td>
                                                        <td>{{$address['addressInfo']['lotSizeSqFt']}}</td>
                                                        <td>{{$address['addressInfo']['last_sold_price']}}</td>



                                                    </tr>
                                                @endforeach
											    </tbody>
											  </table>
											  </div>
	</div>
</section>


@endsection