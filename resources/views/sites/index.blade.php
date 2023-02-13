<x-layouts.app title="Sitios" meta-description="Sitios de Siafeson">
    <div class="container sites-container container-md mb-4">
        <div class="mb-2">
            <a href="{{ route('sites.create') }}">
                <button type="button" class="btn btn-outline-light">
                    <i class="bi bi-plus-lg"></i> Agregar Sitio
                </button>
            </a>
        </div>
        <div class="card p-4">
            <h5 class="card-title">Informacíon de los sitios</h5>
            <hr class="table-group-divider">
            <table id="sitesTable" class="table table-dark table-hover">
                <thead>
                    <tr>
                        {{-- <th scope="col">Id</th> --}}
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Url</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sites_and_gategories as $site)
                        <tr>
                            {{-- <th scope="row">{{ $site->id }}</th> --}}
                            <td>{{ $site->name }}</td>
                            <td>{{ $site->description }}</td>
                            <td>
                                <a target="__blank" class="text-info" href="{{ $site->url }}">{{ $site->url }}</td></a>
                            <td>
                                <a target="__blank" class="text-info" href="{{ $site->imageUrl }}">Ver Imagen</a>
                            </td>
                            <td>{{ $site->cname }}</td>
                            <td>
                                <div class="row">
                                    <div class="col px-0 mx-0">
                                        <a href="{{ route('sites.edit', $site) }}"><button type="button"
                                                class="btn btn-primary"><i class="bi bi-pencil"></i></button></a>
                                    </div>
                                    <div class="col px-0 mx-0">
                                        <form action="{{ route('sites.destroy', $site) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="bi bi-trash3"></i></button>
                                        </form>
                                    </div>
                                </div>
    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        
    </div>
    <script>
        var dataTable = new DataTable("#sitesTable");
    </script>
    </x-layouts.layout>
