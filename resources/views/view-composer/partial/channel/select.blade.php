<select name="{{ $field_name ?? 'channel_id' }}" id="{{ $field_name ?? 'channel_id' }}">
    @foreach ($channels as $channel)
        <option value="{{ $channel->id }}">{{ $channel->name }}</option>
    @endforeach
</select>