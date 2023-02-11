<div class="mb-3">
    <label for="name" class="form-label">Nombre del sitio</label>
    <input type="text" name="name" class="form-control" id="name"
        value="{{ old('name', $site->name) }}" required>
    @error('name')
        <div class="text-danger">
            <small>{{ $message }}</small>
        </div>
    @enderror
</div>
<div class="mb-3">
    <label for="description" class="form-label">Descripción</label>
    <textarea name="description" class="form-control" id="description" rows="2" required>{{ old('description', $site->description) }}</textarea>
    @error('description')
        <div class="text-danger">
            <small>{{ $message }}</small>
        </div>
    @enderror
</div>
<div class="mb-3">
    <label for="url" class="form-label">Url del sitio</label>
    <input type="text" name="url" class="form-control" id="url"
        value="{{ old('url', $site->url) }}" required>
    @error('url')
        <div class="text-danger">
            <small>{{ $message }}</small>
        </div>
    @enderror
</div>
<div class="mb-3">
    <label for="imageUrl" class="form-label">Url de la imagen</label>
    <input type="text" name="imageUrl" class="form-control" id="imageUrl"
        value="{{ old('imageUrl', $site->imageUrl) }}" required>
    @error('imageUrl')
        <div class="text-danger">
            <small>{{ $message }}</small>
        </div>
    @enderror
</div>