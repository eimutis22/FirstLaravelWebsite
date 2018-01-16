@extends('layouts.app')
@section('content')

<h1>Home</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error culpa impedit, dolorum quaerat natus explicabo cupiditate neque? Temporibus assumenda, similique aperiam, delectus minima iure nulla tempora possimus saepe corrupti quam.</p>
@endsection

@section('sidebar')
@parent
    <p>This is appended</p>
@endsection