<?php

//write a php code to sum all the numbers in an array using recursion and sort the array in ascending order

function sum($items)
{
    $result = 0;
    foreach ($items as $item) {
        if (!is_array($item)) {
            $result += $item;
        } else {
            $result += sum($item);
        }
    }


    return $result;
}

print_r(sum([1, [2], [[3], 4], 5]));

// write a function to generate custome post type and custom taxonomy
function customPostType() {
    $labels = array(
        'name' => _x('Books', 'post type general name'),
        'singular_name' => _x('Book', 'post type singular name'),
        'add_new' => _x('Add New', 'book'),
        'add_new_item' => __('Add New Book'),
        'edit_item' => __('Edit Book'),
        'new_item' => __('New Book'),
        'all_items' => __('All Books'),
        'view_item' => __('View Book'),
        'search_items' => __('Search Books'),
        'not_found' => __('No books found'),
        'not_found_in_trash' => __('No books found in the Trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Books'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Holds our books and book specific data',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'has_archive' => true,
    );
    register_post_type('book', $args);
}

//make an abstract class and extend it to create a class
abstract class AbstractClass
{
    // Force Extending class to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }
}