<?php

namespace App\View\Components\front;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Services\ContactService;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public $contacts;
    public function __construct(ContactService $contactService)
    {
        $this->contact = $contactService->getAllContacts();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.header');
    }
}
