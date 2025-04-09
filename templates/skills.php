<?php

$arraySkills = array (
     "Html","https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg ",

     "Css", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original.svg",   

     "Javascript","https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg",
          
     "React","https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original.svg",
          
     "Php","https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg",
          
     "Tailwind","https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg",
          
     "Figma","https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/figma/figma-original.svg",
          
    
);

?>

<h1 class="py-10 bg-clip-text bg-gradient-to-br from-slate-800 to-slate-400 text-6xl font-bold text-transparent text-center">
    Mes compétences
</h1>

<?php for ($i=0; $i<count($arraySkills); $i++):?>
    <?php if ($i %2 == 0):?>
    
    <div class="p-4 flex border-t border-slate-500">
        <div class="w-1/4 ">
            <h3 class="text-2xl font-bold mb-5"><?= $arraySkills[$i] ?></h3>
           
        </div>
        <div class="w-screen ">
            <h3 class="text-xl font-bold mb-5"> Ce que je sais faire :</h3>
           
        </div>
        </div>

    <?php else:?>
    
        <div class="w-screen ">
            
           <img class="h-10 w-10 " src=<?="$arraySkills[$i]"?> alt="logo" >
        </div>
        <div class="w-screen  ">
            <!-- <h3 class="text-2xl font-bold mb-5"></h3> -->
           
        </div>
       
    <?php endif;?>
<?php endfor;?>

   

