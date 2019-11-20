<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * This feature test ensures that comment, id and password is provided
     *  when a json post request is made
     *
     */
    public function testJsonRequiresIdCommentAndPassword()
    {
        $this->json('POST', 'api/createComment')
            ->assertStatus(422)
            ->assertJson(
                [
                    "message" => "The given data was invalid.",
                    "errors" => [
                        "id" => [
                            "The id field is required."
                        ],
                        "password" => [
                            "The password field is required."
                        ],
                        "comments" => [
                            "The comments field is required."
                        ]

                    ]]
            );
    }
    

    /**
     * This feature test ensures that comments are appended to an exiting users comment
     *
     */

    public function testJsonCommentIsCreatedSuccessfully()
    {


        $payload = [
            'id' => 1,
            'password' => 'testinpass',
            'comments' => 'Am just testing'
        ];

        $response = $this->json('POST', 'api/createComment', $payload)
            ->assertStatus(201)
            ->assertJson([
                'success' => 'comment successfully added'

            ]);


    }
}
