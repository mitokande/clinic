<div class="centering-block">
    <section class="centered modal-message">
        <section class="from">
            <p>Send A Message To: <a href="/doctor/{{$doctor->username}}" target="_blank">{{$doctor->getFullName()}}</a></p>
        </section><!-- /.from -->
        <section class="message">

            <div class="row">
                <label>Email:</label>
                <input wire:model="email" class="form-control" />
            </div>
            <div class="row">
                <label>Password:</label>
                <input wire:model="password" class="form-control" />
            </div>

        </section><!-- /.message -->
        <div class="buttons">
            <a style="cursor:pointer;" wire:click="$emit('closeModal')" class="cancel" target="_blank">Cancel</a>
            <a style="cursor:pointer;" wire:click="LoginBeforeMessage()" class="reply" target="_blank">Login</a>
        </div><!-- /.buttons -->
    </section><!-- /.modal-message -->
</div><!-- /.centering-block -->
