<?php

namespace Database\Seeders;

use App\Models\PlanEstudio;
use Illuminate\Database\Seeder;

class PlanEstudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plan = new PlanEstudio();
        $plan->plan = "Plan 2011";
        $plan->save();

        $plan2 = new PlanEstudio();
        $plan2->plan = "Plan 2018";
        $plan2->save();
    }
}
