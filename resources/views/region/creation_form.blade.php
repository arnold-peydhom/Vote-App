@csrf
<div class="mb-3">
    <label for="label" class="form-label">Nom de la région</label>
    <input type="text" name="label" id="label" class="form-control" required
        value="{{ old('label', $region->label) }}">
    @error('label')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Enregistrer</button>

</div>
