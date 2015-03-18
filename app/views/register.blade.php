@extends('layouts.master')

@section('content')

@include('modals.login')

<div class="container em-top-200 em-bot-50">
	<form>
		<div class="form-group">
			<label for="exampleInputEmail1">First Name</label>
			<input required="" type="text" ng-model="user.firstname" class="form-control" id="exampleInputEmail1" placeholder="First name">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Last Name</label>
			<input required="" type="text" ng-model="user.lastname" class="form-control" id="exampleInputEmail1" placeholder="Last name">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input required="" type="email" ng-model="user.email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input required="" type="password" ng-model="user.password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		[[usertrue]]
		<div ng-click="checkUserRegister()" ng-class="usertrue == true ? 'overlay-button' : 'test'"></div>
	</form>
		<div>
			<form class="thebutton" action="/newlaravelpj/wood3/public/pay" method="POST">
				<script
					src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
					data-key={{{Config::get('stripe.stripe.public')}}}
					data-amount="2000"
					data-name="Demo Laravel Site"
					data-description="2 scoops of ice cream ($20.00)"
					data-image="/128x128.png">
				</script>
			</form>
		</div>


</div>

@stop