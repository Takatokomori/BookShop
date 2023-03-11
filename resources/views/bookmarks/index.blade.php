<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <table class="table table-striped">
        <thead>
            <tr>
            <th>ブックナンバー</th>
            <th>ブック名</th>
            <th>作成日</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookmarks as $book)
            <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
        {{ $bookmarks->links()}}
    </div>
</x-app-layout>