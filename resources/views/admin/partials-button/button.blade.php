<a href="{{ route('admin.projects.edit', $project) }}" class="m-2">
    <button class="btn btn-success d-inline-block">Modifica</button>
</a>

<form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="d-inline-block m-2">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Elimina</button>
</form>

