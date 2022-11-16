<div class="deneme2">
    {{-- The whole world belongs to you. --}}
    <div class="deneme">
        <h1>Appointment Details</h1>
        <button wire:click="$emit('closeModal')">Close</button>

    </div>
    <hr>
    <div class="card-info">
        <h2><span>Hasta Adı:</span> {{$appointment->patient->getFullName()}}</h2>
        <h2><span>Randevu Zamanı:</span> {{$appointment->appointment_time}}</h2>
        <h2><span>Randevu Konusu:</span> <?php echo substr($appointment->appointment_subject,2,-2); ?></h2>
        <h2><span>Randevu Ücreti:</span></h2>
    </div>



</div>
