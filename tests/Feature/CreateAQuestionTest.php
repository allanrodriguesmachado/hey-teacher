<?php

/**
 * Documentation Basic
 * Thees AAA
 * Arrange -> Preparar
 * Act -> agir
 * Assert -- Verificar
 */

it('should be able to create a new question bigger than 255 characters', function () {

    /**
     * Arrange
     */
    $user = \App\Models\User::factory()->create();

    \Pest\Laravel\actingAs($user); // Logar com esse usuario

    /**
     * Act
     */
    $request = \Pest\Laravel\post(route('question.store'), [
        'question' => str_repeat('*', 260) . '?',

    ]);

    /**
     * Assert
     */
    $request->assertRedirect(route('dashboard'));
    \Pest\Laravel\assertDatabaseCount('questions', 1);
    \Pest\Laravel\assertDatabaseHas('questions', ['question' => str_repeat('*', 260) . '?']);
});

it('should check if ends with question mark ?', function () {
    $user = \App\Models\User::factory()->create();

    \Pest\Laravel\actingAs($user); // Logar com esse usuario

    $request = \Pest\Laravel\post(route('question.store'), [
        'question' => str_repeat('*', 10),
    ]);

    $request->assertSessionHasErrors(
        ['question' => 'Are you sure that is a question it is missing the question mark in the end']
    );

    \Pest\Laravel\assertDatabaseCount('questions', 0);
});

it('should have at least 10 characters', function () {
    $user = \App\Models\User::factory()->create();

    \Pest\Laravel\actingAs($user); // Logar com esse usuario

    $request = \Pest\Laravel\post(route('question.store'), [
        'question' => str_repeat('*', 8) . '?',

    ]);

    $request->assertSessionHasErrors(['question' => __('validation.min.string', ['min' => 10, 'attribute' => 'question'])]);
    \Pest\Laravel\assertDatabaseCount('questions', 0);
});
