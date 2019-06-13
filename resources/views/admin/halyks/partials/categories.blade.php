@foreach ($categories as $category)

    <option value="{{$category->id ?? ""}}"

            @isset($halyk->id)

                @foreach ($halyk->categories as $category_halyk)

                    @if ($category->id == $category_halyk->id)
                        selected="selected"
                    @endif

                @endforeach

            @endisset

    >
        {!! $delimiter ?? "" !!}{{$category->title ?? ""}}
    </option>

    @if (count($category->children) > 0)

        @include('admin.halyks.partials.categories', [
          'categories' => $category->children,
          'delimiter'  => ' - ' . $delimiter
        ])

    @endif
@endforeach
