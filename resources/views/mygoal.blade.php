@extends('layouts.app')

@section('content')
<div class="container-fluid">
 <div class="container mt-4 text-center">
    <div class="row justify-content-center">
        <div class="col-12 text-left  h-100 bg-white mb-4">
            <div class="text-grey p-3">Recent Goals</div>
        </div>
    </div>

    @livewire('goals')
 </div>
</div>