	
@extends('layouts.master')

@section('title')
my awesome resume
@stop

@section('content')

@stop

@yield('link-to-portfolio')
	action('PortfolioController@showPortfolio')
@stop

