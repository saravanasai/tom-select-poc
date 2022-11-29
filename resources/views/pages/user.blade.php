@extends('layouts.master')

@section('tab_tittle','User List')

@section('content')
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">Todo List</h4>
        </div>
    </div>
    <div class="card-body px-0">
        @livewire('tom-select.tomselect-component')
    </div>
@endsection

@section('scripts')

<script>
   new TomSelect(".tom-select",{
	allowEmptyOption: true,
	create: true
});
</script>
@endsection
