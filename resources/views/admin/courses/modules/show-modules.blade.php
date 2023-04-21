@extends('admin.layouts.app')

@section('title', "Detalhes do Módulo <strong>{{ $module->name }}</strong> do Curso: <strong>{{ $course->name }}</strong>")

@section('content')
    <h1 class="w-full text-2xl text-black pb-6">
        Detalhes do Módulo <strong>{{ $module->name }}</strong> do Curso: <strong>{{ $course->name }}</strong>
    </h1>

    @include('admin.includes.alerts')

    <div class="flex flex-wrap">
        <div class="w-full my-6 pr-0 lg:pr-2">
            <div class="leading-loose">
                <form class="p-10 bg-white rounded shadow-xl" action="{{ route('modules.destroy', [$course->id, $module->id]) }}" method="POST">
                    <ul>
                        <li>
                            <b>Nome do Módulo:</b>
                            {{ $module->name }}
                        </li>
                        <li>
                            <b>Data de criação:</b>
                            {{ $module->created_at }}
                        </li>
                    </ul>
                    @method('DELETE')
                    @csrf
                    <div class="mt-6">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-red-900 rounded" type="submit">
                            Deletar o Módulo - {{ $module->name }}
                        </button>
                    </div>
                </form>
            </div>
        </div>

        @include('admin.courses.modules.partials.back-index')
    </div>
@endsection
