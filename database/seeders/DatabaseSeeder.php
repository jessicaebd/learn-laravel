<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use App\Models\Member;
use App\Models\Category;
use App\Models\Division;
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
        User::factory(5)->create();

        // // Divison
        // Division::create([
        //     'name' => 'Pengurus Inti',
        //     'slug' => 'pengurus-inti',
        //     'jobdesk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque nihil officiis temporibus incidunt ea.'
        // ]);

        // Division::create([
        //     'name' => 'Sie Dana',
        //     'slug' => 'sie-dana',
        //     'jobdesk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque nihil officiis temporibus incidunt ea.'
        // ]);

        // Division::create([
        //     'name' => 'Sie Acara',
        //     'slug' => 'sie-acara',
        //     'jobdesk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque nihil officiis temporibus incidunt ea.'
        // ]);

        // Division::create([
        //     'name' => 'Sie Pubdok',
        //     'slug' => 'sie-pubdok',
        //     'jobdesk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque nihil officiis temporibus incidunt ea.'
        // ]);

        // Division::create([
        //     'name' => 'Sie Content Creator',
        //     'slug' => 'sie-content-creator',
        //     'jobdesk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque nihil officiis temporibus incidunt ea.'
        // ]);

        // Division::create([
        //     'name' => 'Sie Public Relation',
        //     'slug' => 'sie-public-relation',
        //     'jobdesk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque nihil officiis temporibus incidunt ea.'
        // ]);

        // Division::create([
        //     'name' => 'Sie Doa',
        //     'slug' => 'sie-doa',
        //     'jobdesk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque nihil officiis temporibus incidunt ea.'
        // ]);


        // // Category
        // Category::create([
        //     'name' => 'Free',
        //     'slug' => 'free'
        // ]);

        // Category::create([
        //     'name' => 'Paid',
        //     'slug' => 'paid'
        // ]);

        // Category::create([
        //     'name' => 'Competition',
        //     'slug' => 'competition'
        // ]);

        // Category::create([
        //     'name' => 'Shopping',
        //     'slug' => 'shopping'
        // ]);


        // // Members
        // Member::create([
        //     'division_id' => 1,
        //     'name' => 'Anggi Marito',
        //     'slug' => 'anggi-marito',
        //     'class' => 'PPA 52',
        //     'status' => 'Inti'
        // ]);

        // Member::create([
        //     'division_id' => 2,
        //     'name' => 'Mark Natama',
        //     'slug' => 'mark-natama',
        //     'class' => 'PPTI 10',
        //     'status' => 'Koordinator'
        // ]);

        // Member::create([
        //     'division_id' => 3,
        //     'name' => 'Ziva Magnolya',
        //     'slug' => 'ziva-magnolya',
        //     'class' => 'PPA 53',
        //     'status' => 'Anggota'
        // ]);

        // Member::create([
        //     'division_id' => 4,
        //     'name' => 'Lyodra',
        //     'slug' => 'lyodra',
        //     'class' => 'PPBP 13',
        //     'status' => 'Anggota'
        // ]);

        // Member::create([
        //     'division_id' => 5,
        //     'name' => 'Maria Simorangkir',
        //     'slug' => 'maria-simorangkir',
        //     'class' => 'PPTI 11',
        //     'status' => 'Koordinator'
        // ]);

        // Member::create([
        //     'division_id' => 6,
        //     'name' => 'Joy Tobing',
        //     'slug' => 'joy-tobing',
        //     'class' => 'PPA 11',
        //     'status' => 'Anggota'
        // ]);


        // // // Event
        // Event::create([
        //     'category_id' => '4',
        //     'division_id' => '2',
        //     'user_id' => '1',
        //     'member_id' => '1',
        //     'name' => 'Paid Promote',
        //     'slug' => 'paid-promote',
        //     'price' => 15000,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, dolorum omnis? Odio quod iste cupiditate enim vero mollitia tenetur nam?',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur itaque pariatur iusto commodi? Optio magnam at tempore qui sequi vitae perferendis explicabo nihil, atque, iste ea? Quisquam, aperiam adipisci. Modi facere excepturi mollitia dolores sapiente veniam eum, consequuntur non suscipit quidem neque officia quam vel laboriosam ab dolore distinctio sed libero quos repellat eaque incidunt porro. Expedita porro at incidunt tempore debitis aut dolores fuga architecto dolorum maiores minima similique pariatur eveniet voluptas doloremque perspiciatis, molestias dolor obcaecati nostrum, voluptate, amet possimus harum sit neque! Quod aut dolores deleniti quidem porro. Inventore numquam quisquam fugiat maiores recusandae obcaecati explicabo a officiis, eaque, dolorem consectetur quasi alias fuga pariatur quibusdam. Dignissimos perferendis provident, dicta blanditiis nostrum, quo nobis asperiores autem quaerat voluptatibus obcaecati ullam tempore aspernatur. Iusto dolorem possimus, dolores illo quos, fuga, voluptatum facere commodi tempore placeat officiis mollitia odio. Sit porro expedita, ducimus veniam mollitia alias fugit, quam libero, deserunt velit sint repellat cupiditate animi aspernatur beatae nihil quisquam suscipit! Incidunt excepturi aspernatur perspiciatis asperiores sunt quas sint, repellat minus temporibus quis repudiandae ratione officiis at consequatur modi fugit labore laudantium illum cumque tempora ducimus enim eum, accusamus deleniti! Nisi molestias nulla eos, architecto ex libero nam minus sequi aliquid reiciendis nesciunt? Suscipit, quaerat tenetur autem illo soluta aut necessitatibus assumenda molestiae unde sed, ipsum voluptas repellendus possimus totam quidem sunt adipisci. Temporibus explicabo quam nostrum odio eos possimus! Incidunt eius assumenda quae beatae dolorum cumque odio fugit laboriosam facere, dignissimos maxime repudiandae veritatis quasi tempora magnam sed perspiciatis.'
        // ]);

        // Event::create([
        //     'category_id' => '4',
        //     'division_id' => '2',
        //     'user_id' => '2',
        //     'member_id' => '3',
        //     'name' => 'Jasa Isi Kuesioner',
        //     'slug' => 'jasa-isi-kuesioner',
        //     'price' => 10000,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, dolorum omnis? Odio quod iste cupiditate enim vero mollitia tenetur nam?',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur itaque pariatur iusto commodi? Optio magnam at tempore qui sequi vitae perferendis explicabo nihil, atque, iste ea? Quisquam, aperiam adipisci. Modi facere excepturi mollitia dolores sapiente veniam eum, consequuntur non suscipit quidem neque officia quam vel laboriosam ab dolore distinctio sed libero quos repellat eaque incidunt porro. Expedita porro at incidunt tempore debitis aut dolores fuga architecto dolorum maiores minima similique pariatur eveniet voluptas doloremque perspiciatis, molestias dolor obcaecati nostrum, voluptate, amet possimus harum sit neque! Quod aut dolores deleniti quidem porro. Inventore numquam quisquam fugiat maiores recusandae obcaecati explicabo a officiis, eaque, dolorem consectetur quasi alias fuga pariatur quibusdam. Dignissimos perferendis provident, dicta blanditiis nostrum, quo nobis asperiores autem quaerat voluptatibus obcaecati ullam tempore aspernatur. Iusto dolorem possimus, dolores illo quos, fuga, voluptatum facere commodi tempore placeat officiis mollitia odio. Sit porro expedita, ducimus veniam mollitia alias fugit, quam libero, deserunt velit sint repellat cupiditate animi aspernatur beatae nihil quisquam suscipit! Incidunt excepturi aspernatur perspiciatis asperiores sunt quas sint, repellat minus temporibus quis repudiandae ratione officiis at consequatur modi fugit labore laudantium illum cumque tempora ducimus enim eum, accusamus deleniti! Nisi molestias nulla eos, architecto ex libero nam minus sequi aliquid reiciendis nesciunt? Suscipit, quaerat tenetur autem illo soluta aut necessitatibus assumenda molestiae unde sed, ipsum voluptas repellendus possimus totam quidem sunt adipisci. Temporibus explicabo quam nostrum odio eos possimus! Incidunt eius assumenda quae beatae dolorum cumque odio fugit laboriosam facere, dignissimos maxime repudiandae veritatis quasi tempora magnam sed perspiciatis.'
        // ]);

        // Event::create([
        //     'category_id' => '3',
        //     'division_id' => '3',
        //     'user_id' => '4',
        //     'member_id' => '3',
        //     'name' => 'Game Night',
        //     'slug' => 'game-night',
        //     'price' => 100000,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, dolorum omnis? Odio quod iste cupiditate enim vero mollitia tenetur nam?',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur itaque pariatur iusto commodi? Optio magnam at tempore qui sequi vitae perferendis explicabo nihil, atque, iste ea? Quisquam, aperiam adipisci. Modi facere excepturi mollitia dolores sapiente veniam eum, consequuntur non suscipit quidem neque officia quam vel laboriosam ab dolore distinctio sed libero quos repellat eaque incidunt porro. Expedita porro at incidunt tempore debitis aut dolores fuga architecto dolorum maiores minima similique pariatur eveniet voluptas doloremque perspiciatis, molestias dolor obcaecati nostrum, voluptate, amet possimus harum sit neque! Quod aut dolores deleniti quidem porro. Inventore numquam quisquam fugiat maiores recusandae obcaecati explicabo a officiis, eaque, dolorem consectetur quasi alias fuga pariatur quibusdam. Dignissimos perferendis provident, dicta blanditiis nostrum, quo nobis asperiores autem quaerat voluptatibus obcaecati ullam tempore aspernatur. Iusto dolorem possimus, dolores illo quos, fuga, voluptatum facere commodi tempore placeat officiis mollitia odio. Sit porro expedita, ducimus veniam mollitia alias fugit, quam libero, deserunt velit sint repellat cupiditate animi aspernatur beatae nihil quisquam suscipit! Incidunt excepturi aspernatur perspiciatis asperiores sunt quas sint, repellat minus temporibus quis repudiandae ratione officiis at consequatur modi fugit labore laudantium illum cumque tempora ducimus enim eum, accusamus deleniti! Nisi molestias nulla eos, architecto ex libero nam minus sequi aliquid reiciendis nesciunt? Suscipit, quaerat tenetur autem illo soluta aut necessitatibus assumenda molestiae unde sed, ipsum voluptas repellendus possimus totam quidem sunt adipisci. Temporibus explicabo quam nostrum odio eos possimus! Incidunt eius assumenda quae beatae dolorum cumque odio fugit laboriosam facere, dignissimos maxime repudiandae veritatis quasi tempora magnam sed perspiciatis.'
        // ]);

        // Event::create([
        //     'category_id' => '3',
        //     'division_id' => '3',
        //     'user_id' => '7',
        //     'member_id' => '3',
        //     'name' => 'SIGNIFY',
        //     'slug' => 'signal-spotify',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, dolorum omnis? Odio quod iste cupiditate enim vero mollitia tenetur nam?',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur itaque pariatur iusto commodi? Optio magnam at tempore qui sequi vitae perferendis explicabo nihil, atque, iste ea? Quisquam, aperiam adipisci. Modi facere excepturi mollitia dolores sapiente veniam eum, consequuntur non suscipit quidem neque officia quam vel laboriosam ab dolore distinctio sed libero quos repellat eaque incidunt porro. Expedita porro at incidunt tempore debitis aut dolores fuga architecto dolorum maiores minima similique pariatur eveniet voluptas doloremque perspiciatis, molestias dolor obcaecati nostrum, voluptate, amet possimus harum sit neque! Quod aut dolores deleniti quidem porro. Inventore numquam quisquam fugiat maiores recusandae obcaecati explicabo a officiis, eaque, dolorem consectetur quasi alias fuga pariatur quibusdam. Dignissimos perferendis provident, dicta blanditiis nostrum, quo nobis asperiores autem quaerat voluptatibus obcaecati ullam tempore aspernatur. Iusto dolorem possimus, dolores illo quos, fuga, voluptatum facere commodi tempore placeat officiis mollitia odio. Sit porro expedita, ducimus veniam mollitia alias fugit, quam libero, deserunt velit sint repellat cupiditate animi aspernatur beatae nihil quisquam suscipit! Incidunt excepturi aspernatur perspiciatis asperiores sunt quas sint, repellat minus temporibus quis repudiandae ratione officiis at consequatur modi fugit labore laudantium illum cumque tempora ducimus enim eum, accusamus deleniti! Nisi molestias nulla eos, architecto ex libero nam minus sequi aliquid reiciendis nesciunt? Suscipit, quaerat tenetur autem illo soluta aut necessitatibus assumenda molestiae unde sed, ipsum voluptas repellendus possimus totam quidem sunt adipisci. Temporibus explicabo quam nostrum odio eos possimus! Incidunt eius assumenda quae beatae dolorum cumque odio fugit laboriosam facere, dignissimos maxime repudiandae veritatis quasi tempora magnam sed perspiciatis.'
        // ]);

        // Event::create([
        //     'category_id' => '3',
        //     'division_id' => '3',
        //     'user_id' => '7',
        //     'member_id' => '3',
        //     'name' => 'SIGNIFY',
        //     'slug' => 'signal-spotify',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, dolorum omnis? Odio quod iste cupiditate enim vero mollitia tenetur nam?',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur itaque pariatur iusto commodi? Optio magnam at tempore qui sequi vitae perferendis explicabo nihil, atque, iste ea? Quisquam, aperiam adipisci. Modi facere excepturi mollitia dolores sapiente veniam eum, consequuntur non suscipit quidem neque officia quam vel laboriosam ab dolore distinctio sed libero quos repellat eaque incidunt porro. Expedita porro at incidunt tempore debitis aut dolores fuga architecto dolorum maiores minima similique pariatur eveniet voluptas doloremque perspiciatis, molestias dolor obcaecati nostrum, voluptate, amet possimus harum sit neque! Quod aut dolores deleniti quidem porro. Inventore numquam quisquam fugiat maiores recusandae obcaecati explicabo a officiis, eaque, dolorem consectetur quasi alias fuga pariatur quibusdam. Dignissimos perferendis provident, dicta blanditiis nostrum, quo nobis asperiores autem quaerat voluptatibus obcaecati ullam tempore aspernatur. Iusto dolorem possimus, dolores illo quos, fuga, voluptatum facere commodi tempore placeat officiis mollitia odio. Sit porro expedita, ducimus veniam mollitia alias fugit, quam libero, deserunt velit sint repellat cupiditate animi aspernatur beatae nihil quisquam suscipit! Incidunt excepturi aspernatur perspiciatis asperiores sunt quas sint, repellat minus temporibus quis repudiandae ratione officiis at consequatur modi fugit labore laudantium illum cumque tempora ducimus enim eum, accusamus deleniti! Nisi molestias nulla eos, architecto ex libero nam minus sequi aliquid reiciendis nesciunt? Suscipit, quaerat tenetur autem illo soluta aut necessitatibus assumenda molestiae unde sed, ipsum voluptas repellendus possimus totam quidem sunt adipisci. Temporibus explicabo quam nostrum odio eos possimus! Incidunt eius assumenda quae beatae dolorum cumque odio fugit laboriosam facere, dignissimos maxime repudiandae veritatis quasi tempora magnam sed perspiciatis.'
        // ]);
    }
}
