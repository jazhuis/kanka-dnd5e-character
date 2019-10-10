<?php

namespace Kanka\Dnd5eCharacter;

class Template
{

    /**
     * Translation key used for the name of the template
     * @return string
     */
    public function name()
    {
        return __($this->alias() . '::template.name');
    }

    /**
     * Alias for languages
     * @return string
     */
    public function alias()
    {
        return 'dnd5echaracter';
    }

    /**
     * View name to render the attribute template
     * @return string
     */
    public function view()
    {
        return $this->alias() . '::template';
    }

    /**
     * Attributes of the template
     * @return array
     */
    public function attributes()
    {
        return config('dnd5echaracter.attributes');
    }
}
