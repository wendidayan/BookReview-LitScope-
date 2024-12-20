@foreach ($replies as $reply)
    <div class="reply" style="margin-left: 20px; padding-left: 15px; border-left: 2px solid #eaeaea; margin-bottom: 10px;">
        <p>
            <strong>{{ $reply->user ? $reply->user->username : 'Anonymous' }}</strong>: {{ $reply->comment }}
        </p>
        <small style="color: gray;">Posted on {{ $reply->created_at->format('M d, Y') }}</small>
        <a href="javascript:void(0)" onclick="toggleReplyForm({{ $reply->id }})" style="margin-left: 10px;">Reply</a>

        <!-- Hidden Reply Form for Replies -->
        <form id="reply-form-{{ $reply->id }}" method="POST" action="{{ route('comments.reply', $reply->id) }}" style="display: none; margin-top: 5px;">
            @csrf
            <input type="hidden" name="book_id" value="{{ $reply->book_id }}">
            <textarea name="reply" placeholder="Write your reply..." required></textarea>
            <button type="submit">Submit</button>
        </form>

        <!-- Render Nested Replies -->
        @if ($reply->replies->count())
            @include('partials.reply', ['replies' => $reply->replies])
        @endif
    </div>
@endforeach