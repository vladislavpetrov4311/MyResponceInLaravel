<table>
    <thead>
        <tr>
            <th>Blog ID</th>
            <th>Date</th>
            <th>Subscribers</th>
        </tr>
    </thead>
    <tbody>
        @foreach($subScribers as $subscriber)
            <tr>
                <td>{{ $subscriber->blog_id }}</td>
                <td>{{ $subscriber->date }}</td>
                <td>{{ $subscriber->subscribers }}</td>
            </tr>
        @endforeach
    </tbody>
</table>