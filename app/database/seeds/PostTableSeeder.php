<?php

class PostTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('posts')->delete();

		$user = User::first();

		$post = new Post();

		$post->title = 'Storytime';

		$post->content = 'this is a story of a boy named Sue';

		$post->user_id = $user->id;

        $post->save();

		$post1 = new Post();

		$post1->title = 'The time is our time';

		$post1->content = 'Victory will be ours';

		$post1->user_id = $user->id;

        $post1->save();
	}
}