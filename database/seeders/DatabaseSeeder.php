<?php

namespace Database\Seeders;

use App\Library\Str;
use App\Library\Token;
use App\Models\Content;
use App\Models\Program;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    private $objectives = [ 'Education', 'Dedication', 'Undivided focus', "Skill acquisition", "Positive impact"];

    private $activites = [
        [
            'title' => "Children empowerment",
            "content" => "Encourage children to be creative and innovative amongst themselves through talent exhibitions and awards. Help package, corporate resourcefulness. The foundation guides children towards achieving a better future.",
            "image" => 'images/programs/children-empowerment.jpg',
            'subtitle' => "We empower the future"
        ],
        [
            'title' => "Advocacy",
            "content" => "Sydmond foundation gives support for a course of action of any child / children. We also aim to influence decisions within the social systems and the institutions.",
            "image" => 'images/programs/advocacy.jpg',
            'subtitle' => "We influence positive change"
        ],
        [
            'title' => "Value Re-orientation",
            "content" => "Indeed the optional path we can take to secure the future of the upcoming foundation and the generation is through value Re-orientation.",
            "image" => 'images/programs/values.jpg',
            'subtitle' => "We build the best minds"
        ],
        [
            'title' => "Moral Lessons",
            "content" => "Sydmond Foundation teaches the principles of what is right and wrong behavior and also know the different between good and evil.",
            "image" => 'images/programs/moral-lessons-2022-06-19-160016.jpg',
            'subtitle' => "We secure morals and values"
        ],
        [
            'title' => "Patriotism",
            "content" => "Sydmond Foundation will work towards expressing a great love and respect for each other and also for their country.",
            "image" => 'images/programs/patroitism.jpg',
            'subtitle' => "We encourage loyalty to our Country"
        ],
        [
            'title' => "Consultancy",
            "content" => "Sydmond Foundation gives advice, provide support, love, and care to the under-privilege people, children, elderly and the society at large.",
            "image" => 'images/programs/consultancy.jpg',
            'subtitle' => "We support advice and show care"
        ],
    ];

    private $teams = [
        [
            'name' => 'MBAH CELESTINA OBIAGELI',
            'role' => 'President',
            'type' => 'trustee'
        ],
        [
            'name' => 'MBAH SIDNEY CHUKWUJINDU',
            'role' => 'Director',
            'type' => 'trustee'
        ],
        [
            'name' => 'AMAH HENRY CHUKWUEBUKA (ENGR)',
            'role' => 'Secretary',
            'type' => 'trustee'
        ],
        [
            'name' => 'AMAH MARCEL OKECHUKWU',
            'role' => 'Member',
            'type' => 'trustee'
        ],
        [
            'name' => 'Mba Celestina Obiageli (Mrs.)',
            'role' => 'Member',
            'type' => 'management'
        ],
        [
            'name' => 'Engr. Amah Henry Chukwuebuka',
            'role' => 'Member',
            'type' => 'management'
        ],
        [
            'name' => 'Mrs. Amah Sandra Odinakachukwu',
            'role' => 'Member',
            'type' => 'management'
        ],
    ];

    public function run(){
        $content = Content::first();
        if(!$content){
            Content::create([
                'vision' => "Helping less privileged, children and elderly.",
                'goal' => "To carter for the welfare and social needs of children and elderly",
                'objectives' => json_encode($this->objectives),
                'mission' => "To help improve and inspire hope of individuals and improve quality care for the underprivileged people particularly children and elderly.",
                'about' => "<p>Sydmond Foundation is all about empowering, improving and inspiring hope of individuals especially the underprivileged people, children and elderly.</p>
                <p>We discover the children, save the Child, give them hope to attain her destiny.</p>",
                'history' => "<p>Sydmond foundation was established on 28th February, 2010 with the sole aim of empowering, improving and inspiring hope of individual especially under privilege people, children and elderly.</p>
                <p>The foundation was registered in 2012 with corporate affairs commission (CAC). In has gone a long way in bringing and carrying the needs of the underprivileged by providing them with their basic needs, supporting the children academically as they are the future of the people and world at large.</p>
                ",
            ]);
        }

        $programs = Program::all();

        if ($programs->count() < 1) {
            foreach ($this->activites as $activity) {
                $slug = Str::slug($activity['title']);
                Program::create([
                    'title' => $activity['title'],
                    'slug' => $slug,
                    'subtitle' => $activity['subtitle'],
                    'content' => $activity['content'],
                    'image' => $activity['image']
                ]);
            }
        }

        $teams = Team::all();
        if($teams->count() < 1){
            foreach ($this->teams as $key => $value) {
                $unique_id = Token::unique('teams');
                Team::create([
                    'unique_id' => $unique_id,
                    'name' => $value['name'],
                    'role' => $value['role'],
                    'type' => $value['type']
                ]);
            }
        }
    }
}
