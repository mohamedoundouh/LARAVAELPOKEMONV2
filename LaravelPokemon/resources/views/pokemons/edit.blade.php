
    <h1>Editar Pokemon</h1>
    <form action="{{ route('pokemons.update', $pokemon->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $pokemon->nombre }}" required>
        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" value="{{ $pokemon->tipo }}" required>
        <label for="tamano">Tamaño:</label>
        <select name="tamano" required>
            <option value="grande" {{ $pokemon->tamano == 'grande' ? 'selected' : '' }}>Grande</option>
            <option value="mediano" {{ $pokemon->tamano == 'mediano' ? 'selected' : '' }}>Mediano</option>
            <option value="pequeno" {{ $pokemon->tamano == 'pequeno' ? 'selected' : '' }}>Pequeño</option>
        </select>
        <label for="peso">Peso:</label>
        <input type="number" name="peso" step="0.01" value="{{ $pokemon->peso }}" required>
        <button type="submit">Guardar</button>
    </form>

