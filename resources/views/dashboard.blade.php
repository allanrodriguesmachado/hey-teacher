<x-app-layout>
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">--}}
{{--            {{ __('Hey Teacher') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

    <x-container>
        <x-form post :action="route('question.store')">
            <x-textarea label="Sua Mensagem" name="question"/>

            <div class="flex justify-end items-center">
                <x-button.secondary type="reset">Cancelar</x-button.secondary>
                <x-button.primary type="submit">Salvar</x-button.primary>
            </div>
        </x-form>

        <hr class="border-gray-700 my-4">

        <div class="dark:text-gray-200 uppercase font-bold mb-3">List of Questions</div>

        <div class="dark:text-gray-400 space-y-2">
            @foreach($questions AS $item)
                <x-question :question="$item" />
            @endforeach
        </div>
    </x-container>
</x-app-layout>
