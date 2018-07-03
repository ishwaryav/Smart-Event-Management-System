<?php
    // People Module, by KaotiK and kevinpetit

    // The line below will make sure that our module is cloneable. If you change the name of the folder, it will still work.
    $modversion['name'] = ucfirst(basename(__DIR__));
    // The version of our module.
    $modversion['version'] = 1.00;
    // A description of our first module!
    $modversion['description'] = "Our very first module that contains a people database!";
    // The authors of the module. You may put your own name here :)
    $modversion['author'] = "Ishwarya";
    // The credits of the module. Always credit everyone ;).
    $modversion['credits'] = "Ishwarya";
    // A link to the help page. We don't have one.
    $modversion['help'] = "";
    // The license of our module. This **SHOULD ALWAYS BE GNU GPL**.
    $modversion['license'] = "GNU GPL 2 or later";
    // Wether or not our module is an official XOOPS module. It is not.
    $modversion['official'] = 0;
    // The image that will be shown in the XOOPS admin.
    $modversion['image'] = "images/people.png";
    // This makes sure that our module still works if the name of our module is changed.
    $modversion['dirname'] = basename(__DIR__);
    // If we want to have a backend to our module, we can enable this here.
    $modversion['hasAdmin'] = 0;
    // If we want our module to show up in the main menu, we set this to 1.
    $modversion['hasMain'] = 1;
?>