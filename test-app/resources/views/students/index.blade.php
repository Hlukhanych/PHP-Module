@foreach($students as $item)
    {{ $item->id }}
    {{ $item->full_name }}
    {{ $item->curs }}
    {{ $item->speciality }} <br /><br />
@endforeach

<select id="specialitySelect">
    <option value="SA">SA</option>
    <option value="SO">SO</option>
    <option value="M">M</option>
    <option value="PM">PM</option>
</select>

<button onclick="selectSpeciality()">Вибрати спеціальності</button>

<script>
    function selectSpeciality() {
        var selectedSpeciality = document.getElementById('specialitySelect').value;
        var url = "{{ route('students.show', ['student' => '##speciality##']) }}"

        url = url.replace('##speciality##', selectedSpeciality);
        window.location.href = url;
    }
</script>
