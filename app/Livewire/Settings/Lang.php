<?php

namespace App\Livewire\Settings;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Livewire\Component;


class Lang extends Component
{
    public $currentLocale;

    public function mount()
    {
        // Set the initial locale
        $this->currentLocale = app()->getLocale();
    }

    public function toggleLanguage()
    {
        // Switch between 'en' and 'ar'
        $this->currentLocale = $this->currentLocale === 'en' ? 'ar' : 'en';

        // Update the application locale
        App::setLocale($this->currentLocale);

        // Store the selected locale in the session
        Session::put('locale', $this->currentLocale);
        return redirect()->to(request()->header('Referer'));
    
    }
    public function render()
    {
        return view('livewire.settings.lang');
    }
}
