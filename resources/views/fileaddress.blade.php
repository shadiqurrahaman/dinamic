@extends('layouts.app')

@section('content')

<section>
	<div class="containner">

                                              
		<div style="margin:50px">
		<h2>File Name: {{$filename->file_name}}</h2> 
    <table class="table table-striped">
    										<thead>
											      <tr>
													  <th>#</th>
											      	<th>Favorite</th>
											        <th>Address</th>
											        <th>BD</th>
											        <th>BA</th>
											        <th>Estimate Value</th>
											        <th>Rent</th>
											        <th>STR Annual</th>
											        <th>Rental Cap</th>
											        <th>STR Cap</th>
											      </tr>
											    </thead>
											    <tbody>
                                                @foreach($fileaddress as $key=>$address)
                                                    <tr>
													<td>{{ $key+1 }}</td>
                                                    	@if($address->favorite==0)
													  <td><a href="javascript:makeFavorite({{$address->id}})"><i id="colorIcon_{{$address->id}}" class="colorIcon_{{$address->id}} far fa-heart" aria-hidden="true" style="color:red"></i></a></td>
											        @else
														  <td><a href="javascript:makeFavorite({{$address->id}})"><i id="colorIcon_{{$address->id}}" class="colorIcon_{{$address->id}} fas fa-heart" aria-hidden="true" style="color:red"></i></a></td>
													@endif
                                                        <td><a style="text-decoration: none; color: #060606" href="{{route('propertyResult',['propertyId' => $address['id']])}}">{{$address->address}}</a></td>
                                                        <td>{{$address['addressInfo']['bedroom']}}</td>
                                                        <td>{{$address['addressInfo']['bathroom']}}</td>
                                                        <td>${{number_format(($address['addressInfo']['zestimate']>1?$address['addressInfo']['zestimate']:0))}}</td>
											        <td>${{number_format($address['addressInfo']['rent'])}}</td>
											        <td>${{number_format($address['addressInfo']['air_dna_anual_revinue'])}}</td>
											        <td>

											        	<?php 
											        	if ($address['addressInfo']['zestimate']>1){
											        		echo number_format(((isset($address['addressInfo']['rent'])>0?$address['addressInfo']['rent']*12:1)/(isset($address['addressInfo']['zestimate'])>0?$address['addressInfo']['zestimate']:1)*100),1);
											        	}else{
											        		echo 0;
											        	}
											        	 ?>
											        	

											        	%</td>
											        <td>


											        	<?php 
											        	if($address['addressInfo']['zestimate']>1){
											        		echo number_format(((isset($address['addressInfo']['air_dna_anual_revinue'])>0?$address['addressInfo']['air_dna_anual_revinue']:1)/(isset($address['addressInfo']['zestimate'])>0?$address['addressInfo']['zestimate']:1)*100),1);
											        	}else{
											        		echo 0;
											        	}
											        	 ?>
											        	
			%</td>



                                                    </tr>
                                                @endforeach
											    </tbody>
											  </table>
                                
		</div>
	</div>
</section>


@endsection