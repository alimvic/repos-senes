<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//agregamos el modelo de permisos de spatie
use Spatie\Permission\Models\Permission;


class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Operaciones sobre tabla roles
            'Ver-rol',
            'Crear-rol',
            'Editar-rol',
            'Borrar-rol',

            //Operaciones sobre tabla usuarios
            'Ver-Usuario',
            'Crear-Usuario',
            'Editar-Usuario',
            'Borrar-Usuario',

            //Operacions sobre tabla formulario
            'Ver-formulario',
            'Crear-formulario',
            'Editar-formulario',
            'Borrar-formulario'
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }  
    }
}
