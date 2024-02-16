<?php

/**
 * Documentation Basic
 * Thees AAA
 * Arrange -> Preparar
 * Act -> agir
 * Assert -- Verificar
 */

use App\Models\User;

use function Pest\Laravel\{actingAs, assertDatabaseCount, assertDatabaseHas, post};

it('should be able to create a new question bigger than 255 characters', function () {

    /**
     * Arrange
     */
    $user = User::factory()->create();

    actingAs($user); // Logar com esse usuario

    /**
     * Act
     */
    $request = post(route('question.store'), [
        'question' => str_repeat('*', 260) . '?',

    ]);

    /**
     * Assert
     */
    $request->assertRedirect(route('dashboard'));
    assertDatabaseCount('questions', 1);
    assertDatabaseHas('questions', ['question' => str_repeat('*', 260) . '?']);
});

it('should check if ends with question mark ?', function () {
    $user = User::factory()->create();

    actingAs($user); // Logar com esse usuario

    $request = post(route('question.store'), [
        'question' => str_repeat('*', 10),
    ]);

    $request->assertSessionHasErrors(
        ['question' => 'Are you sure that is a question it is missing the question mark in the end']
    );

    assertDatabaseCount('questions', 0);
});

it('should have at least 10 characters', function () {
    $user = User::factory()->create();

    actingAs($user); // Logar com esse usuario

    $request = post(route('question.store'), [
        'question' => str_repeat('*', 8) . '?',

    ]);

    $request->assertSessionHasErrors(['question' => __('validation.min.string', ['min' => 10, 'attribute' => 'question'])]);
    assertDatabaseCount('questions', 0);
});
