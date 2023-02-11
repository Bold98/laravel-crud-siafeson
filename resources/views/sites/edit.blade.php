<x-layouts.app :title="$site->name" meta-description="Sitios de Siafeson">
    <div class="container mt-3">
        <a href="{{ route('sites.index') }}"><button class="btn mb-2 btn-outline-secondary">Regresar</button></a>
        <div class="card p-4">
            <h5 class="card-title">Editar información de un sitio</h5>
            <div class="card-body">
                <form action="{{ route('sites.update', $site) }}" method="post">
                    @csrf @method('PATCH')
                    @include('sites.form')
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="category">Categoria</label>
                        <select name="category" class="form-select" id="category" required>
                            @foreach ($categories as $category)
                                @if ($site->category != $category->id)
                                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                @else
                                    <option selected="selected" value="{{ $category->id }}"> {{ $category->name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        @error('category')
                            <div class="text-danger">
                                <small>{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                    <div class="row justify-content-end float-end">
                        <button type="submit" class="btn btn-outline-info ">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </x-layouts.layout>
