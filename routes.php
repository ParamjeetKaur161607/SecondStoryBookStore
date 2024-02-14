<?php

$router->get('SecondStoryBookStore/contact','controllers/contact.php');
$router->get('SecondStoryBookStore/about','controllers/about.php');

$router->get('SecondStoryBookStore','controllers/user/index.php');
$router->get('SecondStoryBookStore/register','controllers/user/register.php');
$router->get('SecondStoryBookStore/login','controllers/user/login.php');


$router->post('SecondStoryBookStore/admin/adminController','controllers/admin/adminController.php');
$router->get('SecondStoryBookStore/admin','controllers/admin/login.php');
$router->post('SecondStoryBookStore/admin/register','controllers/admin/register.php');

$router->get('SecondStoryBookStore/admin/add-book-category','controllers/admin/addBookCategory.php');
$router->get('SecondStoryBookStore/admin/delete-book-category','controllers/admin/deleteCategory.php');
$router->get('SecondStoryBookStore/admin/book-category','controllers/admin/bookCategory.php');



$router->get('SecondStoryBookStore/admin/dashboard','controllers/admin/dashboard.php');
$router->get('SecondStoryBookStore/admin/add-book','controllers/admin/addBook.php');
$router->get('SecondStoryBookStore/admin/listings','controllers/admin/listings.php');
$router->get('SecondStoryBookStore/admin/orders','controllers/admin/orders.php');
$router->get('SecondStoryBookStore/admin/users','controllers/admin/users.php');
$router->get('SecondStoryBookStore/admin/rented','controllers/admin/rented.php');



