<?php

use Spatie\Permission\Models\Role;

// Vytvoření role
$role = Role::create(['name' => 'Administrátor']);

// Přiřazení role uživateli
Permission::assignRole($role, 1);

// Kontrola, zda má uživatel danou roli
