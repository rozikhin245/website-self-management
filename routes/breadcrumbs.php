<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Profile (Edit)
Breadcrumbs::for('profile.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Profile', route('profile.edit'));
});

// Finance - Index
Breadcrumbs::for('finance.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Finance', route('finance.index'));
});

// Finance - Create
Breadcrumbs::for('finance.create', function (BreadcrumbTrail $trail) {
    $trail->parent('finance.index');
    $trail->push('Tambah Finance', route('finance.create'));
});

// Finance - Edit
Breadcrumbs::for('finance.edit', function (BreadcrumbTrail $trail, $finance) {
    $trail->parent('finance.index');
    $trail->push('Edit Finance', route('finance.edit', $finance));
});

// Finance Chart
Breadcrumbs::for('finance.chart', function (BreadcrumbTrail $trail) {
    $trail->parent('finance.index');
    $trail->push('Finance Chart', url('/finance-chart'));
});

// Target - Index
Breadcrumbs::for('target.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Target Tabungan', route('target.index'));
});

// Target - Create
Breadcrumbs::for('target.create', function (BreadcrumbTrail $trail) {
    $trail->parent('target.index');
    $trail->push('Tambah Target', route('target.create'));
});

// Target - Edit
Breadcrumbs::for('target.edit', function (BreadcrumbTrail $trail, $target) {
    $trail->parent('target.index');
    $trail->push('Edit Target', route('target.edit', $target));
});

// Book Diary - Index
Breadcrumbs::for('bookDiary.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Book Diary', route('bookDiary.index'));
});

// Book Diary - Create
Breadcrumbs::for('bookDiary.create', function (BreadcrumbTrail $trail) {
    $trail->parent('bookDiary.index');
    $trail->push('Tambah Diary', route('bookDiary.create'));
});

// Book Diary - Edit
Breadcrumbs::for('bookDiary.edit', function (BreadcrumbTrail $trail, $diary) {
    $trail->parent('bookDiary.index');
    $trail->push('Edit Diary', route('bookDiary.edit', $diary));
});

// Favorite Diaries
Breadcrumbs::for('favorite.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Favorite Diaries', route('favorite.index'));
});
