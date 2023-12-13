@foreach($students as $item)
    {{ $item->id }}
    {{ $item->full_name }}
    {{ $item->curs }}
    {{ $item->speciality }} <br /><br />
@endforeach
