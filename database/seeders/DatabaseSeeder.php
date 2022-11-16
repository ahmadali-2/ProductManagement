<?php

namespace Database\Seeders;

use App\Models\Arrival;
use App\Models\BasicInfo;
use App\Models\HeroImage;
use App\Models\HeroOverlay;
use App\Models\Social;
use App\Models\Subscribe;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        BasicInfo::create([
            'website_logo' => '/Images/BasicInfo/website_logo.png',
            'website_title' => 'Sample Website',
            'address' => 'Sample address will come here',
            'telephone' => '+92 332 3300 244',
            'email' => 'auroraapps.pk@gmail.com',
        ]);

        HeroImage::create([
            'hero_image' => '/Images/Hero/basic_hero.jpg',
        ]);

        HeroOverlay::create([
            'hO_silverHeading' => 'Here is the sample heading',
            'hO_heading' => 'Here is the heading',
            'hO_description' => 'Here is the description of the hero image advertisement and much more.'
        ]);

        Arrival::create([
            'arrival_image' => '/Images/Arrival/basic_arrival.jpg',
            'arrival_heading' => 'Here is the basic arrival heading',
            'arrival_description' => 'Here is the arrival description sample',
        ]);

        Subscribe::create([
            'subs_heading' => 'Here is the subs heading',
            'subs_description' => 'Here is the subscribers description comes',
        ]);

        Social::create([
            'social_whatsapp' => "+923323300244",
            'social_facebook' => 'https://www.facebook.com/AuroraApps.pk',
            'social_linkedin' => 'No linkedin',
            'social_twitter' => 'No twitter',
        ]);

        $user = User::find(1);
        $user->update([
            'profile_photo_path' => 'Images/Profile/profile.jpg'
        ]);
    }
}
