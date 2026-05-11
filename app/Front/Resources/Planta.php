<?php

namespace App\Front\Resources;

use App\Models\Planta as PlantaModel;
use WeblaborMx\Front\Inputs\ID;
use WeblaborMx\Front\Inputs\Text;
use WeblaborMx\Front\Inputs\Textarea;
use WeblaborMx\Front\Inputs\Date;

class Planta extends Resource
{
    public $base_url = '/plantas';
    public $model = PlantaModel::class;
    public $title = 'nombre';
    public $label = 'Planta';

    public function fields()
    {
        return [
            ID::make(),
            Text::make('Nombre', 'nombre')
                ->rules('required'),
            Text::make('Especie', 'especie')
                ->rules('required'),
            Date::make('Fecha de Registro', 'fecha_registro')
                ->rules('required'),
            Textarea::make('Descripción', 'descripcion'),
        ];
    }
}
