
<!DOCTYPE html>
<html>
<head>
    <title>Paquete turistico</title>
</head>
<body>

    <h1>Personaliza tu paquete turistico</h1>

    <form action="resultados.php" method="POST">

        <h2>Datos del cliente</h2>

        <label>Nombre completo:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Correo electronico:</label><br>
        <input type="email" name="correo" required><br><br>


        <h2>Destinos turisticos</h2>

        <select name="destinos[]" multiple>
            <option value="Cancun">Cancun</option>
            <option value="Puerto Vallarta">Puerto Vallarta</option>
            <option value="Acapulco">Acapulco</option>
            <option value="Los Cabos">Los Cabos</option>
            <option value="Mazatlan">Mazatlan</option>
            <option value="Huatulco">Huatulco</option>
            <option value="Puerto Escondido">Puerto Escondido</option>
        </select>


        <h2>Actividades turisticas</h2>

        <input type="checkbox" name="actividades[]" value="Buceo">
        Buceo<br>

        <input type="checkbox" name="actividades[]" value="Paseo en lancha">
        Paseo en lancha<br>

        <input type="checkbox" name="actividades[]" value="Visita a zonas arqueologicas">
        Visita a zonas arqueologicas<br>

        <input type="checkbox" name="actividades[]" value="Senderismo">
        Senderismo<br>

        <input type="checkbox" name="actividades[]" value="Pesca deportiva">
        Pesca deportiva<br>

        <input type="checkbox" name="actividades[]" value="Recorrido gastronomico">
        Recorrido gastronomico<br>

        <input type="checkbox" name="actividades[]" value="Visita a museos">
        Visita a museos<br>


        <h2>Servicios adicionales</h2>

        <input type="checkbox" name="servicios[]" value="Transporte al aeropuerto">
        Transporte al aeropuerto<br>

        <input type="checkbox" name="servicios[]" value="Desayuno incluido">
        Desayuno incluido<br>

        <input type="checkbox" name="servicios[]" value="Hospedaje de lujo">
        Hospedaje de lujo<br>

        <input type="checkbox" name="servicios[]" value="Seguro de viajero">
        Seguro de viajero<br>

        <input type="checkbox" name="servicios[]" value="Renta de automovil">
        Renta de automovil<br>

        <input type="checkbox" name="servicios[]" value="Guia turistico">
        Guia turistico<br><br>


        <button type="submit">Generar paquete</button>

    </form>

</body>
</html>
