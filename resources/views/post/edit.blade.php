<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $titlePageNavigator }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex mb-4">
                        <div class="w-1/2 h-12">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                                onclick="salvar()">Salvar</button>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-12">
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
                                Título
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                type="text" placeholder="Título" autocomplete="off" id="title" name="title" value="{{ $post->title }}">
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-slug">
                                Slug
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                type="text" placeholder="Slug" autocomplete="off" id="slug" name="slug" value="{{ $post->slug }}" onblur="formatSlugOnBlur('slug')">
                        </div>
                    </div>

                    <div class="flex flex-col">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-slug">
                            Texto para postagem
                        </label>
                        <textarea class="ckeditor" name="editor" id="editor" cols="30" rows="10">
                            {{ $post->body }}
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts-js')
    @include('post.edit-js')
    @include('layouts.global-js')
    @endpush

</x-app-layout>