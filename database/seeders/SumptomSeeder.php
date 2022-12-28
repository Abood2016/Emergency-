<?php

namespace Database\Seeders;

use App\Models\Symptom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SumptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $is_needed = [
            'صعوبة أو ضيق في التنفّس',
            '  ألم الصدر',
            'تغيّرات في الرؤية',
            'صعوبة في النطق',
            ' الإغماء والدوار المفاجئ',
            'الارتباك أو حدوث تغيّرات في الحالة الذهنية',
            'أي ألم مفاجئ أو شديد',
            ' نزيف خارج عن السيطرة',
            'تقيؤ وإسهال شديد ومستمر',
            ' خروج دم مع السُعال أو القيء',
            'ألم غير طبيعي في البطن',
        ];

        $not_needed = [
            ' تسوس الاسنان',
            'شلل',
            'هشاشة العظام',
            'السعال',
            'الانيميا ',
            'وممكن بعد سن اليأس ياخذ مواعيد ',
            'الحساسيه',
            'الم الحلق ',
            'القولون',
        ];

        foreach ($is_needed as $key => $value) {
            Symptom::create([
                'symptom' => $value,
                'is_need' => "1",
            ]);
        }

        foreach ($not_needed as $key => $value) {
            Symptom::create([
                'symptom' => $value,
                'is_need' => "0",
            ]);
        }
    }
}
