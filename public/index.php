<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Películas</title>
    <link href="./css/tailwind.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-xs">
        <!-- Header -->
        <header class="text-center mb-4">
            <h1 class="text-3xl font-bold">Bienvenido a la Tienda de Películas</h1>
        </header>

        <!-- Age Form -->
        <section class="bg-white p-6 rounded-lg shadow-lg mb-4">
            <form id="ageForm" action="index.php" method="POST">
                <div class="mb-4">
                    <label for="age" class="block text-gray-700 font-bold mb-2">Ingrese su edad:</label>
                    <input type="text" id="age" name="age" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <p id="errorMessage" class="text-red-500 text-xs hidden">Por favor, ingrese un número válido.</p>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>
                </div>
            </form>
        </section>

        <!-- PHP Message -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $age = intval($_POST['age']);

            if ($age >= 18) {
                echo "<p class='text-center text-green-500'>Eres mayor de 18 años. ¡Bienvenido!</p>";
            } else {
                echo "<p class='text-center text-red-500'>Eres menor de 18 años. No tienes permiso para ingresar.</p>";
            }
        }
        ?>
    </div>

    <script src="./js/main.js"></script>
</body>
</html>
