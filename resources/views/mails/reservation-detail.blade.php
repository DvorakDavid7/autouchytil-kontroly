<div>
    <p>
        <b>Nová rezervace</b>
    </p>
    <p>
        Detaily rezervace:
    </p>
    <p>
        <br>
        Zákazník: {{ $reservation->first_name }} {{ $reservation->last_name }}<br>
        Služba: {{ $reservation->service }}<br>
        Datum: {{ \Carbon\Carbon::parse($reservation->date)->format('d.m.Y') }} v {{ $reservation->time }}<br>
        Kontakt: {{ $reservation->email }}, {{ $reservation->phone }}<br>

        <br>
    <hr>
    Poznámka: {{ $reservation->note }}
    <p>
</div>