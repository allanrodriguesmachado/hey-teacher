<x-app-layout>
    <x-container>
        <x-form post :action="route('question.store')">
            <x-textarea label="Questão" name="question" placeholder="Deixe uma pergunta..."/>

            <x-btn.alignment>
                <x-btn.save type="submit">Enviar</x-btn.save>
                <x-btn.reset type="reset">Cancelar</x-btn.reset>
            </x-btn.alignment>
        </x-form>
    </x-container>
</x-app-layout>
