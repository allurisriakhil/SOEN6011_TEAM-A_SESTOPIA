<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class TableOfContentComposer
{
    /**
     * The skill repository implementation.
     *
     * @var content
     */
    protected $content;

    /**
     * Create a new skill composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->content = [
            [
                'slug' => 'name',
                'name' => 'Name of Skill'
            ],
            [
                'slug' => 'classification',
                'name' => 'Classification of Skill'
            ],
            [
                'slug' => 'prerequisites',
                'name' => 'Prerequisites for Skill'
            ],
            [
                'slug' => 'related_software_engineering_area',
                'name' => 'Related Software Engineering Area(s)'
            ],
            [
                'slug' => 'rationale',
                'name' => 'Rationale for Skill'
            ],
            [
                'slug' => 'roles',
                'name' => 'Roles for Skill'
            ],
            [
                'slug' => 'related_work',
                'name' => 'Work Related to Skill'
            ],
            [
                'slug' => 'real_world_example',
                'name' => 'Real-World Example'
            ],
            [
                'slug' => 'role_of_academia',
                'name' => 'Role of Academia or Industry in Cultivating the Skill'
            ],
            [
                'slug' => 'tools',
                'name' => 'Tools Supporting the Skill'
            ],
            [
                'slug' => 'self_assessment',
                'name' => 'Skill Self-Assessment'
            ],
            [
                'slug' => 'references',
                'name' => 'References'
            ],
        ];
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('content', $this->content);
    }
}
