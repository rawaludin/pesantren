<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // create role
        $member = new App\Role();
        $member->name         = 'member';
        $member->display_name = 'Member'; // optional
        $member->save();

        $admin = new App\Role();
        $admin->name         = 'admin';
        $admin->display_name = 'Administrator'; // optional
        $admin->save();

        // create permission
        $memberPlaylist = new App\Permission();
        $memberPlaylist->name         = 'member-playlist';
        $memberPlaylist->display_name = 'Manage Playlist by Member (self)';
        $memberPlaylist->save();

        $adminPlaylist = new App\Permission();
        $adminPlaylist->name         = 'admin-playlist';
        $adminPlaylist->display_name = 'Manage Playlist by Admin';
        $adminPlaylist->save();

        // Assign permisson to role
        $member->attachPermissions([$memberPlaylist]);
        $admin->attachPermissions([$adminPlaylist]);

        // create admin
        $user = App\User::create([
            'name' => 'administrator',
            'email' => 'admin@pesantren.dev',
            'password' => bcrypt('password')
        ]);

        // role attach alias
        $user->attachRole($admin);

        // create editor
        foreach (range(1,3) as $i) {
            $user = App\User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('password')
            ]);

            // role attach alias
            $user->attachRole($member);
        }
    }
}
