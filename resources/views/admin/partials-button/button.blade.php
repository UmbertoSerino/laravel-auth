<a href="{{ route('admin.projects.show', $project) }}">
    <button class="btn btn-warning mb-2 inline-block">Mostra</button>
</a>
<button class="btn btn-success mb-2 inline-block">Modifica</button>
<form action="" method="POST" class="inline-block">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger">Elimina</button>
</form>

