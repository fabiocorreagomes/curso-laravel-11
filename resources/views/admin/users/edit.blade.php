@extends('admin.layouts.app')

@section('title', 'Editar o Usuário')

@section('content')

    <x-alert/>

    @include('admin.users.partials.breadcrumb')
    <div>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-400">
            Editar o Usuário {{ $user->name }}
        </h2>
    </div>

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @method('put')
            @include('admin.users.partials.form')
        </form>

@endsection