<header class="bgColor-1 w-full h-12 fixed shadow ff-pri">
    <div class="w-9/12 fx fx-j-btw">
        <div class="color-pri px-2 py-2 fx fx-j-c fx-i-c">
            <i class="fa fa-user fs-xl"></i>
            <h2 class="px-1">Adminstrator</h2>
        </div>
        <div class="w-32 fx fx-j-a fx-i-c py-2 color-pri">
            <i class="fa fa-user"></i>
            <p class="px-2"><?= auth()->user()->email ?></p>
        </div>
    </div>
</header>
