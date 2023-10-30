@extends('dashboard.layout.layout')

@section('title', trans('messages.admins'))

@section('content')
    @livewire('admin-component')
@endsection


@section('scripts')
    <script>
        window.addEventListener('closeModal', event => {
            $('.modal-backdrop').hide();
        })
    </script>
@endsection
