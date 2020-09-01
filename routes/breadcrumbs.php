<?php
/**
 * Created by PhpStorm.
 * User: ZBOOK
 * Date: 05/08/2020
 * Time: 21:45
 */

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Inicio
Breadcrumbs::for('admin.home', function ($trail) {
    $trail->push('Inicio', route('admin.home'));
});


Breadcrumbs::for('admin.anio-lectivo.create', function ($trail) {
    $trail->push('Home', route('admin.home'));
    $trail->push('Listado', route('admin.anio-lectivo.index'));
    $trail->push('Crear', route('admin.anio-lectivo.create'));
});

Breadcrumbs::for('admin.paralelo.create', function ($trail) {
    $trail->push('Home', route('admin.home'));
    $trail->push('Listado', route('admin.paralelo.index'));
    $trail->push('Crear', route('admin.paralelo.create'));
});

Breadcrumbs::for('admin.asignatura.create', function ($trail) {
    $trail->push('Home', route('admin.home'));
    $trail->push('Listado', route('admin.asignatura.index'));
    $trail->push('Crear', route('admin.asignatura.create'));
});

Breadcrumbs::for('admin.abreviatura.create', function ($trail) {
    $trail->push('Home', route('admin.home'));
    $trail->push('Listado', route('admin.abreviatura.index'));
    $trail->push('Crear', route('admin.abreviatura.create'));
});

Breadcrumbs::for('admin.institucion.create', function ($trail) {
    $trail->push('Home', route('admin.home'));
    $trail->push('Listado', route('admin.institucion.index'));
    $trail->push('Crear', route('admin.institucion.create'));
});

Breadcrumbs::for('admin.libro.create', function ($trail) {
    $trail->push('Home', route('admin.home'));
    $trail->push('Listado', route('admin.libro.index'));
    $trail->push('Crear', route('admin.libro.create'));
});

Breadcrumbs::for('admin.curso.create', function ($trail) {
    $trail->push('Home', route('admin.home'));
    $trail->push('Listado', route('admin.curso.index'));
    $trail->push('Crear', route('admin.curso.create'));
});