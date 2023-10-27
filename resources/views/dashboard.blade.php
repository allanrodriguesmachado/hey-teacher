<x-app-layout>
    {{--    <x-slot name="header">--}}
    {{--        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">--}}
    {{--            {{ __('Dashboard') }}--}}
    {{--        </h2>--}}
    {{--    </x-slot>--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{route('question.store')}}" method="post">
                @csrf
                <div class="p-6 text-gray-900 dark:text-gray-900">
                    <label for="question" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        question</label>
                    <textarea id="question" name="question" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 border-0"
                              placeholder="Leave a question...">{{old('question')}}</textarea>

                    @error('question')
                    <p id="filled_success_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                            class="font-medium">Attention!</span> {{$message}}.</p>
                    @enderror

                    <div class="flex justify-end items-center">
                        <button type="submit"
                                class="mt-2  text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                            Send Question
                        </button>

                        <button type="reset"
                                class="mt-2  text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">
                            Cancel Question
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
