@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Módulo para o: {{ $course->name }}')

@section('content')
    <h1 class="w-full text-3xl text-black pb-6">
        Adicionar Novo Módulo para o: {{ $course->name }}
    </h1>

    <div class="flex flex-wrap">
        <div class="w-full my-6 pr-0 lg:pr-2">
            <div class="leading-loose">
                <form class="p-10 bg-white rounded shadow-xl" action="{{ route('modules.store', $course->id) }}"
                    method="POST">
                    @include('admin.courses.modules.partials.form')
                </form>
            </div>
        </div>
    </div>

    @include('admin.courses.modules.partials.back-index')
@endsection
