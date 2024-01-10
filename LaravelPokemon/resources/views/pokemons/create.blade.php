
    <h1>Crear Pokemon</h1>
    <form action="{{ route('pokemons.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" required>
        <label for="tamano">Tamaño:</label>
        <select name="tamano" required>
            <option value="grande">Grande</option>
            <option value="mediano">Mediano</option>
            <option value="pequeno">Pequeño</option>
        </select>
        <label for="peso">Peso:</label>
        <input type="number" name="peso" step="0.01" required>
        <button type="submit">Guardar</button>
    </form>
