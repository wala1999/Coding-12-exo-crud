<?php

use Illuminate\Database\Seeder;

class TestimonialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Testimonial::class,1)->create();
    }
}
