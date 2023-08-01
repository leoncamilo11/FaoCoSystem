<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $proyectos=[
          ['simbolo'=>'FAOR', 'actividad'=>'RAR0401000000', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'FAOR', 'actividad'=>'RAYSD00000000', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'OSRO/COL/001/BEL', 'actividad'=>'TFBE190020481', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'OSRO/COL/602/BRA', 'actividad'=>'TFBR190017020', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'OSRO/COL/603/SWE', 'actividad'=>'TFSE190016467', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'OSRO/RLA/701/EC ', 'actividad'=>'TFEU190017185', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'OSRO/COL/801/EC', 'actividad'=>'TFEU190018265', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'OSRO/COL/802-CHA', 'actividad'=>'TF4W190018321', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'OSRO/COL/803-CHA', 'actividad'=>'TFSE190018363', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'OSRO/COL/901/CHA', 'actividad'=>'TF4W190019205', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'OSRO/RLA/901/EC', 'actividad'=>'TFEU190019392', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'OSRO/RLA/902/EC', 'actividad'=>'TFEU190019393', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/072/COL', 'actividad'=>'TFCO250016042', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/077/COL', 'actividad'=>'TFCO250016594', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/080/COL', 'actividad'=>'TFCO190017231', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/081/COL', 'actividad'=>'TFCO250017312', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/083/COL', 'actividad'=>'TFCO250017415', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/084/COL', 'actividad'=>'TFCO250017208', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/085/COL', 'actividad'=>'TFCO250017224', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/086/COL', 'actividad'=>'TFCO250017258', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/087/COL', 'actividad'=>'TFCO250017274', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/089/COL', 'actividad'=>'TFCO250017369', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/090/COL', 'actividad'=>'TFCO250017320', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/092/COL', 'actividad'=>'TFCO250017336', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/093/COL', 'actividad'=>'TFCO250017409', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/094/COL', 'actividad'=>'TFCO250017408', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/095/COL', 'actividad'=>'TFCO250017407', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/096/COL', 'actividad'=>'TFCO250018065', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/098/COL', 'actividad'=>'TFCO250018066', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/099/COL', 'actividad'=>'TFCO250018067', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/102/COL', 'actividad'=>'TFCO250018333', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/103/COL', 'actividad'=>'TFCO250018352', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/106/COL', 'actividad'=>'TFCO250018494', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/107/COL', 'actividad'=>'TFCO250019248', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/108/COL', 'actividad'=>'TFCO250018552', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/109/COL', 'actividad'=>'TFCO250019339', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/110/COL', 'actividad'=>'TFCO250019236', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/111/COL', 'actividad'=>'TFCO250019237', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/112/COL', 'actividad'=>'TFCO250019296', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/113/COL', 'actividad'=>'TFCO250019295', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/114/COL', 'actividad'=>'TFCO250019303', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/116/COL', 'actividad'=>'TFCO250019347', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/117/COL', 'actividad'=>'TFCO250019340', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/122/COL', 'actividad'=>'TFCO250019537', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/125/COL', 'actividad'=>'TFCO250020357', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/124/COL', 'actividad'=>'TFCO250020394', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/127/COL', 'actividad'=>'TFCO250020358', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UTF/COL/128/COL', 'actividad'=>'TFCO250020396', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UNJP/COL/075/PBF  ', 'actividad'=>'TF8G350016554', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UNJP/COL/100/PBF ', 'actividad'=>'TF8G350018167', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UNJP/COL/105/UNJ', 'actividad'=>'TF5C350019416', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'TCP/RLA/3510', 'actividad'=>'OTCP140015186', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'TCP/COL/3603/C2', 'actividad'=>'OTCP160017243', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'TCP/RLA/3611', 'actividad'=>'OTCP160016398', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'TCP/COL/3701/C1', 'actividad'=>'OTCP180018067', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'TCP/COL/3702/C2', 'actividad'=>'OTCP180018070', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'TCP/COL/3703/C3', 'actividad'=>'OTCP180018100', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'TCP/COL/3704', 'actividad'=>'OTCP180019156', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'TCP/COL/3705/C4', 'actividad'=>'OTCP180019164', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'TCP/RLA/3710', 'actividad'=>'OTCP180018242', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'TCP/RLA/3715', 'actividad'=>'OTCP180019084', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'TCP/COL/3801', 'actividad'=>'OTCP200020080', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/COL/041/GFF', 'actividad'=>'TF5G110015522', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/COL/061/GFF', 'actividad'=>'TF5G110019487', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/COL/062/GFF', 'actividad'=>'TF5G110017306', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/COL/069/EC', 'actividad'=>'TFEU110016483', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/COL/076/SWE ', 'actividad'=>'TFSE110016661', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/COL/091/EC', 'actividad'=>'TFEU110018386', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/COL/097/EC', 'actividad'=>'TFEU110018207', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/COL/101/EC', 'actividad'=>'TFEU110018318', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/COL/115/ITA', 'actividad'=>'TFIT110020048', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/COL/123/SWE', 'actividad'=>'TFSE110020304', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/GLO/337/GFF', 'actividad'=>'TF5G110015355', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/RLA/195/BRA', 'actividad'=>'TFBR110012544', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/RLA/199/BRA', 'actividad'=>'TFBR110012719', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/RLA/202/EC', 'actividad'=>'TFEU110014063', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/SLM/001/MEX', 'actividad'=>'TFMX110214421', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/GLO/347/MUL', 'actividad'=>'TFAA970012764', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/RLA/229/EC', 'actividad'=>'TFEU110020216', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/INT/244/EC', 'actividad'=>'TFEU110015298', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GCP/INT/696/EC', 'actividad'=>'TFEU110017044', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'PROGRAMA REGULAR FBA', 'actividad'=>'RAM0101370000', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'GF/RLCDD', 'actividad'=>'RA30401001M00', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'UNFA/GLO/616/UND', 'actividad'=>'TF8U4V0015437', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'SFER/GLO/201-MUL', 'actividad'=>'TFAA429016373', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'SFER/GLO/301-MUL', 'actividad'=>'TFAA423418269', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'SFER/GLO/302-MUL', 'actividad'=>'TFAA422218270', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'MTF/GLO/145/UEP', 'actividad'=>'TF2U97005390', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1'],
          ['simbolo'=>'FMM/GLO/118/MUL', 'actividad'=>'TFAA400016589', 'administrativo_id'=>'1', 'financiero_id'=>'1', 'coordinador_id'=>'1', 'activo'=>'1']
        ];

        foreach ($proyectos as $proyecto) {
          // code...
          DB::table('proyectos')->insert([$proyecto]);
        }

        /**$faker = Faker\Factory::create();
        //Se hace la consulta por medio del query builder de laravel con la restriccion por rol
        $arrayA = DB::table('role_users')->select('user_id')->where('role_id', '9')->get();
        $arrayF = DB::table('role_users')->select('user_id')->where('role_id', '10')->get();
        $arrayC = DB::table('role_users')->select('user_id')->where('role_id', '7')->get();
        //Se crea un array para lamacenar los ids que se van a asignar de forma aleatorio por cada rol
        $valoresA = array();
        $valoresF = array();
        $valoresC = array();
        //Se hace un conteno de los objetos que vienen en el array arrojado por el query builder
        $numeroA = count($arrayA);
        $numeroF = count($arrayF);
        $numeroC = count($arrayC);
        //Se hace un ciclo for para recorrer el resultado del query builder dependiente de la
        //cantidad de objetos que haya encontrado y se asignan a el array previamente creado
        for ($i=0; $i < $numeroA; $i++) {
          // code...
          $valorA = $arrayA[$i]->user_id;
          $valoresA[$i]=$valorA;
        }
        for ($i=0; $i < $numeroF; $i++) {
          // code...
          $valorF = $arrayF[$i]->user_id;
          $valoresF[$i]=$valorF;
        }
        for ($i=0; $i < $numeroC; $i++) {
          // code...
          $valorC = $arrayC[$i]->user_id;
          $valoresC[$i]=$valorC;
        }*/
        //dd($administrativo);
        //$ofinanciero = DB::table('rol_users')->select('user_id')->where('rol_id', '10')->get();
        //$ocoordinador = DB::table('rol_users')->select('user_id')->where('rol_id', '7')->get();

        //dd($numero);
        //[$keys, $values] = Arr::divide($array);



        //dd($valores);

        /*dowhile ($a>=$numero) {
          $administrativo = $array[$a]->user_id;
          $administrativos[$administrativo];
        };*/


        //dd($array[]->user_id);
        //dd($financiero);
        //dd($coordinador);

        //Llenado aleatorio de los campos para proyecto
        /**for ($i=0; $i < 10; $i++) {
          // code...
          DB::table('proyectos')->insert(array(
            'simbolo' => Str::random(5),
            'actividad' => Str::random(10),
            'administrativo_id' => $faker->randomElement($valoresA),
            'financiero_id' => $faker->randomElement($valoresF),
            'coordinador_id' => $faker->randomElement($valoresC),
            'activo' => $faker->randomElement([1,2]))
          );
        }*/
    }
}
