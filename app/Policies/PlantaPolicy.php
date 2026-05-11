<?php

namespace App\Policies;

use App\Models\Planta;
use App\Models\User;

class PlantaPolicy
{
    // Permite todo a cualquier usuario autenticado
    public function viewAny(User $user): bool { return true; }
    public function view(User $user, Planta $planta): bool { return true; }
    public function create(User $user): bool { return true; }
    public function update(User $user, Planta $planta): bool { return true; }
    public function delete(User $user, Planta $planta): bool { return true; }
}
