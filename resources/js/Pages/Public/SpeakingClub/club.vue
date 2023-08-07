<script setup>
import ClubBanners from './clubBanners.vue';
import DescriptionMain from "@/Components/DescriptionMain.vue";
import ClubMobile from './clubMobile.vue';

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
			<ClubMobile/>
			<!--END MOBILE VERSION-->
		</DescriptionMain>
	</section>
</template>


