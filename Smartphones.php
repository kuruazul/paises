<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
    <style>
        .parallax {
            background-image: url("https://assets.newatlas.com/dims4/default/9df7e20/2147483647/strip/true/crop/1920x1079+0+0/resize/1440x809!/quality/90/?url=http%3A%2F%2Fnewatlas-brightspot.s3.amazonaws.com%2Farchive%2F2017-best-smartphones-specs-features-comparison-1.jpg");
            height: max-content;
            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="bg-gray-500 max-h-full">
    <!---nav-->
    <div class="bg-gray-700 w-full fixed text-white border  hover:border-blue-500">
        <div class="container mx-auto flex justify-between h-12">
            <div class="my-auto">
                <a class="" href="#smartphones">Smartphones</a>
            </div>
            <div class="grid grid-cols-3 ">
                <a class="hover:bg-blue-400 text-center p-2 mx-auto" href="">Feactures</a>
                <a class="hover:bg-blue-400 text-center p-2 mx-auto" href="">Popular brands</a>
                <a class="hover:bg-blue-400 text-center p-2 mx-auto" href="">Famous apps</a>
            </div>
        </div>
    </div>
    <!---header-->
    <div class="bg-purple-300 parallax w-full h-full">
        <h2 id="smartphones" class="uppercase w-full font-bold text-6xl pt-40 text-center">smartphones</h2>
        <div class="w-full grid grid-cols-2 gap-10 m-auto py-10 px-20">
            <div class="text-center">
                <p class="m-0 transition duration-200 ease-in-out hover:bg-gray-200 transform hover:-translate-y-1 hover:scale-110">
                    Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona
                </p>
            </div>
            <div class="text-center">
                <p class="m-0 transition duration-200 ease-in-out hover:bg-gray-200 transform hover:-translate-y-1 hover:scale-110">
                    Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona
                </p>
            </div>
        </div>
    </div>
    <!---Feactures-->
    <div class="container mx-auto grid grid-cols-2 gap-16 ">
        <div class="col-span-2 p-10 text-center font-bold text-5xl ">Feactures</div>
        <div class="h-full">Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier
            persona
            <img class="" src="https://cde.laprensa.e3.pe/ima/0/0/2/3/2/232539.jpg " alt=" ">
        </div>
        <div class="h-full">Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier
            persona
            <img class="" src="https://www.dealerworld.es/archivos/201911/smartphones-1-1.jpg " alt=" ">
        </div>
    </div>
    <!---content 2-->
    <div class="bg-teal-300 w-full ">
        <div class="container mx-auto grid grid-cols-2">
            <div>image</div>
            <div>description</div>
        </div>
    </div>
</body>

</html>