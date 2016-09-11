<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class QuotesTableSeeder extends Seeder
{
    private $quotes = [
        'Try not to become a man of success but a man of value - Albert Einstein',
        'If you have built castles in the air, your work need not be lost; that is where they should be. Now put foundations under them - Henry David Thoreau',
        'Inspiration and genius--one and the same - Victor Hugo',
        'To find what you seek in the road of life, the best proverb of all is that which says: "Leave no stone unturned." - Edward Bulwer Lytton',
        'Doubt whom you will, but never yourself - Christian Nestell Bovee',
        'If you would create something, you must be something - Johann Wolfgang von Goethe',
        'Every artist was first an amateur - Ralph Waldo Emerson',
        'In any project the important factor is your belief. Without belief, there can be no successful outcome - William James',
        'I avoid looking forward or backward, and try to keep looking upward - Charlotte Brontë',
        'Tomorrow\'s life is too late. Live today - Martial',
        'We can do anything we want to do if we stick to it long enough - Helen Keller',
        'I have not the shadow of a doubt that any man or woman can achieve what I have, if he or she will make the same effort, and have the same hope and faith - Mahatma Gandhi',
        'Experience is the child of thought, and thought is the child of action - Benjamin Disraeli'
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++)
        {
            DB::table('quotes')->insert([
                'quote' => $this->quotes[$i],
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }

        Artisan::call('scout:import', ['model' => 'App\Models\Quote']);
    }
}
