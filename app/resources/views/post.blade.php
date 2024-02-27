<x-app-layout>

<h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Post</h1>

<div class="form dark:text-gray-200">
<h2>Create New Post</h2>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="/posts">
        @csrf
        <div>
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="content">Content:</label><br>
            <textarea id="content" name="content">{{ old('content') }}</textarea>
        </div>
        <button type="submit">Submit</button>
    </form>

</div>

</x-app-layout>
