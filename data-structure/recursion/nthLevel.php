<?php 

$dsn = "mysql:host=local.phpmyadmin.com;dbname=nth-level";
$user = "root";
$passwd = "password";


try {
    $pdo = new PDO($dsn, $user, $passwd); 


    $result = $pdo->query("SELECT * FROM categories", PDO::FETCH_OBJ);
    $categories = [];

    foreach($result as $row){
        $categories[$row->parentCategory][] = $row;
    }

    function showCategoryTree($categories, int $n){
        if(isset($categories[$n])){
            foreach($categories[$n] as $category){
                echo str_repeat("-", $n). "". $category->categoryName. "\n";
                showCategoryTree($categories, $category->id);
            }
        }
        return true;
    }

    showCategoryTree($categories, 0);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}



