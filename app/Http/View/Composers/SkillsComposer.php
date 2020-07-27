<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class SkillsComposer
{
    /**
     * The skill repository implementation.
     *
     * @var skills
     */
    protected $skills;

    /**
     * Create a new skill composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->skills = collect([
            'High Quality Documentation',
            'Regression Testing',
            'Elicitation of Requirements',
            'User Interface Prototyping',
            'Verification and Validation',
            'Planning Measurement Process',
            'Problem Solving',
            'Coding'
        ]);
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('skills', $this->skills);
    }
}
