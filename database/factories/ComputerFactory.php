<?php

namespace Database\Factories;

use App\Models\Computer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ComputerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Computer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $str=Str::random(4);
        $inv_code_chain = 'INVPC-'.$str;

        $str_ip1=Str::random(3);
        $str_ip2=Str::random(3);
        $ip_chain = '192.168.'.$str_ip1.'.'.$str_ip2;

        $str=Str::random(3);
        $pc_name_chain = 'V1AMAC-'.$str;

        return [
            'lote' => 'INVPC71MAC',
            'inv_code' => $inv_code_chain,
            'brand' => 'LENOVO',
            'model' => 'M710Q DESKTOP (THINKCENTRE) - TYPE 10MR',
            'serial' => Str::random(10),
            'serial_monitor' => Str::random(10),
            'type_id' => 1,
            'ram_slot_0_id' => 2,
            'ram_slot_1_id' => 2,
            'hdd_id' => 3,
            'campus_id' => 'MAC',
            'cpu' => 'INTEL(R) CORE(TM) I5-7400T CPU @ 2.40GHZ',
            'ip' => $ip_chain,
            'mac' => Str::random(17),
            'os' => 'WINDOWS 10',
            'anydesk' => Str::random(9),
            'pc_name' => $pc_name_chain,
            'image' => 'image.jpg',
            'location' => $this->faker->name,
            'observation' => $this->faker->name,
            'created_at' => now(),
            'updated_at' => null,
            'deleted_at' => null,
            'deleted_at_status' => null,
            'status_id' => 1
        ];
    }
}
