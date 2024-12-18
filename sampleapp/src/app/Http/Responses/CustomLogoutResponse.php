<?php

namespace App\Http\Responses;

use Filament\Facades\Filament;
use Illuminate\Http\RedirectResponse;
use Filament\Http\Responses\Auth\LogoutResponse as BaseLogoutResponse;

class CustomLogoutResponse extends BaseLogoutResponse
{
    public function toResponse($request): RedirectResponse
    {
        if (Filament::getCurrentPanel()->getId() === 'admin') {
            return redirect()->to('/app/login');
        } else if (Filament::getCurrentPanel()->getId() === 'mhs') {
            return redirect()->to('/app/login');
        }
 
        return parent::toResponse($request);
    }
}
