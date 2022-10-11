<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Models\Post;



class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // records in database posted a month seperate
        $first = factory(Post::class)->create();
        $second = factory(Post::class)->create([
            'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);

        // When i fetch the archives

        $post = Post::archives();

        // Then the response should be in the proper format

        // $this->assertCount(2, $posts);
        $this->assertequals([
        [
          "year"=>$first->created_at->format('Y'),
          "month"=>$first->created_at->format('F'),
          "published" => 1
        ],
        [
            "year"=>$first->created_at->format('Y'),
            "month"=>$first->created_at->format('F'),
            "published" => 1
        ]
        ], $posts);
    }
}
