<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Nav extends Component
{
    public $role, $menus;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($role)
    {
        $this->role = $role;

        if ($role == 'Admin') {
            $this->menus = [
                [
                    'route' => 'users',
                    'name' => 'Users Management',
                    'submenu' => [
                        ['name' => 'Users', 'route' => 'users'],
                        ['name' => 'Units', 'route' => 'units']
                    ],
                    'icon' => 'user',
                    'slugs' => ['usersTable', 'usersForm']
                ],
                [
                    'route' => 'traffic',
                    'name' => 'Traffic',
                    'submenu' => [],
                    'icon' => 'signal',
                    'slugs' => ['traffic']
                ],
                [
                    'route' => 'report',
                    'name' => 'Report',
                    'submenu' => [],
                    'icon' => 'agenda',
                    'slugs' => ['report']
                ]
            ];
        } else {
            $this->menus = ['Complaint', 'Lost & Found', 'Report'];
        }
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav');
    }
}
