<?php

header('Access-Control-Allow-Origin: *');

$productos = [
    [
        "id" => 1,
        "nombre" => "Camiseta básica",
        "descripcion" => "Camiseta de algodón 100% en varios colores.",
        "precio" => 12.99,
        "img"=>"https://www.joma-sport.com/dw/image/v2/BFRV_PRD/on/demandware.static/-/Sites-joma-masterCatalog/default/dw0e82cc45/images/medium/101739.100_1.jpg",
        "categoria"=>"Ropa"
    ],
    [
        "id" => 2,
        "nombre" => "Pantalón vaquero",
        "descripcion" => "Pantalón de mezclilla azul clásico.",
        "precio" => 29.95,
        "img"=>"https://www.motosdakar.es/wp-content/uploads/2021/07/Pantalon-Tejano-III-Man-Blue1-scaled.jpg",
        "categoria"=>"Ropa"
    ],
    [
        "id" => 3,
        "nombre" => "Zapatillas deportivas",
        "descripcion" => "Zapatillas ligeras y cómodas para el día a día.",
        "precio" => 45.50,
        "img"=>"https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202406/06/00117730873530____9__640x640.jpg",
        "categoria"=>"Calzado"
    ],
    [
        "id"=>4,
        "nombre"=>"Collar",
        "descripcion"=>"Collar elegante",
        "precio"=>100,
        "img"=>"https://joieriagrau.com/6350-large_default/collar-flor-madreperla-grau.jpg",
        "categoria"=>"Accesorios"

    ],
    [
        "id"=>5,
        "nombre"=>"Chaqueta vaquera",
        "descripcion"=>"Chaqueta vaquera ligera",
        "precio"=>70,
        "img"=>"https://mivestidorazul.es/14923-large_default/cazadora-vaquera-mujer-vineed-azul.jpg",
        "categoria"=>"Ropa"

    ],
    [
        "id"=>6,
        "nombre"=>"Zapatos mocasines",
        "descripcion"=>"Zapatos mocasines para trabajar",
        "precio"=>55.5,
        "img"=>"https://img01.ztat.net/article/spp-media-p1/3e7c17b5948c4d28891d45f0e806892d/61f46a6cb6824bba9b763623245cab92.jpg",
        "categoria"=>"Calzado"

    ],
    [
        "id"=>7,
        "nombre"=>"Falda negra",
        "descripcion"=>"Falda negra terciopelo",
        "precio"=>42,
        "img"=>"https://img01.ztat.net/article/spp-media-p1/d65b53245fc44d10b1f40a98eaac4cbd/abcdac7a91214ffa9600adaa3df3c23d.jpg",
        "categoria"=>"Ropa"

    ],
    [
        "id"=>8,
        "nombre"=>"Jersey",
        "descripcion"=>"Jersey sin mangas",
        "precio"=>68,
        "img"=>"https://asset.promod.com/product/201594-su-1727685398.jpg",
        "categoria"=>"Ropa"

    ],
    [
        "id"=>9,
        "nombre"=>"Pendientes",
        "descripcion"=>"Pendientes perlas",
        "precio"=>33,
        "img"=>"https://www.joyeriasaresso.com/16223/pendientes-oro-perlas-veil.jpg",
        "categoria"=>"Accesorios"

    ]
    

];

if (isset($_GET['id'])) {
    header('Content-Type: application/json');
    $id = intval($_GET['id']);
    foreach ($productos as $p) {
        if ($p['id'] === $id) {
            echo json_encode($p);
            exit;
        }
    }
    echo json_encode(["error" => "Producto no encontrado"]);





 }else if (isset($_GET['modo']) && $_GET['modo'] === 'texto') {

 
    header('Content-Type: text/html; charset=UTF-8');

 

 




///Función que muestra por pantalla un listado de productos.
//http://localhost/ra1clienteservidorexmamen/servidor/api.php?modo=texto
function mostrarProductosJSON($productos) {
    echo "--- Lista de productos ---<br>";
    $json = json_encode($productos);
    $array = json_decode($json, true);
    //Crear un foreach para recorrerlo  y pintar por pantalla, el id, nombre y precio del producto
     
 foreach ($productos as $producto) {
        echo "ID: " . $producto['id'];
        echo "Nombre: " . $producto['nombre'] ;
        echo "Precio: $" . $producto['precio'] ;
    } 

}



    
 
 }else{
     echo json_encode($productos);
 }

 