@foreach ($categories as $category)

    <option value="{{$category->id ?? ""}}"

            @isset($director->id)

                @foreach ($director->categories as $category_director)

                    @if ($category->id == $category_director->id)
                        selected="selected"
                    @endif

                @endforeach

            @endisset

    >
        {!! $delimiter ?? "" !!}{{$category->title ?? ""}}
    </option>

    @if (count($category->children) > 0)

        @include('admin.directors.partials.categories', [
          'categories' => $category->children,
          'delimiter'  => ' - ' . $delimiter
        ])

    @endif
@endforeach
