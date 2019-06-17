@foreach ($categories as $category)

    <option value="{{$category->id ?? ""}}"

            @isset($altyn->id)

                @foreach ($altyn->categories as $category_altyn)

                    @if ($category->id == $category_altyn->id)
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
