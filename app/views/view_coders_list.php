<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
        rel="stylesheet" />
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
        <script src="https://cdn.tailwindcss.com/3.3.0"></script>
        <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
            fontFamily: {
                sans: ["Roboto", "sans-serif"],
                body: ["Roboto", "sans-serif"],
                mono: ["ui-monospace", "monospace"],
            },
            },
            corePlugins: {
            preflight: false,
            },
        };
        </script>
        
        <title>Lista de Coders</title>
    </head>

    <body>

        <div class="flex w-screen h-screen text-gray-700">

            <div class="flex flex-col items-right w-26 pb-4 overflow-auto border-r border-gray-300">
                <a class="flex items-center justify-center flex-shrink-0 w-full h-16 p-4 mt-5" href="#">
                    <img src="/proyectos/CoderFlow/src/assets/logo.png" alt="logo"/></a>
                <a class="text-lg font-medium flex items-center justify-center flex-shrink-0 mt-7 rounded hover:bg-gray-300" href="/proyectos/coderflow/public/promos">
                    BOOTCAMPS</a>
                <a class=" text-lg font-medium flex items-center justify-center flex-shrink-0 mt-7 rounded hover:bg-gray-300" href="/proyectos/coderflow/public/coders">
                    CODERS</a>
            </div>
            
            <div class="flex flex-col flex-grow">

                <div class="flex items-center justify-between flex-shrink-0 h-16 px-8 border-b border-gray-300">
                    <h1 class="text-lg font-medium">Lista de Coders<?= $promo? ' ' .$promo['nombre_promo'] : '' ?></h1>
                    <a href="/proyectos/coderflow/public/coders/create"> <button class="flex items-center justify-center h-10 px-4 ml-2 text-sm text-white font-medium rounded bg-[#EA5729] hover:bg-white hover:text-[#EA5729] hover:border-[#EA5729] hover:border-2">
                        + Nuevo Coder</button></a>
                </div>

                <div class="flex-grow p-6 overflow-auto bg-gray-200">
                    <div data-te-datatable-init>
                        <table>
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Localidad</th>
                                    <th>Status</th>
                                    <th>Ver</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php foreach($results as $result): ?>

                                <tr>
                                    <td><?= $result["nombre"]?></td>
                                    <td><?= $result["apellidos"]?></td>
                                    <td><?= $result["localidad"]?></td>
                                    <td><?= $result["estado"]?></td>
                                    <td><a href="/proyectos/coderflow/public/coders/show/<?=$result["identificador"]?>"><button class="flex items-center justify-center bg-gray-200 w-6 p-1 rounded hover:bg-gray-300"><img src="/proyectos/CoderFlow/src/assets/icons8-view-60.png"/></button></a></td>
                                </tr>

                            <?php endforeach;?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    
    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js">
            // TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com 
        // Initialization for ES Users
        import {
        Datatable,
        initTE,
        } from "tw-elements";

        initTE({ Datatable });
        </script>
    </body>
</html>