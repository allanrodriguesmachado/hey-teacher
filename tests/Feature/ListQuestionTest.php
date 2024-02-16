<?php

use App\Models\{Question, User};

use function Pest\Laravel\{actingAs, get};

it('sould list all the questions', function () {
    $user      = User::factory()->create();
    $questions = Question::factory()->count(5)->create();

    actingAs($user);

    $response = get(route('dashboard'));

    foreach ($questions as $question) {
        $response->assertSee($question->question);
    }
});
