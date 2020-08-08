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
                'slug' => 'name-of-skill',
                'name' => 'Name of Skill'
            ],
            [
                'slug' => 'classification-of-skill',
                'name' => 'Classification of Skill'
            ],
            [
                'slug' => 'prerequisites-for-skill',
                'name' => 'Prerequisites for Skill'
            ],
            [
                'slug' => 'related-software-engineering',
                'name' => 'Related Software Engineering Area(s)'
            ],
            [
                'slug' => 'rationale-for-skill',
                'name' => 'Rationale for Skill'
            ],
            [
                'slug' => 'roles-for-skill',
                'name' => 'Roles for Skill'
            ],
            [
                'slug' => 'work-related-to-skill',
                'name' => 'Work Related to Skill'
            ],
            [
                'slug' => 'real-world-example',
                'name' => 'Real-World Example'
            ],
            [
                'slug' => 'role-of-academia',
                'name' => 'Role of Academia or Industry in Cultivating the Skill'
            ],
            [
                'slug' => 'tools-supporting-the-skill',
                'name' => 'Tools Supporting the Skill'
            ],
            [
                'slug' => 'skill-self-assessment',
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
