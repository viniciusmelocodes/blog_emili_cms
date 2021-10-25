<x-app-layout>
    <x-slot name="header">
        <div class="flex mb-4">
            <div class="w-1/2 h-12">
                <h2 class="font-semibold text-xl leading-tight">
                    {{ $titlePageNavigator }}
                </h2>
            </div>
            <div class="w-1/2 h-12">
            </div>
            <div class="w-1/2 h-12">
            </div>
            <div class="w-1/2 h-12">
            </div>
            <div class="w-1/2 h-12">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="button"
                    onclick="window.location.href = '{{ route('post-create') }}'">
                    Criar Nova Postagem
                </button>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table id="posts-tabela" class="stripe responsive">
                        <thead>
                            <tr>
                                <th>Slug</th>
                                <th>Título</th>
                                <th>Data Criação</th>
                                <th>Data Atualização</th>
                                <th width="170px">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->slug }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('d/m/Y H:i:s') }}
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->updated_at)->format('d/m/Y H:i:s') }}
                                <td>
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                                        type="button"
                                        onclick="window.location.href = '{{ route('post-edit', $post->id) }}'">
                                        Editar
                                    </button>
                                    <button
                                        class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-full"
                                        type="button" onclick="desativarPostagem('{{ $post->title }}', {{ $post->id }})">
                                        Desativar
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Slug</th>
                                <th>Título</th>
                                <th>Data Criação</th>
                                <th>Data Atualização</th>
                                <th width="170px">Ações</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('scripts-js')
    @include('post.index-js')
    @endpush

</x-app-layout>