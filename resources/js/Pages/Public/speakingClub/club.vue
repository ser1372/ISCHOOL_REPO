<script setup>
import Logo from '../../../Components/Logo.vue';
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
    <section class="cards mt-[100px]">
        <div class="container">
            <div class="cards_wrapper">

                <div class="angle_wrapper">
                    <div class="card">
                        <img class="card_img" src="https://thispersondoesnotexist.com/image" alt="">

                    </div>
                </div>

                <div class="angle_wrapper">
                    <div class="card">
                        <img class="card_img" src="https://thispersondoesnotexist.com/image" alt="">

                    </div>
                </div>

                <div class="angle_wrapper">
                    <div class="card">
                        <img class="card_img" src="https://thispersondoesnotexist.com/image" alt="">

                    </div>
                </div>

                <div class="angle_wrapper">
                    <div class="card">
                        <img class="card_img" src="https://thispersondoesnotexist.com/image" alt="">

                    </div>
                </div>

                <div class="angle_wrapper">
                    <div class="card">
                        <img class="card_img" src="https://thispersondoesnotexist.com/image" alt="">

                    </div>
                </div>

                <div class="angle_wrapper">
                    <div class="card">
                        <img class="card_img" src="https://thispersondoesnotexist.com/image" alt="">

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
    background-position: 575px 213px, center;
    background-size: auto, 110px;
    background-repeat: no-repeat;
}



.cards_wrapper::after {
    content: "";
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(50%, -66px);
    padding: 6px 12px;
    box-sizing: border-box;
    border-radius: 4px;
    color: #fff;
}

.angle_wrapper {
    position: absolute;
    left: calc(50% - 50px);
    height: 50%;
    transform-origin: 50% 100%;
}
.angle_wrapper:nth-child(2) { transform: rotate(60deg); }
.angle_wrapper:nth-child(3) { transform: rotate(120deg); }
.angle_wrapper:nth-child(4) { transform: rotate(180deg); }
.angle_wrapper:nth-child(5) { transform: rotate(240deg); }
.angle_wrapper:nth-child(6) { transform: rotate(300deg); }

.card {
    position: relative;
    display: inline-flex;
    flex-flow: column nowrap;
    justify-content: start;
    align-items: center;
    text-align: center;
    height: 100px; width: 100px;
    transform-origin: 50% 33px;
}
.angle_wrapper:nth-child(2) .card { transform: rotate(-60deg); }
.angle_wrapper:nth-child(3) .card { transform: rotate(-120deg); }
.angle_wrapper:nth-child(4) .card { transform: rotate(-180deg); }
.angle_wrapper:nth-child(5) .card { transform: rotate(-240deg); }
.angle_wrapper:nth-child(6) .card { transform: rotate(-300deg); }

.card_img {
    width: 66px;
    height: 66px;
    box-sizing: border-box;
}
</style>
