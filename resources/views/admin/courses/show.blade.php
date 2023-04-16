@extends('admin.layouts.app')

@section('title', "Detalhes do Curso: {$course->name}")

@section('content')
    <h1 class="w-full text-3xl text-black pb-6">
        Detalhes do Curso: {{ $course->name }}
    </h1>

    @include('admin.includes.alerts')

    <div class="flex flex-wrap">
        <div class="w-full my-6 pr-0 lg:pr-2">
            <div class="leading-loose">
                <form class="p-10 bg-white rounded shadow-xl" action="{{ route('courses.destroy', $course->id) }}"
                    method="POST">
                    <ul>
                        <li><b>Nome:</b> {{ $course->name }}</li>
                        <li><b>Descrição:</b> {{ $course->description }}</li>
                        <li><b>Disponibilidade:</b> {{ $course->available ? 'Publicado' : 'Não Publicado' }}</li>
                        <li><b>Data de criação:</b> {{ $course->created_at }}</li>
                    </ul>
                    @method('DELETE')
                    @csrf
                    <div class="mt-6">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-red-900 rounded" type="submit">
                            Deletar o Curso {{ $course->name }}
                        </button>
                    </div>
                </form>
            </div>
        </div>

        @include('admin.courses.partials.back-index')
    </div>
@endsection
