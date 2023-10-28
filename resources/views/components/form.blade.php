@props([
    'action',
    'post' => null,
    'put' => null,
    'patch' => null,
    'delete' => null
]);

<form action="{{route('question.store')}}" method="post">
    @csrf

    {{$slot}}

    @if($put)
        @method('PUT')
    @endif

    @if($patch)
        @method('PATCH')
    @endif

    @if($delete)
        @method('DELETE')
    @endif
</form>
