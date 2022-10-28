<div class="deneme2">
    {{-- The whole world belongs to you. --}}
    <div class="deneme">
        <h1>Appointment Details</h1>
        <button wire:click="$emit('closeModal')">Close</button>

    </div>
    <hr>
    <div class="card-info">
        <h2><span>Patient Name:</span> {{$appointment->patient->getFullName()}}</h2>
        <h2><span>Appointment Time:</span> {{$appointment->appointment_time}}</h2>
        <h2><span>Appointment Subject:</span> {{$appointment->appointment_subject}}</h2>
        <h2><span>Appointment Price:</span></h2>
    </div>



</div>
