<?php

namespace A17\Twill\View\Components\Partials\Navigation;

use A17\Twill\Facades\TwillNavigation;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Secondary extends Component
{
    /**
     * @return array<int, \A17\Twill\View\Components\Navigation\NavigationLink>
     */
    public function getLinks(): array
    {
        return TwillNavigation::getActivePrimaryNavigationLink()?->getChildren() ?? [];
    }

    public function render(): View
    {
        // ray(TwillNavigation::getActivePrimaryNavigationLink());

        return view('twill::partials.navigation._secondary_navigation', [
            'links' => $this->getLinks(),
        ]);
    }
}
