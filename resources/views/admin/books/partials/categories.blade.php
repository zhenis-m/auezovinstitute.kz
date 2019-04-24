@foreach ($categories as $category)

    <option value="{{$category->id ?? ""}}"

            @isset($book->id)

            @foreach ($book->categories as $category_book)

            @if ($book->id == $category_book->id)
            selected="selected"
        @endif

        @endforeach

        @endisset

    >
        {!! $delimiter ?? "" !!}{{$category->title ?? ""}}
    </option>

    @if (count($category->children) > 0)

        @include('admin.books.partials.categories', [
          'categories' => $category->children,
          'delimiter'  => ' - ' . $delimiter
        ])

    @endif
@endforeach
