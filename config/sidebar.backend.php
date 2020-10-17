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
                    'title' => 'Inicio',
                    'url' => 'admin.escritorio',
                    'fa-icon' => 'fas fa-fw fa-tachometer-alt',
                    'caret' => false
                ],
            ]
        ],
        [
            'title' => 'Iniciativas',
            'items' => [
                [
                    'title' => 'Listado',
                    'url' => '#',
                    'fa-icon' => 'fas fa-book',
                    'caret' => true,
                    'items' => [
                        [
                            'title' => 'Libros Creados',
                            'url' => 'admin.escritorio',
                            'fa-icon' => 'fas fa-book-reader',
                        ],
                    ]
                ],

            ]
        ],
        [
            'title' => 'Eventos',
            'items' => [
                [
                    'title' => 'Listado',
                    'url' => '#',
                    'fa-icon' => 'fas fa-user-cog',
                    'caret' => true,
                    'items' => [
                        [
                            'title' => 'Institucion',
                            'url' => 'admin.escritorio',
                            'fa-icon' => 'fas fa-school',
                        ],
                        [
                            'title' => 'Registrar Cursos',
                            'url' => 'admin.escritorio',
                            'fa-icon' => 'fas fa-chalkboard',
                        ],
                        [
                            'title' => 'Autorizar Docentes',
                            'url' => 'admin.escritorio',
                            'fa-icon' => 'fas fa-user-tie',
                        ],
                    ]
                ],
                [
                    'title' => 'Publicaciones',
                    'url' => '#',
                    'fa-icon' => 'fas fa-school',
                    'caret' => true,
                    'items' => [
                        [
                            'title' => 'Detalle',
                            'url' => 'admin.escritorio',
                            'fa-icon' => 'fas fa-fw fa-tachometer-alt',
                        ],
                        [
                            'title' => 'Cargar',
                            'url' => 'admin.escritorio',
                            'fa-icon' => 'fas fa-fw fa-tachometer-alt',
                        ],
                        [
                            'title' => 'Contenido',
                            'url' => 'admin.escritorio',
                            'fa-icon' => 'fas fa-fw fa-tachometer-alt',
                        ]
                    ]
                ],
                [
                    'title' => 'Formularios',
                    'url' => '#',
                    'fa-icon' => 'fas fa-user-cog',
                    'caret' => true,
                    'items' => [
                        [
                            'title' => 'Detalle',
                            'url' => 'admin.escritorio',
                            'fa-icon' => 'fas fa-fw fa-tachometer-alt',
                        ],
                        [
                            'title' => 'Cargar',
                            'url' => 'admin.escritorio',
                            'fa-icon' => 'fas fa-fw fa-tachometer-alt',
                        ],
                        [
                            'title' => 'Contenido',
                            'url' => 'admin.escritorio',
                            'fa-icon' => 'fas fa-fw fa-tachometer-alt',
                        ]
                    ]
                ],

            ]
        ],
        [
            'title' => 'Errores',
            'items' => [
                [
                    'title' => 'Listado',
                    'url' => '#',
                    'fa-icon' => 'fas fa-cogs',
                    'caret' => true,
                    'items' => [
                        [
                            'title' => 'Periodo Lectivo',
                            'url' => 'admin.escritorio',
                            'fa-icon' => 'fas fa-calendar-alt',
                        ],
                        [
                            'title' => 'Paralelos',
                            'url' => 'admin.escritorio',
                            'fa-icon' => 'fab fa-buromobelexperte',
                        ],
                        [
                            'title' => 'Asignaturas',
                            'url' => 'admin.escritorio',
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
                            'url' => 'admin.escritorio',
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
