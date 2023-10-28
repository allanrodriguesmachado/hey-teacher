@props([
    'label',
    'name',
    'placeholder'
]);

<label
    for="{{$name}}"
    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        {{$label}}
</label>

<textarea
    id="{{$name}}"
    name="{{$name}}" rows="4"
    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border-gray-300 focus:ring-blue-500
          focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
          dark:focus:ring-blue-500 border-0"
    placeholder="{{$placeholder}}">
    {{old($name)}}
</textarea>

@error($name)
<p id="filled_success_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
        class="font-medium">Attention!</span> {{$message}}.</p>
@enderror
