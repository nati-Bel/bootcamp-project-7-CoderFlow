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
                    <h1 class="text-lg font-medium">Ficha Coder</h1>
                    <?php if ($coder && !$edit):?>
                        <div class="flex justify-center">    
                            <a href="/proyectos/coderflow/public/coders/edit/<?=$coder['identificador']?>" >           
                                <button class="flex items-center justify-center h-10 px-4 ml-2 text-sm text-white font-medium bg-[#EA5729] rounded hover:bg-white hover:text-[#EA5729] hover:border-[#EA5729] hover:border-2">
                            Modificar</button></a>
                            </a>
                            
                            <a href="/proyectos/coderflow/public/coders/delete/<?=$coder['identificador']?>" >
                                <button class="flex items-center justify-center h-10 px-4 ml-2 text-sm font-medium bg-gray-200 rounded hover:bg-gray-300">
                            Eliminar</button></a>
                            </a>
                        </div>
                        <?php endif; ?>
                    
                </div>

                <div class="flex-grow p-4 overflow-auto bg-gray-200">
                    <div class="block w-4/5 rounded-lg bg-white p-4 m-2 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <form action="/proyectos/coderflow/public/coders<?= $coder? '/update/'.$coder['identificador']:'/create' ?>" method="POST">
                            <div class="grid grid-cols-2 gap-4">
                                                        
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                    <label class="font-medium">Nombre</label>
                                    <input <?=$edit? '' : 'disabled'?> type="text" name="nombre" 
                                    class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729]"
                                    value=<?= $coder? $coder['nombre']:""?>>    
                                </div>
                                
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                    <label class="font-medium">Apellidos</label>
                                    <input
                                    <?=$edit? '' : 'disabled'?> type="text" name="apellidos" 
                                    class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729] "
                                     value=<?= $coder? $coder['apellidos']:""?>>    
                                </div>
                            </div>
                        
                            <div class="grid grid-cols-2 gap-4">
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                        <label class="font-medium">Email</label>
                                        <input <?=$edit? '' : 'disabled'?> type="email" name="email" 
                                        class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729]"
                                        value=<?= $coder? $coder['email']:""?>>    
                                </div>
                               <div class="relative mb-6" data-te-input-wrapper-init>
                                    <label class="font-medium">Teléfono</label>
                                    <input <?=$edit? '' : 'disabled'?> type="number" name="telefono"                                     
                                    class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729]"
                                     value=<?= $coder? $coder['telefono']:""?>>    
                                </div>

                            </div>    
                            <div class="grid grid-cols-2 gap-4">
                                                        
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                    <label class="font-medium">Comunidad autónoma</label>
                                    <input <?=$edit? '' : 'disabled'?> type="text" name="comunidad_autonoma" 
                                    class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729]"
                                     value=<?= $coder? $coder['comunidad_autonoma']:""?>>    
                                </div>
                                
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                    <label class="font-medium">Localidad</label>
                                    <input <?=$edit? '' : 'disabled'?> type="text" name="localidad" 
                                    class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729]"
                                     value=<?= $coder? $coder['localidad']:""?>>    
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">                                
                                <div class="relative mb-6" data-te-select-init>
                                    <label class="font-medium">Discapacidad</label>
                                    <select <?=$edit? '' : 'disabled'?> name="certificado_discapacidad" class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729]"
                                        />
                                        <option <?= $coder && $coder['certificado_discapacidad']== 0? 'selected':''?> value="0"></option>
                                        <option <?= $coder && $coder['certificado_discapacidad']== 1? 'selected':''?> value="1">Sí</option>
                                        <option <?= $coder && $coder['certificado_discapacidad']== 2? 'selected':''?> value="2">No</option>
                                        <option <?= $coder && $coder['certificado_discapacidad']== 3? 'selected':''?> value="3">Pendiente</option>
                                        
                                    </select>
                                </div>
                                <div class="relative mb-6" data-te-select-init>
                                    <label class="font-medium">Género</label>
                                    <select <?=$edit? '' : 'disabled'?> name="genero" class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729]"
                                        />
                                        <option <?= $coder && $coder['genero']== 0? 'selected':''?> value="0"></option>
                                        <option <?= $coder && $coder['genero']== 1? 'selected':''?> value="1">Mujer</option>
                                        <option <?= $coder && $coder['genero']== 2? 'selected':''?> value="2">Hombre</option>
                                        <option <?= $coder && $coder['genero']== 3? 'selected':''?> value="3">Otros</option>
                                        <option <?= $coder && $coder['genero']== 4? 'selected':''?> value="4">Sin Especificar</option>
                                        
                                    </select>
                                </div>


                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="relative mb-6" data-te-select-init>
                                    <label class="font-medium">Edad</label>
                                    <select <?=$edit? '' : 'disabled'?> name="edad" class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729]"
                                        />
                                        <option <?= $coder && $coder['edad']== 0? 'selected':''?> value="0"></option>
                                        <option <?= $coder && $coder['edad']== 1? 'selected':''?>value="1">18-29</option>
                                        <option <?= $coder && $coder['edad']== 2? 'selected':''?>value="2">30-45</option>
                                        <option <?= $coder && $coder['edad']== 3? 'selected':''?> value="3">46-65</option>
                                        <option <?= $coder && $coder['edad']== 4? 'selected':''?>value="4">+65</option>
                                        
                                         
                                    </select>
                                </div>
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                    <label class="font-medium">DNI/NIE</label>
                                    <input <?=$edit? '' : 'disabled'?> type="text" name="DNI" 
                                    class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729]"
                                     value=<?= $coder? $coder['DNI']:""?>>    
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="relative mb-6" data-te-select-init>
                                    <label class="font-medium">Bootcamp</label>
                                    <select <?=$edit? '' : 'disabled'?> name="promo_id" class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729]"
                                        />
                                        <option <?= $coder && $coder['promo_id']== 0? 'selected':''?> value="0"></option>
                                        <?php foreach($promos as $promo): ?>
                                            <option <?= $coder && $coder['promo_id']==$promo['identificador'] ? 'selected':''?> value=<?=$promo['identificador']?>><?=$promo['nombre_promo']?></option>
                                        <?php endforeach;?>
                                         
                                    </select>
                                </div>
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                    <label class="font-medium">Estado</label>
                                    <input <?=$edit? '' : 'disabled'?> type="text" name="estado"                                     
                                    class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none focus:placeholder:opacity-100 focus:border-[#EA5729]"
                                     value=<?= $coder? $coder['estado']:""?>>    
                                </div>
                            </div>

                            <?php if($coder && $edit):?>
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