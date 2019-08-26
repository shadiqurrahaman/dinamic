@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-4" >
            <div style="height: 400px; margin-bottom: 50PX">
                @if($errors->any())
                    <h2 style="color: red;">Update Successfully</h2>
                @endif
                <h3>Mortgage Calculator Setting</h3>
                <form method="POST" action="{{route('mortgageSetings')}}">
                    @csrf
                    <div class="form-group">
{{--                        <label>Home Price</label>--}}
{{--                        <input type="number" name="home_price" class="form-control" id="home_price" placeholder="$-00">--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label for="exampleInputPassword1">Down Payment</label>
                        <input type="number" class="form-control" name="doen_payment" id="down_payment" placeholder="$-00">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Loan Term</label>
                        <select class="form-control" name="loanterm" id="loneterm">
                            <option value="1">1 Year</option>
                            <option value="2">2 Year</option>
                            <option value="3">3 Year</option>
                            <option value="4">4 year</option>
                            <option value="5">5 year</option>
                            <option value="6">6 year</option>
                            <option value="7">7 year</option>
                            <option value="8">8 year</option>
                            <option value="9">9 year</option>
                            <option value="10">10 year</option>
                            <option value="11">11 year</option>
                            <option value="12">12 year</option>
                            <option value="13">13 year</option>
                            <option value="14">14 year</option>
                            <option value="15">15 year</option>
                            <option value="16">16 year</option>
                            <option value="17">17 year</option>
                            <option value="18">18 year</option>
                            <option value="19">19 year</option>
                            <option value="20">20 year</option>
                            <option value="21">21 year</option>
                            <option value="22">22 year</option>
                            <option value="23">23 year</option>
                            <option value="24">24 year</option>
                            <option value="25">25 year</option>
                            <option value="26">26 year</option>
                            <option value="27">27 year</option>
                            <option value="28">28 year</option>
                            <option value="29">29 year</option>
                            <option value="30">30 year</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Interest</label>
                        <input type="number" name="interest" class="form-control" id="interest" placeholder="$-00">
                    </div>

                    <button type="submit"  class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection