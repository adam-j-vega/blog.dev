<?php

class ContentsTitleSeeder extends Seeder
{
	public function run()
	{
		// DB::table('posts')->delete();

		$post = new Post();

		$post->title = 'The time is our time';

		$post->content = 'Victory will be ours';

        $post->save();
	}
}