<?php

it('test_the_application_returns_a_successful_response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('has user', function () {
    $users = \App\Models\User::factory()->create(['name' => 'momo']);
    $this->assertDatabaseHas(
        'users',
        [
            'name' => 'momo',
        ]
    );
});
