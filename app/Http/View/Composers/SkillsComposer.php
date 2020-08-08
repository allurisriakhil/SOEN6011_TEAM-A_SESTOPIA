<?php

namespace App\Http\View\Composers;

use App\Models\Skill;
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
        $this->skills = Skill::all(['slug', 'name', 'knowledge_area'])->load('author');
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
