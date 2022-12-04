<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('New Post') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">

          <form method="POST" action="{{ route('categories.store') }}">

            @csrf
            Name:
            <input type="text" name="title">
            <br>
            <br>
            Post text:
            <textarea name="post_text" id="" cols="30" rows="10"></textarea>

            <br>

            Category:
            <section name="category_id">
              @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </section>
            <button type="submit">Save</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
