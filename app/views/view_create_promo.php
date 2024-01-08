<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>CoderFlow_</title>
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
                    <h1 class="text-lg font-medium">Ficha Bootcamp</h1>

                    <?php if ($promo && !$edit):?>
                        <div class="flex justify-center">    
                            <a href="/proyectos/coderflow/public/promos/edit/<?=$promo['identificador']?>" >           
                                <button class="flex items-center justify-center h-10 px-4 ml-2 text-sm text-white font-medium bg-[#EA5729] rounded hover:bg-white hover:text-[#EA5729] hover:border-[#EA5729] hover:border-2">Modificar</button>
                            </a>
                            
                            <a href="/proyectos/coderflow/public/promos/delete/<?=$promo['identificador']?>" >
                                <button class="flex items-center justify-center h-10 px-4 ml-2 text-sm text-white font-medium bg-[#EA5729] rounded hover:bg-white hover:text-[#EA5729] hover:border-[#EA5729] hover:border-2">Eliminar</button>
                            </a>
                        </div>
                    <?php endif; ?>
                    
                </div>

                <div class="flex-grow p-4 overflow-auto bg-gray-200">
                    <div class="block w-4/5 rounded-lg bg-white p-4 m-2 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <form action="/proyectos/coderflow/public/promos<?= $promo? '/update/'.$promo['identificador']:'/create' ?>" method="POST">
                            <div class="grid grid-cols-2 gap-4">
                                                        
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                    <label class="font-medium">Nombre de la promocion</label>
                                    <input <?=$edit? '' : 'disabled'?>
                                    class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729]"
                                     type="text" name="nombre_promo" value=<?= $promo? $promo['nombre_promo']:""?>>    
                                </div>
                                
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                    <label class="font-medium">Stack</label>
                                    <input <?=$edit? '' : 'disabled'?> 
                                    class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729] "
                                    type="text" name="stack" value=<?= $promo? $promo['stack']:""?>>    
                                </div>
                            </div>
                        
                            <div class="grid grid-cols-2 gap-4">
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                    <label class="font-medium">Fecha de inicio</label>
                                    <input <?=$edit? '' : 'disabled'?> 
                                    class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729]"
                                    type="date" name="fecha_inicio" value=<?= $promo? $promo['fecha_inicio']:""?>>    
                                </div>
                               <div class="relative mb-6" data-te-input-wrapper-init>
                                    <label class="font-medium">Fecha de finalizacion</label>
                                    <input <?=$edit? '' : 'disabled'?>                                     
                                    class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729]"
                                    type="date" name="fecha_fin" value=<?= $promo? $promo['fecha_fin']:""?>>    
                                </div>

                            </div>    
                           <div class="grid grid-cols-2 gap-4">
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                    <label class="font-medium">Formador@</label>
                                    <input <?=$edit? '' : 'disabled'?> 
                                    class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729]"
                                    type="text" name="formador" value=<?= $promo? $promo['formador']:""?>>    
                                </div>
                               <div class="relative mb-6" data-te-input-wrapper-init>
                                    <label class="font-medium">CoFormador@</label>
                                    <input <?=$edit? '' : 'disabled'?>                                     
                                    class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729]"
                                    type="text" name="coformador" value=<?= $promo? $promo['coformador']:""?>>    
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                    <label class="font-medium">RP</label>
                                    <input <?=$edit? '' : 'disabled'?> 
                                    class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729]"
                                    type="text" name="rp" class="input_form" value=<?= $promo? $promo['rp']:""?>>    
                                </div>
                               
                            </div>        
                            

                            <?php if($promo && $edit):?>
                                <button
                                type="submit"
                                class="inline-block w-1/3 rounded bg-[#EA5729] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-white hover:text-[#EA5729] border-2 border-[#EA5729] "
                                data-te-ripple-init
                                data-te-ripple-color="light">
                                GUARDAR CAMBIOS
                                </button>
                            <?php elseif($edit): ?>          
                                <button
                                type="submit"
                                class="inline-block w-1/3 rounded bg-[#EA5729] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-white hover:text-[#EA5729] border-2 border-[#EA5729] "
                                data-te-ripple-init
                                data-te-ripple-color="light">
                                GUARDAR
                                </button>
                            <?php endif; ?>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
                
<script>
    import {
  Ripple,
  Input, Select,
  initTE,
} from "tw-elements";

initTE({ Ripple, Input, Select });
</script>
</body>

</html>
