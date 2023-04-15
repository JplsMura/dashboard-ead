@extends('admin.layouts.app')

@section('title', "Detalhes do Administrador: {$admin->name}")

@section('content')
    <h1 class="w-full text-3xl text-black pb-6">
        Detalhes do Administrador: {{ $admin->name }}
    </h1>

    <div class="flex flex-wrap">
        <div class="w-full my-6 pr-0 lg:pr-2">
            <div class="leading-loose">
                <form class="p-10 bg-white rounded shadow-xl" action="{{ route('admins.destroy', $admin->id) }}" method="POST">
                    <ul>
                        <li><b>Nome:</b> {{ $admin->name }}</li>
                        <li><b>E-mail:</b> {{ $admin->email }}</li>
                        <li><b>Data de criação:</b> {{ $admin->created_at }}</li>
                    </ul>
                    @method('DELETE')
                    @csrf
                    <div class="mt-6">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-red-900 rounded" type="submit">
                            Deletar o Adminitrador {{ $admin->name }}
                        </button>
                    </div>
                </form>
            </div>
        </div>

        @include('admin.admins._partials.back-index')
    </div>
@endsection
