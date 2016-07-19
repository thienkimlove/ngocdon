<?php

use App\Category;
use App\Setting;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");

        Model::unguard();

        
        $settings = [
            [
                'name' => 'META_INDEX_TITLE',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_INDEX_DESC',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_INDEX_KEYWORDS',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_CATEGORY_DESC',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_CATEGORY_KEYWORDS',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_POST_KEYWORDS',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_CONTACT_TITLE',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_CONTACT_DESC',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_CONTACT_KEYWORDS',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_VIDEO_TITLE',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_VIDEO_DESC',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_VIDEO_KEYWORDS',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_QUESTION_TITLE',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_QUESTION_DESC',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_QUESTION_KEYWORDS',
                'value' => 'VitaminC'
            ],

            [
                'name' => 'META_DELIVERY_TITLE',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_DELIVERY_DESC',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_DELIVERY_KEYWORDS',
                'value' => 'VitaminC'
            ],
        ];

        if (Setting::count() == 0) {

            Setting::truncate();

            Setting::insert($settings);
        }

        if (User::count() == 01) {
            User::truncate();

            factory(User::class)->create([
                'password' => bcrypt('232323'),
                'email' => 'tieumaster@yahoo.com'
            ]);
        }

        if (Category::count() == 0) {

           $biquyet = Category::create([
                'name' => 'Bí quyết làm đẹp',
                'seo_name' => 'Bí quyết làm đẹp',
                'keywords' => 'Bí quyết làm đẹp',
                'desc' => 'Bí quyết làm đẹp',
                'parent_id' => null,
                'index_display' => 1,
            ]);

            Category::create([
                'name' => 'Thực đơn giảm cân',
                'seo_name' => 'Thực đơn giảm cân',
                'keywords' => 'Thực đơn giảm cân',
                'desc' => 'Thực đơn giảm cân',
                'parent_id' => $biquyet->id,
                'index_display' => 1,
            ]);

            Category::create([
                'name' => 'Tập luyện giảm cân',
                'seo_name' => 'Tập luyện giảm cân',
                'keywords' => 'Tập luyện giảm cân',
                'desc' => 'Tập luyện giảm cân',
                'parent_id' => $biquyet->id,
                'index_display' => 1,
            ]);

            Category::create([
                'name' => 'Tư vấn giảm cân',
                'seo_name' => 'Tư vấn giảm cân',
                'keywords' => 'Tư vấn giảm cân',
                'desc' => 'Tư vấn giảm cân',
                'parent_id' => $biquyet->id,
                'index_display' => 1,
            ]);

            Category::create([
                'name' => 'Câu chuyện thành công',
                'seo_name' => 'Câu chuyện thành công',
                'keywords' => 'Câu chuyện thành công',
                'desc' => 'Câu chuyện thành công',
                'parent_id' => null,
                'index_display' => 2,
            ]);

            Category::create([
                'name' => 'Chia sẻ',
                'seo_name' => 'Chia sẻ',
                'keywords' => 'Chia sẻ',
                'desc' => 'Chia sẻ',
                'parent_id' => null,
                'index_display' => 0,
            ]);

            Category::create([
                'name' => 'Sự kiện',
                'seo_name' => 'Sự kiện',
                'keywords' => 'Sự kiện',
                'desc' => 'Sự kiện',
                'parent_id' => null,
                'index_display' => 0,
            ]);

        }

        Model::reguard();

        DB::statement("SET foreign_key_checks=1");

    }
}
