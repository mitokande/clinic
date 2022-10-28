<div class="centering-block">
    <section class="centered modal-message">
        <section class="from">
            <p>Send A Message To: <a href="/doctor/{{$doctor->getUserName($doctor->getFullName())}}" target="_blank">{{$doctor->getFullName()}}</a></p>
        </section><!-- /.from -->
        <section class="message">
            <label>Your Name:{{\Illuminate\Support\Facades\Auth::guard('patients')->user()->getFullName()}}</label>
            <div class="row">
                <label>Your Message:</label>
                <textarea wire:model="content" class="form-control"></textarea>
            </div>

        </section><!-- /.message -->
        <div class="buttons">
            <a style="cursor:pointer;" wire:click="$emit('closeModal')" class="cancel" target="_blank">Cancel</a>
            <a style="cursor:pointer;" wire:click="SendMessage()" class="reply" target="_blank">Reply</a>
        </div><!-- /.buttons -->
    </section><!-- /.modal-message -->
</div><!-- /.centering-block -->
