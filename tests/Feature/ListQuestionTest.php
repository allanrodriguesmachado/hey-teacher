<?php

it('sould list all the questions', function () {
    $user      = \App\Models\User::factory()->create();
    $questions = \App\Models\Question::factory()->count(5)->create();

    \Pest\Laravel\actingAs($user);

    $response = \Pest\Laravel\get(route('dashboard'));

    foreach ($questions as $question) {
        $response->assertSee($question->question);
    }
});
