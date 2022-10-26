<div class="calendar-before">
    <button class="calendar-button" wire:click="goToPreviousMonth()">Previous Month</button>
    <div style="display: flex;flex-direction: column">
        <span>Current Month:</span>
        <strong>{{$startsAt->format('F')}}</strong>
    </div>
    <button class="calendar-button" wire:click="goToNextMonth()">Next Month</button>
</div>
