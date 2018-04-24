<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
       // $this->assertTrue(true);

        //Given I have to records in the database that posts and each one is posted a month a part.

        $first = factory(Post::class)->create();

        $second = factory(Post::class)->create([

            'created_at' => \Carbon\Carbon::now()->subMonth()

        ]);

        // when I fetch the archives
        $posts = Post::archives();


        //then the response should be in the proper format
//        $this->assertCount(2, $posts);

        $this->assertEquals([

            [
                "year"=> $first->created_at->format('Y'),
                "month"=> $first->created_at->format('F'),
                "published" => 1
            ],

            [
                "year"=> $second->created_at->format('Y'),
                "month"=> $second->created_at->format('F'),
                "published" => 1
            ]

        ], $posts);

    }
}
