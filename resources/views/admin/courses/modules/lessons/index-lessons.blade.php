@extends('admin.layouts.app')

@section('title', "Aulas do módulo: {{ $module->name }}")

@section('content')

    <h1 class="text-2xl text-black pb-6">
        Aulas do módulo: {{ $module->name }}
        <a class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
            href="{{ route('lessons.create', $module->id) }}">
            <i class="fas fa-plus"></i>
        </a>
    </h1>

    <div class="w-full mt-12">
        {{-- @include('admin.includes.form-search', ['routerName' => 'modules.index']) --}}
        <div class="bg-white overflow-auto">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Nome
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            URL
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Video
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Data de criação
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($lessons as $lesson)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $lesson->name }}
                                    </p>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $lesson->url }}
                                    </p>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $lesson->video }}
                                    </p>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $lesson->created_at }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <a href="{{ route('lessons.show', [$lesson->id, $lesson->id]) }}">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-yellow-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-yellow-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Detalhes</span>
                                    </span>
                                </a>
                                <a href="{{ route('lessons.edit', [$course->id, $lesson->id]) }}">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Editar</span>
                                    </span>
                                </a>
                                <a href="{{ route('lessons.index', $lesson->id) }}">
                                    <span class="relative inline-block px-3 py-1 font-semibold text-blue-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-blue-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Aulas</span>
                                    </span>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td coldspan="1000">
                                Nenhuma aula encontrada
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="px-5 py-5">
    </div>

@endsection
