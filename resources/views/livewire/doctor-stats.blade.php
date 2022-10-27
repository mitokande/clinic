<div>
    <span class="rating">
        <i class="icon_star" wire:click="star(1)"></i>
        <i class="icon_star" wire:click="star(2)"></i>
        <i class="icon_star" wire:click="star(3)"></i>
        <i class="icon_star" wire:click="star(4)"></i>
        <i class="icon_star" wire:click="star(5)"></i>
        <small>({{$rating}})</small>
        <a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="../img/badges/badge_1.svg" width="15" height="15" alt=""></a>
    </span>

    <ul class="statistic">
        <li>{{$views}} Views</li>
        <li>{{$patients}} Patients</li>
    </ul>
</div>
