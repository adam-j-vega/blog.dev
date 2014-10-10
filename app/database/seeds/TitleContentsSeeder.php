<?php

class TitleContentsSeeder extends Seeder
{
	public function run()
	{
		// DB::table('posts')->delete();

		$post = new Post();

		$post->title = 'Storytime';

		$post->content = 'this is a story of a boy named Sue';

        $post->save();
	}
}