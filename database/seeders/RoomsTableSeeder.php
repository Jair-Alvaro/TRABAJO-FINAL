<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['tipo_nombre' => 'Doble',
            'descripcion'=> 'Habitación mas amplia que una individual, para dos personas.',
            'precio_habitacion' => '200',
            'piso' => '1',
            'estado' => 'A',
            'ruta_foto' => 'doble1.jpeg',
       ],
           ['tipo_nombre' => 'Doble',
           'descripcion'=> 'Habitación mas amplia que una individual, para dos personas.',
           'precio_habitacion' => '250',
           'piso' => '2',
           'estado' => 'A',
           'ruta_foto' => 'doble2.jpeg',
       ],
           ['tipo_nombre' => 'Doble',
           'descripcion'=> 'Habitación mas amplia que una individual, para dos personas.',
           'precio_habitacion' => '300',
           'piso' => '1',
           'estado' => 'A',
           'ruta_foto' => 'doble3.jpeg',
       ],
           ['tipo_nombre' => 'Doble',
           'descripcion'=> 'Habitación mas amplia que una individual, para dos personas.',
           'precio_habitacion' => '230',
           'piso' => '1',
           'estado' => 'A',
           'ruta_foto' => 'doble4.jpeg',
       ],
           ['tipo_nombre' => 'Doble',
           'descripcion'=> 'Habitación mas amplia que una individual, para dos personas.',
           'precio_habitacion' => '350',
           'piso' => '2',
           'estado' => 'A',
           'ruta_foto' => 'doble5.jpeg',
       ],
           ['tipo_nombre' => 'Triple',
           'descripcion'=> 'Habitación mas amplia que una doble, para tres personas.',
           'precio_habitacion' => '350',
           'piso' => '2',
           'estado' => 'A',
           'ruta_foto' => 'triple1.jpeg',
       ],
           ['tipo_nombre' => 'Triple',
           'descripcion'=> 'Habitación mas amplia que una individual, para dos personas.',
           'precio_habitacion' => '400',
           'piso' => '1',
           'estado' => 'A',
           'ruta_foto' => 'triple2.jpeg',
       ],
           ['tipo_nombre' => 'Triple',
           'descripcion'=> 'Habitación mas amplia que una individual, para dos personas.',
           'precio_habitacion' => '450',
           'piso' => '1',
           'estado' => 'A',
           'ruta_foto' => 'triple3.jpeg',
       ],
           ['tipo_nombre' => 'Individual',
           'descripcion'=> 'Habitación para una sola persona.',
           'precio_habitacion' => '200',
           'piso' => '1',
           'estado' => 'A',
           'ruta_foto' => 'ind1.jpeg',
       ],
           ['tipo_nombre' => 'Individual',
           'descripcion'=> 'Habitación para una sola persona.',
           'precio_habitacion' => '150',
           'piso' => '2',
           'estado' => 'A',
           'ruta_foto' => 'ind2.jpeg',
       ],
           ['tipo_nombre' => 'Individual',
           'descripcion'=> 'Habitación para una sola persona.',
           'precio_habitacion' => '150',
           'piso' => '2',
           'estado' => 'A',
           'ruta_foto' => 'ind3.jpeg',
       ],
           ['tipo_nombre' => 'Individual',
           'descripcion'=> 'Habitación para una sola persona.',
           'precio_habitacion' => '200',
           'piso' => '1',
           'estado' => 'A',
           'ruta_foto' => 'ind4.jpeg',
       ],
           ['tipo_nombre' => 'Individual',
           'descripcion'=> 'Habitación para una sola persona.',
           'precio_habitacion' => '100',
           'piso' => '1',
           'estado' => 'A',
           'ruta_foto' => 'ind5.jpeg',
   ],        
        ];
       DB::table('rooms')->insert($data);
    }
}
