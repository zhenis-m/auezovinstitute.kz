@foreach ($categories as $category)

    <option value="{{$category->id ?? ""}}"

            @isset($museum->id)

                @foreach ($altyn->categories as $category_museum)

                    @if ($category->id == $category_museum->id)
                        selected="selected"
                    @endif

                @endforeach

            @endisset

    >
        {!! $delimiter ?? "" !!}{{$category->title ?? ""}}
    </option>

    @if (count($category->children) > 0)

        @include('admin.museums.partials.categories', [
          'categories' => $category->children,
          'delimiter'  => ' - ' . $delimiter
        ])

    @endif
@endforeach
