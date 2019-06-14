@foreach ($categories as $category)

    <option value="{{$category->id ?? ""}}"

            @isset($keruen->id)

                @foreach ($halyk->categories as $category_keruen)

                    @if ($category->id == $category_keruen->id)
                        selected="selected"
                    @endif

                @endforeach

            @endisset

    >
        {!! $delimiter ?? "" !!}{{$category->title ?? ""}}
    </option>

    @if (count($category->children) > 0)

        @include('admin.keruens.partials.categories', [
          'categories' => $category->children,
          'delimiter'  => ' - ' . $delimiter
        ])

    @endif
@endforeach
