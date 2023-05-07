<script setup>
let arrClub = [
    'third',
    'second',
    'fourth',
    'first',
    'five',
];
</script>

<template>
    <div class="flex justify-center ">
        <div>
            <h2 class="text-center font-semibold text-4xl mb-[50px]">Speaking Club</h2>
            <div class="max-w-[28.125rem]">
                <p class="text-center text-lg font-normal">{{ $t('speakingClub.ptitle') }}</p>
            </div>
        </div>
    </div>
    <section class="cards mt-[100px] hidden lg:block">
        <div class="container">
            <div class="cards_wrapper">
                <div class="angle_wrapper" v-for="club in arrClub" :key="club">
                    <div class="card">
                        <img class="card_img" :src="`/storage/club/${club}.png`" :alt="club">
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style>
.cards_wrapper {
    position: relative;
    height: 485px;
    font: bold 11px/1em "Arial", sans-serif;
    background-image: url("/storage/logo.png");
    background-position: center calc(55% + 25px);
    background-size: 165px, 51px;
    background-repeat: no-repeat;
}


.cards_wrapper::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(50%, -66px);
    padding: 6px 12px;
    box-sizing: border-box;
    border-radius: 4px;
    color: #fff;
}

.angle_wrapper {
    position: absolute;
    left: calc(50% - 90.5px); /* половина ширины карты (181px) */
    height: 50%;
    transform-origin: 50% 100%;
}

.angle_wrapper:nth-child(1) {
    transform: rotate(0deg);
}

.angle_wrapper:nth-child(2) {
    transform: rotate(72deg);
}

.angle_wrapper:nth-child(3) {
    transform: rotate(144deg);
}

.angle_wrapper:nth-child(4) {
    transform: rotate(216deg);
}

.angle_wrapper:nth-child(5) {
    transform: rotate(288deg);
}


.card {
    position: relative;
    display: inline-flex;
    flex-flow: column nowrap;
    justify-content: start;
    align-items: center;
    text-align: center;
    width: 181px;
    height: 181px;
    transform-origin: 50% 33px;
}

.angle_wrapper:nth-child(1) .card {
    transform: rotate(0deg);
}

.angle_wrapper:nth-child(2) .card {
    transform: rotate(-72deg);
}

.angle_wrapper:nth-child(3) .card {
    transform: rotate(-144deg);
}

.angle_wrapper:nth-child(4) .card {
    transform: rotate(-216deg);
}

.angle_wrapper:nth-child(5) .card {
    transform: rotate(-288deg);
}


.card_img {
    width: 181px;
    height: 181px;
    box-sizing: border-box;
}

</style>
