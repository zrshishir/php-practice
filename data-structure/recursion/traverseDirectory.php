<?php 

function showFiles(string $directoryName, Array &$allFiles = []){
    $files = scandir($directoryName);

    foreach($files as $key => $value){
        $path = realpath($directoryName. DIRECTORY_SEPARATOR. $value);
        if(! is_dir($path)){
            $allFiles[] = $path;
        }else if($value != '.' && $value != '..'){
            showFiles($path, $allFiles);
            $allFiles[] = $path;
        }
    }
    return true;
}

$files = [];
showFiles('.', $files);

foreach($files as $file){
    echo $file . "\n";
}