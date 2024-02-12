<?php

/**
 * Documentation Basic
 * Thees AAA
 * Arrange -> Preparar
 * Act -> agir
 * Assert -- Verificar
 */

it('should be able to create a new question bigger than 255 characters', function () {

    // Thees AAA
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

})->todo();

it('should have at least 10 characters', function () {

})->todo();
