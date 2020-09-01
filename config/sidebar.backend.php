<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
     */

    'menu' => [
        [
            'title' => '',
            'items' => [
                [
                    'title' => 'Dashboard',
                    'url' => 'admin.home',
                    'fa-icon' => 'fas fa-fw fa-tachometer-alt',
                    'caret' => false
                ],
            ]
        ],
        [
            'title' => 'Libros',
            'items' => [
                [
                    'title' => 'Libros',
                    'url' => '#',
                    'fa-icon' => 'fas fa-book',
                    'caret' => true,
                    'items' => [
                        [
                            'title' => 'Libros Creados',
                            'url' => 'admin.libro.index',
                            'fa-icon' => 'fas fa-book-reader',
                        ],
                    ]
                ],

            ]
        ],
        [
            'title' => 'Instituciones',
            'items' => [
                [
                    'title' => 'Unidades Educativas',
                    'url' => '#',
                    'fa-icon' => 'fas fa-user-cog',
                    'caret' => true,
                    'items' => [
                        [
                            'title' => 'Institucion',
                            'url' => 'admin.institucion.index',
                            'fa-icon' => 'fas fa-school',
                        ],
                        [
                            'title' => 'Registrar Cursos',
                            'url' => 'admin.curso.index',
                            'fa-icon' => 'fas fa-chalkboard',
                        ],
                        [
                            'title' => 'Autorizar Docentes',
                            'url' => 'admin.roles_users.index',
                            'fa-icon' => 'fas fa-user-tie',
                        ],
                    ]
                ],
                [
                    'title' => 'Estudiantes',
                    'url' => '#',
                    'fa-icon' => 'fas fa-school',
                    'caret' => true,
                    'items' => [
                        [
                            'title' => 'Detalle',
                            'url' => 'admin.home',
                            'fa-icon' => 'fas fa-fw fa-tachometer-alt',
                        ],
                        [
                            'title' => 'Cargar',
                            'url' => 'admin.home',
                            'fa-icon' => 'fas fa-fw fa-tachometer-alt',
                        ],
                        [
                            'title' => 'Contenido',
                            'url' => 'admin.home',
                            'fa-icon' => 'fas fa-fw fa-tachometer-alt',
                        ]
                    ]
                ],
                [
                    'title' => 'Representantes',
                    'url' => '#',
                    'fa-icon' => 'fas fa-user-cog',
                    'caret' => true,
                    'items' => [
                        [
                            'title' => 'Detalle',
                            'url' => 'admin.home',
                            'fa-icon' => 'fas fa-fw fa-tachometer-alt',
                        ],
                        [
                            'title' => 'Cargar',
                            'url' => 'admin.home',
                            'fa-icon' => 'fas fa-fw fa-tachometer-alt',
                        ],
                        [
                            'title' => 'Contenido',
                            'url' => 'admin.home',
                            'fa-icon' => 'fas fa-fw fa-tachometer-alt',
                        ]
                    ]
                ],

            ]
        ],
        [
            'title' => 'PARAMETROS',
            'items' => [
                [
                    'title' => 'Institucional',
                    'url' => '#',
                    'fa-icon' => 'fas fa-cogs',
                    'caret' => true,
                    'items' => [
                        [
                            'title' => 'Periodo Lectivo',
                            'url' => 'admin.anio-lectivo.index',
                            'fa-icon' => 'fas fa-calendar-alt',
                        ],
                        [
                            'title' => 'Paralelos',
                            'url' => 'admin.paralelo.index',
                            'fa-icon' => 'fab fa-buromobelexperte',
                        ],
                        [
                            'title' => 'Asignaturas',
                            'url' => 'admin.asignatura.index',
                            'fa-icon' => 'fas fa-book-open',
                        ]
                    ]
                ],
                [
                    'title' => 'Personas',
                    'url' => '#',
                    'fa-icon' => 'fas fa-users-cog',
                    'caret' => true,
                    'items' => [
                        [
                            'title' => 'Abreviaturas',
                            'url' => 'admin.abreviatura.index',
                            'fa-icon' => 'fas fa-fw fa-tachometer-alt',
                        ],
                    ]
                ],

            ]
        ],
    ],
    'menuperfil' => [
        [
            'title' => 'Profile',
            'url' => '/mi-perfil',
            'fa-icon' => 'fas fa-user fa-sm fa-fw',
        ],
        [
            'title' => 'Settings',
            'url' => '/mi-perfil',
            'fa-icon' => 'fas fa-cogs fa-sm fa-fw',
        ],
        [
            'title' => 'Activity Log',
            'url' => '/mi-perfil',
            'fa-icon' => 'fas fa-list fa-sm fa-fw',
        ],
    ]
];
