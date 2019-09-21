<?php

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
// Home > Blog > [Category]
Breadcrumbs::for('destinations.show', function ($trail, $destination) {
  $trail->parent('destinations');
  $trail->push($destination->title, route('destinations.show', $destination->id));
});
// // // Home > Blog
Breadcrumbs::for('catalog', function ($trail) {
    $trail->parent('home');
    $trail->push('Catalog', url('catalog'));
});
// Home > Blog > [Category]
Breadcrumbs::for('businesstype', function ($trail, $businesstype) {
  $trail->parent('catalog');
  $trail->push($businesstype->title, route('businesstype', $businesstype->id));
});
Breadcrumbs::for('business', function ($trail, $business) {
  $trail->parent('catalog');
  $trail->push($business->title, route('business.show', $business->id));
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

Breadcrumbs::for('terms', function ($trail) {
    $trail->parent('home');
    $trail->push('Terms', url('terms'));
});
Breadcrumbs::for('video', function ($trail) {
    $trail->parent('home');
    $trail->push('Video', url('video'));
});

Breadcrumbs::for('drivers', function ($trail) {
    $trail->parent('home');
    $trail->push('Drivers', url('drivers'));
});

Breadcrumbs::for('posts', function ($trail) {
    $trail->parent('home');
    $trail->push('Posts', url('posts'));
});
// Home > Blog > [Category]
// Breadcrumbs::for('posts.show', function ($trail, $post) {
//   $trail->parent('posts');
//   $trail->push($post->title,  url('posts.show', $post->id));
// });
