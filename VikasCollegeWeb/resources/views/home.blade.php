@extends('layouts.app') @section('content')
<?php
$x=1;
?>

<style>
.button-wrap {
	margin-left: 5px;
	margin-right: 5px;
}

.button-wrap {
	margin-left: 5px;
	margin-right: 5px;
}

.btn-block {
	padding: 10% 0; // define values in pixels / Percentage or em. whatever
	suits your requirements height : 200px;
	background-color: #7BA2CE;
}

.linkstyle {
	text-decoration: none;
}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="panel panel-primary">
				<div class="panel-heading">Dashboard</div>

				<div class="panel-body">@if($x==0) @include('userpanel.admin')
					@elseif($x==1) @include('userpanel.student') @else
					@include('userpanel.staf') @endif</div>
			</div>
		</div>
	</div>
</div>
@endsection
