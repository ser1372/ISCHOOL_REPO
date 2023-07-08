<script setup>
import ClubBanners from './clubBanners.vue';
import Textbanner from "../Components/textbanner.vue";
import IconArrow from "./iconArrow.vue";
import Logo from "../../../Components/Logo.vue";
import DescriptionMain from "@/Components/DescriptionMain.vue";

const arrClub = [
	'third',
	'second',
	'fourth',
	'first',
	'five',
];
</script>

<template>
	<section id="speakingclub">
		<DescriptionMain class="lg:mt-0 mt-[3rem]" titleH2="Speaking Club" :titleP="$t('speakingClub.ptitle')">
			<!--DESKTOP VERSION-->
			<div class="cards_wrapper mt-[100px] hidden lg:block mb-[120px]">
				<div class="relative">
					<ClubBanners>
						<div class="flex justify-center">
							<div class="circle">
								<div class="card" v-for="(club, index) in arrClub" :key="club"
										 :style="{ '--angle': index * (360 / arrClub.length) + 'deg' }">
									<img class="w-[181px] h-[181px] dynamic-rotate" :src="`/storage/club/${club}.png`"
											 :alt="club">
								</div>
							</div>
						</div>
					</ClubBanners>
				</div>
			</div>
			<!--END DESKTOP VERSION-->
			<!--MOBILE VERSION-->
			<div class="grid place-items-center lg:hidden">
				<Textbanner reverse="left" id="index1mob">
					<p class="font-semibold">{{ $t("speakingClub.banners.index1") }}</p>
				</Textbanner>
				<img src="/storage/club/five.png" alt="five" class="w-[8.875rem] h-[8.75rem]">
				<Textbanner reverse="right" id="index4mob">
					<p class="font-semibold">{{ $t("speakingClub.banners.index4") }}</p>
				</Textbanner>
				<div class="flex justify-between items-center gap-[2.5rem]">
					<IconArrow/>
					<img src="/storage/club/fourth.png" alt="fourth" class="w-[8.875rem] h-[8.75rem]">
				</div>
				<div class="mt-[3.313rem]">
					<Logo class="w-[10.375rem] h-[3.188rem]"/>
				</div>
				<Textbanner reverse="left" id="index2mob">
					<p class="font-semibold">{{ $t("speakingClub.banners.index3") }}</p>
				</Textbanner>
				<img src="/storage/club/first.png" alt="" class="w-[8.875rem]">
				<Textbanner reverse="left" id="index2">
					<p class="font-semibold whitespace-nowrap">{{ $t("speakingClub.banners.index2") }}</p>
				</Textbanner>
				<div class="flex">
					<div>
						<img src="/storage/club/second.png" alt="second" class="w-[8.875rem]">
					</div>
					<div class="mt-[1.875rem]">
						<img src="/storage/club/third.png" alt="third" class="w-[8.875rem]">
					</div>
				</div>
			</div>
			<!--END MOBILE VERSION-->
		</DescriptionMain>
	</section>
</template>


