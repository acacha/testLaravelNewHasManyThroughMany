<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create()->each(function($user) {
            $groups = factory(App\Group::class,5)->create()->each(function($group) {
                $notifications = factory(App\Notification::class,5)->make();
                $group->notifications()->saveMany($notifications);
            });
            $user->groups()->saveMany($groups);
            $user->groups2()->saveMany($groups);
        });
    }
}
