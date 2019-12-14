@extends('layouts.app')

@section('content')

<div class="container" style="height: 100%">
	<div style="text-align: center;">
		
   	<h2 style="text-align: center;font-weight: bold;">Long Term Rent</h2>

   	<p style="text-align: center;font-size: 20px"><b>Our mission</b> is to help you understand,leverage and take advantage of the power of real estate. We will calculate the numbers and partner with you to help you aligh with your chosen strategy.</p>
   	<div >
   	 <a style="margin: 10px;padding: 10px;font-weight: bold;" class="btn btn-info"  role="button" href="{{url('/learnMore3')}}">Next Option</a>
   		<a style="margin: 10px;padding: 10px;font-weight: bold;" class="btn btn-info"  role="button" href="{{url('/longTermresource')}}">Resource</a>
   	</div>
	</div>
</div>


@endsection