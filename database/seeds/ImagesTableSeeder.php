<?php

use App\Models\Image;
use App\Models\Slider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sliders = Slider::all();

        //for slider images
        foreach ($sliders as $slider)
        {
            $slider->image()->firstOrCreate([
                'name' => 'slider-' . $slider->caption,
                'path' => 'images/sliders/' . strtolower($slider->title)
            ]);
        }

        DB::table('images')->truncate();

        Image::truncate();
    }
}
