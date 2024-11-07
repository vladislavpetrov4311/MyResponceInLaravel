<table>
    <thead>
        <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>Ссылка</th>
            <th>Подписчики</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->name }}</td>
                <td>{{ $blog->description }}</td>
                <td><a href="{{ $blog->link }}">{{ $blog->link }}</a></td>
                <td>
                    <ul>
                        @php
                            $blogSubscribers = $subscribers->where('blog_id', $blog->id);
                        @endphp
                            @foreach ($blogSubscribers as $subscriber)
                                <li>{{ $subscriber->date . ' ' . $subscriber->subscribers }}</li>
                            @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>