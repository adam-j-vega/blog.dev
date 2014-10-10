<?php

class PostsTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('posts')->delete();

		$post = new Post();

		$post->title = 'Storytime';

		$post->content = 'this is a story of a boy named Sue';

        $post->save();

		$post1 = new Post();

		$post1->title = 'The time is our time';

		$post1->content = 'Victory will be ours';

        $post1->save();
	}
}