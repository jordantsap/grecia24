<?php
//
// // /
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', url('/'));
});
//
// // Home > Company
Breadcrumbs::for('company', function ($trail) {
    $trail->parent('home');
    $trail->push('Company', url('company'));
});

// // Home > Blog
Breadcrumbs::for('destinations', function ($trail) {
    $trail->parent('home');
    $trail->push('Destinations', url('destinations'));
});
// // // Home > Blog
Breadcrumbs::for('catalog', function ($trail) {
    $trail->parent('home');
    $trail->push('Catalog', url('catalog'));
});

// // Home > contact
Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('home');
    $trail->push('Contact', url('contact'));
});
Breadcrumbs::for('login', function ($trail) {
    $trail->parent('home');
    $trail->push('Login', url('login'));
});
Breadcrumbs::for('register', function ($trail) {
    $trail->parent('home');
    $trail->push('Register', url('register'));
});
// // Home > Blog > [Category]
// Breadcrumbs::for('category', function ($trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category->id));
// });
//
// // Home > Blog > [Category] > [Post]
// Breadcrumbs::for('post', function ($trail, $post) {
//     $trail->parent('category', $post->category);
//     $trail->push($post->title, route('post', $post->id));
// });

?>
