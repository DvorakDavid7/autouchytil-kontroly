<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationDetail;
use Livewire\Attributes\Validate;

class ReservationForm extends Component
{
    #[Validate('required|string|max:255')]
    public string $name = '';

    #[Validate('required|string|max:255')]
    public string $surname = '';

    #[Validate('required|email|max:255')]
    public string $email = '';

    #[Validate('required|string|max:20')]
    public string $phone = '';

    #[Validate('required|date')]
    public string $date = '';

    #[Validate('required|regex:/^\d{2}:\d{2}$/')]
    public string $time = '';

    #[Validate('nullable|string|max:250')]
    public ?string $note = '';

    protected function messages(): array
    {
        return [
            'name.required'       => 'Jméno je povinné.',
            'surname.required'    => 'Příjmení je povinné.',
            'email.required'      => 'E-mail je povinný.',
            'phone.required'      => 'Telefon je povinný.',
            'date.required'       => 'Datum rezervace je povinné.',
            'time.required'       => 'Čas je povinný.',

            'name.max'       => 'Jméno nesmí překročit 255 znaků.',
            'surname.max'    => 'Příjmení nesmí překročit 255 znaků.',
            'email.max'      => 'E-mail nesmí překročit 255 znaků.',
            'phone.max'      => 'Telefon nesmí překročit 20 znaků.',
            'note.max'       => 'Poznámka nesmí překročit 250 znaků.',

            'email.email'         => 'E-mail musí být ve správném formátu.',
        ];
    }

    public function save()
    {
        $reservation = Reservation::create($this->validate());

        session()->put('reservation', $reservation);

        Mail::to('dvorakdavid7@gmail.com')->send(new ReservationDetail($reservation));

        if (app()->environment('production')) {
            $this->dispatchBrowserEvent('conversion-tracked', [
                'url' => route('reservation.confirmed')
            ]);
        }

        return redirect()->route('reservation.confirmed');
    }

    public function render()
    {
        return view('livewire.reservation-form');
    }
}
