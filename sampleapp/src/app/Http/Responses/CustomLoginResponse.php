<?php

namespace App\Http\Responses;

use Filament\Pages\Dashboard;
use Illuminate\Http\RedirectResponse;
use Livewire\Features\SupportRedirects\Redirector;
use Filament\Http\Responses\Auth\LoginResponse as BaseLoginResponse;
use Illuminate\Contracts\Support\Htmlable;

class CustomLoginResponse extends BaseLoginResponse
{
    public function toResponse($request): RedirectResponse|Redirector
    {
        $email = auth()->user()->email;


        if (str_ends_with($email, '@admin.com')) {
            return redirect()->to(Dashboard::getUrl(panel: 'admin'));
    }

        if (str_ends_with($email, '@mhs.com')) {
            return redirect()->to(Dashboard::getUrl(panel: 'mhs'));
        }

        return parent::toResponse($request);
    }

    public function getHeading(): string|Htmlable
    {
        return __('Single Sign On');
    }
}
