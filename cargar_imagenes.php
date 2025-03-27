<?php
// Obtener el parámetro de carrusel desde la URL
$carousel_id = isset($_GET['carousel']) ? $_GET['carousel'] : '';

// Directorio base de las imágenes
$directory = __DIR__ . "/perejil/";

// Definir la ruta para cada carrusel
switch ($carousel_id) {
    case 'carousel1':
        $directory .= "carousel1/";
        break;
    case 'carousel2':
        $directory .= "carousel2/";
        break;
    case 'carousel3':
        $directory .= "carousel3/";
        break;
    default:
        header('HTTP/1.1 400 Bad Request');
        echo json_encode(["error" => "Carrusel no especificado o no válido"]);
        exit();
}

// Verificar si el directorio existe
if (is_dir($directory)) {
    $images = array_diff(scandir($directory), ['..', '.']);

    $imagesArray = [];
    foreach ($images as $image) {
        $extension = pathinfo($image, PATHINFO_EXTENSION);
        if (in_array(strtolower($extension), ['jpg', 'jpeg', 'png', 'gif'])) {
            $imagesArray[] = "perejil/" . $carousel_id . "/" . $image;
        }
    }

    // Retornar imágenes como JSON
    header('Content-Type: application/json');
    echo json_encode($imagesArray);
} else {
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(["error" => "El directorio de imágenes no existe"]);
}
?>
